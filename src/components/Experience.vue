<template>
  <v-row tag="section" id="experience" class="pa-5 mx-0" style="position:relative;">
    <v-col cols="12">
      <h2 class="font-weight-bold primary--text mb-4 display-2">Where I've been</h2>
    </v-col>
    <v-col cols="12" md="9" class="mx-auto px-0">
      <v-timeline light>
        <v-timeline-item dark v-for="(item, i) in items" :key="i">
          <span slot="opposite">{{ item.year }}</span>
          <v-card class="pa-3">
            <h3 class="subheading font-weight-bold">{{ item.title }}</h3>
            <div>
              Lorem ipsum dolor sit amet, eum ex saperet euripidis. Amet consetetur
              conclusionemque eum id, eros petentium eam cu.
            </div>
          </v-card>
        </v-timeline-item>
      </v-timeline>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          title: 'Web Development',
          year: 2003,
        },
        {
          title: 'Design',
          year: 2006,
        },
        {
          title: 'Marketing',
          year: 2008,
        },
        {
          title: 'Support',
          year: 2010,
        },
      ],
    };
  },
};
</script>

<style></style>
