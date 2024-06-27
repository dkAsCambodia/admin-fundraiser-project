<div class="content-row">
    <div class="d-table-cell text-top">
        <div class="h-100">
            <div class="container mt-6 mt-xl-10 d-flex flex-column h-100">
                @include('livewire.campaign.navbar')
                <div data-v-09345d12="" class="c-common-tab flex-grow-1 d-flex flex-column">
                    <form wire:submit="save">
                        <div data-v-09345d12="" class="d-flex flex-column panel mb-0 flex-grow-1 min-h-0">
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

                            <div data-v-09345d12="" class="flex-grow-1 min-w-0">
                                <div data-v-09345d12="">
                                    <!---->
                                    <div class="px-6 px-xl-8 pt-6 pt-xl-8 pb-10 pb-xl-12">
                                    <div class="max-w-px-700">
                                        <p data-qa="frequencies-title" class="mb-8">
                                            Choose up to two donation frequencies for this campaign. The default frequency will be preselected when the donor opens the Checkout form, and they'll be able to toggle between options if a second is added. You can only use frequencies that are enabled in
                                            <a href="/insights" wire:navigate class="focus-outline font-weight-500" target="_blank">your Dashboard settings </a> .
                                        </p>
                                        <div class="max-w-px-550">
                                        <label for="v-1706330978554-defaultFrequency" class="mb-2">Default frequency<span class="text-danger">*</span></label>
                                        <select
                                            id="v-1706330978554-defaultFrequency"
                                            data-qa="default-frequency-dropdown"
                                            class="form-control custom-select mb-6"
                                            style="max-width: 280px;"
                                            wire:model="default_frequency">
                                            <option class="text-capitalize" value=""> Select </option>
                                            <option class="text-capitalize" value="once"> Once </option>
                                            <option class="text-capitalize" value="daily"> Daily </option>
                                            <option class="text-capitalize" value="weekly"> Weekly </option>
                                            <option class="text-capitalize" value="biweekly"> Biweekly </option>
                                            <option class="text-capitalize" value="every4weeks"> Every 4 weeks </option>
                                            <option class="text-capitalize" value="monthly"> Monthly </option>
                                            <option class="text-capitalize" value="bimonthly"> Bimonthly </option>
                                            <option class="text-capitalize" value="quarterly"> Quarterly </option>
                                            <option class="text-capitalize" value="semiannual"> Semiannually </option>
                                            <option class="text-capitalize" value="annual"> Annually </option>
                                        </select>
                                        @error('default_frequency')
                                            <small class="form-text text-muted text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror

                                        <label for="v-1706330978554-additionalFrequency" class="mb-2">Second frequency</label>
                                        <div class="d-flex align-items-center">
                                            <select
                                                id="v-1706330978554-additionalFrequency"
                                                data-qa="second-frequency-dropdown"
                                                class="form-control custom-select min-w-0"
                                                style="flex-basis: 280px;"
                                                wire:model="second_frequency">
                                            <option class="text-capitalize" value=""> Select </option>
                                            <option class="text-capitalize" value="once"> Once </option>
                                            <option class="text-capitalize" value="daily"> Daily </option>
                                            <option class="text-capitalize" value="weekly"> Weekly </option>
                                            <option class="text-capitalize" value="biweekly"> Biweekly </option>
                                            <option class="text-capitalize" value="every4weeks"> Every 4 weeks </option>
                                            <option class="text-capitalize" value="monthly"> Monthly </option>
                                            <option class="text-capitalize" value="bimonthly"> Bimonthly </option>
                                            <option class="text-capitalize" value="quarterly"> Quarterly </option>
                                            <option class="text-capitalize" value="semiannual"> Semiannually </option>
                                            <option class="text-capitalize" value="annual"> Annually </option>
                                            </select>

                                            @error('second_frequency')
                                                <small class="form-text text-muted text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                            <button type="button" data-qa="delete-frequency-button" class="btn-icon btn-icon-default flex-shrink-0 ml-2">
                                            <span class="icon-slot icon-slot-18">
                                                <span class="p-abs centered font-size-18 ">
                                                <svg svg-inline="" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="icon-stroke d-block">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
