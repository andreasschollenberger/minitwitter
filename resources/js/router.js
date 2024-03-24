import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./pages/MiniTwitter.vue"),
    },
    {
        path: "/createtweet",
        component: () => import("./pages/CreateTweet.vue"),
    },
    {
        path: "/singletweet/:id",
        component: () => import("./pages/SingleTweet.vue"),
    },
    {
        path: "/updatetweet/:id",
        component: () => import("./pages/UpdateTweet.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});