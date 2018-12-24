<template>
  <main>
    <vue-headful
      :title="$root.meta.title + ' - Changer le monde, un octet à la fois.'"
    />
    <section id="intro" class="clearfix">
      <div class="bg">
        <div class="bubbles" id="bubbles"></div>
        <div class="bubbles" id="bubbles2"></div>
        <div class="bubbles" id="bubbles3"></div>
      </div>
      <div class="container">
        <div class="clearfix">
          <I18n/>
        </div>
        <div class="clearfix">
          <div class="col-sm-5">
            <h1 v-html="$root.txt.soft"></h1>
            <h2 v-html="$t('home.intro.subtitle')"></h2>
            <p v-html="$t('home.intro.text')"></p>
            <p>
              <a href="#soutenir"
                class="btn btn-lg btn-soutenir"
                v-html="$t('home.intro.btn')"
              ></a>
            </p>
          </div>
          <div class="col-sm-7 text-center">
            <img :src="`${$root['/']}img/biglogo-notxt.png`" alt="" class="img-circle">
          </div>
        </div>
      </div>
    </section>

    <section id="more" class="clearfix">
      <div class="container-fluid">
        <div class="container">
          <h2 class="col-xs-12 text-left" v-html="$t('home.more.title')"></h2>
          <div class="col-sm-3 text-center">
            <span class="fa-stack fa-4x bleu" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-linux fa-stack-1x"></i>
            </span>
            <h3 class="h3 text-left"  v-html="$t('home.more.libre.title')"></h3>
            <p class="text-left" v-html="$t('home.more.libre.text')"></p>
          </div>
          <div class="col-sm-3 text-center">
            <span class="fa-stack fa-4x rouge" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-book fa-stack-1x"></i>
            </span>
            <h3 class="h3 text-left" v-html="$t('home.more.book.title')"></h3>
            <p class="text-left" v-html="$t('home.more.book.text')"></p>
          </div>
          <div class="col-sm-3 text-center">
            <span class="fa-stack fa-4x violet" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-pencil fa-stack-1x"></i>
            </span>
            <h3 class="h3 text-left" v-html="$t('home.more.blog.title')"></h3>
            <p class="text-left" v-html="$t('home.more.blog.text')"></p>
          </div>
          <div class="col-sm-3 text-center">
            <span class="fa-stack fa-4x orange" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-group fa-stack-1x"></i>
            </span>
            <h3 class="h3 text-left" v-html="$t('home.more.confs.title')"></h3>
            <p class="text-left" v-html="$t('home.more.confs.text')"></p>
          </div>
        </div>
        <p class="pfooter">
          <span  v-html="$t('home.more.footer')"></span>
          <router-link :to="'/' + $t('lang') + '/full'" v-html="$t('home.more.link')"></router-link>
        </p>
      </div>
    </section>

    <section id="dio" class="clearfix">
      <div class="container-fluid">
        <p class="btn-circle">
          <a href="#dio">
            <span class="fa-stack fa-4x vert" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-chevron-down fa-stack-1x"></i>
            </span>
          </a>
        </p>
        <div class="container">
          <h2 v-html="$t('home.dio.title')"></h2>
          <h3 v-html="$t('home.dio.subtitle', 0, {count: vcf.coverList.length })">
          </h3>
        </div>
        <div class="container ombre">
          <h4 class="text-center">
            <span class="neon">{{ vcf.index + 1 }}</span><br>
            <span>{{ vcf.coverList[vcf.index].title }}</span>
          </h4>
          <p
            class="col-sm-6 col-sm-offset-3 fc_g3"
            v-html="$t('cat.cloud.sites.' + vcf.coverList[vcf.index].id + '.desc')">
          </p>
          <div class="col-sm-12 text-center">
            <carousel-3d
              @after-slide-change="onAfterSlideChange"
              :autoplay="true" :autoplay-timeout="5000"
              :controls-visible="true"
              dir="ltr" :height="350">
              <slide v-for="(slide, i) in vcf.coverList" :index="i" :key="i">
                <template slot-scope="{ index, isCurrent, leftIndex, rightIndex }">
                  <img :data-index="index" :class="{ current: isCurrent, onLeft: (leftIndex >= 0), onRight: (rightIndex >= 0) }" :src="slide.cover">
                </template>
              </slide>
            </carousel-3d>
          </div>
          <p class="col-sm-12 text-center">
            <a href="#soutenir" class="btn btn-lg btn-soutenir" v-html="$t('home.dio.btn')"></a>
          </p>
        </div>
        <p class="pfooter" v-html="$t('home.dio.footer')"></p>
      </div>
    </section>

    <section id="peertube" class="clearfix">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe v-if="peertube"
          v-view.once="loadPeertube"
          width="560" height="315"
          sandbox="allow-same-origin allow-scripts"
          :src="videoBackground"
          frameborder="0" allowfullscreen
        ></iframe>
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
        size="lg"
      >
        <div slot="header">
          <button type="button" class="close" @click="modal.openPT = false;">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only" v-html="$t('txt.close')"></span>
          </button>
          <h1 class="modal-title" id="modalPTLabel"
            v-html="$t('home.peertube.modal.title')"
          ></h1>
        </div>

        <p v-html="$t('home.peertube.modal.text')"></p>
        <div class="clearfix">
          <tabs pills>
            <tab
              v-for="(feature, index) in $t('home.peertube.modal.features')"
              :key="index"
              :title="(index + 1) + ''"
            >
              <h3 v-html="$t('home.peertube.modal.features[' + index + ']')"></h3>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe v-if="peertube"
                  width="560" height="315"
                  sandbox="allow-same-origin allow-scripts"
                  :src="loadedPeertubeFeatures[index]"
                  frameborder="0" allowfullscreen
                ></iframe>
              </div>
            </tab>
          </tabs>
        </div>
        <div slot="footer"><!-- Keep empty --></div>
      </modal>
    </section>

    <section id="cuo" class="clearfix">
      <div class="container-fluid">
        <div class="container">
          <h2 v-html="$t('home.cuo.title')"></h2>
          <h3 v-html="$t('home.cuo.subtitle')"></h3>
        </div>
        <div class="container ombre">
          <div class="col-md-4">
            <h4 class="label label-success" v-html="$t('home.cuo.meet.title')"></h4>
            <button class="bigbubble"
              :style="`background: url(${$root['/']}img/services-framameet.jpg);`">
              <p v-html="$t('home.cuo.meet.text')"></p>
            </button>
            <a href="#!" class="close" aria-hidden="true">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <div class="col-md-4">
            <h4 class="label label-primary" v-html="$t('home.cuo.petitions.title')"></h4>
            <button class="bigbubble"
              :style="`background: url(${$root['/']}img/services-framapetitions.jpg);`">
              <p v-html="$t('home.cuo.petitions.text')"></p>
            </button>
            <a href="#!" class="close" aria-hidden="true">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <div class="col-md-4">
            <h4 class="label label-info" v-html="$t('home.cuo.mooc.title')"></h4>
            <button class="bigbubble"
              :style="`background: url(${$root['/']}img/educ-pop-mooc-chatons.jpg);`">
              <p v-html="$t('home.cuo.mooc.text')"></p>
            </button>
            <a href="#!" class="close" aria-hidden="true">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <p class="col-sm-12 text-center">
            <a href="#soutenir" class="btn btn-lg btn-soutenir" v-html="$t('home.cuo.btn')"></a>
          </p>
        </div>
        <p class="pfooter" v-html="$t('home.cuo.footer')"></p>
      </div>
    </section>


    <section id="soutenir" class="clearfix">
      <a id="why"></a><a id="timeline"></a><a id="money"></a>
      <div class="container">
        <div class="col-md-5">
          <h2 v-html="$t('home.soutenir.title')"></h2>
          <p class="text-center fc_g4" aria-hidden="true">
            <i class="fa fa-5x fa-heart" style="font-size: 150px; margin: 30px;"></i>
          </p>
          <p v-html="$t('home.soutenir.text')"></p>
          <p>
            <a href="#why" v-html="$t('home.soutenir.why')"></a><br>
            <a href="#money" v-html="$t('home.soutenir.money')"></a><br>
            <a v-if="$t('lang') === 'fr'" href="https://framasoft.org/img/fr/infographie_Le-Monde-de-Framasoft_CC-By-SA-Geoffrey-Dorne-1920px-2018.jpg"
              v-html="$t('home.soutenir.numbers')" target="_blank"></a>
            <a v-else-if="$t('lang') === 'en'" href="https://framasoft.org/img/en/infographie_Le-Monde-de-Framasoft_CC-By-SA-Geoffrey-Dorne-1920px-2018.jpg"
              v-html="$t('home.soutenir.numbers')" target="_blank"></a>
            <br>
            <a href="#timeline" v-html="$t('home.soutenir.timeline')" @click="modal.openTL = true;"></a>
          </p>

          <div class="why">
            <h3 class="blocLarge" v-html="$t('why.reasons.title')"></h3>
            <div class="panel-group">
              <div class="panel panel-default"
                v-for="reason, index in $t('why.reasons.list')"
                v-if="!(index === 3 && $t('lang') !== 'fr')">
                <div class="panel-heading" role="button" @click="toggleAccordion(index)">
                  <h4 class="panel-title" v-html="$t('why.reasons.list[' + index + '][0]')"></h4>
                </div>
                <collapse v-model="showAccordion[index]">
                  <div class="panel-body">
                    <p v-html="$t('why.reasons.list[' + index + '][1]')"></p>
                  </div>
                </collapse>
              </div>
            </div>
          </div>

          <div class="money">
            <h3 class="blocLarge" v-html="$t('why.money.title')"></h3>
            <div class="panel panel-default">
              <img :src="`${$root['/']}img/graphe_depenses_2015.png`" />
              <ul>
                <li v-for="(expense, index) in $t('why.money.list')" v-html="$t('why.money.list[' + index + ']')"></li>
              </ul>
            </div>
          </div>

          <!--
          <div class="timeline">
            <h3 class="blocLarge" v-html="$t('why.timeline.title')"></h3>
            <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" height="600"
                :src="`${$root.link.dio}/${$route.meta.lang}/timeline`"
              ></iframe>
            </div>
          </div>
          -->

          <modal
            id="modalTL"
            v-model="modal.openTL"
            class="modal fade"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modalTLLabel"
            aria-hidden="true"
            size="lg"
          >
            <div slot="header">
              <button type="button" class="close" @click="modal.openTL = false;">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only" v-html="$t('txt.close')"></span>
              </button>
              <h1 class="modal-title" id="modalTLLabel"
                v-html="$t('why.timeline.title')"
              ></h1>
            </div>

            <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" height="600"
                :src="`${$root.link.dio}/${$route.meta.lang}/timeline`"
              ></iframe>
            </div>
            <div slot="footer"><!-- Keep empty --></div>
          </modal>
        </div>

        <div :class="`col-md-7 ${form.monthly ? 'monthly' : 'onetime' }`">
          <div class="ombre">
            <form role="form" id="form_don" class="clearfix" action="#"
              @submit="payRedirection">
              <!-- Step 1 ------------------------------------------------------->
              <div id="howmuch" class="clearfix">
                <h3 class="blocLarge" v-html="$t('form.step1.title')"></h3>
                <div class="row">
                  <div class="btn-group" data-toggle="buttons">
                    <label
                      :class="'btn btn-lg text-uppercase' + (!form.monthly ? ' active' : '')"
                      @click="form.monthly=false; form.don=50;">
                      <input type="radio" autocomplete="off"
                        v-model="form.monthly" :value="false"
                        >
                      <i class="fa fa-fw fa-ticket" aria-hidden="true"></i>
                      <span v-html="$t('form.step1.oneshot')"></span>
                    </label>
                    <label
                      :class="'btn btn-lg text-uppercase' + (form.monthly ? ' active' : '')"
                      @click="form.monthly=true; form.don=10;">
                      <input type="radio"  autocomplete="off"
                        v-model="form.monthly" :value="true"
                        >
                      <i class="fa fa-fw fa-refresh" aria-hidden="true"></i>
                      <span v-html="$t('form.step1.monthly')"></span>
                    </label>
                  </div>


                  <div v-if="form.monthly">
                    <!-- Monthly -->
                    <div class="amount">
                      <div
                        v-for="money in [5, 10, 25, 50]"
                        class="col-sm-4 col-xs-6"
                      >
                        <button
                          type="button"
                          :class="'btn' + (form.don === money && form.monthly ? ' selected' : '')"
                          :value="money"
                          @click="form.don = money; form.otherM = form.other1 = ''">
                          {{ EUR(money) }}
                        </button>
                      </div>
                      <div class="col-sm-8 col-xs-12">
                        <div :class="'input-group' + ([5, 10, 25, 50].indexOf(form.don) < 0 ? ' selected' : '')">
                          <label for="otherM" v-html="$t('form.step1.other')" class="sr-only"></label>
                          <span class="input-group-addon">€</span>
                          <input type="number" id="otherM"
                            :placeholder="`${$t('form.step1.other')} (${$t('form.step1.monthly_ex')})`"
                            v-model.number="form.otherM"
                            @change="check('otherM')"
                            step="0.01" min="1" max="100000">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div v-else>
                    <!-- One time -->
                    <div class="amount">
                      <div
                        v-for="money in [30, 50, 75, 100]"
                        class="col-sm-4 col-xs-6"
                      >
                        <button
                          type="button"
                          :class="'btn' + (form.don === money && !form.monthly ? ' selected' : '')"
                          @click="form.don = money; form.otherM = form.other1 = '';"
                          :value="money" >
                          {{ EUR(money) }}
                        </button>
                      </div>
                      <div class="col-sm-8 col-xs-12">
                        <div :class="'input-group' + ([30, 50, 75, 100].indexOf(form.don) < 0 ? ' selected' : '')">
                          <label for="other1" v-html="$t('form.step1.other')" class="sr-only"></label>
                          <span class="input-group-addon">€</span>
                          <input type="number" id="other1"
                            :placeholder="`${$t('form.step1.other')} (${$t('form.step1.oneshot_ex')})`"
                            v-model.number="form.other1"
                            @change="check('other1')"
                            step="0.01" min="1" max="100000">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Step 2 ------------------------------------------------------->
              <div id="whoAreYou" class="clearfix">
                <h3 class="blocLarge">
                  <span v-html="$t('form.step2.title')"></span>
                  <popover tag="small"
                    placement="left" trigger="hover-focus"
                    :title="$t('form.step2.private')"
                  >
                    <i class="fa fa-fw fa-lg fa-question-circle text-muted" aria-hidden="true"></i>
                    <span class="sr-only" v-html="$t('form.step2.private')"></span>
                    <template slot="popover">
                      <div>
                        <span v-html="$t('form.step2.private_tip[0]')"></span>
                        <span v-html="$t('form.step2.private_tip[1]')"></span>
                        <a href="javascript:void(0);"
                          @click="fillForm">
                          <span v-html="$t('form.step2.private_tip[2]')"></span>
                        </a>
                        <span v-html="$t('form.step2.private_tip[3]')"></span><br>
                        <span v-html="$t('form.step2.private_tip[4]')"></span><br>
                        <span v-html="$t('form.step2.private_tip[5]')"></span>
                      </div>
                    </template>
                  </popover>
                </h3>
                <div class="well clearfix">
                  <!-- Individual / Society -->
                  <div class="form-group col-xs-12">
                    <p class="pull-left" v-html="$t('form.step2.type')"></p>
                    <div class="btn-group btn-group-sm" id="typeDonateur" data-toggle="buttons">
                      <label
                        :class="'btn btn-lg text-uppercase' + (!form.society ? ' active' : '')"
                        @click="form.defisc = 66; form.firstname = ''; form.society=false">
                        <input type="radio" name="statut" id="particulier" autocomplete="off"
                          v-model="form.society" :value="false"
                          >
                        <i class="fa fa-fw fa-lg fa-user" aria-hidden="true"></i>
                        <span v-html="$t('form.step2.part')"></span>
                      </label>
                      <label
                        :class="'btn btn-lg text-uppercase' + (form.society ? ' active' : '')"
                        style="cursor: help"
                        :title="$t('form.step2.corp_tip')"
                        @click="form.defisc = 60; form.firstname = ' '; form.society=true">
                        <input type="radio" name="statut" id="societe" autocomplete="off"
                          v-model="form.society" :value="true"
                          >
                        <i class="fa fa-fw fa-lg fa-institution" aria-hidden="true"></i>
                        <span v-html="$t('form.step2.corp')"></span>
                      </label>
                    </div>
                    <p class="help-block col-xs-12"  id="partenariat"
                      v-show="form.society" v-html="$t('form.step2.mecenat')"></p>
                  </div>

                  <!-- Email -->
                  <div :class="'form-group email col-xs-12' + form.ok.email">
                    <div class="input-group">
                      <label for="email" class="sr-only">
                        <span v-html="$t('form.step2.email')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-envelope-o fa-fw fa-lg"></i>
                      </span>
                      <input type="email" class="form-control"
                        :placeholder="$t('form.step2.email')"
                        :title="form.society ? $t('form.step2.society_email_ex') : $t('form.step2.email_ex')"
                        name="email" id="email" ref="email"
                        v-model="form.email" required
                        @focusout="check('email')"
                      >
                    </div>
                  </div>

                  <!-- Lastname -->
                  <div v-if="!form.society" :class="'form-group lastname col-xs-6' + form.ok.lastname">
                    <div class="input-group">
                      <label for="lastname" class="sr-only">
                        <span v-html="$t('form.step2.lastname')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-user fa-fw fa-lg"></i>
                      </span>
                      <input type="text" class="form-control"
                        :placeholder="$t('form.step2.lastname')"
                        :title="$t('form.step2.lastname_ex')"
                        name="lastname" id="lastname" ref="lastname"
                        v-model="form.lastname" required
                        @focusout="check('lastname')"
                      >
                    </div>
                  </div>
                   <!-- Society -->
                  <div v-else :class="'form-group society col-xs-12' + form.ok.lastname">
                    <div class="input-group">
                      <label for="lastname" class="sr-only">
                        <span v-html="$t('form.step2.society')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-institution fa-fw fa-lg"></i>
                      </span>
                      <input type="text" class="form-control"
                        :placeholder="$t('form.step2.society')"
                        :title="$t('form.step2.society_ex')"
                        name="lastname" id="lastname" ref="lastname"
                        v-model="form.lastname" required
                        @focusout="check('lastname')"
                      >
                    </div>
                  </div>

                  <!-- Firstname -->
                  <div v-show="!form.society" :class="'form-group firstname col-xs-6' + form.ok.firstname">
                    <label for="firstname" class="sr-only">
                      <span v-html="$t('form.step2.firstname')"></span>
                      <abbr :title="$t('form.step2.error_empty')">*</abbr>
                    </label>
                    <input type="text" class="form-control"
                      :title="$t('form.step2.firstname_ex')"
                      :placeholder="$t('form.step2.firstname')"
                      name="firstname" id="firstname" ref="firstname"
                      v-model="form.firstname" required
                      @focusout="check('firstname')"
                    >
                  </div>

                  <!-- Address -->
                  <div :class="'form-group address1 col-xs-12' + form.ok.address1">
                    <div class="input-group">
                      <label for="address1" class="sr-only">
                        <span v-html="$t('form.step2.address1')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-map-marker fa-fw fa-lg"></i>
                      </span>
                      <input type="text" class="form-control"
                        :placeholder="$t('form.step2.address1')"
                        :title="$t('form.step2.address1_ex')"
                        name="address1" id="address1" ref="address1"
                        v-model="form.address1" required
                        @focusout="check('address1')"
                      >
                    </div>
                  </div>

                  <div class="form-group address2 col-xs-12">
                    <div class="input-group">
                      <label for="address2" class="sr-only" v-html="$t('form.step2.address2')"></label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-map-marker fa-fw fa-lg"></i>
                      </span>
                      <input type="text" class="form-control"
                        name="address2" id="address2" ref="address2"
                        :placeholder="$t('form.step2.address2')"
                        :title="$t('form.step2.address2_ex')"
                        v-model="form.address2"
                      >
                    </div>
                  </div>

                  <!-- Zip -->
                  <div :class="'form-group zip col-xs-6' + form.ok.zip">
                    <div class="input-group">
                      <label for="zip" class="sr-only">
                        <span v-html="$t('form.step2.zip')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-map-marker fa-fw fa-lg"></i>
                      </span>
                      <input type="text" class="form-control"
                        :placeholder="$t('form.step2.zip')"
                        :title="$t('form.step2.zip_ex')"
                        name="zip" id="zip" ref="zip"
                        v-model="form.zip" required
                        @focusout="check('zip')"
                      >
                    </div>
                  </div>

                  <!-- City -->
                  <div :class="'form-group city col-xs-6' + form.ok.city">
                    <label for="city" class="sr-only">
                      <span v-html="$t('form.step2.city')"></span>
                      <abbr :title="$t('form.step2.error_empty')">*</abbr>
                    </label>
                    <input type="text" class="form-control"
                      :placeholder="$t('form.step2.city')"
                      :title="$t('form.step2.city_ex')"
                      name="city" id="city" ref="city"
                      v-model="form.city" required
                      @focusout="check('city')"
                    >
                  </div>

                  <!-- Country -->
                  <div class="form-group country col-xs-12">
                    <div class="input-group">
                      <label for="country" class="sr-only">
                        <span v-html="$t('form.step2.country')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-map-marker fa-fw fa-lg"></i>
                      </span>
                      <select class="form-control"
                        id="country" name="country" ref="country"
                        v-model="form.country">
                        <option v-for="country, key in $root.country"
                          :value="key">
                          {{ country }}
                        </option>
                      </select>
                    </div>
                  </div>
                  <input type="hidden" name="montant" id="montant"
                    value="10" v-model="form.don">

                  <!-- French defisc -->
                  <div id="defiscalise">
                    <p v-if="/(FR|GP|GF|RE|MQ|YT|NC|PF|PM|WF)/.test(form.country)">
                      <span v-html="$t('form.step3.defisc_text[0]')"></span>
                      <span>{{ form.defisc }} %</span>
                      <span v-html="$t('form.step3.defisc_text[1]')"></span>
                      <b>{{ EUR(form.don) }}</b>
                      <span v-html="$t('form.step3.defisc_text[2]')"></span>
                      <b>{{ EUR(+(Math.round(form.don - form.don * form.defisc / 100 + 'e+2') + 'e-2')) }}</b>
                      <b v-html="$t('form.step3.defisc_text[3]')" v-if="form.monthly"></b>.
                      <popover tag="span"
                        placement="left" trigger="hover-focus"
                        :title="$t('form.step3.defisc_title')"
                      >
                        <a href="https://soutenir.framasoft.org/defiscalisation" target="_blank">
                          <i class="fa fa-fw fa-lg fa-question-circle text-muted" aria-hidden="true"></i>
                          <span class="sr-only" v-html="$t('form.step3.defisc')"></span>
                        </a>
                        <template slot="popover">
                          <div v-html="$t('form.step3.defisc_tip')"></div>
                        </template>
                      </popover>
                    </p>
                  </div>
                </div>
              </div>

              <!-- Step 3 ------------------------------------------------------->
              <div class="clearfix" id="payment">
                <h3 class="blocLarge" v-html="$t('form.step3.title')"></h3>
                <!-- Payment mode -->
                <div class="row">
                  <div class="col-xs-12 col-sm-3 col-md-6">
                    <label :class="'btn btn-default' + (form.pay_mode === 'cb' ? ' active' : '')"
                      id="pay_cb"
                      @click="form.pay_mode='cb'">
                      <input type="radio" id="pay_mode" name="pay_mode"
                        autocomplete="off" class="sr-only"
                        v-model="form.pay_mode" value="cb">
                      <i class="fa fa-lg fa-credit-card" aria-hidden="true"></i><br>
                      <span v-html="$t('form.step3.cb')"></span>
                    </label>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-6">
                    <label :class="'btn btn-default' + (form.pay_mode === 'pp' ? ' active' : '')"
                      id="pay_pp"
                      @click="form.pay_mode='pp'">
                      <input type="radio" id="pay_mode" name="pay_mode"
                        autocomplete="off" class="sr-only"
                        v-model="form.pay_mode" value="pp">
                      <i class="fa fa-lg fa-paypal" aria-hidden="true"></i><br>
                      <span v-html="$t('form.step3.pp')"></span>
                    </label>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-6">
                    <label :class="'btn btn-default' + (form.pay_mode === 'vir' ? ' active' : '')"
                      id="pay_vir"
                      @click="form.pay_mode='vir'">
                      <input type="radio" id="pay_mode" name="pay_mode"
                        autocomplete="off" class="sr-only"
                        v-model="form.pay_mode" value="vir">
                      <i class="fa fa-lg fa-building-o" aria-hidden="true"></i><br>
                      <span v-html="$t('form.step3.vir')"></span>
                    </label>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-6">
                    <label :class="'btn btn-default' + (form.pay_mode === 'chq' ? ' active' : '')"
                      id="pay_chq"
                      @click="form.pay_mode='chq'">
                      <input type="radio" id="pay_mode" name="pay_mode"
                        autocomplete="off" class="sr-only"
                        v-model="form.pay_mode" value="chq">
                      <i class="fa fa-lg fa-file-archive-o fa-rotate-90" aria-hidden="true"></i><br>
                      <span v-html="$t('form.step3.chq')"></span>
                    </label>
                  </div>

                </div>

                <!-- Donate -->
                <p class="text-center">
                  <button id="btnVerif" name="submit" value=""
                    class="btn btn-lg">
                    <span style="font-size: 22px;" v-html="$t('form.step3.i_give')"></span><br>
                    {{ EUR(form.don) }}
                    <span v-html="form.monthly ? $t('form.step3.monthly') : $t('form.step3.now')"></span>
                  </button>
                </p>
              </div>
            </form>

            <div class="clearfix help-block">
              <i class="fa fa-question-circle pull-left" style="font-size: 70px; height: 70px;"></i>
              <h4 class="sr-only" v-html="$t('form.ask.title')"></h4>
              <ul class="small list-unstyled">
                <li v-html="$t('form.ask.stop')" v-if="form.monthly"></li>
                <li v-html="$t('form.ask.edit')" v-if="form.monthly"></li>
                <li v-html="$t('form.ask.send')" v-if="/(FR|GP|GF|RE|MQ|YT|NC|PF|PM|WF)/.test(form.country)"></li>
                <li v-html="$t('form.ask.moral')"></li>
                <li v-html="$t('form.ask.other')"></li>
              </ul>
            </div>
          </div>

          <modal
            id="modalVir"
            v-model="modal.openVir"
            :class="'modal fade' + (form.monthly ? ' monthly' : '')"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modalVirLabel"
            aria-hidden="true"
          >
            <div slot="header">
              <button type="button" class="close" @click="modal.openVir = false;">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only" v-html="$t('txt.close')"></span>
              </button>
              <h1 class="modal-title fc_light" id="modalChqLabel">
              <span v-html="$t('form.step3.i_give')"></span> {{ EUR(form.don) }}
              <span v-html="$t('form.step3.monthly')" v-if="form.monthly"></span>
              <span v-html="$t('form.step3.modal_vir.by')"></span>
              </h1>
            </div>

            <p v-html="$t('form.step3.coord')"></p>
            <p>
              <span v-html="$t('form.step3.email_send[0]')"></span>
              {{ form.email }}
              <span v-html="$t('form.step3.email_send[1]')"></span>
            </p>
            <p v-html="$t('form.step3.modal_vir.no_sepa')"></p>
            <p v-html="$t('form.step3.modal_vir.to_finish')"></p>
            <cite class="alert alert-success">
              Titulaire : Framasoft  <br>
              Domiciliation : CCM LYON GAMBETTA, 52 COURS GAMBETTA, 69007 LYON<br>
              RIB : 10278 07346 00020495901 82  <br>
              IBAN : FR76 1027 8073 4600 0204 9590 182  <br>
              BIC : CMCIFR2A <br>
            </cite>
            <p v-html="$t('form.step3.modal_vir.ref')">
            </p>
            <cite class="alert alert-success">{{ form.pay_ref }}</cite>
            <p v-html="$t('form.step3.modal_vir.to_bank')"></p>

            <div slot="footer">
              <button
                class="btn btn-default"
                @click="modal.openVir = false; thankYou();"
                v-html="$t('form.step3.ok')">
              </button>
            </div>
          </modal>

          <modal
            id="modalChq"
            v-model="modal.openChq"
            class="modal fade"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modalChqLabel"
            aria-hidden="true"
          >
            <div slot="header">
              <button type="button" class="close" @click="modal.openChq = false;">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only" v-html="$t('txt.close')"></span>
              </button>
              <h1 class="modal-title fc_light" id="modalChqLabel">
              <span v-html="$t('form.step3.i_give')"></span> <span v-html="EUR(form.don)"></span>
              <span v-html="$t('form.step3.modal_chq.by')"></span>
              </h1>
            </div>

            <p v-html="$t('form.step3.coord')"></p>
            <p>
              <span v-html="$t('form.step3.email_send[0]')"></span>
              {{ form.email }}
              <span v-html="$t('form.step3.email_send[1]')"></span>
            </p>
            <p v-html="$t('form.step3.modal_chq.to_finish')"></p>
            <cite class="alert alert-success">{{ form.pay_ref }}</cite>
            <p v-html="$t('form.step3.modal_chq.to_post')"></p>
            <cite class="alert alert-success">
              Association Framasoft<br>
              Locaux Motiv<br>
              10 bis, rue Jangot<br>
              69007 LYON
            </cite>

            <div slot="footer">
              <button
                class="btn btn-default"
                @click="modal.openChq = false; thankYou();"
                v-html="$t('form.step3.ok')">
              </button>
            </div>
          </modal>
        </div>
      </div>
    </section>
  </main>
