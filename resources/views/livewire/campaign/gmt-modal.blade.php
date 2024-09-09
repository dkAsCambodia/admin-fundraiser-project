
<div tabindex="-1" role="dialog" aria-modal="true" class="modal" style="z-index:1051;display:block">
    <div role="document" class="modal-dialog modal-400" style="">
        <div class="modal-content">
            <div class="p-rel">
                <form class="" wire:submit="addGTM">
                    <div class="d-flex justify-content-between pl-6 pr-4 py-4">
                        <div class="mr-3">Add GTM container</div>
                        <div wire:click="closeModal">
                            <div class="icon-slot icon-slot-24 cursor-pointer text-gray-85-hover-gray-70">
                                <div tabindex="0" class="p-abs centered font-size-24 border-radius-2 focus-outline">
                                    <svg svg-inline="" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="icon-stroke d-block">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="px-6 px-xl-10 pt-6 pt-xl-8 pb-10">
                        <div>
                        <div class="mb-2">
                        Enter your GTM container ID below to enable site tags and code snippets for your Campaign Pages.
                            </div>
                            <div class="mb-2">
                            Container ID
                            </div>
                                <input type="text" wire:model="gtm_container" data-qa="gtm-container-input" class="form-control">
                                @error('gtm_container')
                                    <small class="form-text text-muted text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="bg-yellow-05 border-bottom-radius-base px-6 py-4">
                        <div class="d-flex justify-content-end m-minus-2 flex-wrap">
                            <div class="m-2">
                                <button wire:click="closeModal" data-qa="create-campaign-modal-cancel-button" class="btn btn-default">Cancel</button>
                            </div>
                            <div class="m-2">
                                <button type="submit" class="btn btn-color-transition btn btn-primary" data-qa="success-button">Add container</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

