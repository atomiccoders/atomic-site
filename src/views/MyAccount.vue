<template>
  <div>
    <v-col cols="4">
      <v-card class="" width="100%" tile>
        <v-img height="100%" :src="user.bgImg">
          <v-row align="center" class="fill-height">
            <v-col align-self="center" class="ml-4" cols="6">
              <v-hover v-slot:default="{ hover }">
                <v-avatar class="profile" color="grey" size="165">
                  <v-img
                    :src="user.avatar"
                    class="avatar-bg"
                    :class="{ 'on-hover': hover }"
                  >
                    <div class="align-self-center mx-auto ">
                      <v-btn :class="{ 'show-btns': hover }" color="transparent" icon>
                        <v-icon :class="{ 'show-btns': hover }" color="transparent">
                          mdi-square-edit-outline
                        </v-icon>
                      </v-btn>
                    </div>
                  </v-img>
                </v-avatar>
              </v-hover>
            </v-col>
            <v-col cols="5">
              <v-btn color="warning">Zmień hasło</v-btn>
            </v-col>
          </v-row>
        </v-img>
        <v-row class="mx-1 mt-6">
          <v-col cols="6">
            <v-text-field
              label="Login"
              :value="user.login"
              outlined
              disabled
            ></v-text-field>
          </v-col>
          <v-col cols="6">
            <v-text-field
              label="Nazwa użytkownika"
              :value="user.username"
              outlined
              :readonly="!editUsername"
              :loading="isUserPending"
              :append-icon="editUsername ? 'mdi-content-save' : 'mdi-square-edit-outline'"
              @click:append="toggleEdit('username')"
            ></v-text-field>
          </v-col>
        </v-row>
        <v-row class="mx-1">
          <v-col cols="12">
            <v-text-field
              label="E-mail"
              :value="user.email"
              outlined
              :readonly="!editEmail"
              :loading="isEmailPending"
              :append-icon="editEmail ? 'mdi-content-save' : 'mdi-square-edit-outline'"
              @click:append="toggleEdit('email')"
            ></v-text-field>
          </v-col>
        </v-row>
      </v-card>
    </v-col>
  </div>
</template>

<script>
import Utils from '@/utils';

export default {
  data() {
    return {
      users: [],
      editUsername: false,
      isUserPending: false,
      editEmail: false,
      isEmailPending: false,
      transparent: 'rgba(255, 255, 255, 0)',
    };
  },
  firebase: {
    users: Utils.getFirebaseData('users'),
  },
  computed: {
    isMobile() {
      return Utils.isMobile();
    },
    user() {
      return this.users[0];
    },
  },
  methods: {
    toggleEdit(field) {
      if (field === 'username') {
        if (this.editUsername) {
          this.isUserPending = true;
          setTimeout(() => {
            this.isUserPending = false;
          }, 2000);
        }
        this.editUsername = !this.editUsername;
      }
      if (field === 'email') {
        if (this.editEmail) {
          this.isEmailPending = true;
          setTimeout(() => {
            this.isEmailPending = false;
          }, 2000);
        }
        this.editEmail = !this.editEmail;
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.avatar-bg {
  transition: all 5s ease-in-out;
}
.avatar-bg:before {
  opacity: 0;
  transition: all 5s ease-in-out;
}

.avatar-bg.on-hover:before {
  content: '';
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  opacity: 1;
  background: rgba(0, 0, 0, 0.6);
}

.show-btns {
  color: #ffaa00 !important;
}
</style>
