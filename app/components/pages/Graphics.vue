<template>
  <b-container class="ombre">
    <header class="row">
      <h1
        class="col"
        v-html="$t('graphics.title')"
      ></h1>
      <b-col
        cols="2"
        align-self="end"
      >
        <I18n />
      </b-col>
    </header>

    <hr class="trait" />

    <main>
      <Colors />

      <p>
        h1&nbsp;:
        <code>
          font-family: DejaVu Sans, Verdana, Geneva, sans-serif;
        </code>
      </p>
      <p>
        h2-h6&nbsp;:
        <code>font-family: Roboto,sans-serif;</code>
      </p>

      <p>
        hr.trait&nbsp;:
        <code>
          background-color: #eee;
          height: 11px;
        </code>
      </p>
      <p>
        body&nbsp;:
        <code>
          font-family: Roboto,sans-serif;
          color: #333;
          background-color: #eee;
        </code>
      </p>
      <p>
        .ombre&nbsp;:
        <code>
          background-color: #FFF;
          box-shadow: 0px 3px 4px rgba(50, 50, 50, 0.2);
        </code>
      </p>

      <p>
        a/.btn-link&nbsp;:
        <code>color: #0C5B7A;</code>
      </p>
      <p>
        a:hover/.btn-link:hover&nbsp;:
        <code>color: #635182; text-decoration-style: solid;</code>
      </p>
      <p>
        .signature&nbsp;:
        <code>color: #795548;</code>
      </p>

      <Recommendations />

      <hr class="trait" />

      <Examples />

      <hr class="trait" />

      <Images />

      <b-row>
        <b-col md="12">
          <h3>Par service avec emblème Fork Awesome</h3>
          <p>
            Les icônes sont générées dynamiquement en javascript à partir d’un
            template <abbr>SVG</abbr>.
            Fork Awesome doit être installé sur le pc pour que les emblèmes apparaissent
            correctement.
          </p>

          <b-form novalidate>
            <b-form-group label="Icône">
              <b-input-group class="mt-3">
                <template v-slot:append>
                  <b-input-group-text>
                    <i
                      id="framicon"
                      ref="framicon"
                      :class="`fa fa-${icon.fa}`"
                      aria-hidden="true"
                    ></i>
                  </b-input-group-text>
                </template>
                <b-form-input
                  v-model="icon.fa"
                  type="text"
                  @focusout="setUnicode"
                />
              </b-input-group>
            </b-form-group>

            <b-form-group label="Couleur">
              <b-form-radio-group
                v-model="color"
                buttons
              >
                <b-form-radio
                  :value="{ border: '#6A5687', bec: '#EB7239' }"
                  button-variant="primary"
                >
                  Violet
                </b-form-radio>
                <b-form-radio
                  :value="{ border: '#EB7239', bec: '#EB7239' }"
                  button-variant="warning"
                >
                  Orange
                </b-form-radio>
                <b-form-radio
                  :value="{ border: '#0C5B7A', bec: '#0C5B7A' }"
                  button-variant="info"
                >
                  Bleu
                </b-form-radio>
                <b-form-radio
                  :value="{ border: '#CC2D18', bec: '#CC2D18' }"
                  button-variant="danger"
                >
                  Rouge
                </b-form-radio>
                <b-form-radio
                  :value="{ border: '#8E9C48', bec: '#8E9C48' }"
                  button-variant="success"
                >
                  Vert
                </b-form-radio>
                <b-form-radio
                  :value="{ border: '#C48A1B', bec: '#C48A1B' }"
                  button-variant="soutenir"
                >
                  Jaune
                </b-form-radio>
              </b-form-radio-group>
            </b-form-group>

            <b-form-group>
              <b-button
                @click="svg2png('round');svg2png('fav');"
              >
                Créer l’image png
              </b-button>
            </b-form-group>
          </b-form>
        </b-col>

        <b-col
          id="pinchots"
          md="6"
        >
          <div
            id="svg_round"
            ref="svg_round"
          >
            <SVGPinchot
              :icon="icon"
              :color="color"
            />
          </div>
          <div
            id="svg_fav"
            ref="svg_fav"
          >
            <SVGFavicon
              :icon="icon"
              :color="color"
            />
          </div>
        </b-col>
        <b-col>
          <canvas
            id="canvas_round"
            ref="canvas_round"
            width="120"
            height="120"
          ></canvas>
          <canvas
            id="canvas_fav"
            ref="canvas_fav"
            width="32"
            height="32"
          ></canvas>
        </b-col>
      </b-row>
    </main>
  </b-container>
</template>

<script>
import I18n from '../partials/I18n.vue';

import Colors from './graphics/Colors.vue';
import Recommendations from './graphics/Recommendations.vue';
import Examples from './graphics/Examples.vue';
import Images from './graphics/Images.vue';
import SVGPinchot from './graphics/SVGPinchot.vue';
import SVGFavicon from './graphics/SVGFavicon.vue';

export default {
  components: {
    I18n,
    Colors,
    Recommendations,
    Examples,
    Images,
    SVGPinchot,
    SVGFavicon,
  },
  data() {
    return {
      color: {
        border: '#6A5687',
        bec: '#EB7239',
      },
      icon: {
        fa: 'fighter-jet',
        unicode: '',
      },
    };
  },
  mounted() {
    this.setUnicode();
  },
  methods: {
    setUnicode() {
      [this.icon.unicode] = [getComputedStyle(this.$refs.framicon, ':before').content[1]];
    },
    svg2png(id) {
      const canvas = this.$refs[`canvas_${id}`];
      const ctx = canvas.getContext('2d');
      const img = new Image();
      const svg = new Blob([this.$refs[`svg_${id}`].innerHTML], {
        type: 'image/svg+xml;charset=utf-8',
      });
      const url = window.self.URL.createObjectURL(svg);
      img.onload = () => { ctx.drawImage(img, 0, 0); };
      img.src = url;
    },
  },
};
</script>
