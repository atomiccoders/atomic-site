<template>
  <section id="hero">
    <v-img src="../assets/hero.png" style="height:calc(100vh - 48px);">
      <v-row
        class="fill-height text-right pa-md-5 pa-3 mx-0 align-end justify-end particles"
      >
        <div>
          <div
            class="text-uppercase font-weight-light font-fira-sans"
            :class="[isMobile ? 'headline' : 'display-2']"
          >
            Every Pixel Matters
          </div>
          <h1
            class="primary--text text-uppercase"
            :class="[isMobile ? 'display-2 pb-15' : 'd-none']"
          >
            Atomic<span class="font-weight-thin white--text">Code</span>
          </h1>
          <svg
            id="atomic"
            class="hidden-sm-and-down"
            width="590"
            height="73"
            viewBox="0 0 590 73"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            title="AtomicCode"
          >
            <path
              d="M46.4688 51.875H15.4844L8.45312 71H2.40625L28.2344 2.75H33.7188L59.5469 71H53.5469L46.4688 51.875ZM17.2656 46.9531H44.6406L30.9531 9.78125L17.2656 46.9531Z"
              stroke="#ffaa00"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
            <path
              d="M109.844 7.67188H86.4531V71H80.6875V7.67188H57.3438V2.75H109.844V7.67188Z"
              stroke="#ffaa00"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
            <path
              d="M170.031 40.5781C170.031 46.8594 168.938 52.375 166.75 57.125C164.594 61.875 161.5 65.5312 157.469 68.0938C153.438 70.6562 148.781 71.9375 143.5 71.9375C135.531 71.9375 129.094 69.0938 124.188 63.4062C119.281 57.6875 116.828 49.9844 116.828 40.2969V33.2656C116.828 27.0469 117.922 21.5469 120.109 16.7656C122.328 11.9531 125.453 8.26562 129.484 5.70312C133.516 3.10938 138.156 1.8125 143.406 1.8125C148.656 1.8125 153.281 3.07812 157.281 5.60938C161.312 8.14062 164.422 11.7188 166.609 16.3438C168.797 20.9688 169.938 26.3281 170.031 32.4219V40.5781ZM164.266 33.1719C164.266 24.9531 162.406 18.5156 158.688 13.8594C154.969 9.20312 149.875 6.875 143.406 6.875C137.062 6.875 132 9.21875 128.219 13.9062C124.469 18.5625 122.594 25.0781 122.594 33.4531V40.5781C122.594 48.6719 124.469 55.0938 128.219 59.8438C131.969 64.5625 137.062 66.9219 143.5 66.9219C150.031 66.9219 155.125 64.5938 158.781 59.9375C162.438 55.25 164.266 48.7344 164.266 40.3906V33.1719Z"
              stroke="#ffaa00"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
            <path
              d="M192.203 2.75L217.375 62.9844L242.641 2.75H250.328V71H244.562V41.2812L245.031 10.8125L219.625 71H215.172L189.859 11.0469L190.328 41.0938V71H184.562V2.75H192.203Z"
              stroke="#ffaa00"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
            <path
              d="M274.656 71H268.891V2.75H274.656V71Z"
              stroke="#ffaa00"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
            <path
              d="M341.547 49.7188C340.766 56.9062 338.188 62.4062 333.812 66.2188C329.469 70.0312 323.672 71.9375 316.422 71.9375C311.359 71.9375 306.875 70.6719 302.969 68.1406C299.094 65.6094 296.094 62.0312 293.969 57.4062C291.844 52.75 290.766 47.4375 290.734 41.4688V32.6094C290.734 26.5469 291.797 21.1719 293.922 16.4844C296.047 11.7969 299.094 8.1875 303.062 5.65625C307.062 3.09375 311.656 1.8125 316.844 1.8125C324.156 1.8125 329.922 3.79688 334.141 7.76562C338.391 11.7031 340.859 17.1562 341.547 24.125H335.734C334.297 12.5312 328 6.73438 316.844 6.73438C310.656 6.73438 305.719 9.04688 302.031 13.6719C298.375 18.2969 296.547 24.6875 296.547 32.8438V41.1875C296.547 49.0625 298.328 55.3438 301.891 60.0312C305.484 64.7188 310.328 67.0625 316.422 67.0625C322.453 67.0625 327 65.625 330.062 62.75C333.125 59.8438 335.016 55.5 335.734 49.7188H341.547Z"
              stroke="#ffaa00"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
            <path
              d="M403.891 49.7188C403.109 56.9062 400.531 62.4062 396.156 66.2188C391.812 70.0312 386.016 71.9375 378.766 71.9375C373.703 71.9375 369.219 70.6719 365.312 68.1406C361.438 65.6094 358.438 62.0312 356.312 57.4062C354.188 52.75 353.109 47.4375 353.078 41.4688V32.6094C353.078 26.5469 354.141 21.1719 356.266 16.4844C358.391 11.7969 361.438 8.1875 365.406 5.65625C369.406 3.09375 374 1.8125 379.188 1.8125C386.5 1.8125 392.266 3.79688 396.484 7.76562C400.734 11.7031 403.203 17.1562 403.891 24.125H398.078C396.641 12.5312 390.344 6.73438 379.188 6.73438C373 6.73438 368.062 9.04688 364.375 13.6719C360.719 18.2969 358.891 24.6875 358.891 32.8438V41.1875C358.891 49.0625 360.672 55.3438 364.234 60.0312C367.828 64.7188 372.672 67.0625 378.766 67.0625C384.797 67.0625 389.344 65.625 392.406 62.75C395.469 59.8438 397.359 55.5 398.078 49.7188H403.891Z"
              stroke="#fff"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
            <path
              d="M468.344 40.5781C468.344 46.8594 467.25 52.375 465.062 57.125C462.906 61.875 459.812 65.5312 455.781 68.0938C451.75 70.6562 447.094 71.9375 441.812 71.9375C433.844 71.9375 427.406 69.0938 422.5 63.4062C417.594 57.6875 415.141 49.9844 415.141 40.2969V33.2656C415.141 27.0469 416.234 21.5469 418.422 16.7656C420.641 11.9531 423.766 8.26562 427.797 5.70312C431.828 3.10938 436.469 1.8125 441.719 1.8125C446.969 1.8125 451.594 3.07812 455.594 5.60938C459.625 8.14062 462.734 11.7188 464.922 16.3438C467.109 20.9688 468.25 26.3281 468.344 32.4219V40.5781ZM462.578 33.1719C462.578 24.9531 460.719 18.5156 457 13.8594C453.281 9.20312 448.188 6.875 441.719 6.875C435.375 6.875 430.312 9.21875 426.531 13.9062C422.781 18.5625 420.906 25.0781 420.906 33.4531V40.5781C420.906 48.6719 422.781 55.0938 426.531 59.8438C430.281 64.5625 435.375 66.9219 441.812 66.9219C448.344 66.9219 453.438 64.5938 457.094 59.9375C460.75 55.25 462.578 48.7344 462.578 40.3906V33.1719Z"
              stroke="#fff"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
            <path
              d="M482.875 71V2.75H501.953C507.547 2.75 512.562 4.03125 517 6.59375C521.438 9.125 524.891 12.7656 527.359 17.5156C529.859 22.2656 531.109 27.6719 531.109 33.7344V40.0156C531.109 46.1094 529.875 51.5156 527.406 56.2344C524.938 60.9531 521.453 64.5938 516.953 67.1562C512.484 69.7188 507.344 71 501.531 71H482.875ZM488.641 7.67188V66.125H501.578C508.766 66.125 514.531 63.75 518.875 59C523.219 54.2188 525.391 47.7656 525.391 39.6406V33.6406C525.391 25.7969 523.25 19.5156 518.969 14.7969C514.688 10.0781 509.047 7.70312 502.047 7.67188H488.641Z"
              stroke="#fff"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
            <path
              d="M583.469 38.2812H551.547V66.125H588.25V71H545.781V2.75H588.016V7.67188H551.547V33.4062H583.469V38.2812Z"
              stroke="#fff"
              stroke-width="1"
              mask="url(#path-1-outside-1)"
            />
          </svg>
        </div>
      </v-row>
    </v-img>
  </section>
