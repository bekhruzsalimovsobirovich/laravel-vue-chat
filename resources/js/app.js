import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//vue
import {createApp} from "vue";
import App from "./App.vue";

createApp(App).mount('#chatApp')
