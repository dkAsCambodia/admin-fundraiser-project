<div data-v-28de74e8="" class="d-md-block d-flex py-2 py-md-4 py-xl-6 px-md-2 px-xl-4">
    <a href="/campaigns/{{ $causeDetailData->id }}/setting" wire:navigate
        class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'setting') router-link-exact-active menu-item-active @endif"
        data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
            <span class="p-abs centered font-size-18">
                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="1.4" stroke="currentColor" fill="none"
                    viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"
                    class="icon-stroke d-block">
                    <line xmlns="http://www.w3.org/2000/svg" x1="4" y1="21" x2="4"
                        y2="14">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="4" y1="10" x2="4"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="21" x2="12"
                        y2="12">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="8" x2="12"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="20" y1="21" x2="20"
                        y2="16">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="20" y1="12" x2="20"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="1" y1="14" x2="7"
                        y2="14">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="9" y1="8" x2="15"
                        y2="8">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="17" y1="16" x2="23"
                        y2="16">
                    </line>
                </svg>
            </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis">General</span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18"></span>
    </a>

    <a href="/campaigns/{{ $causeDetailData->id }}/frequencies" wire:navigate class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'frequencies') router-link-exact-active menu-item-active @endif" data-qa="recurring-giving-button" data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
          <span class="p-abs centered font-size-18 ">
            <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="1.4" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" class="icon-stroke d-block">
              <polyline xmlns="http://www.w3.org/2000/svg" points="23 4 23 10 17 10">
              </polyline>
              <path xmlns="http://www.w3.org/2000/svg" d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10">
              </path>
            </svg>
          </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis"> Frequencies
          <!---->
        </span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18">
          <!---->
        </span>
      </a>

    <a href="/campaigns/{{ $causeDetailData->id }}/campaign-photo" wire:navigate
        class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'campaign-photo') router-link-exact-active menu-item-active @endif"
        data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
            <span class="p-abs centered font-size-18">
                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="1.4" stroke="currentColor" fill="none"
                    viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"
                    class="icon-stroke d-block">
                    <line xmlns="http://www.w3.org/2000/svg" x1="4" y1="21" x2="4"
                        y2="14">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="4" y1="10" x2="4"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="21" x2="12"
                        y2="12">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="8" x2="12"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="20" y1="21" x2="20"
                        y2="16">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="20" y1="12" x2="20"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="1" y1="14" x2="7"
                        y2="14">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="9" y1="8" x2="15"
                        y2="8">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="17" y1="16" x2="23"
                        y2="16">
                    </line>
                </svg>
            </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis">Campaign Gallery</span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18"></span>
    </a>

    <a href="/campaigns/{{ $causeDetailData->id }}/campaign-detail"
        class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'campaign-detail') router-link-exact-active menu-item-active @endif"
        data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
            <span class="p-abs centered font-size-18">
                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="1.4" stroke="currentColor" fill="none"
                    viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"
                    class="icon-stroke d-block">
                    <line xmlns="http://www.w3.org/2000/svg" x1="4" y1="21" x2="4"
                        y2="14">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="4" y1="10" x2="4"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="21" x2="12"
                        y2="12">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="8" x2="12"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="20" y1="21" x2="20"
                        y2="16">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="20" y1="12" x2="20"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="1" y1="14" x2="7"
                        y2="14">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="9" y1="8" x2="15"
                        y2="8">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="17" y1="16" x2="23"
                        y2="16">
                    </line>
                </svg>
            </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis">Campaign Details</span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18"></span>
    </a>

    {{-- <a href="/campaigns/{{ $causeDetailData->id }}/payment-methode" wire:navigate
        class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'payment-methode') router-link-exact-active menu-item-active @endif" data-qa="menu-payment-options"
        data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
            <span class="p-abs centered font-size-18">
                <svg fill="none" stroke-width="1.4" viewBox="0 0 24 24" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg" class="icon-stroke d-block">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="M17.7599 5.27998V3.67582C17.7599 2.07694 17.4148 1.61566 15.4309 2.13886C13.9737 2.52334 5.44646 4.88734 5.44646 4.88734C2.82038 5.8771 2.41958 6.7195 2.41958 8.63902L2.3999 9.81742"
                        stroke="currentColor" stroke-miterlimit="10" stroke-linejoin="round">
                    </path>
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="M16.6681 15.5C15.8387 15.5 15.1665 14.8287 15.1665 14.0008C15.1665 13.1724 15.8392 12.5 16.6681 12.5C17.4933 12.5 18.1665 13.1719 18.1665 14.0008C18.1665 14.8292 17.4938 15.5 16.6681 15.5Z"
                        stroke="currentColor">
                    </path>
                    <rect xmlns="http://www.w3.org/2000/svg" x="2.3999" y="6.7334" width="19.2" height="14.8667"
                        rx="1.5" stroke="currentColor">
                    </rect>
                </svg>
            </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis">Payment methods</span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18"></span>
    </a> --}}
    <a href="/campaigns/{{ $causeDetailData->id }}/currency" wire:navigate
        class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'currency') router-link-exact-active menu-item-active @endif" data-qa="menu-currency" data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
            <span class="p-abs centered font-size-18">
                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="1.4" stroke="currentColor"
                    fill="none" viewBox="0 0 24 24" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg" class="icon-stroke d-block">
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="1" x2="12"
                        y2="23">
                    </line>
                    <path xmlns="http://www.w3.org/2000/svg" d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                    </path>
                </svg>
            </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis">Currency & Goal</span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18"></span>
    </a>
    <a href="/campaigns/{{ $causeDetailData->id }}/suggested-amounts" wire:navigate
        class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'suggested-amounts') router-link-exact-active menu-item-active @endif" data-qa="suggested-amounts-button"
        data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
            <span class="p-abs centered font-size-18">
                <svg stroke-width="1.4" fill="none" viewBox="0 0 24 24" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg" class="icon-stroke d-block">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="M20 2L4 2C2.89543 2 2 2.89543 2 4L2 8C2 9.10457 2.89543 10 4 10L20 10C21.1046 10 22 9.10457 22 8L22 4C22 2.89543 21.1046 2 20 2Z"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="M20 14L4 14C2.89543 14 2 14.8954 2 16L2 20C2 21.1046 2.89543 22 4 22L20 22C21.1046 22 22 21.1046 22 20L22 16C22 14.8954 21.1046 14 20 14Z"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis">Suggested amounts</span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18"></span>
    </a>
    <a href="/campaigns/{{ $causeDetailData->id }}/campaign-upsells"
        class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'campaign-upsells') router-link-exact-active menu-item-active @endif"
        data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
            <span class="p-abs centered font-size-18">
                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="1.4" stroke="currentColor" fill="none"
                    viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"
                    class="icon-stroke d-block">
                    <line xmlns="http://www.w3.org/2000/svg" x1="4" y1="21" x2="4"
                        y2="14">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="4" y1="10" x2="4"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="21" x2="12"
                        y2="12">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="8" x2="12"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="20" y1="21" x2="20"
                        y2="16">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="20" y1="12" x2="20"
                        y2="3">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="1" y1="14" x2="7"
                        y2="14">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="9" y1="8" x2="15"
                        y2="8">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="17" y1="16" x2="23"
                        y2="16">
                    </line>
                </svg>
            </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis">Campaign Upsells</span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18"></span>
    </a>
    {{-- <a href="/campaigns/{{ $causeDetailData->id }}/terms-and-conditions" wire:navigate
        class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'terms-and-conditions') router-link-exact-active menu-item-active @endif" data-qa="terms-and-conditions-button"
        data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
            <span class="p-abs centered font-size-18">
                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="1.4" stroke="currentColor"
                    fill="none" viewBox="0 0 24 24" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg" class="icon-stroke d-block">
                    <polyline xmlns="http://www.w3.org/2000/svg" points="20 6 9 17 4 12">
                    </polyline>
                </svg>
            </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis">Terms &amp; conditions</span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18"></span>
    </a> --}}
    {{-- <a href="/campaigns/{{ $causeDetailData->id }}/custom-fields" wire:navigate
        class="menu-item menu-item-link focus-outline focus-outline-minus-2 @if($sideBarType == 'custom-fields') router-link-exact-active menu-item-active @endif" data-qa="question-button"
        data-v-28de74e8="">
        <span class="icon-slot flex-shrink-0 mr-3 icon-slot-18">
            <span class="p-abs centered font-size-18">
                <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="1.4" stroke="currentColor"
                    fill="none" viewBox="0 0 24 24" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg" class="icon-stroke d-block">
                    <rect xmlns="http://www.w3.org/2000/svg" x="2" y="2" width="20" height="8"
                        rx="2" ry="2">
                    </rect>
                    <rect xmlns="http://www.w3.org/2000/svg" x="2" y="14" width="20" height="8"
                        rx="2" ry="2">
                    </rect>
                    <line xmlns="http://www.w3.org/2000/svg" x1="6" y1="6" x2="6.01"
                        y2="6">
                    </line>
                    <line xmlns="http://www.w3.org/2000/svg" x1="6" y1="18" x2="6.01"
                        y2="18">
                    </line>
                </svg>
            </span>
        </span>
        <span class="flex-grow-1 min-w-0 text-ellipsis">Custom fields</span>
        <span class="icon-slot flex-shrink-0 ml-2 mr-minus-2 icon-slot-18"></span>
    </a> --}}
</div>
