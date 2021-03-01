<template>
  <div class="other-posts">
    <v-card
      v-for="post in posts"
      :key="post.id"
      class="mx-auto mb-5"
      max-width="400"
      light
    >
      <v-img
        class="white--text align-end"
        height="150px"
        :src="`https://picsum.photos/id/${post.img}/400/200`"
        gradient="to top, rgba(0,0,0,1), rgba(0,0,0,0)"
      >
        <v-card-title>{{ post.title }}</v-card-title>
      </v-img>

      <v-card-text class="text--black" style="position: relative;">
        <v-btn
          absolute
          color="orange"
          class="white--text"
          fab
          small
          right
          top
          @click="openPost(post.slug)"
        >
          <v-icon>mdi-arrow-right-bold-hexagon-outline</v-icon>
        </v-btn>
        <div>
          <v-icon x-small class="mr-1">mdi-calendar-outline</v-icon>
          {{ formatDate(post.posted) }}
        </div>
        <div>{{ post.description }}</div>
      </v-card-text>
    </v-card>
  </div>
</template>

<script>
export default {
  name: 'other-posts',
  props: {
    posts: {
      type: Array,
      default: () => [],
    },
  },
  methods: {
    openPost(slug) {
      this.$router.push({ name: 'post', props: { slug } });
    },
  }
};
</script>

<style lang="scss" scoped></style>
