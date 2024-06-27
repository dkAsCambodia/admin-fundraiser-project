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
                                    <div data-v-28de74e8="" class="c-menu-items d-flex d-md-block border-top-radius-base">
                                        <div data-v-28de74e8="" class="d-md-none flex-shrink-0 pl-3"></div>
                                        @include('livewire.campaign.sidebar')
                                        <div data-v-28de74e8="" class="d-md-none flex-shrink-0 pl-3"></div>
                                    </div>
                                </div>


                                <div data-v-09345d12="" class="flex-grow-1 min-w-0" >
                                    <div data-v-ee4eaf20="" data-v-09345d12="" >
                                        <div data-v-ee4eaf20="" class="px-6 px-xl-8 pt-6 pt-xl-8 pb-10 pb-xl-12"
                                            >
                                            <div data-v-ee4eaf20="" class="max-w-px-700" >
                                                <p data-v-ee4eaf20="" class="mb-8">You can change the list of suggested
                                                    donation amounts. Larger suggested amounts increase the amount each
                                                    donor gives, while smaller suggested amounts increase the number of
                                                    donors contributing.</p>
                                                <div data-v-ee4eaf20="" class="mb-8" style="max-width:450px"
                                                    >
                                                    <div
                                                        data-v-ee4eaf20=""
                                                        data-qa="suggested-amounts-tabs"
                                                        class="tabs"
                                                    >
                                                        <div data-v-ee4eaf20="" tabindex="0"
                                                            data-qa="suggested-amounts-first-tab"
                                                            class="tab focus-outline focus-outline-minus-2 px-sm-5 active"
                                                            >
                                                            one-time
                                                        </div>
                                                    </div>
                                                    <div data-v-ee4eaf20="" class="c-tab p-3 p-sm-5" >
                                                        <div data-v-ee4eaf20="" style="max-width:408px">
                                                            <div class="mb-5">
                                                                <label data-v-ee4eaf20="" for="defaultAmount"
                                                                    class="mb-2">Default one-time donation amount<span class="text-danger">*</span></label>
                                                                <input data-v-ee4eaf20="" type="text"
                                                                    class="c-donation-control form-control control-price"
                                                                    wire:model="defaultAmount"
                                                                    id="defaultAmount"
                                                                >
                                                                @error('defaultAmount')
                                                                    <small class="form-text text-muted text-danger">
                                                                        {{ $message }}
                                                                    </small>
                                                                @enderror
                                                            </div>

                                                            <label data-v-ee4eaf20="" class="mb-2">Suggested donation
                                                                amount presets<span class="text-danger">*</span></label>
                                                            <div data-v-ee4eaf20="" class="d-flex flex-wrap mb-minus-3"
                                                                >
                                                                <input
                                                                    data-v-ee4eaf20=""
                                                                    type="number"
                                                                    class="c-donation-control form-control mb-3"
                                                                    placeholder="$1000"
                                                                    wire:model="suggestedAmount.one"
                                                                >
                                                                <input
                                                                    data-v-ee4eaf20=""
                                                                    type="number"
                                                                    class="c-donation-control form-control mb-3"
                                                                    placeholder="$500"
                                                                    wire:model="suggestedAmount.two"
                                                                >
                                                                <input
                                                                    data-v-ee4eaf20=""
                                                                    type="number"
                                                                    class="c-donation-control form-control mb-3"
                                                                    placeholder="$250"
                                                                    wire:model="suggestedAmount.three"
                                                                >
                                                                <input
                                                                    data-v-ee4eaf20=""
                                                                    type="number"
                                                                    class="c-donation-control form-control mb-3"
                                                                    placeholder="$100"
                                                                    wire:model="suggestedAmount.four"
                                                                >
                                                                <input
                                                                    data-v-ee4eaf20=""
                                                                    type="number"
                                                                    class="c-donation-control form-control mb-3"
                                                                    placeholder="$50"
                                                                    wire:model="suggestedAmount.five"
                                                                >
                                                                <input
                                                                    data-v-ee4eaf20=""
                                                                    type="number"
                                                                    class="c-donation-control form-control mb-3"
                                                                    placeholder="$25"
                                                                    wire:model="suggestedAmount.six"
                                                                >
                                                            </div>

                                                            @error('suggestedAmount.*')
                                                                <small class="form-text text-muted text-danger">
                                                                    {{ $message }}
                                                                </small>
                                                            @enderror

                                                            <p data-v-ee4eaf20=""
                                                                class="mt-3 font-size-14 line-height-20">List six suggested
                                                                donation amounts. It is important to offer a range of
                                                                suggested amounts on your widget — if your lowest preset is
                                                                $100, the donors who can only give $10 may feel as if their
                                                                contribution won’t matter, and may choose not to contribute.
                                                            </p>
                                                        </div>
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
                                        <button type="submit" class="btn btn-color-transition btn-primary m-2"
                                            name="action-save" data-qa="dashboard-campaign-save-changes-button">&nbsp;Save
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
