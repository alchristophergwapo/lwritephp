require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import Login from './components/Login.vue';
import Register from './components/Register.vue'

const routes = [

  {
      name: 'login',
      path: '/login',
      component: Login
  },
  {
      name: 'register',
      path: '/register',
      component: Register
  },
  
];

const router = new VueRouter({ 
    mode: 'history',
    routes: routes
});
const app = new Vue(Vue.util.extend({ 
    router 
}, App
)).$mount('#app');