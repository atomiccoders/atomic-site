<template>
  <div>
    <v-card class="mx-3 mb-5">
      <v-card-title>
        <v-icon class="mr-2" color="primary">mdi-share-variant</v-icon>
        Udostępnij
      </v-card-title>

      <v-card-actions class="pb-4 d-flex justify-space-between mx-12">
        <v-btn
          class="mx-2"
          fab
          dark
          small
          color="indigo"
          :href="getFbLink()"
          target="_blank"
        >
          <v-icon dark>mdi-facebook</v-icon>
        </v-btn>

        <v-tooltip bottom close-delay="500" eager>
          <template v-slot:activator="{ on }">
            <v-btn
              class="mx-2"
              fab
              dark
              small
              color="blue"
              :href="getTwLink()"
              target="_blank"
            >
              <v-icon dark>mdi-twitter</v-icon>
            </v-btn>
          </template>
        </v-tooltip>

        <v-tooltip bottom close-delay="500" eager>
          <template v-slot:activator="{ on }">
            <v-btn
              class="mx-2"
              fab
              dark
              small
              color="primary"
              v-on="on"
              @click="copyToClipboard(`http://${$config.sharingSettings.baseURL}${$route.fullPath}`)"
            >
              <v-icon dark>mdi-link</v-icon>
            </v-btn>
          </template>
          <span>{{ copyText }}</span>
        </v-tooltip>
      </v-card-actions>
    </v-card>
  </div>
</template>

<script>
import Utils from '@/utils';

export default {
  name: 'SocialShare',
  data() {
    return {
      copyText: 'Click to copy',
    };
  },
  methods: {
    getFbLink() {
      return Utils.getFbShareLink(this.$route.path);
    },
    getTwLink() {
      return Utils.getTwShareLink(this.$route.path);
    },
    copyToClipboard(textToCopy) {
      var textArea = document.createElement('textarea');
      textArea.value = textToCopy;
      document.body.appendChild(textArea);
      textArea.select();
      document.execCommand('Copy');
      textArea.remove();
      this.copyText = 'Copied';
      setTimeout(() => {
        this.copyText = 'Click to copy';
      }, 1000);
    },
  },
};
</script>

<style lang="scss" scoped></style>
