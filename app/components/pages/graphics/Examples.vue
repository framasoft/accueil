<template>
  <div>
    <b-row class="my-4">
      <b-col lg="5">
        <h1>
          <img
            :src="`${$t('/')}img/logo.png`"
            alt=""
          />
          <b class="violet">Frama</b><b class="orange">soft</b>
        </h1>
        <h1>
          <img
            :src="`${$t('/')}img/logo-bleu.png`"
            alt=""
          />
          <b class="violet">Frama</b><b class="bleu">libre</b>
        </h1>
        <h1>
          <img
            :src="`${$t('/')}img/logo-rouge.png`"
            alt=""
          />
          <b class="violet">Frama</b><b class="rouge">blog</b>
        </h1>
        <h1>
          <img
            :src="`${$t('/')}img/logo-vert.png`"
            alt=""
          />
          <b class="violet">Frama</b><b class="vert">date</b>
        </h1>
        <h1>
          <img
            :src="`${$t('/')}img/logo-jaune.png`"
            alt=""
          />
          <b class="violet">Frama</b><b class="jaune">colibri</b>
        </h1>
        <h1>Titre h1</h1>
        <hr class="trait" />
        <h2>Titre h2</h2>
        <h3>Titre h3</h3>
        <h4>Titre h4</h4>
        <h5>Titre h5</h5>
        <h6>Titre h6</h6>
      </b-col>
      <b-col lg="7">
        <p>
          <button
            v-for="variant in ['secondary', 'primary', 'success', 'info',
                               'warning', 'danger', 'soutenir', 'link']"
            :key="variant"
            :class="`btn btn-${variant} mx-1`"
            v-text="$t(variant, '-kK')"
          ></button>
        </p>
        <p>
          <button
            v-for="variant in ['secondary', 'primary', 'success', 'info',
                               'warning', 'danger', 'soutenir', 'link']"
            :key="variant"
            :class="`btn btn-${variant} active m-1`"
            v-text="$t(variant, '-kK')"
          ></button>
        </p>
        <p>
          <button
            v-for="variant in ['secondary', 'primary', 'success', 'info',
                               'warning', 'danger', 'soutenir']"
            :key="variant"
            :class="`btn btn-outline-${variant} m-1`"
            v-text="$t(variant, '-kK')"
          ></button>
        </p>
        <p>
          <span
            v-for="variant in ['secondary', 'primary', 'success', 'info',
                               'warning', 'danger', 'light', 'dark']"
            :key="variant"
            :class="`badge badge-${variant} m-1`"
            v-text="$t(variant, '-kK')"
          ></span>
        </p>

        <b-card>
          <p>
            <a
              v-for="variant in ['muted', 'primary', 'success', 'info',
                                 'warning', 'danger']"
              :key="variant"
              :class="`text-${variant}`"
              href="#"
            >
              Lien
            </a>
          </p>
          <p
            v-for="variant in ['muted', 'primary', 'success', 'info',
                               'warning', 'danger']"
            :key="variant"
            :class="`text-${variant}`"
          >
            Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.
          </p>
        </b-card>
      </b-col>
    </b-row>

    <b-row>
      <b-col lg="8">
        <div class="alert alert-success">
          <strong>Well done!</strong> You successfully read
          <a
            href="#"
            class="alert-link"
          >
            this important alert message
          </a>.
        </div>
        <div class="alert alert-info">
          <strong>Heads up!</strong> This
          <a
            href="#"
            class="alert-link"
          >
            alert needs your attention
          </a>,
          but it's not super important.
        </div>
        <div class="alert alert-warning">
          <strong>Warning!</strong> Better check yourself, you're
          <a
            href="#"
            class="alert-link"
          >
            not looking too good
          </a>.
        </div>
        <div class="alert alert-danger">
          <strong>Oh snap!</strong>
          <a
            href="#"
            class="alert-link"
          >
            Change a few things up
          </a>
          and try submitting again.
        </div>

        <Carousel />
      </b-col>

      <b-col lg="4">
        <b-card
          v-for="variant in ['secondary', 'primary', 'success', 'info',
                             'warning', 'danger', 'dark']"
          :key="variant"
          :header-bg-variant="variant"
          header-text-variant="white"
          :border-variant="variant"
          :header="$t(variant, '-kK')"
          class="text-center my-2"
        >
          <b-card-text>Card content</b-card-text>
        </b-card>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import Carousel from '../../partials/Carousel.vue';

export default {
  components: {
    Carousel,
  },
};
</script>
