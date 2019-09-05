<template>
  <v-overlay :value="login" opacity="0.75" z-index="5">
    <v-fade-transition>
      <v-card width="400px" max-width="80%" class="mx-auto">
        <v-card-title>
          <h1 class="display-1 primary--text">Login</h1>
        </v-card-title>
        <v-card-text>
          <v-form v-model="valid" ref="form">
            <v-text-field
              v-model="username"
              label="Login"
              prepend-icon="mdi-account-circle"
              :rules="loginRules"
              hint="Username or E-mail"
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
              :rules="passRules"
              :loading="pending"
              @click:append="showPass = !showPass"
              required
            ></v-text-field>
          </v-form>
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions>
          <v-btn color="grey darken-4">Register</v-btn>
          <v-spacer></v-spacer>
          <v-btn color="primary" :loading="pending" :disabled="!valid" @click="logIn()">
            Login
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-fade-transition>
  </v-overlay>
</template>

<script>
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
    logIn() {
      if (this.$refs.form.validate()) {
        this.valid = true;
      }
      this.pending = true;
      setTimeout(() => {
        this.pending = false;
        this.$refs.form.reset();
        this.$emit('login');
      }, 1500);
    },
  },
};
</script>

<style lang="scss" scoped></style>
