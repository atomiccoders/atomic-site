import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const UPDATE_DRAWER_STATE = 'UPDATE_DRAWER_STATE';
const UPDATE_CURRENT_ROUTE = 'UPDATE_CURRENT_ROUTE';
const UPDATE_BEFORE_ROUTE = 'UPDATE_BEFORE_ROUTE';

export default new Vuex.Store({
  state: {
    drawerState: null,
    currentRoute: '',
    beforeRoute: '',
    userLogged: false,
  },
  mutations: {
    [UPDATE_DRAWER_STATE](state, drawerState) {
      state.drawerState = drawerState;
    },
    [UPDATE_CURRENT_ROUTE](state, route) {
      state.currentRoute = route;
    },
    [UPDATE_BEFORE_ROUTE](state, route) {
      state.beforeRoute = route;
    },
  },
  actions: {
    updateDrawerState({ commit }, drawerState) {
      commit(UPDATE_DRAWER_STATE, drawerState);
    },
    updateCurrentRoute({ commit }, route) {
      commit(UPDATE_CURRENT_ROUTE, route);
    },
    updateBeforeRoute({ commit }, route) {
      commit(UPDATE_BEFORE_ROUTE, route);
    },
  },
  getters: {
    getDrawerState: state => state.drawerState,
    getCurrentRoute: state => state.currentRoute,
    getBeforeRoute: state => state.beforeRoute,
    isUserLogged: state => state.userLogged,
  },
});
