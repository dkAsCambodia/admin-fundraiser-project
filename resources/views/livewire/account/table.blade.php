<div class="content-row">
    <div class="d-table-cell text-top">
        <div qa="settings-page" class="container d-md-flex mt-6 mt-lg-10">
            @include('livewire.account.sidebar')
            <div class="flex-grow-1 min-w-0">
                <div qa="settings-personal">
                    <div>
                        <div class="panel bg-white info-popper-wrap">
                            <div class="pl-6 pr-4 pr-md-6 px-xl-8 py-4 py-md-7">
                                <div class="d-flex justify-content-between mx-minus-1">
                                    <div class="mx-1 align-self-center min-w-0">
                                        <div class="font-size-20 line-height-28 font-size-md-24 line-height-md-32">
                                            <div class="d-flex flex-wrap">
                                                <div class="min-w-0 mr-1 text-ellipsis">
                                                    Accounts
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-1 d-none d-md-block">
                                        <div class="d-none d-md-flex align-items-center mx-minus-2">
                                            <div class="mx-2">
                                                <a href="/account/create" wire:navigate class="btn btn-primary">
                                                    <div class="d-flex">
                                                        <div class="mr-2">
                                                            <div class="icon-slot icon-slot-18">
                                                                <div class="p-abs centered font-size-18">
                                                                    <svg svg-inline="" focusable="false"
                                                                        role="presentation"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="1.4"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon-stroke">
                                                                        <circle cx="12" cy="12" r="10">
                                                                        </circle>
                                                                        <line x1="12" y1="8"
                                                                            x2="12" y2="16"></line>
                                                                        <line x1="8" y1="12"
                                                                            x2="16" y2="12"></line>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>New Account</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-1 d-md-none">
                                        <div class="d-flex ml-minus-3">
                                            <div class="ml-3">
                                                <button class="btn btn-default p-2">
                                                    <div class="icon-slot icon-slot-18 line-height-18">
                                                        <div class="p-abs centered font-size-18">
                                                            <svg svg-inline="" focusable="false" role="presentation"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="1.4"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon-stroke">
                                                                <polygon
                                                                    points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3">
                                                                </polygon>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="ml-3">
                                                <span>
                                                    <span class="" style="display:none">
                                                        <div class="z-index-popover bg-white border-radius-base border border-gray-40 py-1 mt-1"
                                                            style="box-shadow:rgba(62,63,64,.25) 1px 4px 8px">
                                                            <div tabindex="0" data-qa="create-campaign"
                                                                class="d-flex px-4 py-1 bg-white-hover-gray-25 cursor-pointer focus-outline">
                                                                <div class="mr-2">
                                                                    <div class="icon-slot icon-slot-18">
                                                                        <div class="p-abs centered font-size-18">
                                                                            <svg svg-inline="" focusable="false"
                                                                                role="presentation"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="1.4"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="icon-stroke d-block">
                                                                                <circle cx="12" cy="12"
                                                                                    r="10"></circle>
                                                                                <line x1="12" y1="8"
                                                                                    x2="12" y2="16">
                                                                                </line>
                                                                                <line x1="8" y1="12"
                                                                                    x2="16" y2="12">
                                                                                </line>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>New campaign</div>
                                                            </div>
                                                            {{-- <div class="d-flex px-4 py-1 bg-white-hover-gray-25 cursor-pointer focus-outline"
                                                                tabindex="0">
                                                                <div class="mr-2">
                                                                    <div class="icon-slot icon-slot-18">
                                                                        <div class="p-abs centered font-size-18">
                                                                            <svg svg-inline="" focusable="false"
                                                                                role="presentation"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-width="1.4"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="icon-stroke d-block">
                                                                                <polyline points="21 8 21 21 3 21 3 8">
                                                                                </polyline>
                                                                                <rect x="1" y="3" width="22"
                                                                                    height="5"></rect>
                                                                                <line x1="10" y1="12"
                                                                                    x2="14" y2="12">
                                                                                </line>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>Archive</div>
                                                            </div> --}}
                                                        </div>
                                                    </span>
                                                    <button class="btn btn-default d-block p-2">
                                                        <div class="icon-slot icon-slot-18 line-height-18">
                                                            <div class="p-abs centered font-size-18">
                                                                <svg svg-inline="" focusable="false"
                                                                    role="presentation" width="18" height="18"
                                                                    viewBox="0 0 18 18" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon-stroke">
                                                                    <path
                                                                        d="M9 9.75a.75.75 0 100-1.5.75.75 0 000 1.5zM9 4.5A.75.75 0 109 3a.75.75 0 000 1.5zM9 15a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                                                        fill="currentColor" stroke="currentColor"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-block d-none">
                                <hr class="my-0">
                                <div class="bg-gray-10 border-bottom-radius-base">
                                    <div>
                                        <div class="px-6 px-xl-8 py-2 py-md-4">
                                            <div class="d-table table-layout-fixed w-100">
                                                <div class="d-table-cell">
                                                    {{-- <div style="float:right">
                                                        <div
                                                            class="d-flex align-items-center mx-minus-2 justify-content-between">
                                                            <div class="d-none d-md-block mx-2">
                                                                <a href="#"
                                                                    class="d-block text-nowrap cursor-pointer text-gray-100-hover-gray-85 text-nodecor py-2 ml-4 focus-outline">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mr-2">
                                                                            <div
                                                                                class="icon-slot icon-slot-18 d-inline-block">
                                                                                <div
                                                                                    class="p-abs centered font-size-18">
                                                                                    <svg svg-inline=""
                                                                                        focusable="false"
                                                                                        role="presentation"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="1.4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="icon-stroke d-block">
                                                                                        <polyline
                                                                                            points="21 8 21 21 3 21 3 8">
                                                                                        </polyline>
                                                                                        <rect x="1" y="3"
                                                                                            width="22"
                                                                                            height="5"></rect>
                                                                                        <line x1="10"
                                                                                            y1="12"
                                                                                            x2="14"
                                                                                            y2="12"></line>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="min-w-0 text-truncate">Archive
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <div>
                                                        <div
                                                            class="mx-minus-4 mx-md-minus-5 mt-md-minus-1 font-size-0">
                                                            <div
                                                                class="d-md-inline-flex text-middle font-size-16 mt-md-1 mx-md-1">
                                                                <div class="p-rel mx-md-4">
                                                                    <input type="text" dir="auto"
                                                                        wire:model.live="search"
                                                                        placeholder="Account ID/name"
                                                                        autocomplete="off"
                                                                        class="form-control form-control-search pr-10 inactive">
                                                                </div>
                                                            </div>
                                                            <div class="d-md-inline-flex ml-4">
                                                                <div class="min-w-0">
                                                                    <div class="align-items-center line-height-20">
                                                                        <div
                                                                            @class(['select-btn-new form-control', 'open' => $statusOpen])
                                                                            wire:click="openStatus"
                                                                            style="width: 170px !important;">
                                                                            <span class="btn-text">Status</span>
                                                                            <span class="arrow-dwn">
                                                                                <i
                                                                                    class="fa-solid fa-chevron-down"></i>
                                                                            </span>
                                                                        </div>
                                                                        <ul class="list-items">
                                                                            <li>
                                                                                <label class="item">
                                                                                    <input class="checkbox"
                                                                                        wire:model.live="status"
                                                                                        type="radio" id="statusall"
                                                                                        value="all">
                                                                                    <label
                                                                                        class="item-text cursor-pointer"
                                                                                        for="statusall">
                                                                                        All
                                                                                    </label>
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="item">
                                                                                    <input class="checkbox"
                                                                                        wire:model.live="status"
                                                                                        type="radio" id="status1"
                                                                                        value="1">
                                                                                    <label
                                                                                        class="item-text cursor-pointer"
                                                                                        for="status1">
                                                                                        Active
                                                                                    </label>
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="item">
                                                                                    <input class="checkbox"
                                                                                        wire:model.live="status"
                                                                                        type="radio" id="status0"
                                                                                        value="0">
                                                                                    <label
                                                                                        class="item-text cursor-pointer"
                                                                                        for="status0">
                                                                                        Inactive
                                                                                    </label>
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- <div class="d-md-inline-flex text-middle font-size-16 mt-1 mx-md-1"
                                                                style="--max-width-md:220px">
                                                                <div data-v-2d9819c6="" class="min-w-0"
                                                                    data-st-filter="company">
                                                                    <div data-v-07196776="" data-v-2d9819c6=""
                                                                        tabindex="0"
                                                                        class="c-select p-rel d-flex align-items-center cursor-pointer focus-outline form-control-static-select text-gray-85 bg-transparent-hover-gray-30">
                                                                        <div data-v-07196776=""
                                                                            class="min-w-0 text-truncate">Account</div>
                                                                        <div data-v-07196776="" class="ml-1">
                                                                            <div data-v-07196776=""
                                                                                class="icon-slot icon-slot-18">
                                                                                <div data-v-07196776=""
                                                                                    class="p-abs centered font-size-18">
                                                                                    <svg data-v-07196776=""
                                                                                        svg-inline=""
                                                                                        focusable="false"
                                                                                        role="presentation"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="1.4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="icon-stroke d-block">
                                                                                        <polyline data-v-07196776=""
                                                                                            points="6 9 12 15 18 9">
                                                                                        </polyline>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-v-2d9819c6="" class="p-rel"></div>
                                                                </div>
                                                            </div>
                                                            <div class="d-md-inline-flex text-middle font-size-16 mt-1 mx-md-1"
                                                                style="--max-width-md:210px">
                                                                <div data-v-2d9819c6="" class="min-w-0"
                                                                    data-st-filter="paymentOption">
                                                                    <div data-v-07196776="" data-v-2d9819c6=""
                                                                        tabindex="0"
                                                                        class="c-select p-rel d-flex align-items-center cursor-pointer focus-outline form-control-static-select text-gray-85 bg-transparent-hover-gray-30">
                                                                        <div data-v-07196776=""
                                                                            class="min-w-0 text-truncate">Payment
                                                                            methods</div>
                                                                        <div data-v-07196776="" class="ml-1">
                                                                            <div data-v-07196776=""
                                                                                class="icon-slot icon-slot-18">
                                                                                <div data-v-07196776=""
                                                                                    class="p-abs centered font-size-18">
                                                                                    <svg data-v-07196776=""
                                                                                        svg-inline=""
                                                                                        focusable="false"
                                                                                        role="presentation"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="1.4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="icon-stroke d-block">
                                                                                        <polyline data-v-07196776=""
                                                                                            points="6 9 12 15 18 9">
                                                                                        </polyline>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-v-2d9819c6="" class="p-rel"></div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="d-md-inline-flex text-middle font-size-16 mt-1 mx-md-1">
                                                                <div data-v-2d9819c6="" class="min-w-0"
                                                                    data-st-filter="status">
                                                                    <div data-v-07196776="" data-v-2d9819c6=""
                                                                        tabindex="0"
                                                                        class="c-select p-rel d-flex align-items-center cursor-pointer focus-outline form-control-static-select text-gray-85 bg-transparent-hover-gray-30">
                                                                        <div data-v-07196776=""
                                                                            class="min-w-0 text-truncate">Status</div>
                                                                        <div data-v-07196776="" class="ml-1">
                                                                            <div data-v-07196776=""
                                                                                class="icon-slot icon-slot-18">
                                                                                <div data-v-07196776=""
                                                                                    class="p-abs centered font-size-18">
                                                                                    <svg data-v-07196776=""
                                                                                        svg-inline=""
                                                                                        focusable="false"
                                                                                        role="presentation"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="1.4"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="icon-stroke d-block">
                                                                                        <polyline data-v-07196776=""
                                                                                            points="6 9 12 15 18 9">
                                                                                        </polyline>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-v-2d9819c6="" class="p-rel"></div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="more-filters" class="d-block d-md-none">
                                            <hr class="m-0 d-none d-md-block">
                                            <div class="c-more-filters">
                                            </div>
                                        </div>
                                        <div class="d-md-none">
                                            <hr class="my-0">
                                            <div
                                                class="px-6 py-3 font-size-14 line-height-20 bg-gray-25 border-bottom-radius-base">
                                                <div class="d-flex justify-content-between mx-minus-1">
                                                    <div class="min-w-0 mx-1">
                                                        <div tabindex="0"
                                                            class="d-flex cursor-pointer focus-outline">
                                                            <div class="mr-2">
                                                                <div class="icon-slot icon-slot-18">
                                                                    <div class="p-abs centered font-size-18">
                                                                        <svg svg-inline="" focusable="false"
                                                                            role="presentation"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="icon-stroke">
                                                                            <path
                                                                                d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24">
                                                                            </path>
                                                                            <line x1="1" y1="1"
                                                                                x2="23" y2="23"></line>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="min-w-0 text-truncate">Hide filters</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="panel mb-0">
                                <div class="mb-0 p-rel table-responsive-xl">
                                    <div data-v-42ed51cc="" class="">
                                        <div data-v-42ed51cc="" class="scroll-container border-radius-base">
                                            <div data-v-42ed51cc=""
                                                class="d-table table mb-0 table-hor-border d-table-panel p-rel table-hover">
                                                <div data-v-42ed51cc="" class="d-thead">
                                                    <div data-v-42ed51cc="" class="d-tr">
                                                        {{-- <div data-v-42ed51cc=""
                                                            class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                            <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                                <div data-v-42ed51cc=""
                                                                    class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                    Account ID
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <div data-v-42ed51cc=""
                                                            class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                            <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                                <div data-v-42ed51cc=""
                                                                    class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                    Name</div>
                                                            </div>
                                                        </div>
                                                        <div data-v-42ed51cc=""
                                                            class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                            <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                                <div data-v-42ed51cc=""
                                                                    class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                    Account Name</div>
                                                            </div>
                                                        </div>
                                                        <div data-v-42ed51cc=""
                                                            class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                            <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                                <div data-v-42ed51cc=""
                                                                    class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                    Email</div>
                                                            </div>
                                                        </div>
                                                        <div data-v-42ed51cc=""
                                                            class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                            <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                                <div data-v-42ed51cc=""
                                                                    class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                    Status
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-v-42ed51cc=""
                                                            class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                            <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                                <div data-v-42ed51cc=""
                                                                    class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                    Created At
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-v-42ed51cc=""
                                                            class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                            <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                                <div data-v-42ed51cc=""
                                                                    class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                    Action
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @forelse ($userAccounts as $user)
                                                    <div data-v-42ed51cc="" class="d-tbody">
                                                        {{-- <div class="d-td">
                                                            <div title="" class="text-truncate max-w-px-200">
                                                                {{ $user->account_id }}
                                                            </div>
                                                        </div> --}}
                                                        <div class="d-td">
                                                            <div title="" class="text-truncate max-w-px-200">
                                                                {{ $user->name }}
                                                            </div>
                                                        </div>
                                                        <div class="d-td">
                                                            <div title="" class="text-truncate max-w-px-200">
                                                                {{ $user->account_name }}
                                                            </div>
                                                        </div>
                                                        <div class="d-td">
                                                            <div title="" class="text-truncate max-w-px-200">
                                                                {{ $user->email }}
                                                            </div>
                                                        </div>
                                                        <div class="d-td">
                                                            <div title="" class="text-truncate max-w-px-200">
                                                                <label class="switch">
                                                                    <input wire:model.live="statusData"
                                                                        wire:change="changeStatus({{ $user->id }})"
                                                                        type="checkbox"
                                                                        {{ $user->status ? 'checked' : '' }}>
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="d-td">
                                                            <div title="" class="text-truncate max-w-px-200">
                                                                {{ $user->created_at }}
                                                            </div>
                                                        </div>
                                                        <div class="d-td">
                                                            <div title="" class="text-truncate max-w-px-200">
                                                                <a href="/account/{{ $user->id }}/edit"
                                                                    wire:navigate>
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="" data-v-42ed51cc=""></div>
                                                    <div data-v-42ed51cc="">
                                                        <hr data-v-42ed51cc="" class="my-0">
                                                        <div data-v-42ed51cc="" class="p-rel">
                                                            <div class="" data-v-42ed51cc="">
                                                                <div class="h-empty-panel p-3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{ $userAccounts->links('custom-pagination') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
