<template>
  <section id="peertube" class="clearfix">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe v-if="peertube"
        v-view.once="loadPeertube"
        width="560" height="315"
        sandbox="allow-same-origin allow-scripts"
        :src="videoBackground"
        frameborder="0"
        allowfullscreen>
      </iframe>
    </div>
    <div class="container ombre">
      <h2 v-html="$t('home.peertube.title')"></h2>
      <p v-html="$t('home.peertube.text')"></p>
      <p>
        <a href="#peertube" @click="openPeertubeModal();"
          class="btn btn-default"
          v-html="$t('home.peertube.btn')">
        </a>
      </p>
    </div>
    <p class="pfooter" v-html="$t('home.peertube.footer')"></p>

    <modal
      id="modalPT"
      v-model="modal.openPT"
      class="modal fade"
      tabindex="-1"
      role="dialog"
      aria-labelledby="modalPTLabel"
      aria-hidden="true"
      size="lg">
      <div slot="header">
        <button type="button" class="close" @click="modal.openPT = false;">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only" v-html="$t('txt.close')"></span>
        </button>
        <h1 id="modalPTLabel"
          class="modal-title"
          v-html="$t('home.peertube.modal.title')">
        </h1>
      </div>

      <p v-html="$t('home.peertube.modal.text')"></p>
      <div class="clearfix">
        <tabs pills>
          <tab
            v-for="index in Object.keys($t('home.peertube.modal.features'))"
            :key="index"
            :title="(index + 1)">
            <h3 v-html="$t(`home.peertube.modal.features[${index}]`)"></h3>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe v-if="peertube"
                width="560" height="315"
                sandbox="allow-same-origin allow-scripts"
                :src="loadedPeertubeFeatures[index]"
                frameborder="0" allowfullscreen>
              </iframe>
            </div>
          </tab>
        </tabs>
      </div>
      <div slot="footer"><!-- Keep empty --></div>
    </modal>
  </section>
</template>

<script>
import { Modal, Tabs, Tab} from 'uiv';

export default {
  components: {
    Modal,
    Tabs,
    Tab,
  },
  data() {
    return {
      peertube: !window.vuefsPrerender && process.env.NODE_ENV !== 'development',
      loadedPeertubeFeatures: [],
      peertubeFeatures: [
        'https://framatube.org/videos/embed/59d306c0-fc5b-493a-956a-43785693346b',
        'https://framatube.org/videos/embed/dcad56d9-9fe6-45bc-96aa-3d778f6804c1',
        'https://framatube.org/videos/embed/edd7a468-08d5-4877-b62b-61c5f3f83ceb',
        'https://framatube.org/videos/embed/60c4bea4-6bb2-4fce-8d9f-8a522575419d',
        'https://framatube.org/videos/embed/8968dbe1-a387-433b-a20f-37fe9f3ca8d5',
        'https://framatube.org/videos/embed/f57da309-6b92-4fe0-9267-ff8188cc050c',
      ],
      videoBackground: 'about:blank',
      modal: {
        openPT: false,
      }
    }
  },
  methods: {
    loadPeertube(e) {
      if (e.type === 'enter') {
        this.videoBackground = 'https://framatube.org/videos/embed/12b7c838-84f6-4b7d-98c6-686e4adce61d?autoplay=1&loop=1&muted=1&controls=0';

        // Load the first modal iframe
        this.loadedPeertubeFeatures = [ this.peertubeFeatures[0] ]
      }
    },
    openPeertubeModal() {
      // Load all modal iframes
      this.loadedPeertubeFeatures = this.peertubeFeatures;

      this.modal.openPT = true;
    },
  }
}
</script>
