<template>
  <v-sheet>
    <v-parallax height="300" :src="`https://picsum.photos/800/300/?random=${post.id}`">
      <v-row>
        <v-col cols="6">
          <v-btn
            class="ma-2"
            color="white"
            small
            outlined
            style="filter:drop-shadow(2px 4px 6px black);"
            @click="back()"
          >
            <v-icon left>mdi-arrow-left</v-icon>Wróć
          </v-btn>
        </v-col>
      </v-row>
      <v-row justify="center">
        <v-col class="text-center" cols="12">
          <h2
            class="font-weight-bold white--text mb-4"
            :class="[isMobile ? 'display-1' : 'display-2']"
            style="filter:drop-shadow(2px 4px 6px black);"
          >
            {{ post.title }}
          </h2>
        </v-col>
      </v-row>
    </v-parallax>
    <v-container py-2 px-5 fluid>
      <v-row>
        <v-col
          cols="12"
          sm="8"
          class="my-8 mx-2"
          style="min-height: calc(100vh - 370px);"
          v-html="post.text"
        >
        </v-col>

        <v-col>
          <v-divider v-if="isMobile"></v-divider>
        </v-col>

        <v-col cols="12" sm="3" class="my-8">
          {{ post.description }}
        </v-col>
      </v-row>
    </v-container>
  </v-sheet>
</template>

<script>
import postArary from '@/assets/posts';
import WindowInstanceMap from '@/windowInstanceMap.js';

export default {
  name: 'Post',
  data() {
    return {
      id: this.$route.params.id,
    };
  },
  computed: {
    isMobile() {
      return WindowInstanceMap.windowWidth <= 600;
    },
    post() {
      return postArary.posts[this.id - 1];
    },
  },
  methods: {
    back() {
      this.$router.go(-1);
    },
  },
};
</script>
