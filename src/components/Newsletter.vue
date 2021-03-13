<template>
  <div class="newsletter">
    <v-card class="mx-3 mb-5">
      <v-card-title>
        <v-icon class="mr-2" color="primary">mdi-email</v-icon>
        Newsletter
      </v-card-title>
      <v-form ref="newsletter" v-model="valid" @submit.prevent>
        <v-card-text class="py-0">
          <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
            clearable
            required
          ></v-text-field>

          <v-checkbox v-model="terms" :rules="checkboxRules" color="primary">
            <template v-slot:label>
              <div @click.stop="">
                Akceptuję
                <a href="javascript:;" @click.stop="termsModal = true">warunki</a>
              </div>
            </template>
          </v-checkbox>
        </v-card-text>

        <v-card-actions class="pt-0 pb-4 px-12">
          <v-btn
            :loading="pending"
            :disabled="!valid || pending"
            block
            color="success"
            @click="validate"
          >
            Zapisz się
          </v-btn>
        </v-card-actions>
      </v-form>
    </v-card>

    <v-dialog v-model="termsModal" width="500">
      <v-card>
        <v-card-title class="headline grey darken-2" primary-title>Warunki</v-card-title>
        <v-card-text class="mt-3">
          <p>
            Wyrażam zgodę na przetwarzanie moich danych osobowych w celu przystąpienia do
            usługi Newsletter. Wyrażam zgodę na otrzymywanie na podany w formularzu adres
            poczty elektronicznej informacji handlowych wysyłanych przez AtomicCode,
            zgodnie z Ustawą z dnia 18 lipca 2002 r. o świadczeniu usług drogą
            elektroniczną (Dz. U. z 2002 r., Nr 144, poz. 1204 z późn. zm.). Zapoznałem
            się i akceptuję Regulamin świadczenia usługi Newsletter Newsletter wysyłany
            jest nieodpłatnie.
          </p>
          <p>
            Operator informuje niniejszym Użytkownika, że powierza przetwarzanie danych
            osobowych następującym podmiotom:
          </p>
          <ul>
            <li>
              The Rocket Science Group, LLC 675 Ponce de Leon Ave NE Suite 5000 Atlanta,
              GA 30308 USA – w celu korzystania z systemu mailingowego Mailchimp,
              służącego do przesyłania newslettera.
            </li>
          </ul>
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="primary" @click="termsModal = false">Zamknij</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

    <v-snackbar v-model="snackbar" :color="snackbarType" top right>
      {{ snackText }}
      <v-btn color="white" text @click="snackbar = false">
        <v-icon>mdi-close</v-icon>
      </v-btn>
    </v-snackbar>
  </div>
</template>

<script>
import Utils from '@/utils';

export default {
  name: 'Newsletter',
  data() {
    return {
      valid: true,
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      checkbox: false,
      checkboxRules: [v => v === true || 'Checkbox is required'],
      terms: false,
      termsModal: false,
      pending: false,
      snackbar: false,
      snackbarType: 'error',
      snackText: '',
      emailsList: null,
    };
  },
  firebase: {
    newsletter: Utils.getFirebaseData('newsletter'),
  },
  methods: {
    validate() {
      if (this.$refs.newsletter.validate()) {
        this.emailsList = Object.values(this.newsletter).map(item => item.email);
        if (this.emailsList.some(item => item === this.email)) {
          this.snackbarType = 'warning';
          this.snackbar = true;
          this.snackText = 'Ten email został już dodany';
        } else {
          Utils.postFirebaseDate('newsletter', {
            email: this.email,
          });
          this.snackbarType = 'success';
          this.snackbar = true;
          this.snackText = 'E-mail dodany prawidłowo';
          this.$refs.newsletter.reset();
        }
      }
    },
  },
};
</script>

<style lang="scss" scoped></style>
