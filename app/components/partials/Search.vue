<template>
  <form method="post" id="search" action="https://framabee.org">
    <div class="input-group input-group-lg">
      <input type="search" name="q" class="form-control">
      <span class="input-group-btn">
        <dropdown ref="dropdown" menu-right>
          <btn type="button" class="btn-default btn-lg dropdown-toggle"
            aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-search"></i> {{ $t('search.btn') }} <span class="caret"></span>
          </btn>
          <template slot="dropdown">
            <li><button type="submit" class="btn btn-link" id="framabee">{{ $t('search.btn') }} {{ $t('search.web') }}</button></li>
            <li><button type="button" class="btn btn-link" id="framaworld"
              @click="searchDDG();"
            >{{ $t('search.btn') }} {{ $t('search.frama') }}</button></li>
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
  methods: {
    searchDDG () {
      const framaworld = [
        'degooglisons-internet.org', 'contributopia.org',
        'framalibre.org', 'framablog.org', 'framakey.org', 'framabook.org',
        'framabookin.org', 'framatube.org', 'framazic.org',
        'framacolibri.org', 'participer.framasoft.org',
        'docs.framasoft.org', 'framacloud.org',
      ];
      window.location.href = `https://duckduckgo.com/?q=${$('#search input[name="q"]').val()} site:${framaworld.join()}`;
    },
  }
}
</script>
