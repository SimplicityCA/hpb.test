
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
import * as VueGoogleMaps from 'vue2-google-maps';
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
Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyBsXvXvwEg8CR6JQ5qBHZtKmN61UwjWJZ0',
    libraries: 'places',
  }
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Global Components
Vue.component('layout', require('./components/Layout.vue'));
Vue.component('site-menu', require('./components/Site_menu.vue'));
Vue.component('site-footer', require('./components/Site_footer.vue'));
Vue.component('file-upload', VueUploadComponent);
Vue.component('pulse-loader', PulseLoader);
Vue.component('home-carousel', require('./components/Carousel.vue'));
Vue.component('aboutus', require('./components/Aboutus.vue'));
Vue.component('certification', require('./components/Certification.vue'));
Vue.component('home-products', require('./components/Home_Products.vue'));
Vue.component('contact-form', require('./components/Contact.vue'));
Vue.component('client-form', require('./components/Client_form.vue'));
      

//Routes Components
const home = Vue.component('home', require('./routes_components/Home/Home.vue'));
const product = Vue.component('product', require('./routes_components/Product/Product.vue'));
const client = Vue.component('client', require('./routes_components/Client/Client.vue'));
const downloads = Vue.component('downloads', require('./routes_components/Downloads/Downloads.vue'));
const tips = Vue.component('tips', require('./routes_components/Tips/Tips.vue'));
const localize = Vue.component('localize', require('./routes_components/Localize/Localize.vue'));

const routes = [
  {
    path: '/',
    name: 'home',
    component: home,
    meta: {title: 'High Power Brake - Home'}
  },
  {
    path: '/products/:product_id',
    name: 'products',
    component:product,
    meta: {title: 'High Power Brake - Productos'},
  },
  {
    path: '/tips',
    component: tips,
    meta: {title: 'High Power Brake - Tips de Instalación'},
  },
  {
    path: '/client',
    component: client,
    meta: {title: 'High Power Brake - Conviértete en Cliente'},
  },
  {
    path: '/downloads',
    component: downloads,
    meta: {title: 'High Power Brake - Descargables'},
  },  
  {
    path: '/localize',
    component: localize,
    meta: {title: 'High Power Brake - Encuentra el local mas cercano'},
  },
  {
    path: '*',
    redirect: { name: 'home' }
  },
];

const router = new VueRouter({
  mode: 'history',
  routes: routes,
  scrollBehavior (to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else {
      return { x: 0, y: 0 }
    }
  }
});

router.beforeEach((to, from, next) => {
  document.title = to.meta.title;
  next();
});


const app = new Vue({
    el: '#app',
    router:router,
});

//Chat
(function(){ var widget_id = 'qj22dbTsJo';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();

