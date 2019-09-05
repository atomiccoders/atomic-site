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
        <v-expansion-panel v-for="(item, i) in items" :key="i">
          <v-expansion-panel-header class="title font-weight-light">
            {{ item.title }}
          </v-expansion-panel-header>
          <v-expansion-panel-content>
            <v-card flat>
              <v-card-text v-html="item.content"></v-card-text>
            </v-card>
          </v-expansion-panel-content>
        </v-expansion-panel>
      </v-expansion-panels>
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
          title: 'Strony internetowe',
          content:
            'Oferujemy profesjonalne usługi IT. Specjalizujemy się w tworzeniu responsywnych <strong>stron internetowych</strong> oraz <strong>aplikacji webowych</strong>, będących odpowiedzią na szczególne potrzeby małych i średnich firm oraz jednoosobowych działalności gospodarczych.',
        },
        {
          title: 'Aplikacje',
          content:
            'Tworzymy również spersonalizowane, nowoczesne <strong>aplikacje webowe</strong>, mając na uwadze fakt, że coraz więcej klientów wyszukując interesujące ich usługi oferowane przez lokalne firmy, korzysta z urządzeń mobilnych takich jak <strong>smartfony i tablety</strong>.',
        },
        {
          title: 'Marketing',
          content:
            'Naszym celem jest tażke umożliwienie firmom zaistnienie w internecie poprzez profesjonalną <strong>stronę www</strong> lub rozpowszechnienie istniejącej już działalności.',
        },
        {
          title: 'Wsparcie',
          content:
            'Oferujemy pełne wsparcie naszych <strong>stron i aplikacji</strong>. A to wszystko w przystępnej, dopasowanej <strong>indywidualnie</strong> do Twojej firmy cenie.',
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
