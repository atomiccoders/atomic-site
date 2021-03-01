import Vue from 'vue';
import Router from 'vue-router';
import store from './store';
import Home from './views/Home.vue';

Vue.use(Router);

const vueRouter = new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },
    {
      path: '/blog',
      name: 'blog',
      component: () => import('./views/Blog.vue'),
    },
    {
      path: '/blog/:page',
      name: 'blog-page',
      component: () => import('./views/Blog.vue'),
    },
    {
      path: '/post/:slug',
      name: 'post',
      component: () => import('./views/Post.vue'),
    },
    {
      path: '/polityka-prywatnosci',
      name: 'policy',
      component: () => import('./views/Policy.vue'),
    },
    {
      path: '/my-account',
      name: 'my-account',
      component: () => import('./views/MyAccount.vue'),
    },
    {
      path: '*',
      name: 'notFound',
      component: () => import('./views/NotFound.vue'),
    },
  ],
});

vueRouter.beforeEach((to, from, next) => {
  store.dispatch('updateCurrentRoute', to.name);
  store.dispatch('updateBeforeRoute', from.name);
  next();
});

export default vueRouter;
