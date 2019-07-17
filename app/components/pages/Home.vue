<template>
  <main>
    <vue-headful
      :title="`${$root.meta.title} - Changer le monde, un octet à la fois.`"
    />
    <intro />

    <more />

    <degooglisons />

    <peertube />

    <contributopia />

    <section id="soutenir" class="clearfix">
      <a id="why"></a>
      <a id="timeline"></a>
      <a id="money"></a>
      <div class="container">
        <div class="col-md-5">
          <h2 v-html="$t('home.soutenir.title')"></h2>
          <p class="text-center fc_g4" aria-hidden="true">
            <i class="fa fa-5x fa-heart" style="font-size: 150px; margin: 30px;"></i>
          </p>
          <p v-html="$t('home.soutenir.text')"></p>
          <p>
            <a href="#why" v-html="$t('home.soutenir.why')"></a>
            <br>
            <a href="#money" v-html="$t('home.soutenir.money')"></a>
            <br>
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
              <div
                v-for="(reason, index) in $t('why.reasons.list')"
                :key="index"
                class="panel panel-default"
                :style="(index === 3 && $t('lang') !== 'fr') ? 'display : none' : ''">
                <div class="panel-heading" role="button" @click="toggleAccordion(index)">
                  <h4 class="panel-title" v-html="$t(`why.reasons.list[${index}]`)"></h4>
                </div>
                <collapse v-model="showAccordion[index]">
                  <div class="panel-body">
                    <p v-html="$t(`why.reasons.desc[${index}]`)"></p>
                  </div>
                </collapse>
              </div>
            </div>
          </div>

          <div class="money">
            <h3 class="blocLarge" v-html="$t('why.money.title')"></h3>
            <div class="panel panel-default">
              <Chart />
            </div>
          </div>

          <modal
            id="modalTL"
            v-model="modal.openTL"
            class="modal fade"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modalTLLabel"
            aria-hidden="true"
            size="lg">
            <div slot="header">
              <button type="button" class="close" @click="modal.openTL = false;">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only" v-html="$t('txt.close')"></span>
              </button>
              <h1 id="modalTLLabel"
                class="modal-title"
                v-html="$t('why.timeline.title')">
              </h1>
            </div>

            <div class="embed-responsive embed-responsive-4by3">
              <iframe
                class="embed-responsive-item"
                height="600"
                :src="`${$root.link.dio}/${$route.meta.lang}/timeline`">
              </iframe>
            </div>
            <div slot="footer"><!-- Keep empty --></div>
          </modal>
        </div>

        <div :class="`col-md-7 ${form.monthly ? 'monthly' : 'onetime' }`">
          <div class="ombre">
            <form id="form_don"
              role="form"
              class="clearfix"
              action="#"
              @submit="payRedirection">
              <!-- Step 1 ------------------------------------------------------->
              <div id="howmuch" class="clearfix">
                <h3 class="blocLarge" v-html="$t('form.step1.title')"></h3>
                <div class="row">
                  <div class="btn-group" data-toggle="buttons">
                    <label
                      :class="`btn btn-lg text-uppercase${(!form.monthly ? ' active' : '')}`"
                      @click="form.monthly=false; form.don=50;">
                      <input
                        v-model="form.monthly"
                        type="radio"
                        autocomplete="off"
                        :value="false">
                      <i class="fa fa-fw fa-ticket" aria-hidden="true"></i>
                      <span v-html="$t('form.step1.oneshot')"></span>
                    </label>
                    <label
                      :class="`btn btn-lg text-uppercase${(form.monthly ? ' active' : '')}`"
                      @click="form.monthly=true; form.don=10;">
                      <input
                        v-model="form.monthly"
                        type="radio"
                        autocomplete="off"
                        :value="true">
                      <i class="fa fa-fw fa-refresh" aria-hidden="true"></i>
                      <span v-html="$t('form.step1.monthly')"></span>
                    </label>
                  </div>
                  <div v-if="form.monthly">
                    <!-- Monthly -->
                    <div class="amount">
                      <div
                        v-for="money in [5, 10, 25, 50]"
                        :key="money"
                        class="col-sm-4 col-xs-6">
                        <button
                          type="button"
                          :class="`btn${(form.don === money && form.monthly ? ' selected' : '')}`"
                          :value="money"
                          @click="form.don = money; form.otherM = form.other1 = ''"
                          v-text="$n(money, 'eur')">
                        </button>
                      </div>
                      <div class="col-sm-8 col-xs-12">
                        <div :class="`input-group${([5, 10, 25, 50].indexOf(form.don) < 0 ? ' selected' : '')}`">
                          <label for="otherM"
                            class="sr-only"
                            v-html="$t('form.step1.other')">
                          </label>
                          <span class="input-group-addon">€</span>
                          <input id="otherM"
                            v-model.number="form.otherM"
                            type="number"
                            :placeholder="`${$t('form.step1.other')} (${$t('form.step1.monthly_ex')})`"
                            step="0.01" min="1" max="100000"
                            @change="check('otherM')">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div v-else>
                    <!-- One time -->
                    <div class="amount">
                      <div
                        v-for="money in [30, 50, 75, 100]"
                        :key="money"
                        class="col-sm-4 col-xs-6">
                        <button
                          type="button"
                          :class="`btn${(form.don === money && !form.monthly ? ' selected' : '')}`"
                          :value="money"
                          @click="form.don = money; form.otherM = form.other1 = '';"
                          v-text="$n(money, 'eur')">
                        </button>
                      </div>
                      <div class="col-sm-8 col-xs-12">
                        <div :class="`input-group${([30, 50, 75, 100].indexOf(form.don) < 0 ? ' selected' : '')}`">
                          <label for="other1"
                            class="sr-only"
                            v-html="$t('form.step1.other')">
                          </label>
                          <span class="input-group-addon">€</span>
                          <input id="other1"
                            v-model.number="form.other1"
                            :placeholder="`${$t('form.step1.other')} (${$t('form.step1.oneshot_ex')})`"
                            type="number"
                            step="0.01" min="1" max="100000"
                            @change="check('other1')">
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
                  <popover
                    tag="small"
                    placement="left"
                    trigger="hover-focus"
                    :title="$t('form.step2.private')">
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
                        <input id="particulier"
                          v-model="form.society"
                          type="radio"
                          autocomplete="off"
                          :value="false">
                        <i class="fa fa-fw fa-lg fa-user" aria-hidden="true"></i>
                        <span v-html="$t('form.step2.part')"></span>
                      </label>
                      <label
                        :class="`btn btn-lg text-uppercase${(form.society ? ' active' : '')}`"
                        style="cursor: help"
                        :title="$t('form.step2.corp_tip')"
                        @click="form.defisc = 60; form.firstname = ' '; form.society=true">
                        <input id="societe"
                          v-model="form.society"
                          type="radio"
                          autocomplete="off"
                          :value="true">
                        <i class="fa fa-fw fa-lg fa-institution" aria-hidden="true"></i>
                        <span v-html="$t('form.step2.corp')"></span>
                      </label>
                    </div>
                    <p
                      id="partenariat"
                      v-show="form.society"
                      class="help-block col-xs-12"
                      v-html="$t('form.step2.mecenat')">
                    </p>
                  </div>

                  <!-- Email -->
                  <div :class="`form-group email col-xs-12${form.ok.email}`">
                    <div class="input-group">
                      <label for="email" class="sr-only">
                        <span v-html="$t('form.step2.email')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-envelope-o fa-fw fa-lg"></i>
                      </span>
                      <input
                        id="email"
                        ref="email"
                        v-model="form.email"
                        type="email"
                        class="form-control"
                        :placeholder="$t('form.step2.email')"
                        :title="form.society ? $t('form.step2.society_email_ex') : $t('form.step2.email_ex')"
                        required
                        @focusout="check('email')">
                    </div>
                  </div>

                  <!-- Lastname -->
                  <div v-if="!form.society"
                    :class="`form-group lastname col-xs-6${form.ok.lastname}`">
                    <div class="input-group">
                      <label for="lastname" class="sr-only">
                        <span v-html="$t('form.step2.lastname')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-user fa-fw fa-lg"></i>
                      </span>
                      <input
                        id="lastname"
                        ref="lastname"
                        v-model="form.lastname"
                        type="text"
                        class="form-control"
                        :placeholder="$t('form.step2.lastname')"
                        :title="$t('form.step2.lastname_ex')"
                        required
                        @focusout="check('lastname')">
                    </div>
                  </div>
                   <!-- Society -->
                  <div v-else
                    :class="`form-group lastname col-xs-6${form.ok.lastname}`">
                    <div class="input-group">
                      <label for="lastname" class="sr-only">
                        <span v-html="$t('form.step2.society')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-institution fa-fw fa-lg"></i>
                      </span>
                      <input
                        id="lastname"
                        ref="lastname"
                        v-model="form.lastname"
                        type="text"
                        class="form-control"
                        :placeholder="$t('form.step2.society')"
                        :title="$t('form.step2.society_ex')"
                        required
                        @focusout="check('lastname')">
                    </div>
                  </div>

                  <!-- Firstname -->
                  <div v-show="!form.society" :class="'form-group firstname col-xs-6' + form.ok.firstname">
                    <label for="firstname" class="sr-only">
                      <span v-html="$t('form.step2.firstname')"></span>
                      <abbr :title="$t('form.step2.error_empty')">*</abbr>
                    </label>
                    <input
                      id="firstname"
                      ref="firstname"
                      v-model="form.firstname"
                      type="text"
                      class="form-control"
                      :title="$t('form.step2.firstname_ex')"
                      :placeholder="$t('form.step2.firstname')"
                      required
                      @focusout="check('firstname')">
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
                      <input
                        id="address1"
                        ref="address1"
                        v-model="form.address1"
                        type="text"
                        class="form-control"
                        :placeholder="$t('form.step2.address1')"
                        :title="$t('form.step2.address1_ex')"
                        required
                        @focusout="check('address1')">
                    </div>
                  </div>

                  <div class="form-group address2 col-xs-12">
                    <div class="input-group">
                      <label for="address2" class="sr-only" v-html="$t('form.step2.address2')"></label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-map-marker fa-fw fa-lg"></i>
                      </span>
                      <input
                        id="address2"
                        ref="address2"
                        v-model="form.address2"
                        type="text"
                        class="form-control"
                        :placeholder="$t('form.step2.address2')"
                        :title="$t('form.step2.address2_ex')">
                    </div>
                  </div>

                  <!-- Zip -->
                  <div :class="`form-group zip col-xs-6${form.ok.zip}`">
                    <div class="input-group">
                      <label for="zip" class="sr-only">
                        <span v-html="$t('form.step2.zip')"></span>
                        <abbr :title="$t('form.step2.error_empty')">*</abbr>
                      </label>
                      <span class="input-group-addon" aria-hidden="true">
                        <i class="fa fa-map-marker fa-fw fa-lg"></i>
                      </span>
                      <input
                        id="zip"
                        ref="zip"
                        v-model="form.zip"
                        type="text"
                        class="form-control"
                        :placeholder="$t('form.step2.zip')"
                        :title="$t('form.step2.zip_ex')"
                        required
                        @focusout="check('zip')">
                    </div>
                  </div>

                  <!-- City -->
                  <div :class="`form-group city col-xs-6${form.ok.city}`">
                    <label for="city" class="sr-only">
                      <span v-html="$t('form.step2.city')"></span>
                      <abbr :title="$t('form.step2.error_empty')">*</abbr>
                    </label>
                    <input
                      id="city"
                      ref="city"
                      v-model="form.city"
                      type="text"
                      class="form-control"
                      :placeholder="$t('form.step2.city')"
                      :title="$t('form.step2.city_ex')"
                      required
                      @focusout="check('city')">
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
                      <select
                        id="country"
                        ref="country"
                        v-model="form.country"
                        class="form-control">
                        <option v-for="(country, key) in $root.country"
                          :key="key"
                          :value="key"
                          v-text="country">
                        </option>
                      </select>
                    </div>
                  </div>
                  <input
                    id="montant"
                    v-model="form.don"
                    type="hidden"
                    value="10">

                  <!-- French defisc -->
                  <div id="defiscalise">
                    <p v-if="/(FR|GP|GF|RE|MQ|YT|NC|PF|PM|WF)/.test(form.country)">
                      <span v-html="$t('form.step3.defisc_text[0]')"></span>
                      <span v-text="`${form.defisc} %`"></span>
                      <span v-html="$t('form.step3.defisc_text[1]')"></span>
                      <b v-text="$n(form.don, 'eur')"></b>
                      <span v-html="$t('form.step3.defisc_text[2]')"></span>
                      <b v-text="$n((form.don - form.don * form.defisc / 100), 'eur')"></b>
                      <b v-if="form.monthly" v-html="$t('form.step3.defisc_text[3]')"></b>.
                      <popover
                        tag="span"
                        placement="left"
                        trigger="hover-focus"
                        :title="$t('form.step3.defisc_title')">
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
              <div id="payment" class="clearfix">
                <h3 class="blocLarge" v-html="$t('form.step3.title')"></h3>
                <!-- Payment mode -->
                <div class="row">
                  <div class="col-xs-12 col-sm-3 col-md-6">
                    <label
                      id="pay_cb"
                      :class="`btn btn-default${(form.pay_mode === 'cb' ? ' active' : '')}`"
                      @click="form.pay_mode='cb'">
                      <input
                        id="pay_mode"
                        v-model="form.pay_mode"
                        type="radio"
                        autocomplete="off"
                        class="sr-only"
                        value="cb">
                      <i class="fa fa-lg fa-credit-card" aria-hidden="true"></i>
                      <br>
                      <span v-html="$t('form.step3.cb')"></span>
                    </label>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-6">
                    <label
                      id="pay_pp"
                      :class="`btn btn-default${(form.pay_mode === 'pp' ? ' active' : '')}`"
                      @click="form.pay_mode='pp'">
                      <input
                        id="pay_mode"
                        v-model="form.pay_mode"
                        type="radio"
                        autocomplete="off"
                        class="sr-only"
                        value="pp">
                      <i class="fa fa-lg fa-paypal" aria-hidden="true"></i><br>
                      <span v-html="$t('form.step3.pp')"></span>
                    </label>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-6">
                    <label
                      id="pay_vir"
                      :class="`btn btn-default${(form.pay_mode === 'vir' ? ' active' : '')}`"
                      @click="form.pay_mode='vir'">
                      <input
                        id="pay_mode"
                        v-model="form.pay_mode"
                        type="radio"
                        autocomplete="off"
                        class="sr-only"
                        value="vir">
                      <i class="fa fa-lg fa-building-o" aria-hidden="true"></i><br>
                      <span v-html="$t('form.step3.vir')"></span>
                    </label>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-6">
                    <label
                      id="pay_chq"
                      :class="`btn btn-default${(form.pay_mode === 'chq' ? ' active' : '')}`"
                      @click="form.pay_mode='chq'">
                      <input
                        id="pay_mode"
                        v-model="form.pay_mode"
                        type="radio"
                        autocomplete="off"
                        class="sr-only"
                        value="chq">
                      <i class="fa fa-lg fa-file-archive-o fa-rotate-90" aria-hidden="true"></i><br>
                      <span v-html="$t('form.step3.chq')"></span>
                    </label>
                  </div>

                </div>

                <!-- Donate -->
                <p class="text-center">
                  <button id="btnVerif" value=""
                    class="btn btn-lg">
                    <span style="font-size: 22px;" v-html="$t('form.step3.i_give')"></span><br>
                    <span v-text="$n(form.don, 'eur')"></span>
                    <span v-html="form.monthly ? $t('form.step3.monthly') : $t('form.step3.now')"></span>
                  </button>
                </p>
              </div>
            </form>

            <div class="clearfix help-block">
              <i class="fa fa-question-circle pull-left" style="font-size: 70px; height: 70px;"></i>
              <h4 class="sr-only" v-html="$t('form.ask.title')"></h4>
              <ul class="small list-unstyled">
                <li v-if="form.monthly" v-html="$t('form.ask.stop')"></li>
                <li v-if="form.monthly" v-html="$t('form.ask.edit')"></li>
                <li v-if="/(FR|GP|GF|RE|MQ|YT|NC|PF|PM|WF)/.test(form.country)" v-html="$t('form.ask.send')"></li>
                <li v-html="$t('form.ask.moral')"></li>
                <li v-html="$t('form.ask.other')"></li>
              </ul>
            </div>
          </div>

          <modal
            id="modalVir"
            v-model="modal.openVir"
            :class="`modal fade${(form.monthly ? ' monthly' : '')}`"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modalVirLabel"
            aria-hidden="true">
            <div slot="header">
              <button type="button" class="close" @click="modal.openVir = false;">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only" v-html="$t('txt.close')"></span>
              </button>
              <h1 id="modalChqLabel" class="modal-title fc_light">
                <span v-html="$t('form.step3.i_give')"></span>
                <span v-text="$n(form.don, 'eur')"></span>
                <span v-if="form.monthly" v-html="$t('form.step3.monthly')"></span>
                <span v-html="$t('form.step3.modal_vir.by')"></span>
              </h1>
            </div>

            <p v-html="$t('form.step3.coord')"></p>
            <p>
              <span v-html="$t('form.step3.email_send[0]')"></span>
              <span v-text="form.email"></span>
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
            <cite class="alert alert-success" v-text="form.pay_ref"></cite>
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
            aria-hidden="true">
            <div slot="header">
              <button type="button" class="close" @click="modal.openChq = false;">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only" v-html="$t('txt.close')"></span>
              </button>
              <h1 id="modalChqLabel" class="modal-title fc_light">
                <span v-html="$t('form.step3.i_give')"></span>
                <span v-text="$n(form.don, 'eur')"></span>
                <span v-html="$t('form.step3.modal_chq.by')"></span>
              </h1>
            </div>

            <p v-html="$t('form.step3.coord')"></p>
            <p>
              <span v-html="$t('form.step3.email_send[0]')"></span>
              <span v-text="form.email"></span>
              <span v-html="$t('form.step3.email_send[1]')"></span>
            </p>
            <p v-html="$t('form.step3.modal_chq.to_finish')"></p>
            <cite class="alert alert-success" v-text="form.pay_ref"></cite>
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
import { Modal, Popover, Tooltip, Collapse } from 'uiv';

import Intro from './home/Intro.vue';
import More from './home/More.vue';
import Degooglisons from './home/Degooglisons.vue';
import Peertube from './home/Peertube.vue';
import Contributopia from './home/Contributopia.vue';

import Chart from '../partials/Chart.vue';

export default {
  components: {
    Modal,
    Collapse,
    Popover,
    Tooltip,

    Chart,

    Intro,
    More,
    Degooglisons,
    Peertube,
    Contributopia,
  },
  data() {
    return {
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
        openTL: false,
      },
      showAccordion: [...Array(this.$t('why.reasons.list').length).keys()].map(i => (i < 1)),
    }
  },
  methods: {
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
