<template>
  <form id="search" method="get" action="https://duckduckgo.com">
    <div class="input-group input-group-lg">
      <label for="q" class="sr-only" v-html="$t('search.btn')"></label>
      <input id="q"
        v-model="q"
        type="search"
        name="q"
        class="form-control">
      <span class="input-group-btn">
        <dropdown ref="dropdown" menu-right>
          <btn
            type="button"
            class="btn-default btn-lg dropdown-toggle"
            aria-haspopup="true"
            aria-expanded="false">
            <i class="fa fa-fw fa-search" aria-hidden="true"></i>
            <span v-html="$t('search.btn')"></span>
            <span class="caret"></span>
          </btn>
          <template slot="dropdown">
            <li>
              <button id="framabee"
                type="submit"
                class="btn btn-link"
                v-html="`${$t('search.btn')} ${$t('search.web')}`">
              </button>
            </li>
            <li>
              <button id="framaworld"
                type="button"
                class="btn btn-link"
                @click="searchDDG();"
                v-html="`${$t('search.btn')} ${$t('search.frama')}`">
              </button>
            </li>
          </template>
        </dropdown>
      </span>
    </div>
  </form>
</template>

<script>
import { Btn, Dropdown } from 'uiv';

export default {
  components: {
    Btn, Dropdown,
  },
  data() {
    return {
      q: '',
    }
  },
  methods: {
    searchDDG () {
      const framaworld = [
        'degooglisons-internet.org', 'contributopia.org',
        'framalibre.org', 'framablog.org', 'framakey.org', 'framabook.org',
        'framabookin.org', 'framatube.org', 'framazic.org',
        'framacolibri.org', 'participer.framasoft.org',
        'docs.framasoft.org', 'framacloud.org',
      ];
      window.location.href = `https://duckduckgo.com/?q=${this.q} site:${framaworld.join()}`;
    },
  }
}
</script>
