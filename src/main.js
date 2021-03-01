import Vue from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';
// import './registerServiceWorker';
import vuetify from './plugins/vuetify';
import Utils from '@/utils';
import VueParticles from 'vue-particles';
import { rtdbPlugin } from 'vuefire';

Vue.config.productionTip = false;

Vue.use(VueParticles);
Vue.use(rtdbPlugin);

Vue.prototype.$config = Utils.getConfig();

new Vue({
  router,
  store,
  vuetify,
  render: h => h(App),
}).$mount('#app');
