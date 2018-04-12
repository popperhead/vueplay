import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import VueAxios from "vue-axios";
import axios from "axios";
Vue.use(VueAxios, axios);

import App1 from "./views/App1";
import App from "./views/App";
import Hello from "./views/Hello";
import Home from "./views/Home";

const router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      name: "home",
      component: Home
    },
    {
      path: "/hello",
      name: "hello",
      component: Hello
    },
    {
      path:"/app1",
      name:"app1",
      component:App1
    }
  ]
});

const app = new Vue({
  el: "#app",
  components: { App },
  router
});
