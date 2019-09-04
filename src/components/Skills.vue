<template>
  <v-row tag="section" id="skills" class="pa-5 mx-0" style="position:relative;">
    <v-img
      src="data:image/png;base64,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"
      width="778px"
      height="711px"
      class="abstract-2"
    ></v-img>
    <v-col cols="12">
      <v-row justify="space-between">
        <v-col cols="auto">
          <h2
            class="font-weight-bold primary--text mb-4"
            :class="[isMobile ? 'display-1' : 'display-2']"
          >
            What I know
          </h2>
        </v-col>
        <v-col cols="auto">
          <blockquote class="my-blockquote">
            <p class="subheading font-weight-light font-italic">
              I have been a Core Contributor to the Vuetify opensource project for 2 years
              and counting...
            </p>
            <footer class="text-center">
              <v-btn
                contained
                color="primary"
                href="/Resume_Jakub_Michniewicz.pdf"
                target="_blank"
              >
                Download CV
              </v-btn>
            </footer>
          </blockquote>
        </v-col>
      </v-row>
    </v-col>
    <v-col cols="12">
      <v-row justify="space-around">
        <v-col tag="section" cols="12" md="3" id="my-education">
          <h3 class="headline font-weight-medium mb-4 primary--text">
            My Education
          </h3>
          <v-sheet class="mb-5 transparent" v-for="(item, idx) in education" :key="idx">
            <v-row class="mx-0">
              <v-sheet color="sheet-bordered primary" class="mr-3"></v-sheet>
              <v-col>
                <div class="mb-3">{{ item.school }}</div>
                <div class="text-right">
                  <span class="title primary--text">{{ item.title }}</span>
                  <footer>
                    <div>{{ item.category }}</div>
                    <div>{{ item.years }}</div>
                  </footer>
                </div>
              </v-col>
            </v-row>
          </v-sheet>
        </v-col>
        <v-col tag="section" cols="12" md="4" id="my-skills">
          <h3 class="headline font-weight-medium mb-4 primary--text">
            My Skills
          </h3>
          <div class="mb-4" v-for="(item, idx) in skills" :key="idx">
            <h4 class="text-uppercase mb-3 primary--text">{{ item.category }}</h4>
            <div class="pl-md-4">
              <v-row
                align="center"
                class="mb-2 mx-0"
                v-for="(skill, index) in item.skills"
                :key="index"
              >
                <v-col cols="4">
                  <h5 class="subheading">{{ skill.title }}</h5>
                </v-col>
                <v-col cols="8">
                  <v-rating
                    readonly
                    dense
                    length="6"
                    v-model="skill.value"
                    full-icon="mdi-record"
                    empty-icon="mdi-record"
                    color="primary"
                    background-color="grey darken-4"
                  ></v-rating>
                </v-col>
              </v-row>
            </div>
          </div>
        </v-col>
      </v-row>
    </v-col>
  </v-row>
</template>

<script>
import WindowInstanceMap from '../windowInstanceMap.js';

export default {
  data() {
    return {
      education: [
        {
          school: 'State University',
          title: 'Bachelor of Computer Science',
          category: 'Computer Sciences',
          years: '2013 - 2017',
        },
        {
          school: 'Community College',
          title: 'Certificate of Completion',
          category: 'Modern Logo Design',
          years: '2012 - 2013',
        },
        {
          school: 'Community College',
          title: 'Associate of Science',
          category: 'Graphic Design',
          years: '2010 - 2012',
        },
        {
          school: 'Community College',
          title: 'Certificate of Completion',
          category: 'Marketing',
          years: '2010 - 2010',
        },
      ],
      skills: [
        {
          category: 'Graphics/Media',
          skills: [
            {
              title: 'Photoshop',
              value: 6,
            },
            {
              title: 'Illustrator',
              value: 5,
            },
            {
              title: 'Fireworks',
              value: 4,
            },
            {
              title: 'InDesign',
              value: 5,
            },
          ],
        },
        {
          category: 'Programming',
          skills: [
            {
              title: 'Javascript',
              value: 6,
            },
            {
              title: 'HTML5/CSS3',
              value: 6,
            },
            {
              title: 'PHP/MYSQL',
              value: 5,
            },
            {
              title: 'Vue.js',
              value: 6,
            },
          ],
        },
        {
          category: 'Other',
          skills: [
            {
              title: 'Graphic Design',
              value: 5,
            },
            {
              title: 'Marketing',
              value: 4,
            },
            {
              title: 'Web Design',
              value: 5,
            },
            {
              title: 'Logo Design',
              value: 4,
            },
          ],
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

<style lang="scss" scoped>
.abstract-2 {
  position: absolute !important;
  right: 0;
  top: -128px;
  z-index: 0 !important;
  & ~ * {
    z-index: 1 !important;
  }
}
.my-blockquote {
  max-width: 230px;
}
.sheet-bordered {
  height: 100px;
  width: 1px;
}
</style>
value