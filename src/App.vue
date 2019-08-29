<template>
  <v-app>

    <v-overlay :value="overlay" opacity="1" z-index="10">
      <v-progress-circular color="primary" indeterminate size="64"></v-progress-circular>
    </v-overlay>

    <v-navigation-drawer
      class="text-center"
      app
      style="background-color: rgb(24, 24, 24); border-color: rgb(24, 24, 24);"
    >
      <div class="row flex-column fill-height py-5 mx-0 align-center justify-center">
        <!-- <h2 class="display-3 font-weight-black primary--text mb-2">AC</h2> -->
        <img src="./assets/logo.png" alt="LOGO" class="" style="max-width:100px;" />
        <div class="display-1 mb-2">AtomicCode</div>
        <span class="subtitle-2 text-uppercase font-weight-light mb-10">
          Because every pixel matters
        </span>

        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light mb-3"
            @click="$vuetify.goTo('#about', options)"
          >
            <span>About Me</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light mb-3"
            @click="$vuetify.goTo('#services', options)"
          >
            <span>Services</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light mb-3"
            @click="$vuetify.goTo('#experience', options)"
          >
            <span>Experience</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light mb-3"
            @click="$vuetify.goTo('#skills', options)"
          >
            <span>Skills & Education</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light mb-3"
            @click="$vuetify.goTo('#portfolio', options)"
          >
            <span>Portfolio</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light mb-3"
            @click="$vuetify.goTo('#clients', options)"
          >
            <span>Clients</span>
          </v-btn>
        </div>
        <div>
          <v-btn
            text
            class="text-capitalize subheading font-weight-light mb-3"
            @click="$vuetify.goTo('#contact', options)"
          >
            <span>Contact</span>
          </v-btn>
        </div>

        <!-- Loading trigger -->
        <div>
          <v-btn
            color="primary accent-4"
            class="white--text mb-3"
            @click="overlay = !overlay"
          >
            Restart App
            <v-icon right>mdi-restart</v-icon>
          </v-btn>
        </div>

        <div class="mt-auto">
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

    <v-content class="hide-overflow">
      <router-view></router-view>
    </v-content>

    <v-footer bottom dark dense clipped-right app>
      <v-toolbar-title class="headline text-capitalize">
        <span>Quick</span>
        <span class="font-weight-thin">Menu</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <router-link to="/" class="mr-2">
        <v-btn text>
          <span>Home</span>
        </v-btn>
      </router-link>
      <router-link to="/blog">
        <v-btn text>
          <span>Blog</span>
        </v-btn>
      </router-link>
    </v-footer>
  </v-app>
</template>

<script>
import * as easings from 'vuetify/es5/services/goto/easing-patterns';

export default {
  name: 'App',
  components: {},
  data: () => ({
    overlay: false,
    icons: [
      {
        title: 'Linkedin profile',
        url: '#',
        icon: 'mdi-linkedin-box',
      },
      {
        title: 'Github profile',
        url: '#',
        icon: 'mdi-github-box',
      },
    ],
    options: {
      duration: 1000,
      offset: 20,
      easing: 'easeInOutCubic',
      easings: Object.keys(easings),
    },
  }),
  watch: {
    overlay(val) {
      val &&
        setTimeout(() => {
          this.overlay = false;
        }, 3000);
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
</style>
