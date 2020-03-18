import {ServiceProvider} from '@anomaly/streams-platform';

export class FlowThemeServiceProvider extends ServiceProvider {
    boot(){
        console.log('Flow');
        //Vue.component('boolean-field-type', ToggleButton);
    }
}
