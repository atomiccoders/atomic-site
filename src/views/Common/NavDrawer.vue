<template>
  <v-navigation-drawer
    class="text-center"
    app
    v-model="drawer"
    style="background-color: rgb(24, 24, 24); border-color: rgb(24, 24, 24);"
    @input="updateDrawerState"
  >
    <div class="row flex-column fill-height py-5 mx-0 align-center justify-center">
      <router-link to="/">
        <v-img
          src="@/assets/logo.png"
          alt="LOGO"
          class="logo"
          :class="{ mobile: isMobile }"
          @click="goTo('#hero')"
        />
      </router-link>
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
          to="/"
          text
          class="text-capitalize subheading font-weight-light"
          :class="[isMobile ? 'mb-2' : 'mb-3']"
          @click="goTo('#about')"
        >
          <span>O Nas</span>
        </v-btn>
      </div>
      <div>
        <v-btn
          to="/"
          text
          class="text-capitalize subheading font-weight-light"
          :class="[isMobile ? 'mb-2' : 'mb-3']"
          @click="goTo('#services')"
        >
          <span>Oferta</span>
        </v-btn>
      </div>
      <div>
        <v-btn
          to="/"
          text
          class="text-capitalize subheading font-weight-light"
          :class="[isMobile ? 'mb-2' : 'mb-3']"
          @click="goTo('#experience')"
        >
          <span>Doświadczenie</span>
        </v-btn>
      </div>
      <div>
        <v-btn
          to="/"
          text
          class="text-capitalize subheading font-weight-light"
          :class="[isMobile ? 'mb-2' : 'mb-3']"
          @click="goTo('#skills')"
        >
          <span>Kompetencje</span>
        </v-btn>
      </div>
      <div>
        <v-btn
          to="/"
          text
          class="text-capitalize subheading font-weight-light"
          :class="[isMobile ? 'mb-2' : 'mb-3']"
          @click="goTo('#portfolio')"
        >
          <span>Portfolio</span>
        </v-btn>
      </div>
      <!-- <div>
        <v-btn
          to="/#clients"
          text
          class="text-capitalize subheading font-weight-light"
          :class="[isMobile ? 'mb-2' : 'mb-3']"
          @click="goTo('#clients')"
        >
          <span>Klienci</span>
        </v-btn>
      </div> -->
      <div>
        <v-btn
          to="/"
          text
          class="text-capitalize subheading font-weight-light"
          :class="[isMobile ? 'mb-2' : 'mb-3']"
          @click="goTo('#contact')"
        >
          <span>Kontakt</span>
        </v-btn>
      </div>
      <div v-if="isLogged">
        <v-btn
          to="/my-account"
          text
          class="text-capitalize subheading font-weight-light primary--text"
          :class="[isMobile ? 'mb-2' : 'mb-3']"
        >
          <span>Moje konto</span>
        </v-btn>
      </div>

      <div class="my-auto" v-if="frontLogIn">
        <v-btn
          v-if="!isLogged"
          color="primary accent-4"
          class="white--text mb-3"
          @click="showLogin()"
        >
          Zaloguj
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
          Wyloguj
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
</template>

<script>
import Utils from '@/utils';

export default {
  name: 'NavDrawer',
  props: {
    frontLogIn: {
      type: Boolean,
      required: true,
    },
    isLogged: {
      type: Boolean,
      required: true,
    },
    pending: {
      type: Boolean,
      required: true,
    },
  },
  data() {
    return {
      icons: this.$config.contact.icons,
    };
  },
  computed: {
    isMobile() {
      return Utils.isMobile();
    },
    drawer: {
      get() {
        return this.$store.getters.getDrawerState;
      },
      set() {},
    },
  },
  methods: {
    goTo(target) {
      if (
        (this.$store.getters.getBeforeRoute === null &&
          this.$store.getters.getCurrentRoute === 'home') ||
        (this.$store.getters.getBeforeRoute === 'home' &&
          this.$store.getters.getCurrentRoute !== 'blog')
      ) {
        this.$vuetify.goTo(target, this.options);
      } else {
        setTimeout(() => {
          this.$vuetify.goTo(target, this.options);
          this.$store.dispatch('updateBeforeRoute', this.$route.name);
        }, 1000);
      }
    },
    updateDrawerState(value) {
      this.$store.dispatch('updateDrawerState', value);
    },
    showLogin() {
      this.$emit('showLogin');
    },
    logOut() {
      this.$emit('logOut');
    },
  },
};
</script>
