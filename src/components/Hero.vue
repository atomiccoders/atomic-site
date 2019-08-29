<template>
  <section id="hero">
    <v-img src="../assets/hero.png" style="height:calc(100vh - 48px);">
      <v-row
        class="fill-height text-right pa-md-5 pa-3 mx-0 align-end justify-end particles"
      >
        <div>
          <div class="text-uppercase font-weight-light display-2">
            Every Pixel Matters
          </div>
          <h1 class="primary--text text-uppercase display-4">
            Atomic<span class="font-weight-thin">Code</span>
          </h1>
        </div>
      </v-row>
    </v-img>
  </section>
</template>

<script>
export default {
  name: 'Hero',
  data() {
    return {
      test: null,
    };
  },
};
</script>

<style lang="scss" scoped>
.particles {
  &:after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-image: url('../assets/particles.png');
    background-size: contain;
    transform: scaleX(-1);
  }
}
</style>
