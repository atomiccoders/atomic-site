<template>
  <v-container py-2 px-5 fluid>
    <v-row>
      <v-col cols="12">
        <h2
          class="font-weight-bold primary--text mb-4"
          :class="[isMobile ? 'display-1' : 'display-2']"
        >
          Najnowsze wpisy
        </h2>
      </v-col>
    </v-row>

    <v-row>
      <v-col cols="12" sm="4" v-for="post in publishedPosts" :key="post.id">
        <v-card class="mx-auto">
          <v-img
            :src="`https://picsum.photos/id/${post.img}/600/300`"
            height="250"
          ></v-img>

          <v-list-item>
            <v-list-item-content>
              <v-list-item-subtitle class="font-weight-light text-right mb-1">
                <v-icon x-small class="mr-1">mdi-calendar-outline</v-icon>
                {{ formatDate(post.posted) }}
              </v-list-item-subtitle>
              <v-list-item-title class="title text-wrap">
                {{ post.title }}
              </v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-card-text>
            {{ post.description }}
          </v-card-text>

          <v-card-actions class="mt-auto">
            <v-btn text color="primary accent-4" @click="openPost(post.slug)">
              Czytaj więcej
            </v-btn>

            <v-spacer></v-spacer>

            <v-btn
              v-if="$store.getters.isUserLogged"
              icon
              :color="post.isLiked ? 'primary' : 'white'"
              @click="post.isLiked = !post.isLiked"
            >
              <v-icon>{{ post.isLiked ? 'mdi-heart' : 'mdi-heart-outline' }}</v-icon>
            </v-btn>

            <v-speed-dial
              v-model="post.fabOpen"
              direction="top"
              transition="slide-y-reverse-transition"
            >
              <template v-slot:activator>
                <v-btn icon v-model="post.fabOpen">
                  <v-icon v-if="post.fabOpen">mdi-close</v-icon>
                  <v-icon v-else>mdi-share-variant</v-icon>
                </v-btn>
              </template>
              <v-btn fab dark small color="indigo">
                <v-icon>mdi-facebook</v-icon>
              </v-btn>
              <v-btn fab dark small color="blue">
                <v-icon>mdi-twitter</v-icon>
              </v-btn>
              <v-btn fab dark small color="pink">
                <v-icon>mdi-instagram</v-icon>
              </v-btn>
            </v-speed-dial>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import postArary from '@/assets/posts';
import Utils from '@/utils';

export default {
  name: 'Blog',
  data() {
    return {
      posts: postArary.posts,
    };
  },
  firebase: {
    posts: Utils.getFirebaseData('posts').orderByChild('posted'),
  },
  computed: {
    isMobile() {
      return Utils.isMobile();
    },
    publishedPosts() {
      return this.posts.filter(post => this.isPublished(post));
    },
  },
  methods: {
    formatDate(jsonDate) {
      const date = new Date(jsonDate);
      const day = date.getDate() < 10 ? `0${date.getDate()}` : date.getDate();
      const month = date.getMonth() < 10 ? `0${date.getMonth() + 1}` : date.getMonth() + 1;
      return `${day}-${month}-${date.getFullYear()}`;
    },
    openPost(slug) {
      this.$router.push({ name: 'post', params: { slug } });
    },
    isPublished(post) {
      return post.isPublished && new Date(post.posted) <= Date.now();
    },
  },
};
</script>

<style lang="scss" scoped></style>