</template>

<script>
import WindowInstanceMap from '../windowInstanceMap.js';

export default {
  name: 'Hero',
  data() {
    return {};
  },
  computed: {
    isMobile() {
      return WindowInstanceMap.windowWidth <= 600;
    },
  },
};
</script>

<style lang="scss" scoped>
.particles {
  &:after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-image: url('../assets/particles.png');
    background-size: contain;
    transform: scaleX(-1);
  }
}
.pb-15 {
  padding-bottom: 60px !important;
}

#atomic path:nth-child(1) {
  stroke: #ffaa00;
  stroke-dasharray: 341.8;
  stroke-dashoffset: 341.8;
}
#atomic path:nth-child(2) {
  stroke: #ffaa00;
  stroke-dasharray: 241.5;
  stroke-dashoffset: 241.5;
}
#atomic path:nth-child(3) {
  stroke: #ffaa00;
  stroke-dasharray: 366.3;
  stroke-dashoffset: 366.3;
}
#atomic path:nth-child(4) {
  stroke: #ffaa00;
  stroke-dasharray: 548.9;
  stroke-dashoffset: 548.9;
}
#atomic path:nth-child(5) {
  stroke: #ffaa00;
  stroke-dasharray: 148;
  stroke-dashoffset: 148;
}
#atomic path:nth-child(6) {
  stroke: #ffaa00;
  stroke-dasharray: 325.4;
  stroke-dashoffset: 325.4;
}
#atomic path:nth-child(7) {
  stroke-dasharray: 325.4;
  stroke-dashoffset: 325.4;
}
#atomic path:nth-child(8) {
  stroke-dasharray: 366.3;
  stroke-dashoffset: 366.3;
}
#atomic path:nth-child(9) {
  stroke-dasharray: 378.5;
  stroke-dashoffset: 378.5;
}
#atomic path:nth-child(10) {
  stroke-dasharray: 358.2;
  stroke-dashoffset: 358.2;
}

