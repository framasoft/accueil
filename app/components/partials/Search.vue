<template lang="html">
  <form method="post" id="search" action="https://framabee.org">
    <div class="input-group input-group-lg">
      <input type="search" name="q" class="form-control">
      <span class="input-group-btn">
        <div class="btn-group">
          <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-search"></i> {{ $t('msg.search.btn') }} <span class="caret"></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><button type="submit" class="btn btn-link" id="framabee">{{ $t('msg.search.btn') }} {{ $t('msg.search.web') }}</button></li>
            <li><button type="button" class="btn btn-link" id="framaworld">{{ $t('msg.search.btn') }} {{ $t('msg.search.frama') }}</button></li>
          </ul>
        </div>
      </span>
    </div>
  </form>
</template>

<script>
  $(document).ready( () => {
    $('#framaworld').on('click', () => {
      window.location.href = `https://duckduckgo.com/?q=${$('#search input[name="q"]').val()} site:framaworld`;
    });
  });
</script>
