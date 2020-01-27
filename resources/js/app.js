/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component("sample", require("./components/SampleComponent.vue").default);
Vue.component("vue", require("./components/Vue.vue").default);
Vue.component("study", require("./components/Study.vue").default);
Vue.component("axios", require("./components/axios.vue").default);

Vue.filter("sample", function(value) {
    return value.toUpperCase();
});

// 第一引数を必ずとる

// カスタムディレクティブのグローバル登録
// Vue.directive('border', function(el, binding) {
//     el.style.border = "solid red 0.1px";
//     el.style.borderWidth = binding.value.width;
//     el.style.borderColor = binding.value.color;
//     el.style.borderStyle = binding.arg;
// });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from "vue";
import router from "./router";
import axios from "axios";
import store from "store";

axios.defaults.baseURL =
    "https://firestore.googleapis.com/v1/projects/vuejs-http-6eb8f/databases/(default)/documents/comments";

axios.interceptors.request.use(
    config => {
        console.log("interceptors request", config);
        return config;
    },
    error => {}
);
axios.interceptors.response.use();

const app = new Vue({
    el: "#app",
    router: router,
    store
});
