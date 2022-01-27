import Vue from 'vue';
import VueRouter from 'vue-router';

import Index from './pages/Index';
import Contacts from './pages/Contacts';
import About from './pages/About';
import Show from './pages/Show';


Vue.use(VueRouter);

const router = new VueRouter({
    mode : 'history',
    routes: [
            {
                path: '/',
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
        ]
});

export default router; 	