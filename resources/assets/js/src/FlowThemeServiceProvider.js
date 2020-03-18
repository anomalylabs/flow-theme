import Navigation from '../components/Navigation'
import Sections from '../components/Sections'

import {ServiceProvider} from '@anomaly/streams-platform'

export class FlowThemeServiceProvider extends ServiceProvider {
    boot(){
        Vue.component('navigation', Navigation);
        Vue.component('sections', Sections);
    }
}
