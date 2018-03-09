
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueRouter from 'vue-router';
import VeeValidate from 'vee-validate';
import VueSweetalert2 from 'vue-sweetalert2';
import VueResource from 'vue-resource';
import VueUploadComponent from 'vue-upload-component';
import VueMaterial from 'vue-material';
import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
import 'vue-material/dist/vue-material.min.css';
// import 'vue-material/dist/theme/default-dark.css';
import VueCarousel from 'vue-carousel';

window.Vue = require('vue');
Vue.use(VueRouter);
Vue.use(VeeValidate,{locale: 'es'});
Vue.use(VueSweetalert2);
Vue.use(VueMaterial);
Vue.use(VueResource);
Vue.use(PulseLoader);
Vue.use(VueCarousel);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Global Components
Vue.component('layout', require('./components/Layout.vue'));
Vue.component('site-menu', require('./components/Site_menu.vue'));
Vue.component('file-upload', VueUploadComponent);
Vue.component('pulse-loader', PulseLoader);
Vue.component('home-carousel', require('./components/Carousel.vue'));
Vue.component('aboutus', require('./components/Aboutus.vue'));
Vue.component('certification', require('./components/Certification.vue'));
Vue.component('home-products', require('./components/Home_Products.vue'));
Vue.component('contact-form', require('./components/Contact.vue'));

//Routes Components
const home = Vue.component('home', require('./routes_components/Home/Home.vue'));
const product = Vue.component('product', require('./routes_components/Product/Product.vue'));
const contact = Vue.component('contact', require('./routes_components/Contact/Contact.vue'));
const downloads = Vue.component('downloads', require('./routes_components/Downloads/Downloads.vue'));
const tips = Vue.component('tips', require('./routes_components/Tips/Tips.vue'));

const routes = [
  {
    path: '/',
    component: home
  },
  {
    path:'/product/:product_id',
    component:product,
  },
  {
    path: '/tips',
    component: tips
  },
  {
    path: '/contact',
    component: contact
  },
  {
    path: '/downloads',
    component: downloads
  },
];

const router = new VueRouter({
  routes: routes
});

const app = new Vue({
    el: '#app',
    router:router,
});
