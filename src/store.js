import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const UPDATE_CURRENT_ROUTE = 'UPDATE_CURRENT_ROUTE';
const UPDATE_BEFORE_ROUTE = 'UPDATE_BEFORE_ROUTE';

export default new Vuex.Store({
  state: {
    currentRoute: '',
    beforeRoute: '',
  },
  mutations: {
    [UPDATE_CURRENT_ROUTE](state, route) {
      state.currentRoute = route;
    },
    [UPDATE_BEFORE_ROUTE](state, route) {
      state.beforeRoute = route;
    },
  },
  actions: {
    updateCurrentRoute({ commit }, route) {
      commit(UPDATE_CURRENT_ROUTE, route);
    },
    updateBeforeRoute({ commit }, route) {
      commit(UPDATE_BEFORE_ROUTE, route);
    },
  },
  getters: {
    getCurrentRoute: state => state.currentRoute,
    getBeforeRoute: state => state.beforeRoute,
  },
});
