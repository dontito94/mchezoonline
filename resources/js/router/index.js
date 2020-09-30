import Vue from 'vue'
import Router from 'vue-router'
import MainComponent from "../components/home/MainComponent";

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            component:() => import('../components/home/MainComponent'),
        },
        fixtures
    ],
})
