import Vue from 'vue';

const WindowInstanceMap = new Vue({
  data() {
    return {
      windowWidth: window.innerWidth,
      windowHeight: window.innerHeight,
    };
  },
  created() {
    window.addEventListener('resize', e => {
      this.windowWidth = window.innerWidth;
      this.windowHeight = window.innerHeight;
      return e;
    });
  },
});

export default WindowInstanceMap;
