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
        Jesteśmy elastyczni w sprawach współpracy i staramy się, aby klient był
        zawsze zadowolony z efektów i rozwiązań jakie wspólnie tworzymy.
      </div>
      <h2 class="primary--text title font-weight-light text-uppercase mb-3">
        Wyślij wiadomość
      </h2>
      <v-form ref="contactForm">
        <v-text-field
          v-model="form.name"
          :rules="nameRules"
          label="Imię i Nazwisko"
          single-line
          solo
          solo-inverted
          flat
        ></v-text-field>
        <v-text-field
          v-model="form.email"
          :rules="emailRules"
          label="Email"
          single-line
          solo
          solo-inverted
          flat
        ></v-text-field>
        <v-text-field
          v-model="form.company"
          :rules="nameRules"
          label="Nazwa firmy"
          single-line
          solo
          solo-inverted
          flat
        ></v-text-field>
        <v-textarea
          v-model="form.message"
          :rules="nameRules"
          label="Wiadomość"
          single-line
          solo
          solo-inverted
          flat
        ></v-textarea>
        <v-btn color="primary" :loading="sending" @click="onSubmit()">Wyślij</v-btn>
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
              Lokalizacje
            </v-list-item-title>
            <v-list-item-subtitle v-for="(location, index) in locations" :key="index">
              {{ location }}
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
              <a
                class="white--text cryptedmail"
                :data-name="emailArray[0]"
                :data-domain="emailArray[1]"
                :data-tld="emailArray[2]"
                onclick="window.open('mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld, '_blank');"
              ></a>
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
              <a class="white--text" :href="`phone:${$config.contact.phone}`">
                {{ $config.contact.phone }}
              </a>
            </v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-col>
    <v-img
      src="../assets/my-person-alt.png"
      width="100%"
      max-width="30vw"
      style="position:absolute; bottom:-20px; right:0"
    >
    </v-img>

    <v-snackbar v-model="snackbar" :color="snackbarType" top right>
      {{ snackText }}
      <v-btn color="white" text @click="snackbar = false">
        <v-icon>mdi-close</v-icon>
      </v-btn>
    </v-snackbar>
  </v-row>
</template>

<script>
import Utils from '@/utils';
import mail from '../services/mailForm';

export default {
  data() {
    return {
      icons: this.$config.contact.icons,
      locations: this.$config.contact.locations,
      form: {
        name: '',
        email: '',
        company: '',
        message: '',
      },
      nameRules: [
        v => !!v || 'Pole jest wymagane',
        v => (v && v.length >= 2) || 'Pole musi zawierać co najmniej 2 znaki',
      ],
      emailRules: [
        v => !!v || 'E-mail jest wymagany',
        v => /.+@.+\..+/.test(v) || 'Podany e-mail nie jest poprawny',
      ],
      snackbar: false,
      snackbarType: 'error',
      snackText: '',
      sending: false,
    };
  },
  computed: {
    isMobile() {
      return Utils.isMobile();
    },
    emailArray() {
      const array = [];
      array.push(this.$config.contact.email.split('@')[0]);
      array.push(this.$config.contact.email.split('@')[1].split('.')[0]);
      array.push(this.$config.contact.email.split('@')[1].split('.')[1]);
      return array;
    },
  },
  methods: {
    resetForm() {
      this.$refs.contactForm.reset();
    },
    onSubmit() {
      if (!this.sending) {
        this.sending = true;
        mail.send(this.form).then(
          res => {
            console.log(res);
            this.snackbarType = 'success';
            this.snackbar = true;
            this.snackText = 'Wiadomość wysłana poprawinie';
            this.resetForm();
            this.sending = false;
          },
          error => {
            console.log(error);
            this.snackbarType = 'error';
            this.snackbar = true;
            this.snackText = 'Wystąpił błąd podczas wysłania wiadomości';
            this.sending = false;
          }
        );
      }
    },
  },
};
</script>

<style>
.cryptedmail:after {
  content: attr(data-name) '@' attr(data-domain) '.' attr(data-tld);
}
</style>