</template>

<script>
import { Modal, Popover, Tooltip, Tabs, Tab, Collapse } from 'uiv';
import { Carousel3d, Slide } from 'vue-carousel-3d';
import Carousel from '../partials/Carousel.vue';
import I18n from '../partials/I18n.vue';

export default {
  components: {
    I18n,
    Modal,
    Carousel,
    Collapse,
    Popover,
    Tooltip,
    Tabs,
    Tab,
    Carousel3d,
    Slide
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
      donators: 0,
      form: {
        don: 10,
        monthly: true,
        otherM: '',
        other1: '',
        society: false,
        defisc: 66,
        lastname: '',
        firstname: '',
        email: '',
        address1: '',
        address2: '',
        zip: '',
        city: '',
        country: 'FR',
        pay_mode: 'cb',
        pay_ref: this.randomRef(),
        pay_send: '',
        ok: {
          don: '',
          lastname: '',
          firstname: '',
          email: '',
          address1: '',
          zip: '',
          city: '',
        },
      },
      modal: {
        openVir: false,
        openChq: false,
        openPT: false,
        openTL: false,
      },
      vcf: {
        coverList: [
          {
            cover: `${this.$root['/']}img/screens/agenda.png`,
            title: this.$root.txt.agenda,
            id: 'agenda',
          },
          {
            cover: `${this.$root['/']}img/screens/memo.png`,
            title: this.$root.txt.memo,
            id: 'memo',
          },
          {
            cover: `${this.$root['/']}img/screens/date.png`,
            title: this.$root.txt.date,
            id: 'date',
          },
          {
            cover: `${this.$root['/']}img/screens/forms.png`,
            title: this.$root.txt.forms,
            id: 'forms',
          },
          {
            cover: `${this.$root['/']}img/screens/drop.png`,
            title: this.$root.txt.drop,
            id: 'drop',
          },
        ],
        index: 0,
      },
      showAccordion: [...Array(this.$t('why.reasons.list').length).keys()].map(i => (i < 1)),
    }
  },
  mounted() {
    window.addEventListener('resize', this.coverflowSize);
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
    onAfterSlideChange(index) {
      this.vcf.index = index;
    },
    EUR(number) {
      return new Intl
        .NumberFormat(this.$i18n.locale, { style: 'currency', currency: 'EUR', minimumSignificantDigits: 1 })
        .format(number);
    },
    randomRef() {
      const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      let randomstring = '';
      for (var i = 0; i < 2; i++) {
          var rnum = Math.floor(Math.random() * chars.length);
          randomstring += chars.substring(rnum, rnum + 1);
      }

      return randomstring+Math.trunc((new Date).getTime()/1000);
    },
    fillForm() {
      this.form.lastname = 'De Bergerac';
      this.form.firstname= 'Cyrano';
      this.form.email= 'no-reply@framasoft.org';
      this.form.address1= 'Forteresse de Crystal';
      this.form.zip= '1655';
      this.form.city= 'Lune';
      this.form.country= 'FR';
    },
    check(input) {
      switch (input) {
        case 'otherM':
          this.form.don = this.form.otherM !== ''
            ? this.form.otherM
            : 10;
          this.form.monthly = true;
          this.form.other1 = '';
          break;
        case 'other1':
          this.form.don = this.form.other1 !== ''
            ? this.form.other1
            : 50;
          this.form.otherM = '';
          break;
        case 'email':
          const email = document.getElementById('email');
          if (email.validity.valueMissing) {
            this.form.ok.email = ' has-error';
            email.setCustomValidity(this.$i18n.messages[this.$i18n.locale].form.step2.error_empty);
          } else if (email.validity.typeMismatch) {
            this.form.ok.email = ' has-error';
            email.setCustomValidity(this.$i18n.messages[this.$i18n.locale].form.step2.error_email);
          } else {
            this.form.ok.email = ' has-success';
            email.setCustomValidity('');
          }
          break;
        default:
          const el = document.getElementById(input);
          if (el.validity.valueMissing) {
            this.form.ok[input] = ' has-error';
            el.setCustomValidity(this.$i18n.messages[this.$i18n.locale].form.step2.error_empty);
          } else {
            this.form.ok[input] = ' has-success';
            el.setCustomValidity('');
          }
          break;
      }
    },
    addFormField(form, key, value) {
      const hiddenField = document.createElement("input");
      hiddenField.setAttribute("type", "hidden");
      hiddenField.setAttribute("name", key);
      hiddenField.setAttribute("value", value);

      form.appendChild(hiddenField);
    },
    payRedirection(e) {
      switch(this.form.pay_mode) {
        // TPE Monetico / CM-CIC
        case 'cb':
          const form = document.createElement("form");
          form.setAttribute('method', 'POST');
          form.setAttribute('action', `https://soutenir.framasoft.org/monetico/before_paiement_${(this.form.monthly ? '2828134' : '2828136')}.php`);

          this.addFormField(form, 'nom', this.form.lastname);
          this.addFormField(form, 'prenom', this.form.firstname);
          this.addFormField(form, 'mail', this.form.email);
          this.addFormField(form, 'adresse1', this.form.address1);
          this.addFormField(form, 'adresse2', this.form.address2);
          this.addFormField(form, 'ville', this.form.city);
          this.addFormField(form, 'cp', this.form.zip);
          this.addFormField(form, 'pays', this.$root.country[this.form.country]);
          this.addFormField(form, 'montant', this.form.don);

          document.body.appendChild(form);
          form.submit();
          break;
        // Paypal
        case 'pp':
          const url = [
            'https://www.paypal.com/cgi-bin/webscr?'
          ];
          if (this.form.monthly) {
            url.push(
              'cmd=_xclick-subscriptions',
              `&item_name=${encodeURIComponent('Framasoft (don récurrent mensuel)')}`,
              `&a3=${this.form.don}`,
              '&p3=1',
              '&t3=M',
              '&src=1',
              '&no_note=1',
              '&no_shipping=1',
            );
          } else {
            url.push(
              'cmd=_donations',
              `&amount=${this.form.don}`,
              `&item_name=${encodeURIComponent('Framasoft (don ponctuel)')}`,
            );
          }
          url.push(
            '&business=6HSVUPKRDAGC2', // Framasoft Paypal ID
            `&return=${encodeURIComponent('https://soutenir.framasoft.org/' + this.$t('lang') + '/merci')}`,
            '&currency_code=EUR',
            '&address_override=1', // Prefill Paypal’s form
            '&charset=utf-8',
            `&last_name=${encodeURIComponent(this.form.lastname)}`,
            `&first_name=${encodeURIComponent(this.form.firstname)}`,
            `&email=${encodeURIComponent(this.form.email)}`,
            `&address1=${encodeURIComponent(this.form.address1)}`,
            `&address2=${encodeURIComponent(this.form.address2)}`,
            `&zip=${encodeURIComponent(this.form.zip)}`,
            `&city=${encodeURIComponent(this.form.city)}`,
            `&country=${this.form.country}`,
          );
          this.form.pay_send = url.join('');
          window.location.href = this.form.pay_send;
          break;
        // Vir + Chq
        default:
          this.form.pay_ref = this.randomRef(); // Donator must copy the ref
          const offPayUrl = [
            'https://soutenir.framasoft.org/offline_paiement.php?payment='
          ];
          if (this.form.pay_mode === 'vir') {
            this.modal.openVir = true;
            offPayUrl.push(this.form.monthly ? encodeURIComponent('Virement mensuel') : encodeURIComponent('Virement'));
          } else {
            this.modal.openChq = true;
            offPayUrl.push(encodeURIComponent('Chèque'));
          }
          offPayUrl.push(
            `&lg=${this.$t('lang')}`,
            `&ref=${this.form.pay_ref}`,
            `&lastname=${encodeURIComponent(this.form.lastname)}`,
            `&firstname=${encodeURIComponent(this.form.firstname)}`,
            `&email=${encodeURIComponent(this.form.email)}`,
            `&address1=${encodeURIComponent(this.form.address1)}`,
            `&address2=${encodeURIComponent(this.form.address2)}`,
            `&zip=${encodeURIComponent(this.form.zip)}`,
            `&city=${encodeURIComponent(this.form.city)}`,
            `&country=${this.$root.country[this.form.country]}`,
            `&amount=${this.form.don}`,
          );
          this.form.pay_send = offPayUrl.join('');
          fetch(this.form.pay_send).catch((err) => {
            console.error(err); // eslint-disable-line
          });
          break;
      }
      e.preventDefault();
    },
    thankYou() {
      window.location.href = 'https://soutenir.framasoft.org/merci';
    },
    toggleAccordion (index) {
      if (this.showAccordion[index]) {
        this.$set(this.showAccordion, index, false)
      } else {
        this.showAccordion = this.showAccordion.map((v, i) => i === index)
      }
    },
  }
}
</script>
