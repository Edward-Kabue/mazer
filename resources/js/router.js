import { createRouter, createWebHistory } from "vue-router";
import HomeRoute from "./Pages/HomeRoute.vue";
import TestRoute from "./Pages/TestRoute.vue";
import { createApp } from "vue";
const routes = [
    { path: "/", component: HomeRoute },
    { path: "/test", component: TestRoute },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
