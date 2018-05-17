<template lang="html">
  <form method="post" id="search" action="https://framabee.org">
    <div class="input-group input-group-lg">
      <input type="search" name="q" class="form-control">
      <span class="input-group-btn">
        <div class="btn-group">
          <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-search"></i> {{ $t('message.search[0]') }} <span class="caret"></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><button type="submit" class="btn btn-link" id="framabee">{{ $t('message.search[0]') }} {{ $t('message.search[2]') }}</button></li>
            <li><button type="button" class="btn btn-link" id="framaworld">{{ $t('message.search[0]') }} {{ $t('message.search[1]') }}</button></li>
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
