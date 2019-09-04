<template>
  <div>
    <Hero />
    <v-container py-5 px-0 fluid>
      <About />
      <Services />
      <Experience />
      <Skills />
      <Portfolio />
    </v-container>
  </div>
</template>

<script>
import Hero from '../components/Hero';
import About from '../components/About';
import Services from '../components/Services';
import Experience from '../components/Experience';
import Skills from '../components/Skills';
import Portfolio from '../components/Portfolio';

export default {
  components: {
    Hero,
    About,
    Services,
    Experience,
    Skills,
    Portfolio,
  },
  data: () => ({}),
};
</script>
