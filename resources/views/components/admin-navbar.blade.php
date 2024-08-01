<div class="header-row">
  {{-- admin_panel/favicon.png --}}
  <style>
      .logoClass {
          width: 100%;
      }

      @media only screen and (max-width: 600px) {
          .logoClass {
              width: 100%;
              height: 100%;
          }
      }
  </style>
  <div class="d-table-cell">
      <div class="header-bg">
          <div class="container">
              <div class="header-height d-flex">
                  <div class="header-height d-flex p-rel order-1">
                      <a href="/"
                          class="header-height header-logo d-flex align-items-center focus-outline focus-outline-minus-2 active">
                          <img src="{{ URL::to('admin_panel/favicon.png') }}" class="logoClass" />
                      </a>
                  </div>
                  <div class="header-height d-none d-xl-flex desktop-menu flex-grow-1 order-2">
                      {{-- router-link-exact-active active --}}
                      <a href="/insights" wire:navigate
                          class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap
                              @if ($page == 'Insights') router-link-exact-active active @endif"
                          data-qa="dashboard-menu-insights">
                          <span class="d-flex align-items-center">
                              <span>Insights</span>
                          </span>
                      </a>
                      <a href="/donations" wire:navigate
                          class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap
                              @if ($page == 'Donations') router-link-exact-active active @endif"
                          data-qa="dashboard-menu-donations">
                          <span class="d-flex align-items-center">
                              <span>Donations</span>
                          </span>
                      </a>
                      <a href="/campaigns" wire:navigate
                          class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap
                              @if ($page == 'Campaigns') router-link-exact-active active @endif"
                          data-qa="dashboard-menu-campaigns">
                          <span class="d-flex align-items-center">
                              <span>Campaigns</span>
                          </span>
                      </a>
                      @if (auth()->user()->roles == App\Enums\Roles::SUPERADMIN->value &&
                              auth()->user()->roles == App\Enums\Roles::SUPERADMIN->value)
                          <a href="/account/dashboard" wire:navigate
                              class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap
                              @if ($page == 'Accounts') router-link-exact-active active @endif"
                              data-qa="dashboard-menu-campaigns">
                              <span class="d-flex align-items-center">
                                  <span>Accounts</span>
                              </span>
                          </a>
                      @endif
                  </div>
                  <div
                      class="header-height d-flex align-items-sm-center justify-content-end flex-grow-1 pl-xl-6 order-3">
                      <div data-v-573178ac="" data-qa="global-search"
                          class="c-global-search d-flex align-items-center">
                          <button data-v-573178ac="" type="button"
                              class="btn-reset-default d-none d-sm-flex align-items-center border-radius-base bg-transparent-hover-gray-100 text-gray-60 py-2 pl-2 pr-2-5 focus-outline"
                              data-original-title="Press
                                    <div class='tooltip-icon-slash'>/</div> to search"
                              title="">
                              <span data-v-573178ac="" class="icon-slot flex-shrink-0 mr-1-5 icon-slot-18">
                                  <span class="p-abs centered font-size-18">
                                      <svg data-v-573178ac="" svg-inline="" focusable="false" role="presentation"
                                          xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"
                                          stroke-linecap="round" stroke-linejoin="round" class="icon-stroke d-block">
                                          <circle data-v-573178ac="" cx="11" cy="11" r="8"></circle>
                                          <line data-v-573178ac="" x1="21" y1="21" x2="16.65"
                                              y2="16.65"></line>
                                      </svg>
                                  </span>
                              </span>
                              <span data-v-573178ac="" class="min-w-0">Search</span>
                          </button>
                          <button data-v-573178ac="" type="button"
                              class="btn-reset-default d-sm-none d-flex header-link focus-outline bg-transparent-hover-gray-100 text-gray-60 border-radius-base"
                              style="padding:11px">
                              <span data-v-573178ac="" class="icon-slot flex-shrink-0 line-height-18 icon-slot-18">
                                  <span class="p-abs centered font-size-18">
                                      <svg data-v-573178ac="" svg-inline="" focusable="false" role="presentation"
                                          xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"
                                          stroke-linecap="round" stroke-linejoin="round" class="icon-stroke d-block">
                                          <circle data-v-573178ac="" cx="11" cy="11" r="8">
                                          </circle>
                                          <line data-v-573178ac="" x1="21" y1="21" x2="16.65"
                                              y2="16.65"></line>
                                      </svg>
                                  </span>
                              </span>
                          </button>
                      </div>
                  </div>
                  {{-- <div class="header-height header-dropdown-link d-flex align-items-center order-4 p-rel">
                      <div class="support-hub-dropdown mx-sm-2 min-w-0">
                          <div tabindex="0" data-qa=""
                              class="focus-outline cursor-pointer d-flex align-items-center focus-outline">
                              <div class="header-link-item d-flex align-items-center justify-content-center border-radius-4"
                                  style="padding:11px">
                                  <div class="icon-slot flex-shrink-0 line-height-18 icon-slot-18">
                                      <span class="p-abs centered font-size-18 text-gray-60">
                                          <svg svg-inline="" focusable="false" role="presentation" width="24"
                                              height="24" viewBox="0 0 24 24" fill="none" stroke-width="1.4"
                                              xmlns="http://www.w3.org/2000/svg" class="icon-stroke d-block">
                                              <path
                                                  d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                  stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                              <circle cx="12" cy="17" r=".7" fill="currentColor">
                                              </circle>
                                              <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3" stroke="currentColor"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div data-qa="" class="support-hub-dropdown-menu mr-sm-2" style="display:none">
                              <div class="px-5 py-4">
                                  <a href="https://fundraiseup.com/support/?__hstc=19301799.0d0b7640eb9a55c526b3c39405f6b921.1704535154658.1704535154658.1704535154658.1&amp;__hssc=19301799.5.1704535154658&amp;__hsfp=2295970272"
                                      target="_blank" rel="noopener"
                                      class="d-inline-block font-weight-500 focus-outline mb-1-5">Help center
                                      <span class="icon-slot d-inline-block icon-slot-18">
                                          <span class="p-abs centered font-size-16">
                                              <svg svg-inline="" focusable="false" role="presentation"
                                                  width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  class="icon-stroke icon-stroke-2 d-block">
                                                  <path
                                                      d="M14 4h6m0 0v6m0-6l-7 7M8 6H5.556A1.556 1.556 0 004 7.556v10.889A1.555 1.555 0 005.556 20h10.889A1.555 1.555 0 0018 18.445V16"
                                                      stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                  <path opacity=".72"
                                                      d="M14 4h6m0 0v6m0-6l-7 7M8 6H5.556A1.556 1.556 0 004 7.556v10.888A1.556 1.556 0 005.556 20h10.888A1.556 1.556 0 0018 18.444V16"
                                                      stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                              </svg>
                                          </span>
                                      </span>
                                  </a>
                                  <a href="https://marketplace.fundraiseup.com/?__hstc=19301799.0d0b7640eb9a55c526b3c39405f6b921.1704535154658.1704535154658.1704535154658.1&amp;__hssc=19301799.5.1704535154658&amp;__hsfp=2295970272"
                                      target="_blank" rel="noopener"
                                      class="d-inline-block font-weight-500 focus-outline mb-1-5">Partner
                                      marketplace <span class="icon-slot d-inline-block icon-slot-18">
                                          <span class="p-abs centered font-size-16">
                                              <svg svg-inline="" focusable="false" role="presentation"
                                                  width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  class="icon-stroke icon-stroke-2 d-block">
                                                  <path
                                                      d="M14 4h6m0 0v6m0-6l-7 7M8 6H5.556A1.556 1.556 0 004 7.556v10.889A1.555 1.555 0 005.556 20h10.889A1.555 1.555 0 0018 18.445V16"
                                                      stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                  <path opacity=".72"
                                                      d="M14 4h6m0 0v6m0-6l-7 7M8 6H5.556A1.556 1.556 0 004 7.556v10.888A1.556 1.556 0 005.556 20h10.888A1.556 1.556 0 0018 18.444V16"
                                                      stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                              </svg>
                                          </span>
                                      </span>
                                  </a>
                                  <a href="https://fundraiseup.com/docs/changelog/?__hstc=19301799.0d0b7640eb9a55c526b3c39405f6b921.1704535154658.1704535154658.1704535154658.1&amp;__hssc=19301799.5.1704535154658&amp;__hsfp=2295970272"
                                      target="_blank" rel="noopener"
                                      class="d-inline-block font-weight-500 focus-outline">Product updates <span
                                          class="icon-slot d-inline-block icon-slot-18">
                                          <span class="p-abs centered font-size-16">
                                              <svg svg-inline="" focusable="false" role="presentation"
                                                  width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  class="icon-stroke icon-stroke-2 d-block">
                                                  <path
                                                      d="M14 4h6m0 0v6m0-6l-7 7M8 6H5.556A1.556 1.556 0 004 7.556v10.889A1.555 1.555 0 005.556 20h10.889A1.555 1.555 0 0018 18.445V16"
                                                      stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                  <path opacity=".72"
                                                      d="M14 4h6m0 0v6m0-6l-7 7M8 6H5.556A1.556 1.556 0 004 7.556v10.888A1.556 1.556 0 005.556 20h10.888A1.556 1.556 0 0018 18.444V16"
                                                      stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                              </svg>
                                          </span>
                                      </span>
                                  </a>
                              </div>
                              <hr class="m-0">
                              <div class="px-5 py-4">
                                  <a href="mailto:support@fundraiseup.com"
                                      class="d-inline-block font-weight-500 focus-outline mb-1-5">Email
                                      support</a>
                                  <button type="button"
                                      class="btn-link font-weight-500 focus-outline cta-145504-trigger">Share
                                      feedback</button>
                              </div>
                          </div>
                      </div>
                  </div> --}}


                  <div id="companySelector"
                      class="
                                      header-dropdown-link
                                      d-flex
                                      align-items-stretch
                                      p-rel
                                      min-w-0
                                      order-2 order-xl-5
                                      flex-grow-1 flex-xl-grow-0
                                  ">
                      <div class="company-dropdown d-flex align-items-stretch min-w-0"
                          onclick="handleDropdownNavBar(this)">
                          <div tabindex="0" data-qa="company-menu-button"
                              class="focus-outline cursor-pointer company-dropdown-link d-flex w-100 min-w-0 focus-outline focus-outline-minus-2">
                              <div
                                  class="header-link-item d-flex align-self-center w-100 min-w-0 border-radius-4 pl-1-5 pr-1 py-0-5">
                                  <div class="min-w-0">
                                      <div class="d-flex align-items-center font-size-14 line-height-20">
                                          <div class="text-truncate font-weight-600 mr-0-5 text-white"
                                              data-qa="636a6544cdaf890012d277d6">{{ auth()->user()->account_name }}
                                          </div>
                                          <div>
                                              <svg svg-inline="" focusable="false" role="presentation"
                                                  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"
                                                  class="icon-stroke" id="iconRotate180">
                                                  <polyline points="6 9 12 15 18 9"></polyline>
                                              </svg>
                                          </div>
                                      </div>
                                      <div class="text-truncate font-size-12 line-height-16">
                                          {{ auth()->user()->name }} </div>
                                  </div>
                              </div>
                          </div>
                          <div data-qa="company-dropdown-menu" class="company-dropdown-menu" style="display: none"
                              id="myDIVNavBar">
                              {{-- <ul class="list-unstyled m-0">
                              <li class="company-dropdown-menu-item my-1">
                              <a href="/AHRLVFYF/settings" class="company-dropdown-menu-link focus-outline focus-outline-minus-2" tabindex="0" data-qa="company-settings-link">
                                  <span class="icon-slot flex-shrink-0 mr-2 icon-slot-18">
                                  <span class="p-abs centered font-size-18 ">
                                      <svg svg-inline="" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="icon-stroke d-block">
                                      <circle cx="12" cy="12" r="3"></circle>
                                      <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"></path>
                                      </svg>
                                  </span>
                                  </span>
                                  <span class="min-w-0 text-truncate">Settings</span>
                              </a>
                              </li>
                          </ul> --}}
                              <hr class="my-0">
                              {{-- <div class="scroll-shadow-top">
                              <div class="scroll-shadow-top-bg"></div>
                          </div>
                          <div class="scroll-shadow-box" style="max-height: 240px;">
                              <ul class="list-unstyled m-0">
                              <li class="company-dropdown-menu-item my-1 current">
                                  <a title="UHR Najam Institute Foundation Inc" class="company-dropdown-menu-link focus-outline focus-outline-minus-2" data-qa="636a6544cdaf890012d277d6">
                                  <!---->
                                  <div class="icon-slot flex-shrink-0 mr-2 icon-slot-18">
                                      <span class="p-abs centered font-size-18 ">
                                      <svg svg-inline="" focusable="false" role="presentation" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon d-block">
                                          <rect x="1" y="1" width="22" height="22" rx="11" fill="#fff" stroke="#2BB77B" stroke-width="2"></rect>
                                          <rect x="6" y="6" width="12" height="12" rx="6" fill="#2BB77B"></rect>
                                      </svg>
                                      </span>
                                  </div>
                                  <div class="min-w-0 text-truncate"> UHR Najam Institute Foundation Inc </div>
                                  </a>
                              </li>
                              <li class="company-dropdown-menu-item my-1">
                                  <a title="Old Al Amal International Charity" href="/APYJSGGG" class="company-dropdown-menu-link focus-outline focus-outline-minus-2" data-qa="63ac38e58290070112be4f5c">
                                  <div class="icon-slot flex-shrink-0 icon-slot-12">
                                      <!---->
                                  </div>
                                  <div class="icon-slot flex-shrink-0 mr-2 icon-slot-18">
                                      <span class="p-abs centered font-size-18 ">
                                      <svg svg-inline="" focusable="false" role="presentation" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon d-block">
                                          <rect x=".5" y=".5" width="23" height="23" rx="11.5" fill="#fff" stroke="#A9ABAE"></rect>
                                      </svg>
                                      </span>
                                  </div>
                                  <div class="min-w-0 text-truncate"> Old Al Amal International Charity </div>
                                  </a>
                              </li>
                              <li class="company-dropdown-menu-item my-1">
                                  <a title="Najam Institute Foundation" href="/ANJGXZBD" class="company-dropdown-menu-link focus-outline focus-outline-minus-2" data-qa="63d1e4ee0d1ddd013215c633">
                                  <div class="icon-slot flex-shrink-0 icon-slot-12">
                                      <!---->
                                  </div>
                                  <div class="icon-slot flex-shrink-0 mr-2 icon-slot-18">
                                      <span class="p-abs centered font-size-18 ">
                                      <svg svg-inline="" focusable="false" role="presentation" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon d-block">
                                          <rect x=".5" y=".5" width="23" height="23" rx="11.5" fill="#fff" stroke="#A9ABAE"></rect>
                                      </svg>
                                      </span>
                                  </div>
                                  <div class="min-w-0 text-truncate"> Najam Institute Foundation </div>
                                  </a>
                              </li>
                              <li class="company-dropdown-menu-item my-1">
                                  <a title="Zakat" href="/ARYVBYTG" class="company-dropdown-menu-link focus-outline focus-outline-minus-2" data-qa="642eba4ed9f8ef00e16eb556">
                                  <div class="icon-slot flex-shrink-0 icon-slot-12">
                                      <!---->
                                  </div>
                                  <div class="icon-slot flex-shrink-0 mr-2 icon-slot-18">
                                      <span class="p-abs centered font-size-18 ">
                                      <svg svg-inline="" focusable="false" role="presentation" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon d-block">
                                          <rect x=".5" y=".5" width="23" height="23" rx="11.5" fill="#fff" stroke="#A9ABAE"></rect>
                                      </svg>
                                      </span>
                                  </div>
                                  <div class="min-w-0 text-truncate"> Zakat </div>
                                  </a>
                              </li>
                              <li class="company-dropdown-menu-item my-1">
                                  <a title="Al Amal International Charity" href="/AABMSKWH" class="company-dropdown-menu-link focus-outline focus-outline-minus-2" data-qa="64339a128456930047f28201">
                                  <div class="icon-slot flex-shrink-0 icon-slot-12">
                                      <!---->
                                  </div>
                                  <div class="icon-slot flex-shrink-0 mr-2 icon-slot-18">
                                      <span class="p-abs centered font-size-18 ">
                                      <svg svg-inline="" focusable="false" role="presentation" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon d-block">
                                          <rect x=".5" y=".5" width="23" height="23" rx="11.5" fill="#fff" stroke="#A9ABAE"></rect>
                                      </svg>
                                      </span>
                                  </div>
                                  <div class="min-w-0 text-truncate"> Al Amal International Charity </div>
                                  </a>
                              </li>
                              <li class="company-dropdown-menu-item my-1">
                                  <a title="Hira Institute" href="/AZGRVNCA" class="company-dropdown-menu-link focus-outline focus-outline-minus-2" data-qa="65542bd450e37700528be2fa">
                                  <div class="icon-slot flex-shrink-0 icon-slot-12">
                                      <!---->
                                  </div>
                                  <div class="icon-slot flex-shrink-0 mr-2 icon-slot-18">
                                      <span class="p-abs centered font-size-18 ">
                                      <svg svg-inline="" focusable="false" role="presentation" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon d-block">
                                          <rect x=".5" y=".5" width="23" height="23" rx="11.5" fill="#fff" stroke="#A9ABAE"></rect>
                                      </svg>
                                      </span>
                                  </div>
                                  <div class="min-w-0 text-truncate"> Hira Institute </div>
                                  </a>
                              </li>
                              </ul>
                          </div>
                          <div class="scroll-shadow-bottom">
                              <div class="scroll-shadow-bottom-bg"></div>
                          </div>
                          <ul class="list-unstyled m-0">
                              <li>
                              <hr class="my-0">
                              </li>
                              <li class="company-dropdown-menu-item my-1">
                              <div class="cursor-pointer">
                                  <div class="d-flex text-noselect switch-warning" data-qa="company-test-mode-button">
                                  <!---->
                                  <div tabindex="0" class="focus-outline focus-outline-minus-2" style="padding: 7px 0px 7px 14px;">
                                      <div class="icon-slot switch-checkbox-width">
                                      <div class="p-abs centered">
                                          <div class="switch-checkbox switch-checkbox-off">
                                          <div class="switch-checkbox-label-off"></div>
                                          </div>
                                      </div>
                                      </div>
                                  </div>
                                  <div class="align-self-center text-color cursor-pointer pl-2 cursor-pointer" style="flex-grow: 1;">
                                      <div style="padding: 7px 14px 7px 0px;">Test data</div>
                                  </div>
                                  </div>
                              </div>
                              </li>
                          </ul> --}}
                              <ul class="list-unstyled m-0">
                                  <li>
                                      <hr class="my-0">
                                  </li>
                                  <li class="company-dropdown-menu-item my-1">
                                      <form method="get" action="/sign-out" data-hs-cf-bound="true">
                                          <a href="/setting/personal" wire:navigate
                                              class="company-dropdown-menu-link focus-outline focus-outline-minus-2 active"
                                              tabindex="0" data-qa="company-settings-link"><span
                                                  class="icon-slot flex-shrink-0 mr-2 icon-slot-18"><span
                                                      class="p-abs centered font-size-18 "><svg svg-inline=""
                                                          focusable="false" role="presentation"
                                                          xmlns="http://www.w3.org/2000/svg" width="24"
                                                          height="24" viewBox="0 0 24 24" fill="none"
                                                          stroke="currentColor" stroke-width="1.4"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          class="icon-stroke d-block">
                                                          <circle cx="12" cy="12" r="3"></circle>
                                                          <path
                                                              d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z">
                                                          </path>
                                                      </svg></span></span> <span
                                                  class="min-w-0 text-truncate">Settings</span></a>

                                          <a href="/sign-out"
                                              class="company-dropdown-menu-link focus-outline focus-outline-minus-2"
                                              data-qa="logout">
                                              <div class="flex-shrink-0 icon-slot icon-slot-18 mr-2">
                                                  <div class="p-abs centered font-size-18">
                                                      <svg svg-inline="" focusable="false" role="presentation"
                                                          xmlns="http://www.w3.org/2000/svg" width="24"
                                                          height="24" viewBox="0 0 24 24" fill="none"
                                                          stroke="currentColor" stroke-width="1.4"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          class="icon-stroke d-block">
                                                          <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"></path>
                                                          <polyline points="16 17 21 12 16 7"></polyline>
                                                          <line x1="21" y1="12" x2="9"
                                                              y2="12"></line>
                                                      </svg>
                                                  </div>
                                              </div>
                                              <div class="min-w-0 text-truncate">Logout</div>
                                          </a>
                                      </form>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>


                  <div class="d-flex d-xl-none align-items-center order-6">
                      <button type="button"
                          class="btn-reset-default d-flex border-radius-base flex-shrink-0 text-gray-60 text-nodecor focus-outline bg-transparent-hover-gray-100"
                          style="padding:11px">
                          <span class="icon-slot flex-shrink-0 line-height-18 icon-slot-18">
                              <span class="p-abs centered font-size-18">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"
                                      stroke-linecap="round" stroke-linejoin="round" class="icon-stroke d-block">
                                      <line x1="3" y1="12" x2="21" y2="12">
                                      </line>
                                      <line x1="3" y1="6" x2="21" y2="6">
                                      </line>
                                      <line x1="3" y1="18" x2="21" y2="18">
                                      </line>
                                  </svg>
                              </span>
                          </span>
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
