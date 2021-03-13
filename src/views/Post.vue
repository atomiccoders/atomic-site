<template>
  <v-sheet v-if="post" style="background:#303030;">
    <v-parallax height="300" :src="`https://picsum.photos/id/${post.img}/900/300`">
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
    <v-container py-2 px-5>
      <v-row>
        <v-col
          cols="12"
          sm="8"
          class="my-8 blog-post"
          style="min-height: calc(100vh - 370px);"
          v-html="post.text"
        >
        </v-col>

        <v-col v-if="isMobile">
          <v-divider></v-divider>
        </v-col>

        <v-col cols="12" sm="4" class="my-8">
          <Newsletter />
          <SocialShare />
        </v-col>
      </v-row>
    </v-container>
  </v-sheet>
</template>

<script>
import Utils from '@/utils';
import Newsletter from '../components/Newsletter';
import SocialShare from '../components/SocialShare';

export default {
  name: 'Post',
  components: {
    Newsletter,
    SocialShare,
  },
  data() {
    return {
      slug: this.$route.params.slug,
      posts: [],
      lastPosts: [],
    };
  },
  firebase: {
    posts: Utils.getFirebaseData('posts'),
    lastPosts: Utils.getFirebaseData('posts')
      .orderByChild('posted')
      .limitToLast(3),
  },
  computed: {
    isMobile() {
      return Utils.isMobile();
    },
    post() {
      return this.posts.find(post => post.slug === this.slug);
    },
    filteredPosts() {
      return this.lastPosts.filter(post => post.slug !== this.slug);
    },
  },
  methods: {
    back() {
      this.$router.push({ name: 'blog' });
    },
    openPost(slug) {
      this.$router.push({ name: 'post', params: { slug } });
    },
    formatDate(jsonDate) {
      const date = new Date(jsonDate);
      const day = date.getDate() < 10 ? `0${date.getDate()}` : date.getDate();
      const month =
        date.getMonth() < 10 ? `0${date.getMonth() + 1}` : date.getMonth() + 1;
      return `${day}-${month}-${date.getFullYear()}`;
    },
  },
  watch: {
    $route(to, from) {
      this.post = this.posts.find(post => post.slug === to.params.slug);
    },
  },
};
</script>

<style lang="scss">
.blog-post {
  h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
  }
}
</style>
