<template>
  <b-container class="ombre">
    <Header />

    <hr class="trait" />

    <b-row
      class="mt-4 mb-3 mx-0"
      align-h="center"
    >
      <b-col
        md="10"
        class="p-0"
      >
        <Search />
      </b-col>
    </b-row>

    <div
      v-for="category in ['cloud', 'logiciel', 'culture', 'vrac']"
      :key="category"
      :class="`lite ${$t(`cat.${category}.color`)}`"
    >
      <h3
        :class="`titreFramaTrucs m-0 ${$t(`cat.${category}.color`)}`"
        v-html="$t(`cat.${category}.title`)"
      >
      </h3>
      <ul class="list-unstyled row">
        <li
          v-for="frama in $t(`cat.${category}.list`)"
          :key="frama"
          class="col-6 col-sm-4 col-md-3 text-center"
        >
          <b-button
            :href="$t(`link.${frama}`)"
            block
            variant="outline-light border-0 m-2"
            :title="$t(`cat.${category}.sites.${frama}.title`)"
          >
            <icon
              :name="$t(`icon.${frama}`)"
              size="2x"
              variant="d-block mb-1"
              :label="$t(`color.${frama}`)"
            />
          </b-button>
        </li>
      </ul>
    </div>
  </b-container>
</template>

<script>
import Header from '../partials/Header.vue';
import Search from '../partials/Search.vue';

export default {
  components: {
    Header,
    Search,
  },
};
</script>
