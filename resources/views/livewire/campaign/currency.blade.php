<div class="content-row">
    <div class="d-table-cell text-top">
        <div class="h-100">
            <div class="container mt-6 mt-xl-10 d-flex flex-column h-100">
                @include('livewire.campaign.navbar')
                <div data-v-09345d12="" class="c-common-tab flex-grow-1 d-flex flex-column">
                    <div data-v-09345d12="" class="d-flex flex-column panel mb-0 flex-grow-1 min-h-0">
                        <form wire:submit="save">
                            <div data-v-09345d12="" class="d-md-flex flex-grow-1 min-h-0">
                                <div data-v-28de74e8="" class="c-menu border-top-left-radius-base flex-shrink-0"
                                    data-v-09345d12="">
                                    <div data-v-28de74e8=""
                                        class="c-menu-items d-flex d-md-block border-top-radius-base">
                                        <div data-v-28de74e8="" class="d-md-none flex-shrink-0 pl-3"></div>
                                        @include('livewire.campaign.sidebar')
                                        <div data-v-28de74e8="" class="d-md-none flex-shrink-0 pl-3"></div>
                                    </div>
                                </div>


                                <div data-v-09345d12="" class="flex-grow-1 min-w-0" bis_skin_checked="1">
                                    <div data-v-09345d12="" bis_skin_checked="1">
                                        <div class="px-6 px-xl-8 pt-6 pt-xl-8 pb-10 pb-xl-12" bis_skin_checked="1">
                                            <div class="max-w-px-700" bis_skin_checked="1">
                                                <p class="mb-8">Choose a default currency for this campaign's
                                                    Checkout,
                                                    and decide whether to give your donors the option to choose their
                                                    own.
                                                    If collecting donations from a range of locations, you can enable
                                                    currency autodetect.</p>
                                                <div class="max-w-px-550 mb-2" bis_skin_checked="1">
                                                    <label for="v-1704980018228-defaultCurrency" class="mb-2">Default
                                                        Checkout currency<span class="text-danger">*</span></label>
                                                    <select id="v-1704980018228-defaultCurrency"
                                                        class="form-control custom-select mb-6" style="max-width:280px">
                                                        <option value="USD">USD · US Dollar</option>
                                                        <option value="AED">AED · United Arab Emirates Dirham
                                                        </option>
                                                        <option value="AFN">AFN · Afghan Afghani</option>
                                                        <option value="ALL">ALL · Albanian Lek</option>
                                                        <option value="AMD">AMD · Armenian Dram</option>
                                                        <option value="ANG">ANG · Netherlands Antillean Guilder
                                                        </option>
                                                        <option value="AOA">AOA · Angolan Kwanza</option>
                                                        <option value="ARS">ARS · Argentine Peso</option>
                                                        <option value="AUD">AUD · Australian Dollar</option>
                                                        <option value="AWG">AWG · Aruban Florin</option>
                                                        <option value="AZN">AZN · Azerbaijani Manat</option>
                                                        <option value="BAM">BAM · Bosnia-Herzegovina Convertible Mark
                                                        </option>
                                                        <option value="BBD">BBD · Barbadian Dollar</option>
                                                        <option value="BDT">BDT · Bangladeshi Taka</option>
                                                        <option value="BGN">BGN · Bulgarian Lev</option>
                                                        <option value="BIF">BIF · Burundian Franc</option>
                                                        <option value="BMD">BMD · Bermudan Dollar</option>
                                                        <option value="BND">BND · Brunei Dollar</option>
                                                        <option value="BOB">BOB · Bolivian Boliviano</option>
                                                        <option value="BRL">BRL · Brazilian Real</option>
                                                        <option value="BSD">BSD · Bahamian Dollar</option>
                                                        <option value="BWP">BWP · Botswanan Pula</option>
                                                        <option value="BZD">BZD · Belize Dollar</option>
                                                        <option value="CAD">CAD · Canadian Dollar</option>
                                                        <option value="CDF">CDF · Congolese Franc</option>
                                                        <option value="CHF">CHF · Swiss Franc</option>
                                                        <option value="CLP">CLP · Chilean Peso</option>
                                                        <option value="CNY">CNY · Chinese Yuan</option>
                                                        <option value="COP">COP · Colombian Peso</option>
                                                        <option value="CRC">CRC · Costa Rican Colón</option>
                                                        <option value="CVE">CVE · Cape Verdean Escudo</option>
                                                        <option value="CZK">CZK · Czech Koruna</option>
                                                        <option value="DJF">DJF · Djiboutian Franc</option>
                                                        <option value="DKK">DKK · Danish Krone</option>
                                                        <option value="DOP">DOP · Dominican Peso</option>
                                                        <option value="DZD">DZD · Algerian Dinar</option>
                                                        <option value="EGP">EGP · Egyptian Pound</option>
                                                        <option value="ETB">ETB · Ethiopian Birr</option>
                                                        <option value="EUR">EUR · Euro</option>
                                                        <option value="FJD">FJD · Fijian Dollar</option>
                                                        <option value="FKP">FKP · Falkland Islands Pound</option>
                                                        <option value="GBP">GBP · British Pound</option>
                                                        <option value="GEL">GEL · Georgian Lari</option>
                                                        <option value="GIP">GIP · Gibraltar Pound</option>
                                                        <option value="GMD">GMD · Gambian Dalasi</option>
                                                        <option value="GNF">GNF · Guinean Franc</option>
                                                        <option value="GTQ">GTQ · Guatemalan Quetzal</option>
                                                        <option value="GYD">GYD · Guyanaese Dollar</option>
                                                        <option value="HKD">HKD · Hong Kong Dollar</option>
                                                        <option value="HNL">HNL · Honduran Lempira</option>
                                                        <option value="HTG">HTG · Haitian Gourde</option>
                                                        <option value="HUF">HUF · Hungarian Forint</option>
                                                        <option value="IDR">IDR · Indonesian Rupiah</option>
                                                        <option value="ILS">ILS · Israeli New Shekel</option>
                                                        <option value="INR">INR · Indian Rupee</option>
                                                        <option value="ISK">ISK · Icelandic Króna</option>
                                                        <option value="JMD">JMD · Jamaican Dollar</option>
                                                        <option value="JPY">JPY · Japanese Yen</option>
                                                        <option value="KES">KES · Kenyan Shilling</option>
                                                        <option value="KGS">KGS · Kyrgystani Som</option>
                                                        <option value="KHR">KHR · Cambodian Riel</option>
                                                        <option value="KMF">KMF · Comorian Franc</option>
                                                        <option value="KRW">KRW · South Korean Won</option>
                                                        <option value="KYD">KYD · Cayman Islands Dollar</option>
                                                        <option value="KZT">KZT · Kazakhstani Tenge</option>
                                                        <option value="LAK">LAK · Laotian Kip</option>
                                                        <option value="LBP">LBP · Lebanese Pound</option>
                                                        <option value="LKR">LKR · Sri Lankan Rupee</option>
                                                        <option value="LRD">LRD · Liberian Dollar</option>
                                                        <option value="LSL">LSL · Lesotho Loti</option>
                                                        <option value="MAD">MAD · Moroccan Dirham</option>
                                                        <option value="MDL">MDL · Moldovan Leu</option>
                                                        <option value="MGA">MGA · Malagasy Ariary</option>
                                                        <option value="MKD">MKD · Macedonian Denar</option>
                                                        <option value="MMK">MMK · Myanmar Kyat</option>
                                                        <option value="MNT">MNT · Mongolian Tugrik</option>
                                                        <option value="MOP">MOP · Macanese Pataca</option>
                                                        <option value="MRO">MRO · Mauritanian Ouguiya (1973–2017)
                                                        </option>
                                                        <option value="MUR">MUR · Mauritian Rupee</option>
                                                        <option value="MVR">MVR · Maldivian Rufiyaa</option>
                                                        <option value="MWK">MWK · Malawian Kwacha</option>
                                                        <option value="MXN">MXN · Mexican Peso</option>
                                                        <option value="MYR">MYR · Malaysian Ringgit</option>
                                                        <option value="MZN">MZN · Mozambican Metical</option>
                                                        <option value="NAD">NAD · Namibian Dollar</option>
                                                        <option value="NGN">NGN · Nigerian Naira</option>
                                                        <option value="NIO">NIO · Nicaraguan Córdoba</option>
                                                        <option value="NOK">NOK · Norwegian Krone</option>
                                                        <option value="NPR">NPR · Nepalese Rupee</option>
                                                        <option value="NZD">NZD · New Zealand Dollar</option>
                                                        <option value="PAB">PAB · Panamanian Balboa</option>
                                                        <option value="PEN">PEN · Peruvian Sol</option>
                                                        <option value="PGK">PGK · Papua New Guinean Kina</option>
                                                        <option value="PHP">PHP · Philippine Peso</option>
                                                        <option value="PKR">PKR · Pakistani Rupee</option>
                                                        <option value="PLN">PLN · Polish Zloty</option>
                                                        <option value="PYG">PYG · Paraguayan Guarani</option>
                                                        <option value="QAR">QAR · Qatari Riyal</option>
                                                        <option value="RON">RON · Romanian Leu</option>
                                                        <option value="RSD">RSD · Serbian Dinar</option>
                                                        <option value="RUB">RUB · Russian Ruble</option>
                                                        <option value="RWF">RWF · Rwandan Franc</option>
                                                        <option value="SAR">SAR · Saudi Riyal</option>
                                                        <option value="SBD">SBD · Solomon Islands Dollar</option>
                                                        <option value="SCR">SCR · Seychellois Rupee</option>
                                                        <option value="SEK">SEK · Swedish Krona</option>
                                                        <option value="SGD">SGD · Singapore Dollar</option>
                                                        <option value="SHP">SHP · St. Helena Pound</option>
                                                        <option value="SLL">SLL · Sierra Leonean Leone (1964—2022)
                                                        </option>
                                                        <option value="SOS">SOS · Somali Shilling</option>
                                                        <option value="SRD">SRD · Surinamese Dollar</option>
                                                        <option value="STD">STD · São Tomé &amp; Príncipe Dobra
                                                            (1977–2017)</option>
                                                        <option value="SZL">SZL · Swazi Lilangeni</option>
                                                        <option value="THB">THB · Thai Baht</option>
                                                        <option value="TJS">TJS · Tajikistani Somoni</option>
                                                        <option value="TOP">TOP · Tongan Paʻanga</option>
                                                        <option value="TRY">TRY · Turkish Lira</option>
                                                        <option value="TTD">TTD · Trinidad &amp; Tobago Dollar
                                                        </option>
                                                        <option value="TWD">TWD · New Taiwan Dollar</option>
                                                        <option value="TZS">TZS · Tanzanian Shilling</option>
                                                        <option value="UAH">UAH · Ukrainian Hryvnia</option>
                                                        <option value="USD">USD · US Dollar</option>
                                                        <option value="UYU">UYU · Uruguayan Peso</option>
                                                        <option value="UZS">UZS · Uzbekistani Som</option>
                                                        <option value="VND">VND · Vietnamese Dong</option>
                                                        <option value="VUV">VUV · Vanuatu Vatu</option>
                                                        <option value="WST">WST · Samoan Tala</option>
                                                        <option value="XAF">XAF · Central African CFA Franc</option>
                                                        <option value="XCD">XCD · East Caribbean Dollar</option>
                                                        <option value="XOF">XOF · West African CFA Franc</option>
                                                        <option value="XPF">XPF · CFP Franc</option>
                                                        <option value="YER">YER · Yemeni Rial</option>
                                                        <option value="ZAR">ZAR · South African Rand</option>
                                                        <option value="ZMW">ZMW · Zambian Kwacha</option>
                                                    </select>

                                                    <label data-v-ee4eaf20="" for="goalAmount" class="mb-2">Goal
                                                        amount<span class="text-danger">*</span></label>
                                                    <input placeholder="$50000" type="number"
                                                        class="c-donation-control form-control control-price"
                                                        id="goalAmount" style="max-width:280px" wire:model="goal">
                                                    @error('goal')
                                                        <small class="form-text text-muted text-danger">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror

                                                    {{-- <div class="ui-checkbox" bis_skin_checked="1">
                                                        <label class="ui-checkbox-label">
                                                            <span class="ui-checkbox-control">
                                                                <input type="checkbox"
                                                                    data-qa="change-default-currency-checkbox">
                                                                <span class="ui-checkbox-icon"></span>
                                                            </span>
                                                            <span data-qa="change-default-currency-checkbox-field"
                                                                class="ui-checkbox-text">Allow donors to choose their
                                                                Checkout currency</span>
                                                        </label>
                                                    </div>
                                                    <div class="d-flex mt-4" bis_skin_checked="1">
                                                        <div class="icon-slot flex-shrink-0 mr-2 icon-slot-18"
                                                            bis_skin_checked="1"></div>
                                                        <div class="flex-grow-1 min-width-0" bis_skin_checked="1">
                                                            <div class="mb-3 ui-radio" bis_skin_checked="1">
                                                                <label class="ui-radio-label">
                                                                    <span class="ui-radio-control">
                                                                        <input type="radio" value="true">
                                                                        <span class="ui-radio-icon"></span>
                                                                    </span>
                                                                    <span class="ui-radio-text">For one-time and recurring
                                                                        donations</span>
                                                                </label>
                                                            </div>
                                                            <div class="mb-3 ui-radio" bis_skin_checked="1">
                                                                <label class="ui-radio-label">
                                                                    <span class="ui-radio-control">
                                                                        <input type="radio" value="false">
                                                                        <span class="ui-radio-icon"></span>
                                                                    </span>
                                                                    <span class="ui-radio-text">For one-time donations
                                                                        only</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 ui-checkbox" bis_skin_checked="1">
                                                        <label class="ui-checkbox-label">
                                                            <span class="ui-checkbox-control">
                                                                <input type="checkbox" data-qa="qa">
                                                                <span class="ui-checkbox-icon"></span>
                                                            </span>
                                                            <span data-qa="qa-field"
                                                                class="ui-checkbox-text">Automatically detect each donor's
                                                                default currency using their&nbsp;geolocation.</span>
                                                        </label>
                                                    </div> --}}
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
                                        <button data-qa="dashboard-campaign-preview-button"
                                            class="btn btn-default m-2">
                                            <span class="icon-slot d-inline-block mr-1 icon-slot-18">
                                                <span class="p-abs centered font-size-18">
                                                    <svg svg-inline="" focusable="false" role="presentation"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon-stroke d-block">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                                    </svg>
                                                </span>
                                            </span>Preview </button>
                                        <button type="submit" class="btn btn-color-transition btn-primary m-2"
                                            name="action-save"
                                            data-qa="dashboard-campaign-save-changes-button">&nbsp;Save
                                            changes&nbsp;</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
