<template>
  <v-footer bottom dark dense clipped-right inset app style="z-index:5">
    <!-- <v-toolbar-title class="subtitle-1 text-capitalize">
      <span>Mini</span>
      <span class="font-weight-thin">Menu</span>
    </v-toolbar-title> -->
    <router-link to="/polityka-prywatnosci" class="font-weight-thin">
      {{ policy }}
    </router-link>
    <v-spacer></v-spacer>
    <v-btn to="/" class="mr-1" text :small="isMobile">
      <span>Start</span>
    </v-btn>
    <v-btn to="/blog" text :small="isMobile">
      <span>Blog</span>
    </v-btn>
    <v-btn text @click.stop="toggleDrawer(drawer)">
      <v-icon v-if="isMobile && drawer">mdi-close</v-icon>
      <v-icon v-else>mdi-menu</v-icon>
    </v-btn>
  </v-footer>
</template>

<script>
import Utils from '@/utils';

export default {
  name: 'Footer',
  computed: {
    isMobile() {
      return Utils.isMobile();
    },
    drawer() {
      return this.$store.getters.getDrawerState;
    },
    policy() {
      return this.isMobile ? 'RODO' : 'Polityka prywatności';
    },
  },
  methods: {
    toggleDrawer(state) {
      if (state === null && this.isMobile) {
        state = false;
      } else if (state === null && !this.isMobile) {
        state = true;
      }
      this.$store.dispatch('updateDrawerState', !state);
    },
  },
};
</script>
