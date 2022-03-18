require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('App', require('./components/App.vue').default);
Vue.component('Items', require('./components/home/Items.vue').default);
Vue.component('ItemsLogin', require('./components/login/Items.vue').default);
Vue.component('ItemsCart', require('./components/cart/Items.vue').default);
Vue.component('ItemsContacts', require('./components/contacts/Items.vue').default);
Vue.component('ItemsDelivery', require('./components/delivery/Items.vue').default);
Vue.component('ItemsCheckout', require('./components/cart/checkout/Items.vue').default);
Vue.component('ItemsListing', require('./components/listing/Items.vue').default);
Vue.component('Order', require('./components/order/Order.vue').default);
Vue.component('Orders', require('./components/order/Orders.vue').default);
Vue.component('Product', require('./components/product/Items.vue').default);
Vue.component('Sitemap', require('./components/sitemap/Items.vue').default);

const app = new Vue({
    el: '#app',
});
