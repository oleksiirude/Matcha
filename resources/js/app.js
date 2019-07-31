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
Vue.component('header-component', require('./components/layots/HeaderComponent').default);
Vue.component('avatar-component', require('./components/profile/photo/AvatarComponent').default);
Vue.component('photo-component', require('./components/profile/photo/PhotoComponent').default);
Vue.component('crop-component', require('./components/profile/photo/CropComponent').default);
Vue.component('deletebtn-component', require('./components/profile/photo/DeletebtnComponent').default);
Vue.component('deletedefault-component', require('./components/profile/bio/DeletedefaultComponent').default);
Vue.component('deletephotobtn-component', require('./components/profile/photo/DeletephotobtnComponent').default);
Vue.component('editdata-component', require('./components/profile/bio/EditdataComponent').default);
Vue.component('editinput-component', require('./components/profile/EditinputComponent').default);
Vue.component('ed_in_lbl-component', require('./components/profile/Edit_input_labelComponent').default);
Vue.component('edit_age-component', require('./components/profile/Edit_agelComponent').default);
Vue.component('ed_email-component', require('./components/profile/EditemailComponent').default);
Vue.component('edit_password-component', require('./components/profile/EditpasswordComponent').default);
Vue.component('tagsdelete-component', require('./components/profile/tags/TagsdeleteComponent').default);
Vue.component('tagsadd-component', require('./components/profile/tags/AddtagsComponent').default);
Vue.component('location-component', require('./components/profile/LocationComponent').default);
Vue.component('gender-component', require('./components/profile/GenderComponent').default);
Vue.component('preferences-component', require('./components/profile/PreferencesComponent').default);
Vue.component('block-action-component', require('./components/users/BlockActionComponent').default);
Vue.component('filter-component', require('./components/filters/FilterComponent').default);
Vue.component('unblock-action-component', require('./components/users_list/BlockActionComponent').default);
Vue.component('fake-action-component', require('./components/users/FakeActionComponent').default);
Vue.component('like-action-component', require('./components/users/LikeActionComponent').default);
Vue.component('chat-component', require('./components/ChatComponent').default);
Vue.component('footer-component', require('./components/layots/FooterComponent').default);

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
