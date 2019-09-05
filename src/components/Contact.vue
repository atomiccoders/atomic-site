<template>
  <v-row tag="section" id="contact" class="pa-5 mx-0" style="position:relative;">
    <v-col cols="12">
      <h2
        class="font-weight-bold primary--text mb-4"
        :class="[isMobile ? 'display-1' : 'display-2']"
      >
        Poznajmy się
      </h2>
    </v-col>
    <v-col cols="12" md="5" class="mb-4 pe-md-5">
      <h2 class="primary--text title font-weight-light text-uppercase">
        Oferta współpracy
      </h2>
      <div class="subheading mb-5 mb-5">
        Jesteśmy elastyczni w sprawach współpracy i staramy się, <br />
        aby klient był zawsze zadowolony z efektów jakie wspólnie wypracowujemy.
      </div>
      <h2 class="primary--text title font-weight-light text-uppercase mb-3">
        Wyślij wiadomość
      </h2>
      <v-form>
        <v-text-field
          label="Imię i Nazwisko"
          single-line
          solo
          solo-inverted
          flat
        ></v-text-field>
        <v-text-field label="Email" single-line solo solo-inverted flat></v-text-field>
        <v-text-field
          label="Nazwa firmy"
          single-line
          solo
          solo-inverted
          flat
        ></v-text-field>
        <v-textarea label="Wiadomość" single-line solo solo-inverted flat></v-textarea>
        <v-btn color="primary">Wyślij</v-btn>
      </v-form>
    </v-col>
    <v-col cols="12" md="4" class="text-left">
      <h2 class="primary--text title font-weight-light text-uppercase">
        Dane kontaktowe
      </h2>
      <div class="my-4">
        <a
          v-for="(icon, index) in icons"
          :key="index"
          :href="icon.url"
          :title="icon.title"
          target="_blank"
          class="mx-2"
        >
          <v-icon>{{ icon.icon }}</v-icon>
        </a>
      </div>
      <v-list three-line class="transparent">
        <v-list-item>
          <v-list-item-avatar size="40px">
            <v-icon color="primary" class="mr-5 display-2">mdi-map-marker</v-icon>
          </v-list-item-avatar>
          <v-list-item-content>
            <v-list-item-title class="primary--text">
              Adres
            </v-list-item-title>
            <v-list-item-subtitle>
              Rogalińska 23d/8
              <br />
              80-809 Gdańsk
            </v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
        <v-list-item>
          <v-list-item-avatar size="40px">
            <v-icon color="primary" class="mr-5 display-2">mdi-email</v-icon>
          </v-list-item-avatar>
          <v-list-item-content>
            <v-list-item-title class="primary--text">
              Email
            </v-list-item-title>
            <v-list-item-subtitle>
              kontakt@atomiccode.pl
            </v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
        <v-list-item>
          <v-list-item-avatar size="40px">
            <v-icon color="primary" class="mr-5 display-2">mdi-phone</v-icon>
          </v-list-item-avatar>
          <v-list-item-content>
            <v-list-item-title class="primary--text">
              Telefon
            </v-list-item-title>
            <v-list-item-subtitle>
              (+48) 883 543 667
            </v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-col>
    <v-img
      src="../assets/person-alt.png"
      width="100%"
      max-width="30vw"
      style="position:absolute; bottom:-20px; right:0"
    >
    </v-img>
  </v-row>
</template>

<script>
import WindowInstanceMap from '../windowInstanceMap.js';

export default {
  data() {
    return {
      icons: [
        {
          title: 'Linkedin profile',
          url: 'https://www.linkedin.com/in/jakubmichniewicz',
          icon: 'mdi-linkedin-box',
        },
        {
          title: 'Github profile',
          url: 'https://github.com/atomiccoders',
          icon: 'mdi-github-box',
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
