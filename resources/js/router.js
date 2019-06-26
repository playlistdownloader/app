import VueRouter from 'vue-router';
import Home from './views/Home';
let routes = [

    {
        path: '/',
        name: 'Home',
        component: Home,
        meta: {
            breadcrumbs: [{
                name: '/',
                link: '/app/'
            }]
        }
    },
];
export default new VueRouter({
    mode: 'history',
    routes,
    linkActiveClass: 'kt-menu__item--active'
})
