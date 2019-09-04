<template>
  <v-row tag="section" id="clients" class="pa-5 mx-0" style="position:relative;">
    <v-img
      src="data:image/png;base64,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uQhgybkIYM64CMRRMRFA7BUTAeydZCKA0CZMBOBrwUQAruIigM1wEYAtuAhg1VwEsORcBDBnXATiqJgIIPaSiQD2TjIRQGgFEwH4WjARgKu4CGAzXARgCy4CWDUXASw5FwFMKReBOComAoi9ZCKAvZNMBBBawUQAvhZMBOAqLgLYSi4CsAUXAayaiwCWnIsAppSLQBwUEwHEXjIRwN4lTAQQGsFEAL7+ivi///mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf//mf/63VfkVs8iPCKfqG8Ip4CJ8SDxFy4iGCJh5iL4iHiCUxEYaYiIqYiJqYiJaYiI6YiJ6YiJGYiJmYiEUwEasgHsImxENskngIJ4mHcIp4CJ8SDxEy4iFCTjzEromHiAXxELEkJqIiJqImJqIhJqIjJqInJmIkJmIiJmIRTMQqiIewgniITRIPsUniIZwiHsKnxEOEjHiIkBMPsWviIWJBPEQsiYkwxERUxEQ0xES0xET0xEQMxERMxETMxESsgolYBfEQVhIPsUniIZwiHsKnxEOElHiIkBMPsWviIfaCbj67HZtClu7xFUu678RtbsuU/r14xYeXoXuOW15VLuh/zNZHV0W3m7AOtZb0xZV/1riSpFRpmudFURhT1XXbdq9+GOZ5WVdrnfMhxO/S0J0m2rEpFP2zso/PmdgJ+qZCyjTNcl0UpTF13bTt6zUM0zyvq7WbcyHsaOku4+bOpPQ9c/uUWVI6mseDX15VLuhb1+EJ40o6ngdDsENdSPqJcny8xE7QPSpuU1um9JP19mxZUjqkp4GbO5MJ+vmi2Z8rrqSDeg74ta90Qr+nmh8qsRN0X9rt2BSSft/CPVGWlI5re3Gb2jKlX1u08WniSjqy2bnlZXJBv326PEpiJ+heFNah1gm9S+OfI0tKBze13Y5NoejNJq/4DHElHd7Ioptbk9KbztYHSOwE3X/88qpyQe+9Ck+PJaUjXFZYh1pLOoRyeHS4ko5xU3GbmlLRodT2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"
      width="100%"
      height="90%"
      class="abstract-4"
    ></v-img>
    <v-col cols="12">
      <h2
        class="font-weight-bold primary--text mb-4"
        :class="[isMobile ? 'display-1' : 'display-2']"
      >
        What my clients say
      </h2>
    </v-col>
    <v-col cols="12" md="4" v-for="n in 6" :key="n">
      <v-sheet class="transparent ma-5">
        <v-row class="mx-0">
          <v-icon color="primary" class="display-2">mdi-pause</v-icon>
          <div class="pt-3 font-italic">
            <p class="subheading font-weight-light">
              Aliquam sit amet eros id lorem posuere lobortis ut id enim. Proin
              ullamcorper fringilla risus et lacinia.Aliquam eget lacus a libero.
            </p>
            <v-row align="center" justify="end">
              <span class="primary--text">J. Williams</span>
              &nbsp;|&nbsp;
              <span class="grey--text">Motion</span>
              <v-avatar size="48" color="primary" class="ml-4">
                <v-img src="../assets/client2.png" alt="Client"></v-img>
              </v-avatar>
            </v-row>
          </div>
        </v-row>
      </v-sheet>
    </v-col>
    <v-col cols="12" md="3">
      <v-img src="../assets/motion.png" alt="Motion" height="75px" contain></v-img>
    </v-col>
    <v-col cols="12" md="3">
      <v-img src="../assets/cafe.png" alt="Café" height="75px" contain></v-img>
    </v-col>
    <v-col cols="12" md="3">
      <v-img src="../assets/flagship.png" alt="Flagship" height="75px" contain></v-img>
    </v-col>
    <v-col cols="12" md="3">
      <v-img src="../assets/biere.png" alt="Biere" height="75px" contain></v-img>
    </v-col>
  </v-row>
</template>

<script>
import WindowInstanceMap from '../windowInstanceMap.js';

export default {
  computed: {
    isMobile() {
      return WindowInstanceMap.windowWidth <= 600;
    },
  },
};
</script>

<style lang="scss" scoped>
.abstract-4 {
  position: absolute !important;
  left: 0;
  right: 0;
  top: 50%;
  z-index: 0 !important;
  & ~ * {
    z-index: 1 !important;
  }
}
</style>
