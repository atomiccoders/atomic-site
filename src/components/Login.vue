<template>
  <v-overlay :value="login" opacity="0.75" z-index="5">
    <v-fade-transition>
      <v-card width="400px" :max-width="isMobile ? '80%' : '100%'" class="mx-auto">
        <v-card-title>
          <h1 class="display-1 primary--text">Login</h1>
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
              hint="Username or E-mail"
              :rules="loginRules"
              :loading="pending"
              autofocus
              required
            ></v-text-field>
            <v-text-field
              v-model="pass"
              label="Password"
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
          <v-btn color="grey darken-4">Register</v-btn>
          <v-spacer></v-spacer>
          <v-btn
            color="primary"
            :loading="pending"
            :disabled="!valid || pending"
            @click="logIn()"
          >
            Login
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
        v => !!v || 'Login is required',
        v => (v && v.length >= 3) || 'Login must be more than 3 characters',
      ],
      usernameRules: [
        v => !!v || 'Username is required',
        v => (v && v.length >= 6) || 'Username must be more than 6 characters',
      ],
      pass: '',
      passRules: [
        v => !!v || 'Password is required',
        v => (v && v.length >= 6) || 'Password must be more than 6 characters',
      ],
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length >= 2) || 'Name must be more than 2 characters',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
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
            this.errorsArr.push('wrong login or password');
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
