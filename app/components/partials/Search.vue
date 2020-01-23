<template>
  <b-form
    id="search"
    method="get"
    action="https://duckduckgo.com"
  >
    <label
      for="q"
      class="sr-only"
      v-html="$t('search.btn')"
    ></label>
    <b-input-group
      size="lg"
    >
      <b-form-input
        id="q"
        v-model="q"
        type="search"
        name="q"
        class="rounded-0"
      />
      <template v-slot:append>
        <b-dropdown
          right
          variant="outline-secondary rounded-0"
        >
          <template v-slot:button-content>
            <icon name="search" />
            <span
              class="d-none d-sm-inline"
              v-html="$t('search.btn')"
            ></span>
          </template>
          <b-dropdown-item-button @click="searchDDG()">
            <span v-html="`${$t('search.btn')} ${$t('search.web')}`"></span>
          </b-dropdown-item-button>
          <b-dropdown-item-button @click="searchDDG(true)">
            <span v-html="`${$t('search.btn')} ${$t('search.frama')}`"></span>
          </b-dropdown-item-button>
        </b-dropdown>
      </template>
    </b-input-group>
  </b-form>
</template>

<script>
export default {
  data() {
    return {
      q: '',
    };
  },
  methods: {
    searchDDG(frama) {
      const framaworld = [
        'degooglisons-internet.org', 'contributopia.org',
        'framalibre.org', 'framablog.org', 'framakey.org', 'framabook.org',
        'framabookin.org', 'framatube.org', 'framazic.org',
        'framacolibri.org', 'participer.framasoft.org',
        'docs.framasoft.org', 'framacloud.org',
      ];
      window.location.href = frama
        ? `https://duckduckgo.com/?q=${this.q} site:${framaworld.join()}`
        : `https://duckduckgo.com/?q=${this.q}`;
    },
  },
};
</script>
