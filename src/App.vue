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

    <v-navigation-drawer
      class="text-center"
      app
      v-model="drawer"
      style="background-color: rgb(24, 24, 24); border-color: rgb(24, 24, 24);"
    >
      <div class="row flex-column fill-height py-5 mx-0 align-center justify-center">
        <img
          src="./assets/logo.png"
          alt="LOGO"
          class="logo"
          :class="{ mobile: isMobile }"
          @click="$vuetify.goTo('#hero', options)"
        />
        <div class="font-fira-sans mb-0" :class="[isMobile ? 'headline' : 'display-1']">
          <span class="primary--text">Atomic</span>Code
        </div>
        <span
          class="font-fira-sans subtitle-2 text-uppercase font-weight-light"
          :class="[isMobile ? 'mb-5' : 'mb-10']"
        >
          every pixel matters
        </span>

        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light"
            :class="[isMobile ? 'mb-2' : 'mb-3']"
            @click="$vuetify.goTo('#about', options)"
          >
            <span>About Me</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light"
            :class="[isMobile ? 'mb-2' : 'mb-3']"
            @click="$vuetify.goTo('#services', options)"
          >
            <span>Services</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light"
            :class="[isMobile ? 'mb-2' : 'mb-3']"
            @click="$vuetify.goTo('#experience', options)"
          >
            <span>Experience</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light"
            :class="[isMobile ? 'mb-2' : 'mb-3']"
            @click="$vuetify.goTo('#skills', options)"
          >
            <span>Skills & Education</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light"
            :class="[isMobile ? 'mb-2' : 'mb-3']"
            @click="$vuetify.goTo('#portfolio', options)"
          >
            <span>Portfolio</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light"
            :class="[isMobile ? 'mb-2' : 'mb-3']"
            @click="$vuetify.goTo('#clients', options)"
          >
            <span>Clients</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light"
            :class="[isMobile ? 'mb-2' : 'mb-3']"
            @click="$vuetify.goTo('#contact', options)"
          >
            <span>Contact</span>
          </v-btn>
        </div>

        <div class="my-auto">
          <v-btn
            v-if="!isLogged"
            color="primary accent-4"
            class="white--text mb-3"
            @click="showLogin()"
          >
            Login
            <v-icon right>mdi-login</v-icon>
          </v-btn>
          <v-btn
            v-else
            color="primary accent-4"
            class="white--text mb-3"
            :loading="pending"
            :disabled="pending"
            @click="logOut()"
          >
            Logout
            <v-icon right>mdi-logout</v-icon>
          </v-btn>
        </div>

        <div class="mt-auto" v-if="!isMobile">
          <div class="my-4">
            <a
              v-for="(icon, index) in icons"
              :key="index"
              :href="icon.url"
              :title="icon.title"
              target="_blank"
              class="mx-2"
            >
              <v-icon>{{ icon.icon }}</v-icon>
            </a>
          </div>
        </div>
      </div>
    </v-navigation-drawer>

    <v-content class="hide-overflow" ref="content">
      <router-view></router-view>
    </v-content>

    <v-footer bottom dark dense clipped-right app>
      <v-toolbar-title class="subtitle-1 text-capitalize">
        <span>Quick</span>
        <span class="font-weight-thin">Menu</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <router-link to="/" class="mr-1">
        <v-btn text :small="isMobile">
          <span>Home</span>
        </v-btn>
      </router-link>
      <router-link to="/blog">
        <v-btn text :small="isMobile">
          <span>Blog</span>
        </v-btn>
      </router-link>
      <v-btn text @click.stop="drawer = !drawer">
        <v-icon v-if="isMobile && drawer">mdi-close</v-icon>
        <v-icon v-else>mdi-menu</v-icon>
      </v-btn>
    </v-footer>
  </v-app>
</template>

<script>
import WindowInstanceMap from './windowInstanceMap.js';
import * as easings from 'vuetify/es5/services/goto/easing-patterns';
import Login from './components/Login';

export default {
  name: 'App',
  components: {
    Login,
  },
  data: () => ({
    drawer: null,
    overlay: false,
    icons: [
      {
        title: 'Linkedin profile',
        url: 'https://www.linkedin.com/in/jakubmichniewicz',
        icon: 'mdi-linkedin-box',
      },
      {
        title: 'Github profile',
        url: 'https://github.com/atomiccoders',
        icon: 'mdi-github-box',
      },
    ],
    options: {
      duration: 1000,
      offset: 20,
      easing: 'easeInOutCubic',
      easings: Object.keys(easings),
    },
    pending: false,
    login: false,
    isLogged: false,
    snackbar: false,
    snackText: '',
  }),
  computed: {
    isMobile() {
      return WindowInstanceMap.windowWidth <= 600;
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
      this.snackText = 'Successful logged in';
      this.snackbar = true;
      this.isLogged = true;
      this.login = false;
    },
    logOut() {
      this.pending = true;
      this.snackText = 'Successful logged out';
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
  },
};
</script>

<style lang="scss">
a {
  text-decoration: none;
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
</style>
