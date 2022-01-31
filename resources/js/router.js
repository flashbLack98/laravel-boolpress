import Vue from 'vue';
import VueRouter from 'vue-router';

import Index from './pages/posts/Index';
import Contacts from './pages/Contacts';
import About from './pages/About';
import Show from './pages/posts/Show';
import CategoryShow from './pages/category/CategoryShow'


Vue.use(VueRouter);

const router = new VueRouter({
    mode : 'history',
    routes: [
            {
                path: '/Posts',
                name: 'Index',
                component: Index
            },
            {
                path: '/Contacts',
                name: 'Contacts',
                component: Contacts
            },
            {
                path: '/About',
                name: 'About',
                component: About
            },
            {
                path: '/post/:id',
                name: 'Show',
                component: Show
            },
            {
                path: '/categories/:id',
                name: 'CategoryShow',
                component: CategoryShow
            },
            
        ]
});

export default router; 	