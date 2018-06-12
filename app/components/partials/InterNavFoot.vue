<template lang="html">
  <div class="row finPseudoPage">
    <div class="col-md-2">
      <ul class="navEntities2">
        <li
          v-for="(part, key) in $t('msg.nav.parts')"
          :key="part.key">
          <a
            :href="`#topPg${key}`"
            :title="part.title">
            <span class="sr-only">{{ part.key }}</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>
