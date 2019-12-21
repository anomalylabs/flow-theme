import Vue from 'vue';
import {Container} from 'inversify';
// import {Config, IConfig, IServiceProviderClass, loadConfigDefaults, ServiceProvider} from '@pyro/platform';
import {merge} from 'lodash';

const log = require('debug')('flow-theme:Application');

export class Application extends Container {

    constructor() {
        super({
            autoBindInjectable : false,
            defaultScope       : 'Transient',
            skipBaseClassChecks: false
        });
        this.root = new Vue({});
        this.callbacks = [];

        this.loadedProviders = {};
        this.providers = [];
        this.booted = false;
        this.started = false;
        this.shuttingDown = false;
        this.startEnabled = true;
    }

    onStart(callback) {
        this.callbacks.push(callback);
        return this;
    }

    start() {
        this.root.$mount('#app');
    }

    async bootstrap(_options, ...mergeOptions) {
        let options = merge({
            providers: [],
            config   : {},
            data     : {}
        }, _options, ...mergeOptions);
        log('bootstrap', {options});
        this.hooks.bootstrap.call(options);

        this.instance('data', Config.proxied(options.data));
        this.addBindingGetter('data');

        await this.loadProviders(options.providers);
        this.configure(options.config);
        this.instance('routes', options.routes);


        await this.registerProviders(this.providers);
        this.hooks.bootstrapped.call(options);
        return this;
    }

    async loadProviders(Providers) {
        log('loadProviders', {Providers});
        this.hooks.loadProviders.call(Providers);
        await Promise.all(Providers.map(async Provider => this.loadProvider(Provider)));
        this.hooks.loadedProviders.call(this.providers);
        return this;
    }


    async loadProvider(Provider) {
        if ( Provider.name in this.loadedProviders ) {
            return this.loadedProviders[Provider.name];
        }
        log('loadProvider', {Provider});
        this.hooks.provider.load.call(Provider);
        let provider = new Provider(this);
        if ( 'configure' in provider && Reflect.getMetadata('configure', provider) !== true ) {
            const defaults = loadConfigDefaults();
            Reflect.defineMetadata('configure', true, provider);
            await provider.configure(defaults as any);
        }
        if ( 'providers' in provider && Reflect.getMetadata('providers', provider) !== true ) {
            Reflect.defineMetadata('providers', true, provider);
            await this.loadProviders(provider.providers);
        }
        this.loadedProviders[Provider.name] = provider;
        this.providers.push(provider);
        this.hooks.provider.loaded.call(provider);
        return provider;
    }

    configure(config) {
        config = merge(loadConfigDefaults().raw(), config);
        this.hooks.configure.call(config);
        let instance = Config.proxied < IConfig > (config);
        this.instance('config', instance);
        this.hooks.configured.call(instance);
        return this;
    }

    async registerProviders(providers = this.providers) {
        this.hooks.registerProviders.call(providers);
        await Promise.all(this.providers.map(async Provider => this.register(Provider)));
        this.hooks.registeredProviders.call(providers);
        return this;
    }

    register = async (Provider) => {
        log('register', {Provider});
        this.hooks.provider.register.call(Provider);
        let provider = Provider;
        if ( Provider instanceof ServiceProvider === false ) {
            provider = await this.loadProvider(Provider as IServiceProviderClass);
        }
        if ( 'register' in provider && Reflect.getMetadata('register', provider) !== true ) {
            Reflect.defineMetadata('register', true, provider);
            await this.loadAsync(new AsyncContainerModule(() => provider.register()));
        }
        this.providers.push(provider);
        this.hooks.provider.registered.call(provider);
        return this;
    };

    boot = async () => {
        if ( this.booted ) {
            return this;
        }
        log('boot');
        this.booted = true;
        this.hooks.boot.call();
        for (const provider of this.providers) {
            if ( 'boot' in provider && Reflect.getMetadata('boot', provider) !== true ) {
                this.hooks.provider.booting.call(provider);
                Reflect.defineMetadata('boot', true, provider);
                await provider.boot();
                this.hooks.provider.booted.call(provider);
            }
        }
        this.hooks.booted.call();
        return this;
    };

    //region: ioc
    alias(abstract, alias, singleton= false) {
        let binding = this.bind(alias).toDynamicValue(ctx => ctx.container.get(abstract as any));
        if ( singleton ) {
            binding.inSingletonScope();
        }
        return this;
    }

    bindIf(id, override, cb) {
        if ( this.isBound(id) && !override ) return this;
        cb(this.isBound(id) ? this.rebind(id) : this.bind(id));
        return this;
    }

    dynamic(id, cb) {
        return this.bind(id).toDynamicValue(ctx => {
            let req = ctx.currentRequest;
            return cb(this);
        });
    }

    singleton(id, value, override=false) {
        return this.bindIf(id, override, b => b.to(value).inSingletonScope());
    }

    binding(id, value) {

        return this;
    }

    instance(id, value, override=false) {
        return this.bindIf(id, override, b => b.toConstantValue(value));
    }

    ctxfactory(id, factory) {
        this.bind(id).toFactory(ctx => factory(ctx));
        return this;
    }

    factory(id, factory) {
        this.bind(id).toFactory(ctx => factory);
        return this;
    }

    //endregion
}
