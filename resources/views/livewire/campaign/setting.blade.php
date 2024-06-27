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
                                    <div class="px-6 px-xl-8 pt-6 pt-xl-8 pb-10 pb-xl-12" data-v-09345d12="">
                                        <div class="max-w-px-700">
                                            <div class="max-w-px-550">
                                                <div class="mb-6">
                                                    <label for="campaignName" class="mb-2">Campaign name<span class="text-danger">*</span> </label>
                                                    <input type="text" id="campaignName" class="form-control"
                                                        style="max-width:280px" wire:model="title">
                                                    @error('title')
                                                        <small class="form-text text-muted text-danger">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>
                                                {{-- <label for="campaignCode" class="d-inline-flex align-items-start mb-2">
                                                        Campaign slug
                                                        </label>
                                                        <input
                                                            type="text"
                                                            id="campaignCode"
                                                            class="form-control"
                                                            style="max-width:280px"
                                                            wire:model="slug"
                                                        >
                                                        @error('slug')
                                                            <small class="form-text text-muted text-danger">
                                                                {{ $message }}
                                                            </small>
                                                        @enderror --}}
                                            </div>
                                            <hr class="my-8">
                                            <div>
                                                <div class="max-w-px-550">
                                                    <label for="campaignURL" class="mb-1">
                                                        Campaign URL
                                                    </label>
                                                    <p class="font-size-14 line-height-20 mb-3">
                                                        Generate a custom link that allows donors to easily access the
                                                        Checkout for this campaign. You can use letters, numbers,
                                                        hyphens and underscores.
                                                    </p>
                                                    <div class="p-rel" style="max-width:400px">
                                                        <input type="text" placeholder="{{ $causeDetailData->slug }}"
                                                            maxlength="25" id="campaignURL" class="form-control"
                                                            wire:model="slug" readonly>
                                                        <span
                                                            class="p-abs centered-right font-size-14 line-height-20 text-gray-85 mr-3">11/25</span>
                                                    </div>
                                                </div>
                                                <p class="font-size-0 line-height-0 text-break-word mt-4"
                                                    data-qa="checkout-modal-url-block">
                                                    <span
                                                        class="text-nowrap text-gray-85 font-size-14 line-height-20 mr-1">
                                                        Checkout modal
                                                    </span>
                                                    <span class="font-size-14 line-height-20">
                                                        {{ env('SITE_URL') }}cause-detail/<b class="font-weight-500">{{ $causeDetailData->slug }}</b>
                                                    </span>
                                                    <span class="text-nowrap font-size-14 line-height-20">
                                                        <span class="icon-slot icon-slot-34 d-inline-block">
                                                            <button type="button" aria-label="Copy"
                                                                class="btn-icon btn-icon-transparent p-abs centered"
                                                                data-click-id="$21" data-keyup-id="$22"
                                                                data-original-title="Copy" title="">
                                                                <span class="icon-slot icon-slot-18">
                                                                    <span class="p-abs centered font-size-18">
                                                                        <svg svg-inline="" focusable="false"
                                                                            role="presentation"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="d-block icon-stroke">
                                                                            <rect x="9" y="9" width="13"
                                                                                height="13" rx="2"
                                                                                ry="2"></rect>
                                                                            <path
                                                                                d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </button>
                                                        </span>
                                                    </span>
                                                </p>
                                            </div>
                                            <hr class="my-8">
                                            <div class="max-w-px-550">
                                                <h4 class="font-size-16 line-height-24 font-weight-400 mb-1">Campaign
                                                    end date</h4>
                                                <p class="font-size-14 line-height-20 mb-4">
                                                    Select a specific end date for this campaign. On that date, the
                                                    campaign will be disabled and moved to your archive.
                                                </p>
                                                <div class="ui-checkbox">
                                                    <label class="ui-checkbox-label">
                                                        <span class="ui-checkbox-control">
                                                            <input type="checkbox" wire:model.live="setEndDate">
                                                            <span class="ui-checkbox-icon"></span>
                                                        </span>
                                                        <span data-qa="schedule-to-disable-checkbox-field"
                                                            class="ui-checkbox-text">
                                                            Set a date for this campaign to end
                                                        </span>
                                                    </label>
                                                </div>
                                                @if ($setEndDate)
                                                    <div class="d-flex mt-3">
                                                        <div class="icon-slot flex-shrink-0 mr-2 icon-slot-18"></div>
                                                        <div class="flex-grow-1 min-w-0">
                                                            <label for="v-1705380277328-endDate"
                                                                class="d-inline-flex mb-2">
                                                                End date
                                                            </label>
                                                            <div id="v-1705380277328-endDate"
                                                                data-qa="schedule-to-disable-datepicker"
                                                                style="max-width:200px">
                                                                <div class="c-form-group text-nowrap p-rel">
                                                                    <div tabindex="0"
                                                                        class="cursor-pointer d-flex align-items-center inactive text-gray-70 form-control">
                                                                        <div
                                                                            class="icon-slot flex-shrink-0 mr-2 icon-slot-18">
                                                                            <span class="p-abs centered font-size-18">
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
                                                                                    <rect x="3" y="4" width="18"
                                                                                        height="18" rx="2"
                                                                                        ry="2"></rect>
                                                                                    <line x1="16"
                                                                                        y1="2" x2="16"
                                                                                        y2="6">
                                                                                    </line>
                                                                                    <line x1="8"
                                                                                        y1="2" x2="8"
                                                                                        y2="6">
                                                                                    </line>
                                                                                    <line x1="3"
                                                                                        y1="10" x2="21"
                                                                                        y2="10">
                                                                                    </line>
                                                                                </svg>
                                                                            </span>
                                                                        </div>

                                                                        {{-- <div class="flex-grow-1 min-w-0 text-truncate">Select date</div> --}}

                                                                        <input type="date" wire:model="endDate">
                                                                    </div>
                                                                    @error('endDate')
                                                                        <small class="form-text text-muted text-danger">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
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
