<template>
  <v-app>
    <v-overlay :value="overlay" opacity="1" z-index="10">
      <v-progress-circular color="primary" indeterminate size="64"></v-progress-circular>
    </v-overlay>

    <Login :login="login" @login="logIn()" @close="close()" />

    <v-snackbar v-model="snackbar" color="secondary" top right>
      {{ snackText }}
      <v-btn color="primary" text @click="snackbar = false">
        <v-icon>mdi-close</v-icon>
      </v-btn>
    </v-snackbar>

    <NavDrawer
      :frontLogIn="frontLogIn"
      :is-logged="isLogged"
      :pending="pending"
      @showLogin="showLogin()"
      @logOut="logOut()"
    />

    <v-content class="hide-overflow" ref="content">
      <transition name="fade" mode="out-in">
        <router-view />
      </transition>
    </v-content>

    <Footer />
  </v-app>
</template>

<script>
import Utils from '@/utils';
import * as easings from 'vuetify/es5/services/goto/easing-patterns';
import Login from './components/Login';
import NavDrawer from './views/Common/NavDrawer';
import Footer from './views/Common/Footer';

export default {
  name: 'App',
  components: {
    Login,
    NavDrawer,
    Footer,
  },
  data() {
    return {
      drawer: this.$store.getters.getDrawerState,
      overlay: false,
      options: {
        duration: 1000,
        offset: 20,
        easing: 'easeInOutCubic',
        easings: Object.keys(easings),
      },
      pending: false,
      frontLogIn: this.$config.settings.frontLogIn,
      login: false,
      isLogged: false,
      snackbar: false,
      snackText: '',
    };
  },
  computed: {
    isMobile() {
      return Utils.isMobile();
    },
  },
  methods: {
    showLogin() {
      if (this.isMobile) {
        this.drawer = false;
      }
      this.login = true;
    },
    close() {
      this.login = false;
    },
    logIn() {
      this.snackText = 'Zalogowano poprawnie';
      this.snackbar = true;
      this.isLogged = true;
      this.login = false;
    },
    logOut() {
      this.pending = true;
      this.snackText = 'Wylogowano poprawnie';
      setTimeout(() => {
        this.pending = false;
        this.snackbar = true;
        this.isLogged = false;
        this.login = false;
      }, 500);
    },
  },
  watch: {
    overlay(val) {
      val &&
        setTimeout(() => {
          this.overlay = false;
          this.$refs.content.$el.classList.add('loaded');
        }, 3000);
      //TODO: Change this setTimeout for pageLoaded check
    },
  },
  beforeMount() {
    this.overlay = true;
    this.battery = 45;
  },
  mounted() {
    // window.navigator.vibrate([125,75,125,275,200,275,125,75,125,275,200,600,200,600]); //Mario
    // window.navigator.vibrate([500,110,500,110,450,110,200,110,170,40,450,110,200,110,170,40,500]); //StarWars
    // window.navigator.vibrate([150,150,150,150,75,75,150,150,150,150,450]); //Go Go Power Rangers
  },
};
</script>

<style lang="scss">
a {
  text-decoration: none;
}
strong {
  color: #ffaa00;
}
.logo {
  max-width: 100px;
  cursor: pointer;
  filter: drop-shadow(2px 4px 6px black);
  &.mobile {
    max-width: 85px;
  }
}
.font-fira-sans {
  font-family: 'Fira Sans', 'Roboto', sans-serif !important;
}
.v-window__prev,
.v-window__next {
  top: calc(90% - 20px) !important;
}
.v-btn:before {
  background-color: transparent;
}

/*** TRANSITIONS ***/
.fade-enter {
  opacity: 0;
  transform: translateX(25px);
}
.fade-enter-active,
.fade-leave-active {
  transition: all 0.2s ease-out;
}
.fade-leave-to {
  opacity: 0;
  transform: translateX(25px);
}

/*** MESSENGER PLUGIN ***/
.atomic-chat + .fb_dialog {
  bottom: 22vh !important;
  transform: scale(0.75) !important;
}
</style>
