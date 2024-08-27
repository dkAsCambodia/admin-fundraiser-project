<div class="content-row">
    <div class="d-table-cell text-top">
        <div data-qa="insights-page">
            <div>
                <div>
                    <div class="container mt-6 mt-xl-10">
                        <div class="panel bg-white info-popper-wrap">
                            <div class="pl-6 pr-4 pr-md-6 px-xl-8 py-4 py-md-7">
                                <div class="d-flex justify-content-between mx-minus-1">
                                    <div class="mx-1 align-self-center min-w-0">
                                        <div class="font-size-20 line-height-28 font-size-md-24 line-height-md-32">
                                            <div class="d-flex flex-wrap">
                                                <div class="min-w-0 mr-1 overflow-hidden text-overflow-ellipsis">
                                                    Insights
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-1 d-none d-md-block">
                                        <div class="d-none d-md-flex align-items-center mx-minus-2">
                                            <div class="mx-2">
                                                <div class="btn-height"></div>
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
                                                        <div class="p-abs bg-red-40 border-radius-6"
                                                            style="width:6px;height:6px;bottom:-3px;right:-3px"></div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-block d-none">
                                <hr class="my-0">
                                <div class="bg-gray-10 border-bottom-radius-base">
                                    <div class="px-6 px-xl-8 py-2 py-md-4">
                                        <div class="mx-minus-4 mx-md-minus-5 mt-minus-1 font-size-0">
                                            @include('date-range-picker')
                                            @if ($accountView)
                                                <div class="d-md-inline-flex">
                                                    <div class="min-w-0">
                                                        <div class="align-items-center line-height-20">
                                                            <div
                                                                @class(['select-btn-new form-control', 'open' => $accountOpen])
                                                                wire:click="openAccount"
                                                                style="width: 170px !important;">
                                                                <span class="btn-text">Account</span>
                                                                <span class="arrow-dwn">
                                                                    <i class="fa-solid fa-chevron-down"></i>
                                                                </span>
                                                            </div>
                                                            <ul class="list-items">
                                                                @forelse ($accountData as $key => $acc)
                                                                    <li>
                                                                        <label class="item">
                                                                            <input class="checkbox"
                                                                                wire:model.live="accounts"
                                                                                type="checkbox"
                                                                                id="accounts{{ $key }}"
                                                                                value="{{ $acc->id }}">
                                                                            <label class="item-text cursor-pointer"
                                                                                for="accounts{{ $key }}">
                                                                                {{ $acc['account_name'] }}
                                                                            </label>
                                                                        </label>
                                                                    </li>
                                                                @empty
                                                                @endforelse
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="d-md-inline-flex ml-5">
                                                <div class="min-w-0">
                                                    <div class="align-items-center line-height-20">
                                                        <div
                                                            @class(['select-btn-new form-control', 'open' => $campaignOpen])
                                                            wire:click="openCampaign" style="width: 170px !important;">
                                                            <span class="btn-text">Campaign</span>
                                                            <span class="arrow-dwn">
                                                                <i class="fa-solid fa-chevron-down"></i>
                                                            </span>
                                                        </div>
                                                        <ul class="list-items">
                                                            @forelse ($campaignData as $key => $camp)
                                                                <li>
                                                                    <label class="item">
                                                                        <input class="checkbox"
                                                                            wire:model.live="campaigns" type="checkbox"
                                                                            id="campaigns{{ $key }}"
                                                                            value="{{ $camp->id }}">
                                                                        <label class="item-text cursor-pointer"
                                                                            for="campaigns{{ $key }}">
                                                                            {{ $camp->title }}
                                                                        </label>
                                                                    </label>
                                                                </li>
                                                            @empty
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-md-inline-flex ml-4">
                                                                <div class="min-w-0">
                                                                    <div class="align-items-center line-height-20">
                                                                        <div
                                                                            @class(
                                                                                ['select-btn-new form-control', 'open' => $frequencyOpen]
                                                                            )
                                                                            wire:click="openFrequency"
                                                                            style="width: 170px !important;">
                                                                            <span class="btn-text">Frequency</span>
                                                                            <span class="arrow-dwn">
                                                                                <i
                                                                                    class="fa-solid fa-chevron-down"></i>
                                                                            </span>
                                                                        </div>
                                                                        <ul class="list-items">
                                                                            <li>
                                                                                <label class="item">
                                                                                    <input class="checkbox"
                                                                                        wire:model.live="default_frequency"
                                                                                        type="radio" id="frequencyall"
                                                                                        value="all">
                                                                                    <label
                                                                                        class="item-text cursor-pointer"
                                                                                        for="frequencyall">
                                                                                        All
                                                                                    </label>
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="item">
                                                                                    <input class="checkbox"
                                                                                        wire:model.live="default_frequency"
                                                                                        type="radio" id="frequency1"
                                                                                        value="once">
                                                                                    <label
                                                                                        class="item-text cursor-pointer"
                                                                                        for="frequency1">
                                                                                        Once
                                                                                    </label>
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="item">
                                                                                    <input class="checkbox"
                                                                                        wire:model.live="default_frequency"
                                                                                        type="radio" id="frequency0"
                                                                                        value="monthly">
                                                                                    <label
                                                                                        class="item-text cursor-pointer"
                                                                                        for="frequency0">
                                                                                        Monthly
                                                                                    </label>
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                            <div class="d-md-inline-flex ml-5">
                                                <div class="min-w-0">
                                                    <div class="align-items-center line-height-20">
                                                        <div
                                                            @class(['select-btn-new form-control', 'open' => $designationOpen])
                                                            wire:click="openDesignation" style="width: 170px !important;">
                                                            <span class="btn-text">Designation</span>
                                                            <span class="arrow-dwn">
                                                                <i class="fa-solid fa-chevron-down"></i>
                                                            </span>
                                                        </div>
                                                        <ul class="list-items">
                                                            @forelse ($designationData as $key => $camp)
                                                                <li>
                                                                    <label class="item">
                                                                        <input class="checkbox"
                                                                            wire:model.live="selected_designation" type="checkbox"
                                                                            id="campaigns{{ $key }}"
                                                                            value="{{ $camp->id }}" checked>
                                                                        <label class="item-text cursor-pointer"
                                                                            for="campaigns{{ $key }}">
                                                                            {{ $camp->selected_designation }}
                                                                        </label>
                                                                    </label>
                                                                </li>
                                                            @empty
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                                            <!-- <div class="d-md-inline-flex ml-4">
                                                                <div class="min-w-0">
                                                                    <div class="align-items-center line-height-20">
                                                                        <div
                                                                            @class(
                                                                                ['select-btn-new form-control', 'open' => $designationOpen]
                                                                            )
                                                                            wire:click="openDesignation"
                                                                            style="width: 170px !important;">
                                                                            <span class="btn-text">Designation</span>
                                                                            <span class="arrow-dwn">
                                                                                <i
                                                                                    class="fa-solid fa-chevron-down"></i>
                                                                            </span>
                                                                        </div>
                                                                        <ul class="list-items">
                                                                            <li>
                                                                                <label class="item">
                                                                                    <input class="checkbox"
                                                                                        wire:model.live="selected_designation"
                                                                                        type="radio" id="designationall"
                                                                                        value="all">
                                                                                    <label
                                                                                        class="item-text cursor-pointer"
                                                                                        for="designationall">
                                                                                        All
                                                                                    </label>
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="item">
                                                                                    <input class="checkbox"
                                                                                        wire:model.live="selected_designation"
                                                                                        type="radio" id="designation1"
                                                                                        value="gaza">
                                                                                    <label
                                                                                        class="item-text cursor-pointer"
                                                                                        for="designation1">
                                                                                        Once
                                                                                    </label>
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="item">
                                                                                    <input class="checkbox"
                                                                                        wire:model.live="selected_designation"
                                                                                        type="radio" id="designation0"
                                                                                        value="yemen">
                                                                                    <label
                                                                                        class="item-text cursor-pointer"
                                                                                        for="designation0">
                                                                                        Monthly
                                                                                    </label>
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex">
                        <div class="panel flex-grow-1 p-4 py-xl-6 px-xl-8 d-flex align-items-center"
                            style="border-left:8px solid #1675ac">
                            <div class="flex-grow-1 p-rel">
                                <div class="">
                                    <div class="font-size-26 line-height-38 font-weight-300 w-100">
                                        <span>Raised <b class="font-weight-600">${{ $totalGoal }}</b>
                                        </span>
                                        <div class="d-none d-lg-block"></div>
                                        <span>including <b class="font-weight-600">${{ $RecurringAmount }}</b>
                                        </span>
                                        <div class="d-none d-lg-block"></div>
                                        <span>in recurring donations</span>
                                        <div class="d-none d-lg-block"></div>
                                        <span>across <span class="text-nowrap">
                                                <b class="font-weight-600">{{ $RecurringCount }} </b>donations. </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex">
                        <div data-v-4ee5ce04="" class="p-rel panel flex-grow-1 min-w-0">
                            <div data-v-4ee5ce04="" class="d-flex flex-column">
                                <div data-v-4ee5ce04="" class="px-6 pt-6 pb-4">
                                    <div data-v-4ee5ce04="" class="d-flex align-items-center mx-minus-1 dataTypes">
                                        <div data-v-4ee5ce04="" class="mx-1 min-w-0">
                                            <a data-v-4ee5ce04="" data-show="amount" tabindex="0"
                                                {{-- wire:click="lineChart('DonationsUSD')" --}}
                                                class="c-tab cursor-pointer d-block text-truncate px-2 py-1 dataTypesItem focus-outline @if ($lineActive == 'DonationsUSD') active @endif ">
                                                Donations, USD
                                            </a>
                                        </div>
                                        {{-- <div data-v-4ee5ce04="" class="mx-1 min-w-0">
                                            <a data-v-4ee5ce04="" data-show="charges" tabindex="0"
                                                wire:click="lineChart('Donations')"
                                                class="c-tab cursor-pointer d-block text-truncate px-2 py-1 dataTypesItem focus-outline @if ($lineActive == 'Donations') active @endif ">
                                                Donations, #
                                            </a>
                                        </div>
                                        <div data-v-4ee5ce04="" class="mx-1 min-w-0">
                                            <a data-v-4ee5ce04="" data-show="recurrings" tabindex="0"
                                                wire:click="lineChart('Recurring')"
                                                class="c-tab cursor-pointer d-block text-truncate px-2 py-1 dataTypesItem focus-outline @if ($lineActive == 'Recurring') active @endif ">
                                                Recurring, #
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="px-6 pb-2 mt-auto">
                                    <div wire:ignore class="chart-container w-100">
                                        <canvas id="lineChartDonation" style="display:block;height:100%;width:100%">
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="panel w-100 min-w-0 d-flex flex-column">
                            <div>
                                <div class="px-6 py-4 font-weight-600 text-truncate">New
                                    recurring plans</div>
                                <hr class="my-0">
                            </div>
                            <div class="flex-grow-1 d-flex p-rel">
                                <div class="w-100 d-flex flex-column">
                                    <div class="" filters="[object Object]" allowed-payment-options="">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Amount</div>
                                            <div class="d-flex justify-content-end">
                                                <div>${{ $RecurringAmount }}</div>
                                                <div class="ml-4">
                                                    <div class="icon-slot icon-slot-18 text-gray-85-hover-gray-100"
                                                        data-original-title="Total sum of new recurring donations (only first successful installments)  received during selected timeframe."
                                                        title="">
                                                        <div class="p-abs centered font-size-18">
                                                            <svg svg-inline="" focusable="false" role="presentation"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke-width="1.4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon-stroke">
                                                                <path
                                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <circle cx="12" cy="17" r=".7"
                                                                    fill="currentColor"></circle>
                                                                <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Count</div>
                                            <div class="d-flex justify-content-end">
                                                <div>{{ $RecurringCount }}</div>
                                                <div class="ml-4">
                                                    <div class="icon-slot icon-slot-18 text-gray-85-hover-gray-100"
                                                        data-original-title="Number of new recurring donations (only first successful installments) received during selected timeframe."
                                                        title="">
                                                        <div class="p-abs centered font-size-18">
                                                            <svg svg-inline="" focusable="false" role="presentation"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke-width="1.4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon-stroke">
                                                                <path
                                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <circle cx="12" cy="17" r=".7"
                                                                    fill="currentColor"></circle>
                                                                <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Average</div>
                                            <div class="d-flex justify-content-end">
                                                <div>${{ $RecurringAvg }}</div>
                                                <div class="ml-4">
                                                    <div class="icon-slot icon-slot-18 text-gray-85-hover-gray-100"
                                                        data-original-title="Average amount of new recurring donations (only first successful installments) received during selected timeframe."
                                                        title="">
                                                        <div class="p-abs centered font-size-18">
                                                            <svg svg-inline="" focusable="false" role="presentation"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke-width="1.4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon-stroke">
                                                                <path
                                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <circle cx="12" cy="17" r=".7"
                                                                    fill="currentColor"></circle>
                                                                <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Median</div>
                                            <div class="d-flex justify-content-end">
                                                <div>${{ $RecurringMedian }}</div>
                                                <div class="ml-4">
                                                    <div class="icon-slot icon-slot-18 text-gray-85-hover-gray-100"
                                                        data-original-title="Median amount of new recurring donations (only first successful installments) received during selected timeframe."
                                                        title="">
                                                        <div class="p-abs centered font-size-18">
                                                            <svg svg-inline="" focusable="false" role="presentation"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke-width="1.4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon-stroke">
                                                                <path
                                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <circle cx="12" cy="17" r=".7"
                                                                    fill="currentColor"></circle>
                                                                <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="panel w-100 min-w-0 d-flex flex-column">
                            <div>
                                <div class="px-6 py-4 font-weight-600 text-truncate">One time
                                    donations</div>
                                <hr class="my-0">
                            </div>
                            <div class="flex-grow-1 d-flex p-rel">
                                <div class="w-100 d-flex flex-column">
                                    <div class="" filters="[object Object]" allowed-payment-options="">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Amount</div>
                                            <div class="d-flex justify-content-end">
                                                <div>${{ $OnetimeAmount }}</div>
                                                <div class="ml-4">
                                                    <div class="icon-slot icon-slot-18 text-gray-85-hover-gray-100"
                                                        data-original-title="Total sum of all one time successful donations received during selected timeframe. This amount does not include revenue received from recurring donations."
                                                        title="">
                                                        <div class="p-abs centered font-size-18">
                                                            <svg svg-inline="" focusable="false" role="presentation"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke-width="1.4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon-stroke">
                                                                <path
                                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <circle cx="12" cy="17" r=".7"
                                                                    fill="currentColor"></circle>
                                                                <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Count</div>
                                            <div class="d-flex justify-content-end">
                                                <div>{{ $OnetimeCount }}</div>
                                                <div class="ml-4">
                                                    <div class="icon-slot icon-slot-18 text-gray-85-hover-gray-100"
                                                        data-original-title="Number of all one time successful donations received during selected timeframe. This amount does not include revenue received from recurring donations."
                                                        title="">
                                                        <div class="p-abs centered font-size-18">
                                                            <svg svg-inline="" focusable="false" role="presentation"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke-width="1.4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon-stroke">
                                                                <path
                                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <circle cx="12" cy="17" r=".7"
                                                                    fill="currentColor"></circle>
                                                                <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Average</div>
                                            <div class="d-flex justify-content-end">
                                                <div>${{ $OnetimeAvg }}</div>
                                                <div class="ml-4">
                                                    <div class="icon-slot icon-slot-18 text-gray-85-hover-gray-100"
                                                        data-original-title="Average amount of all one time successful donations received during selected timeframe. This amount does not include revenue received from recurring donations."
                                                        title="">
                                                        <div class="p-abs centered font-size-18">
                                                            <svg svg-inline="" focusable="false" role="presentation"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke-width="1.4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon-stroke">
                                                                <path
                                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <circle cx="12" cy="17" r=".7"
                                                                    fill="currentColor"></circle>
                                                                <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Median</div>
                                            <div class="d-flex justify-content-end">
                                                <div>${{ $OnetimeMedian }}</div>
                                                <div class="ml-4">
                                                    <div class="icon-slot icon-slot-18 text-gray-85-hover-gray-100"
                                                        data-original-title="Median amount of all one time successful donations received during selected timeframe. This amount does not include revenue received from recurring donations."
                                                        title="">
                                                        <div class="p-abs centered font-size-18">
                                                            <svg svg-inline="" focusable="false" role="presentation"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke-width="1.4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon-stroke">
                                                                <path
                                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <circle cx="12" cy="17" r=".7"
                                                                    fill="currentColor"></circle>
                                                                <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                    stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="panel w-100 min-w-0 d-flex flex-column">
                            <div>
                                <div class="px-6 py-4 font-weight-600 text-truncate">Supporters
                                </div>
                                <hr class="my-0">
                            </div>
                            <div class="flex-grow-1 d-flex p-rel">
                                <div class="w-100 d-flex flex-column">
                                    <div class="" allowed-payment-options="">
                                        <div class="d-flex justify-content-between px-6 py-4 pl-6 pr-8">
                                            <div
                                                class="flex-grow-1 flex-basis-0 min-w-0 mr-4 text-overflow-ellipsis overflow-hidden">
                                                Covered costs</div>
                                            <span data-v-8ac12c0c="">
                                                <span class="" style="display:none">
                                                    <div data-v-8ac12c0c="" class="popper p-0 w-100"
                                                        style="max-width:450px">
                                                        <div data-v-8ac12c0c=""
                                                            class="px-6 pt-4 pb-3 border-bottom border-gray-30">
                                                            <p data-v-8ac12c0c=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase mb-1">
                                                                Covered costs</p>
                                                            <p data-v-8ac12c0c=""
                                                                class="font-size-20 line-height-24 font-weight-400">77%
                                                            </p>
                                                        </div>
                                                        <div data-v-8ac12c0c="" class="p-6 p-rel">
                                                            <div data-v-8ac12c0c=""
                                                                class="p-abs top-left bottom-right border-bottom-radius-6 c-popper-background">
                                                            </div>
                                                            <div data-v-8ac12c0c=""
                                                                class="d-flex line-height-24 p-rel">
                                                                <div data-v-8ac12c0c=""
                                                                    class="icon-slot mr-2 flex-shrink-0 icon-slot-24">
                                                                    <span class="p-abs centered font-size-24">
                                                                        <img data-v-8ac12c0c=""
                                                                            src="https://static.fundraiseup.com/images/dashboard/components/ai-icon.92e5a6be640a.svg"
                                                                            alt="" class="d-block icon">
                                                                    </span>
                                                                </div>
                                                                <p data-v-8ac12c0c=""
                                                                    class="font-size-16 font-weight-500">Adaptive cost
                                                                    coverage</p>
                                                            </div>
                                                            <p data-v-8ac12c0c=""
                                                                class="text-overflow-ellipsis overflow-hidden mt-2 p-rel">
                                                                You're increasing conversion by allowing AI to determine
                                                                when to show the option to cover fees in Checkout. <a
                                                                    data-v-8ac12c0c=""
                                                                    href="https://fundraiseup.com/docs/transaction-costs/"
                                                                    target="_blank" rel="noopener"
                                                                    class="d-inline-block text-nowrap focus-outline focus-outline-minus-2 font-weight-500">Learn
                                                                    more <span data-v-8ac12c0c=""
                                                                        class="icon-slot d-inline-block icon-slot-16">
                                                                        <span class="p-abs centered font-size-16">
                                                                            <svg data-v-8ac12c0c="" svg-inline=""
                                                                                focusable="false" role="presentation"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="icon-stroke icon-stroke-2 d-block">
                                                                                <path data-v-8ac12c0c=""
                                                                                    d="M14 4h6m0 0v6m0-6l-7 7M8 6H5.556A1.556 1.556 0 004 7.556v10.889A1.555 1.555 0 005.556 20h10.889A1.555 1.555 0 0018 18.445V16"
                                                                                    stroke="#fff" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path data-v-8ac12c0c=""
                                                                                    opacity=".72"
                                                                                    d="M14 4h6m0 0v6m0-6l-7 7M8 6H5.556A1.556 1.556 0 004 7.556v10.888A1.556 1.556 0 005.556 20h10.888A1.556 1.556 0 0018 18.444V16"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </p>
                                                            <div data-v-8ac12c0c=""
                                                                class="px-3 py-4 mt-6 border border-gray-30 border-radius-6 p-rel bg-white">
                                                                <p data-v-8ac12c0c=""
                                                                    class="font-size-12 line-height-16 font-weight-600 text-uppercase text-overflow-ellipsis overflow-hidden">
                                                                    Feature effectiveness</p>
                                                                <p data-v-8ac12c0c=""
                                                                    class="mt-3 text-overflow-ellipsis overflow-hidden text-gray-85">
                                                                    Once you've processed more donations using adaptive
                                                                    cost coverage, you'll stats about its effectiveness
                                                                    here.</p>
                                                                <div data-v-8ac12c0c=""
                                                                    class="mt-3 text-overflow-ellipsis overflow-hidden">
                                                                    <a data-v-8ac12c0c=""
                                                                        href="/AHRLVFYF/campaigns?smartFee=disabled"
                                                                        class="d-inline-block font-weight-500 focus-outline focus-outline-minus-2">Enable
                                                                        adaptive cost coverage on more campaigns <span
                                                                            data-v-8ac12c0c=""
                                                                            class="icon-slot d-inline-block icon-slot-16">
                                                                            <span class="p-abs centered font-size-16">
                                                                                <svg data-v-8ac12c0c="" svg-inline=""
                                                                                    focusable="false"
                                                                                    role="presentation" width="24"
                                                                                    height="24" viewBox="0 0 24 24"
                                                                                    fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    class="icon-stroke icon-stroke-2 d-block">
                                                                                    <path data-v-8ac12c0c=""
                                                                                        d="M5 12h14m0 0l-7-7m7 7l-7 7"
                                                                                        stroke="#fff"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                    <path data-v-8ac12c0c=""
                                                                                        opacity=".72"
                                                                                        d="M5 12h14m0 0l-7-7m7 7l-7 7"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                                <span data-v-8ac12c0c=""
                                                    class="c-field-value d-flex align-items-start p-rel line-height-24 cursor-pointer">
                                                    <span data-v-8ac12c0c="" class="c-field-value-background"></span>
                                                    <span data-v-8ac12c0c=""
                                                        class="icon-slot flex-shrink-0 mr-1 icon-slot-20">
                                                        <span class="p-abs centered font-size-20">
                                                            <img data-v-8ac12c0c=""
                                                                src="https://static.fundraiseup.com/images/dashboard/components/ai-icon.92e5a6be640a.svg"
                                                                alt="" class="d-block icon">
                                                        </span>
                                                    </span>
                                                    <span data-v-8ac12c0c=""
                                                        class="p-rel font-size-14">Adaptive</span>
                                                </span>
                                            </span>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Used suggested amount</div>
                                            <div class="d-flex justify-content-end">
                                                <div>72%</div>
                                                <div class="icon-slot flex-shrink-0 ml-4 icon-slot-18"
                                                    data-original-title="Percentage of donations made using one of the suggested amounts (including recurring plans first created from a suggested amount)."
                                                    title="">
                                                    <span
                                                        class="p-abs centered font-size-18 text-gray-85-hover-gray-100">
                                                        <svg svg-inline="" focusable="false" role="presentation"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke-width="1.4"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="d-block icon-stroke">
                                                            <path
                                                                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <circle cx="12" cy="17" r=".7"
                                                                fill="currentColor"></circle>
                                                            <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Mobile</div>
                                            <div class="d-flex justify-content-end">
                                                <div>74%</div>
                                                <div class="icon-slot flex-shrink-0 ml-4 icon-slot-18"
                                                    data-original-title="Percentage of donations made from a phone or tablet (including recurring plans first created on a phone or tablet)."
                                                    title="">
                                                    <span
                                                        class="p-abs centered font-size-18 text-gray-85-hover-gray-100">
                                                        <svg svg-inline="" focusable="false" role="presentation"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke-width="1.4"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="d-block icon-stroke">
                                                            <path
                                                                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <circle cx="12" cy="17" r=".7"
                                                                fill="currentColor"></circle>
                                                            <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex justify-content-between px-6 py-4">
                                            <div class="flex-grow-1 flex-basis-0 min-w-0 mr-4">
                                                Desktop</div>
                                            <div class="d-flex justify-content-end">
                                                <div>26%</div>
                                                <div class="icon-slot flex-shrink-0 ml-4 icon-slot-18"
                                                    data-original-title="Percentage of donations made from a desktop computer (including recurring plans first created on a desktop computer)."
                                                    title="">
                                                    <span
                                                        class="p-abs centered font-size-18 text-gray-85-hover-gray-100">
                                                        <svg svg-inline="" focusable="false" role="presentation"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke-width="1.4"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="d-block icon-stroke">
                                                            <path
                                                                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                                                stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <circle cx="12" cy="17" r=".7"
                                                                fill="currentColor"></circle>
                                                            <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"
                                                                stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 d-flex">
                        <div class="panel w-100 min-w-0 d-flex flex-column">
                            <div>
                                <div class="px-6 py-4 font-weight-600 text-truncate">Payment
                                    methods</div>
                                <hr class="my-0">
                            </div>
                            <div class="flex-grow-1 d-flex p-rel">
                                <div class="w-100 d-flex flex-column">
                                    <div currency="USD" filters="[object Object]" bis_skin_checked="1">
                                        <div class="py-2" style="min-height:280px" bis_skin_checked="1">
                                            <div bis_skin_checked="1">
                                                <div class="d-flex align-self-center px-6 my-3" bis_skin_checked="1">
                                                    <div class="w-45 text-truncate" bis_skin_checked="1">
                                                        <div class="d-flex align-items-center" bis_skin_checked="1">
                                                            <div class="mr-2" bis_skin_checked="1">
                                                                <div class="icon-slot icon-slot-18"
                                                                    bis_skin_checked="1">
                                                                    <div class="p-abs centered font-size-18 text-gray-85"
                                                                        bis_skin_checked="1">
                                                                        <svg aria-hidden="true"
                                                                            class="icon-stroke d-block svg-icon">
                                                                            <use
                                                                                xlink:href="#icon-payment/icons/credit-card-icon">
                                                                            </use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mr-2" bis_skin_checked="1">Credit cards
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-55" bis_skin_checked="1">
                                                        <div class="d-flex align-items-center" bis_skin_checked="1">
                                                            <div class="mr-2 min-w-em-3 font-weight-600 text-right"
                                                                bis_skin_checked="1">70%</div>
                                                            <div class="flex-grow-1 min-w-0" bis_skin_checked="1">
                                                                <div class="bg-success" style="height:20px;width:70%"
                                                                    bis_skin_checked="1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div bis_skin_checked="1">
                                                <div class="d-flex align-self-center px-6 my-3" bis_skin_checked="1">
                                                    <div class="w-45 text-truncate" bis_skin_checked="1">
                                                        <div class="d-flex align-items-center" bis_skin_checked="1">
                                                            <div class="mr-2" bis_skin_checked="1">
                                                                <div class="icon-slot icon-slot-18"
                                                                    bis_skin_checked="1">
                                                                    <div class="p-abs centered font-size-18 text-gray-85"
                                                                        bis_skin_checked="1">
                                                                        <svg aria-hidden="true"
                                                                            class="icon-stroke d-block svg-icon">
                                                                            <use
                                                                                xlink:href="#icon-payment/icons/paypal-icon">
                                                                            </use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mr-2" bis_skin_checked="1">PayPal</div>
                                                        </div>
                                                    </div>
                                                    <div class="w-55" bis_skin_checked="1">
                                                        <div class="d-flex align-items-center" bis_skin_checked="1">
                                                            <div class="mr-2 min-w-em-3 font-weight-600 text-right"
                                                                bis_skin_checked="1">22%</div>
                                                            <div class="flex-grow-1 min-w-0" bis_skin_checked="1">
                                                                <div class="bg-success" style="height:20px;width:22%"
                                                                    bis_skin_checked="1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div bis_skin_checked="1">
                                                <div class="d-flex align-self-center px-6 my-3" bis_skin_checked="1">
                                                    <div class="w-45 text-truncate" bis_skin_checked="1">
                                                        <div class="d-flex align-items-center" bis_skin_checked="1">
                                                            <div class="mr-2" bis_skin_checked="1">
                                                                <div class="icon-slot icon-slot-18"
                                                                    bis_skin_checked="1">
                                                                    <div class="p-abs centered font-size-18 text-gray-85"
                                                                        bis_skin_checked="1">
                                                                        <svg aria-hidden="true"
                                                                            class="icon-stroke d-block svg-icon">
                                                                            <use
                                                                                xlink:href="#icon-payment/icons/google-pay-icon">
                                                                            </use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mr-2" bis_skin_checked="1">Google Pay</div>
                                                        </div>
                                                    </div>
                                                    <div class="w-55" bis_skin_checked="1">
                                                        <div class="d-flex align-items-center" bis_skin_checked="1">
                                                            <div class="mr-2 min-w-em-3 font-weight-600 text-right"
                                                                bis_skin_checked="1">8%</div>
                                                            <div class="flex-grow-1 min-w-0" bis_skin_checked="1">
                                                                <div class="bg-success" style="height:20px;width:8%"
                                                                    bis_skin_checked="1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div bis_skin_checked="1">
                                                <div class="d-flex align-self-center px-6 my-3" bis_skin_checked="1">
                                                    <div class="w-45 text-truncate" bis_skin_checked="1">
                                                        <div class="d-flex align-items-center" bis_skin_checked="1">
                                                            <div class="mr-2" bis_skin_checked="1">
                                                                <div class="icon-slot icon-slot-18"
                                                                    bis_skin_checked="1">
                                                                    <div class="p-abs centered font-size-18 text-gray-85"
                                                                        bis_skin_checked="1">
                                                                        <svg aria-hidden="true"
                                                                            class="icon-stroke d-block svg-icon">
                                                                            <use
                                                                                xlink:href="#icon-payment/icons/apple-pay-icon">
                                                                            </use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mr-2" bis_skin_checked="1">Apple Pay</div>
                                                        </div>
                                                    </div>
                                                    <div class="w-55" bis_skin_checked="1">
                                                        <div class="d-flex align-items-center" bis_skin_checked="1">
                                                            <div class="mr-2 min-w-em-3 font-weight-600 text-right"
                                                                bis_skin_checked="1">&lt; 1%</div>
                                                            <div class="flex-grow-1 min-w-0" bis_skin_checked="1">
                                                                <div class="bg-success" style="height:20px;width:.5%"
                                                                    bis_skin_checked="1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="panel w-100 min-w-0 d-flex flex-column">
                            <div>
                                <div class="px-6 py-4 font-weight-600 text-truncate"> Donations by hour </div>
                                <hr class="my-0">
                            </div>
                            <div class="flex-grow-1 d-flex p-rel">
                                <div class="w-100 d-flex flex-column">
                                    <div class="py-4 px-6 mt-auto w-100 flex-grow-1 d-flex flex-column">
                                        <!---->
                                        <div class="overflow-hidden flex-grow-1">
                                            <canvas id="barChartDonationHour" style="height: 248px; width: 342px;"
                                                width="427" height="310">
                                            </canvas>
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="panel w-100 min-w-0 d-flex flex-column">
                            <div>
                                <div class="px-6 py-4 font-weight-600 text-truncate"> Donations by day </div>
                                <hr class="my-0">
                            </div>
                            <div class="flex-grow-1 d-flex p-rel">
                                <div class="w-100 d-flex flex-column">
                                    <div class="py-4 px-6 mt-auto w-100 flex-grow-1 d-flex flex-column"
                                        filters="[object Object]" allowed-payment-options="">
                                        <!---->
                                        <div class="overflow-hidden flex-grow-1">
                                            <canvas id="barChartDonationDay"
                                                style="height: 248px; width: 342px;" width="427"
                                                height="310" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @assets
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @endassets

    @script
        <script>
            new Chart(document.getElementById('lineChartDonation'), {
                type: 'line',
                data: {
                    labels: @json($lineChartDonationLabels),
                    datasets: [{
                        label: "Raised",
                        data: @json($lineChartDonationDatasetSum),
                        dataNew: @json($lineChartDonationDatasetCount),
                        backgroundColor: "#1675ac",
                        borderColor: "#1675ac",
                        borderWidth: 2,
                        hoverBackgroundColor: "#1675ac",
                        hoverBorderColor: "#1675ac",
                    }]
                },
                options: {
                    scales: {
                        y: {
                            display: false
                        },
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            displayColors: false,
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) {
                                        label += ' $';
                                    }
                                    if (context.parsed.y !== null) {
                                        label += context.parsed.y + ' across ' + context.dataset.dataNew[context
                                            .parsed.x] + ' donation';
                                    }
                                    return label;
                                }
                            },
                        }
                    },
                }
            });

            new Chart(document.getElementById('barChartDonationHour'), {
                type: 'bar',
                data: {
                    labels: @json($barChartDonationHourLabels),
                    datasets: [{
                        label: "Raised",
                        data: @json($barChartDonationHourDatasetSum),
                        dataNew: @json($barChartDonationHourDatasetCount),
                        backgroundColor: "#1675ac",
                        borderColor: "#1675ac",
                        borderWidth: 2,
                        hoverBackgroundColor: "#1675ac",
                        hoverBorderColor: "#1675ac",
                    }]
                },
                options: {
                    scales: {
                        y: {
                            display: false
                        },
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            displayColors: false,
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) {
                                        label += ' $';
                                    }
                                    if (context.parsed.y !== null) {
                                        label += context.parsed.y + ' across ' + context.dataset.dataNew[context
                                            .parsed.x] + ' donation';
                                    }
                                    return label;
                                }
                            },
                        }
                    },
                }
            });



            new Chart(document.getElementById('barChartDonationDay'), {
                type: 'bar',
                data: {
                    labels: @json($barChartDonationDayLabels),
                    datasets: [{
                        label: "Raised",
                        data: @json($barChartDonationDayDatasetSum),
                        dataNew: @json($barChartDonationDayDatasetCount),
                        backgroundColor: "#1675ac",
                        borderColor: "#1675ac",
                        borderWidth: 2,
                        hoverBackgroundColor: "#1675ac",
                        hoverBorderColor: "#1675ac",
                    }]
                },
                options: {
                    scales: {
                        y: {
                            display: false
                        },
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            displayColors: false,
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) {
                                        label += ' $';
                                    }
                                    if (context.parsed.y !== null) {
                                        label += context.parsed.y + ' across ' + context.dataset.dataNew[context
                                            .parsed.x] + ' donation';
                                    }
                                    return label;
                                }
                            },
                        }
                    },
                }
            });
        </script>
    @endscript
</div>