.loaded {
  #atomic path:nth-child(1) {
    animation: logo-anim 2s ease forwards, logo-fill-orange 0.5s ease forwards 4s;
  }
  #atomic path:nth-child(2) {
    animation: logo-anim 2s ease forwards 0.3s, logo-fill-orange 0.5s ease forwards 4s;
  }
  #atomic path:nth-child(3) {
    animation: logo-anim 2s ease forwards 0.6s, logo-fill-orange 0.5s ease forwards 4s;
  }
  #atomic path:nth-child(4) {
    animation: logo-anim 2s ease forwards 0.9s, logo-fill-orange 0.5s ease forwards 4s;
  }
  #atomic path:nth-child(5) {
    animation: logo-anim 2s ease forwards 1.2s, logo-fill-orange 0.5s ease forwards 4s;
  }
  #atomic path:nth-child(6) {
    animation: logo-anim 2s ease forwards 1.5s, logo-fill-orange 0.5s ease forwards 4s;
  }
  #atomic path:nth-child(7) {
    animation: logo-anim 2s ease forwards 1.8s, logo-fill-white 0.5s ease forwards 4s;
  }
  #atomic path:nth-child(8) {
    animation: logo-anim 2s ease forwards 2.1s, logo-fill-white 0.5s ease forwards 4s;
  }
  #atomic path:nth-child(9) {
    animation: logo-anim 2s ease forwards 2.4s, logo-fill-white 0.5s ease forwards 4s;
  }
  #atomic path:nth-child(10) {
    animation: logo-anim 2s ease forwards 2.7s, logo-fill-white 0.5s ease forwards 4s;
  }
}

@keyframes logo-anim {
  to {
    stroke-dashoffset: 0;
  }
}
@keyframes logo-fill-orange {
  from {
    fill: transparent;
  }
  to {
    fill: #ffaa00;
    stroke-width: 0;
  }
}
@keyframes logo-fill-white {
  from {
    fill: transparent;
  }
  to {
    fill: white;
    stroke-width: 0;
  }
}
</style>
