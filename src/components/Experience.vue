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
import WindowInstanceMap from '../windowInstanceMap.js';

export default {
  data() {
    return {
      items: [
        {
          title: 'JojoMobile',
          year: 2014,
          description: 'Testowanie aplikacji na urządzenia mobilne',
        },
        {
          title: 'BetterSoftware Group',
          year: 2015,
          description:
            'Tworzenie aplkacji na urządzenia mobilne z systemem WindowsPhone, Android i iOS',
        },
        {
          title: 'Lek-Med.pl / FLOW',
          year: 2016,
          description:
            'Tworzenie stron internetowych wraz z dostosowanym systemem zarządzania treścią',
        },
        {
          title: 'Tapptic',
          year: 2019,
          description:
            'Tworzenie aplikacji webowych oraz praca nad UI/UX wielu międzynarodowych projektów',
        },
      ],
    };
  },
  computed: {
    isMobile() {
      return WindowInstanceMap.windowWidth <= 600;
    },
  },
};
</script>

<style></style>
