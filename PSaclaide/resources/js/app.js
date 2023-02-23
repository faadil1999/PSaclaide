import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import NavBar from './components/Navbr.vue'
import Footer from './components/Footer.vue'

const app = createApp({});

app.component('nav-bar', NavBar);

app.component('footer-bar',Footer);

app.mount('#app');

