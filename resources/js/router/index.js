import Vue from 'vue'
import Router from 'vue-router'
import MainComponent from "../components/home/MainComponent";
import fixtures from "./fixtures";

Vue.use(Router);

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            component:MainComponent,
        },
        fixtures
    ],
})
