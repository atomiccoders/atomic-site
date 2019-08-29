<template>
  <v-row tag="section" id="services" class="pa-5 mx-0" style="position:relative;">
    <v-col cols="12">
      <h2 class="font-weight-bold primary--text mb-4 display-2">
        What I can do for you.
      </h2>
    </v-col>
    <v-col cols="12" md="6">
      <v-expansion-panels popout :value="0">
        <v-expansion-panel v-for="(item, i) in items" :key="i">
          <v-expansion-panel-header class="title font-weight-light">
            {{ item }}
          </v-expansion-panel-header>
          <v-expansion-panel-content>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor. Lorem
            ipsum dolor sit amet consectetur adipisicing elit, eiusmod tempor. Proin
            luctus nulla elit, vitae varius massa.Etiam massa sapien, ultricies quis enim
            at, tempor fringilla metus. Nulla rhoncus enim sed consectetur. Mauris et eros
            feugiat, tincidunt eget, dictum neque. Maecenas dapibus sodales magna, eget
            lectus vehicula non.
          </v-expansion-panel-content>
        </v-expansion-panel>
      </v-expansion-panels>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data() {
    return {
      items: ['Web Development', 'Design', 'Marketing', 'Support'],
    };
  },
};
</script>

<style></style>
