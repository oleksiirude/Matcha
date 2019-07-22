/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/HeaderComponent').default);
Vue.component('avatar-component', require('./components/AvatarComponent').default);
Vue.component('photo-component', require('./components/PhotoComponent').default);
Vue.component('crop-component', require('./components/CropComponent').default);
Vue.component('deletebtn-component', require('./components/DeletebtnComponent').default);
Vue.component('deletedefault-component', require('./components/DeletedefaultComponent').default);
Vue.component('deletephotobtn-component', require('./components/DeletephotobtnComponent').default);
Vue.component('editdata-component', require('./components/EditdataComponent').default);
Vue.component('editinput-component', require('./components/EditinputComponent').default);
Vue.component('ed_in_lbl-component', require('./components/Edit_input_labelComponent').default);
Vue.component('ed_email-component', require('./components/EditemailComponent').default);
Vue.component('gender-component', require('./components/GenderComponent').default);
Vue.component('preferences-component', require('./components/PreferencesComponent').default);
Vue.component('footer-component', require('./components/FooterComponent').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    // methods: {
    //     registerajax: function () {
    //         console.log('ajax');
    //     }
    // }
});

