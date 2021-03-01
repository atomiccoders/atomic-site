<template>
  <v-row tag="section" id="experience" class="pa-5 mx-0" style="position:relative;">
    <v-col cols="12">
      <h2
        class="font-weight-bold primary--text mb-4"
        :class="[isMobile ? 'display-1' : 'display-2']"
      >
        Nasze doświadczenie
      </h2>
    </v-col>
    <v-col cols="12" md="9" class="mx-auto px-0">
      <v-timeline light :dense="isMobile">
        <v-timeline-item dark v-for="(item, i) in items" :key="i" :right="isMobile">
          <span v-if="!isMobile" slot="opposite">{{ item.year }}</span>
          <v-card class="pa-3">
            <h3 class="subheading font-weight-bold primary--text">{{ item.title }}</h3>
            <div>
              {{ item.description }}
            </div>
          </v-card>
        </v-timeline-item>
      </v-timeline>
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
    items: Utils.getFirebaseData('experience'),
  },
  computed: {
    isMobile() {
      return Utils.isMobile();
    },
  },
};
</script>

<style></style>
