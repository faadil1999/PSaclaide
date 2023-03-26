import './bootstrap';
//requirements
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import router from './router/index.js'
//components
import NavBar from './components/Navbr.vue'
import Footer from './components/Footer.vue'
import AddAnnonce from './components/AddAnnonce.vue'
const app = createApp({});
const app_annonce_creation = createApp({});

app.component('nav-bar', NavBar);

app.component('footer-bar',Footer);

app.mount('#app');

app_annonce_creation.component('add-annonce',AddAnnonce);
app_annonce_creation.use(router).mount('#add_annonce');

