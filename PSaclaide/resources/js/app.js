import './bootstrap';
import mitt from 'mitt';

//requirements
// vue/dist/vue.esm-bundler.js
// import { createApp } from 'vue/dist/vue.esm-bundler.js';

import { createApp } from 'vue/dist/vue.esm-bundler' ;

import router from './router/index.js'

//components
import NavBar from './components/Navbr.vue'
import Footer from './components/Footer.vue'
import AddAnnonce from './components/AddAnnonce.vue'


import ToggleButton from './components/smallComponents/ToogleButtonComponent.vue'
import ToggleDisplay from './components/smallComponents/ToggleDisplay.vue'
import ShowElement from './components/ShowElement.vue'
import ShowStudentElement from './components/ShowStudentElement.vue'

const app = createApp({});
const app_annonce_creation = createApp({});
const admin = createApp({});
const emitter = mitt();

app.component('nav-bar', NavBar);

app.component('footer-bar',Footer);

app.mount('#app');

// app_annonce_creation.component('add-annonce', AddAnnonce);
// app_annonce_creation.component('ajout-annonce', AjoutAnnonce);
// app_annonce_creation.mount('#add_annonce');

admin.provide('emitter',emitter);
//admin.config.globalProperties.emitter = emitter;
admin.component('add-annonce', AddAnnonce);
admin.component('toggle-display',ToggleDisplay);
admin.component('toggle-button',ToggleButton);
admin.component('show-element',ShowElement);
admin.component('show-student-element', ShowStudentElement);

admin.mount('#admin_management');




