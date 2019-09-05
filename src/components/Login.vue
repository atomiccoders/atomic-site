<template>
  <v-overlay :value="login" opacity="0.75" z-index="5">
    <v-fade-transition>
      <v-card width="400px" :max-width="isMobile ? '80%' : '100%'" class="mx-auto">
        <v-card-title>
          <h1 class="display-1 primary--text">Zaloguj</h1>
          <v-spacer></v-spacer>
          <v-btn color="primary" text icon @click="close()">
            <v-icon>mdi-close</v-icon>
          </v-btn>
        </v-card-title>
        <v-card-text>
          <v-form v-model="valid" ref="form">
            <v-text-field
              v-model="username"
              label="Login"
              prepend-icon="mdi-account-circle"
              hint="Nazwa użytkownika lub E-mail"
              :rules="loginRules"
              :loading="pending"
              autofocus
              required
            ></v-text-field>
            <v-text-field
              v-model="pass"
              label="Hasło"
              prepend-icon="mdi-lock"
              :append-icon="showPass ? 'mdi-eye' : 'mdi-eye-off'"
              :type="showPass ? 'text' : 'password'"
              hint="admin/admin123"
              persistent-hint
              :error-messages="errors"
              :rules="passRules"
              :loading="pending"
              @click:append="showPass = !showPass"
              @keyup.enter="logIn()"
              @input="validate()"
              required
            ></v-text-field>
          </v-form>
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions>
          <v-btn color="grey darken-4">Zarejestruj</v-btn>
          <v-spacer></v-spacer>
          <v-btn
            color="primary"
            :loading="pending"
            :disabled="!valid || pending"
            @click="logIn()"
          >
            Zaloguj
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-fade-transition>
  </v-overlay>
</template>

<script>
import WindowInstanceMap from '../windowInstanceMap.js';

export default {
  name: 'Login',
  props: {
    login: {
      required: true,
      default: false,
    },
  },
  data() {
    return {
      valid: false,
      loginCorrect: false,
      errors: [],
      errorsArr: [],
      showPass: false,
      username: '',
      loginRules: [
        v => !!v || 'Login jest wymagany',
        v => (v && v.length >= 3) || 'Login musi mieć co najmniej 3 znaki',
      ],
      usernameRules: [
        v => !!v || 'Nazwa użytkownika jest wymagana',
        v => (v && v.length >= 6) || 'Nazwa użytkonika musi mieć co najmniej 6 znaków',
      ],
      pass: '',
      passRules: [
        v => !!v || 'Hasło jest wymagane',
        v => (v && v.length >= 6) || 'Hasło musi mieć co najmniej 6 znaków',
      ],
      name: '',
      nameRules: [
        v => !!v || 'Imię jest wymagane',
        v => (v && v.length >= 2) || 'Imię musi mieć co najmniej 2 znaki',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail jest wymagany',
        v => /.+@.+\..+/.test(v) || 'E-mail musi być poprawny',
      ],
      pending: false,
    };
  },
  methods: {
    validate() {
      this.errors = [];
      this.errorsArr = [];
      this.$refs.form.validate();
    },
    logIn() {
      if (this.$refs.form.validate()) {
        if (this.valid) {
          if (this.username === 'admin' && this.pass === 'admin123') {
            this.loginCorrect = true;
          } else {
            this.errorsArr.push('Błędny login lub hasło');
          }
        }
      }
      this.pending = true;
      setTimeout(() => {
        this.pending = false;
        if (this.loginCorrect) {
          this.$refs.form.reset();
          this.loginCorrect = false;
          this.errors = [];
          this.$emit('login');
        } else {
          this.errors.push(this.errorsArr);
        }
      }, 1500);
    },
    close() {
      this.$refs.form.reset();
      this.$emit('close');
    },
  },
  computed: {
    isMobile() {
      return WindowInstanceMap.windowWidth <= 600;
    },
  },
};
</script>

<style lang="scss" scoped></style>
