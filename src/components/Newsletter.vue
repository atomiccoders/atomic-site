<template>
  <div class="newsletter">
    <v-card class="mx-3 mb-5">
      <v-card-title>
        <v-icon class="mr-2" color="primary">mdi-email</v-icon>
        Newsletter
      </v-card-title>
      <v-form ref="newsletter" v-model="valid">
        <v-card-text class="py-0">
          <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
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
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi sit libero
          corrupti perspiciatis dolore repellat quasi consequuntur accusantium nihil commodi
          veritatis laborum ex totam quod est, nulla quae ratione similique!
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="primary" @click="termsModal = false">Zamknij</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
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
    };
  },
  methods: {
    validate() {
      if (this.$refs.newsletter.validate()) {
        this.$refs.newsletter.reset();
        this.snackbar = true;
      }
    },
  },
};
</script>

<style lang="scss" scoped></style>
