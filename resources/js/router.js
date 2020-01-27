import Vue from "vue";
import Router from "vue-router";
import Home from "./views/Home.vue";
import Users from "./views/Users.vue";
import Btn from "./components/Btn.vue";
import Login from "./components/Login.vue";
import Comments from "./components/Comments.vue";
import Register from "./components/Register.vue";

Vue.use(Router);
// 専用のプラグインの宣言

export default new Router({
    mode: "history",
    routes: [
        { path: "/", component: Home },
        { path: "/users", component: Users },
        { path: "/Btn", component: Btn },
        { path: "/Login", component: Login },
        { path: "/Comments", component: Comments },
        { path: "/Register", component: Register }
    ]
});
