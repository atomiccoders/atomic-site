<template>
  <v-row tag="section" id="portfolio" class="pa-5 mx-0" style="position:relative;">
    <v-img
      src="data:image/png;base64,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"
      width="100%"
      height="100%"
      class="abstract-3"
    ></v-img>
    <v-col cols="12">
      <h2
        class="font-weight-bold primary--text mb-4"
        :class="[isMobile ? 'display-1' : 'display-2']"
      >
        Co zrobiliśmy
      </h2>
    </v-col>
    <v-col cols="12">
      <v-carousel
        hide-delimiter-background
        :show-arrows-on-hover="true"
        height="650px"
        class="elevation-0"
      >
        <v-carousel-item v-for="(item, idx) in portfolio" :key="idx">
          <v-sheet class="py-md-5 transparent" height="100%">
            <div class="text-center mb-5">
              <h2 class="primary--text title font-weight-light mb-1">
                {{ item.title }}
              </h2>
              <span class="subheading">{{ item.subtitle }}</span>
            </div>
            <v-row>
              <v-col cols="auto">
                <div class="mb-3" style="max-width:500px;">
                  <h2 class="primary--text title font-weight-light mb-3">
                    Opis Projektu
                  </h2>
                  <div class="subheading mb-5">
                    In ac felis quis tortor malesuada pretium. Phasellus dolor. Fusce
                    fermentum odio nec arcu. Integer tincidunt. Cum sociis natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. In
                    ac felis quis tortor malesuada pretium. Phasellus dolor. Fusce
                    fermentum odio nec arcu. Integer tincidunt.
                  </div>
                  <h2 class="primary--text title font-weight-light">
                    Szczegóły Projektu
                  </h2>
                  <v-list class="transparent">
                    <v-list-item v-for="(elem, id) in item.info" :key="id">
                      <v-list-item-action>
                        <v-icon color="primary">{{ elem.icon }}</v-icon>
                      </v-list-item-action>
                      <v-list-item-title class="mr-2">
                        {{ elem.title }}
                      </v-list-item-title>
                      <v-list-item-title
                        class="caption grey--text text--lighten-1 hidden-sm-and-down"
                      >
                        {{ elem.text }}
                      </v-list-item-title>
                    </v-list-item>
                  </v-list>
                </div>
              </v-col>
              <v-col class="hidden-sm-and-down">
                <v-img
                  :src="item.img"
                  width="500px"
                  height="350px"
                  class="mx-auto"
                  contain
                ></v-img>
              </v-col>
            </v-row>
          </v-sheet>
        </v-carousel-item>
      </v-carousel>
    </v-col>
  </v-row>
</template>

<script>
import WindowInstanceMap from '../windowInstanceMap.js';

export default {
  data() {
    return {
      portfolio: [
        {
          title: 'Rebranding Classic Cafe',
          subtitle: 'Design Logotypu',
          info: [
            {
              icon: 'mdi-account',
              title: 'Nazwa klienta',
              text: 'Clasic Café',
            },
            {
              icon: 'mdi-calendar',
              title: 'Data Projektu',
              text: '07.2019',
            },
            {
              icon: 'mdi-tag',
              title: 'Kategorie',
              text: 'logo, mockup',
            },
          ],
          img: require('../assets/classic-cafe.png'),
        },
        {
          title: 'Flagship',
          subtitle: 'Projekt Strony WWW',
          info: [
            {
              icon: 'mdi-account',
              title: 'Nazwa klienta',
              text: 'Flagship',
            },
            {
              icon: 'mdi-calendar',
              title: 'Data Projektu',
              text: '05.2019',
            },
            {
              icon: 'mdi-tag',
              title: 'Kategorie',
              text: 'strona www, design',
            },
          ],
          img: require('../assets/flagship.jpg'),
        },
        {
          title: 'Biere Craft Beer',
          subtitle: 'Marketing i Design Graficzny',
          info: [
            {
              icon: 'mdi-account',
              title: 'Nazwa klienta',
              text: 'Biere ®',
            },
            {
              icon: 'mdi-calendar',
              title: 'Data Projektu',
              text: '04.2019',
            },
            {
              icon: 'mdi-tag',
              title: 'Kategorie',
              text: 'marketing, logo, design',
            },
          ],
          img: require('../assets/biere.jpg'),
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

<style lang="scss" scoped>
.abstract-3 {
  position: absolute !important;
  left: 0px;
  right: 0px;
  z-index: 0 !important;
  & ~ * {
    z-index: 1 !important;
  }
}
</style>
