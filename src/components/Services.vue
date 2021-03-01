<template>
  <v-row
    tag="section"
    id="services"
    class="pa-5 mx-0"
    :class="[!isMobile ? 'pb-12 mb-12' : '']"
    style="position:relative;"
  >
    <v-col cols="12">
      <h2
        class="font-weight-bold primary--text mb-4"
        :class="[isMobile ? 'display-1' : 'display-2']"
      >
        Co oferujemy
      </h2>
    </v-col>
    <v-col cols="12" md="6">
      <v-expansion-panels popout :value="0">
        <v-expansion-panel v-for="(item, idx) in items" :key="idx">
          <v-expansion-panel-header class="title font-weight-light">
            {{ item.title }}
          </v-expansion-panel-header>
          <v-expansion-panel-content>
            <v-card flat>
              <v-container>
                <v-row justify="space-between" align="center">
                  <v-col cols="4" v-if="!isMobile">
                    <v-img :src="require(`@/assets/${item.img}`)"></v-img>
                  </v-col>
                  <v-col cols="12" sm="8">
                    <v-card-text v-html="item.content"></v-card-text>
                  </v-col>
                </v-row>
              </v-container>
            </v-card>
          </v-expansion-panel-content>
        </v-expansion-panel>
      </v-expansion-panels>
    </v-col>
  </v-row>
</template>

<script>
import Utils from '@/utils';

export default {
  data() {
    return {
      items: [],
    };
  },
  firebase: {
    items: Utils.getFirebaseData('offers'),
  },
  computed: {
    isMobile() {
      return Utils.isMobile();
    },
  },
};
</script>

<style></style>
