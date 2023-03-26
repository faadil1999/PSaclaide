import { createRouter, createWebHistory } from 'vue-router'
import flash from '../components/smallComponents/FlashComponent.vue'

const routes = [
    {
        path:'/home',
        name:'home',
        component:flash
    }
]

const router =createRouter({
    history: createWebHistory(),
    routes
});

export default router;