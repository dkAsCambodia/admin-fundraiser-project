<div class="content-row">
    <div class="d-table-cell text-top">
        <div class="h-100">
            <div class="container mt-6 mt-xl-10 d-flex flex-column h-100">
                @include('livewire.campaign.navbar')
                <div data-v-09345d12="" class="c-common-tab flex-grow-1 d-flex flex-column">
                    <div data-v-09345d12="" class="d-flex flex-column panel mb-0 flex-grow-1 min-h-0">
                        <div data-v-09345d12="" class="d-md-flex flex-grow-1 min-h-0">
                            <div data-v-28de74e8="" class="c-menu border-top-left-radius-base flex-shrink-0"
                                data-v-09345d12="">
                                <div data-v-28de74e8="" class="c-menu-items d-flex d-md-block border-top-radius-base">
                                    <div data-v-28de74e8="" class="d-md-none flex-shrink-0 pl-3"></div>
                                    @include('livewire.campaign.sidebar')
                                    <div data-v-28de74e8="" class="d-md-none flex-shrink-0 pl-3"></div>
                                </div>
                            </div>

                            <div data-v-09345d12="" class="flex-grow-1 min-w-0" bis_skin_checked="1">
                                <div class="px-6 px-xl-8 pt-6 pt-xl-8 pb-10 pb-xl-12" data-v-09345d12=""
                                    bis_skin_checked="1">
                                    <div class="max-w-px-700" bis_skin_checked="1">
                                        <p class="mb-8">
                                            Provide donors with various familiar payment options, including
                                            cryptocurrency and stocks, to simplify the
                                            donation process and boost conversion rates.
                                            <a href="https://fundraiseup.com/docs/checkout-payment-methods/"
                                                target="_blank" rel="noopener"
                                                class="d-inline-block font-weight-500 text-nowrap focus-outline">
                                                Learn more
                                                <span class="icon-slot d-inline-block icon-slot-16"><span
                                                        class="p-abs centered font-size-16 "><svg svg-inline=""
                                                            focusable="false" role="presentation" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
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
                                                        </svg></span></span></a>
                                        </p>
                                        <div class="max-w-px-550" bis_skin_checked="1"><label
                                                for="v-1704979480291-defaultDonationType" class="mb-2">Default payment
                                                method</label> <select id="v-1704979480291-defaultDonationType"
                                                data-qa="default-checkout-payment-select"
                                                class="form-control custom-select mb-1" style="max-width: 280px;">
                                                <option data-qa="default-checkout-payment-select-money" value="money">
                                                    Money-based
                                                </option>
                                                <option data-qa="default-checkout-payment-select-crypto" value="crypto">
                                                    Crypto
                                                </option>
                                                <option data-qa="default-checkout-payment-select-stock" value="stock">
                                                    Stock
                                                </option>
                                            </select>
                                            <p class="font-size-14 line-height-20 text-gray-85 mt-1">
                                                This includes cards, wallets, bank debits and any other currency-based
                                                payment methods.
                                            </p> <!---->
                                        </div>
                                        <hr class="mt-8 mb-6">
                                        <div class="max-w-px-550" bis_skin_checked="1">
                                            <h4 class="font-size-16 line-height-24 font-weight-400 mb-1">Additional
                                                payment methods</h4>
                                            <p class="font-size-14 line-height-20 mb-5">
                                                Enable additional payment methods to provide donors with more options
                                                at&nbsp;Checkout.
                                            </p> <!---->
                                            <div class="mt-3 ui-checkbox  " bis_skin_checked="1"><label
                                                    class="ui-checkbox-label "><span class="ui-checkbox-control"><input
                                                            type="checkbox" data-qa="enable-payment-option-crypto"><span
                                                            class="ui-checkbox-icon"></span></span><span
                                                        data-qa="enable-payment-option-crypto-field"
                                                        class="ui-checkbox-text ">
                                                        Crypto
                                                    </span></label>
                                                <div data-qa="enable-payment-option-crypto-hint"
                                                    class="ui-checkbox-hint" bis_skin_checked="1">
                                                    This lets supporters donate using popular cryptocurrencies like
                                                    Bitcoin and&nbsp;Ethereum.

                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="mt-3 ui-checkbox  " bis_skin_checked="1"><label
                                                    class="ui-checkbox-label "><span class="ui-checkbox-control"><input
                                                            type="checkbox" data-qa="enable-payment-option-stock"><span
                                                            class="ui-checkbox-icon"></span></span><span
                                                        data-qa="enable-payment-option-stock-field"
                                                        class="ui-checkbox-text ">
                                                        Stock
                                                    </span></label>
                                                <div data-qa="enable-payment-option-stock-hint" class="ui-checkbox-hint"
                                                    bis_skin_checked="1">
                                                    This lets supporters donate shares of publicly-traded securities.

                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="flex-shrink-0" data-v-09345d12="">
                            <hr class="my-0">
                            <div class="panel-x-body py-5 border-bottom-radius-base bg-yellow-05">
                                <div class="d-flex m-minus-2 flex-wrap align-items-center justify-content-end">
                                    <button data-qa="dashboard-campaign-preview-button" class="btn btn-default m-2">
                                        <span class="icon-slot d-inline-block mr-1 icon-slot-18">
                                            <span class="p-abs centered font-size-18">
                                                <svg svg-inline="" focusable="false" role="presentation"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon-stroke d-block">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                                </svg>
                                            </span>
                                        </span>Preview </button>
                                    <button type="button" class="btn btn-color-transition btn-primary m-2"
                                        name="action-save" data-qa="dashboard-campaign-save-changes-button">&nbsp;Save
                                        changes&nbsp;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
