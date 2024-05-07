<div class="content-row">
    <div class="d-table-cell text-top">
        <div class="h-100">
            <div class="container mt-6 mt-xl-10 d-flex flex-column h-100">
                @include('livewire.campaign.navbar')
                <div class="panel-action mb-0">
                    @if($causeDetailData->status == 1)
                        <div class="panel-x-body d-sm-flex align-items-start justify-content-between py-6"
                           >
                            <div class="min-w-0 max-w-px-750 mr-sm-4 mb-4 mb-sm-0">
                                <h4 class="font-size-16 line-height-24 font-weight-400 mb-2">Disable campaign</h4>
                                <p class="font-size-14 line-height-20">Disabling this campaign will disable its checkout on
                                    your website. The campaign will still appear on the Campaigns page. You can re-enable a
                                    disabled campaign at any time.</p>
                                <div></div>
                            </div>
                            <button
                                type="button"
                                class="btn flex-shrink-0 btn-danger"
                                wire:click="disable"
                                wire:confirm="Are you sure you want to Disable this campaign?"
                            >Disable</button>
                        </div>
                    @else
                        <div class="panel-x-body d-sm-flex align-items-start justify-content-between py-6">
                            <div class="min-w-0 max-w-px-750 mr-sm-4 mb-4 mb-sm-0">
                                <h4 class="font-size-16 line-height-24 font-weight-400 mb-2"> Enable campaign </h4>
                                <p class="font-size-14 line-height-20"> Enabling a campaign makes it accessible to donors once again. All your checkout and email settings will be restored and all associated recurring donations will continue to run as before. </p>
                                <div></div>
                            </div>
                            <button
                                type="button"
                                class="btn flex-shrink-0 btn-default"
                                wire:click="enable"
                                wire:confirm="Are you sure you want to Enable this campaign?"
                            > Enable </button>
                        </div>
                    @endif
                    <hr class="my-0 border-yellow-20">
                    <div class="panel-x-body d-sm-flex align-items-start justify-content-between py-6"
                        data-qa="clone-campaign-button">
                        <div class="min-w-0 max-w-px-750 mr-sm-4 mb-4 mb-sm-0">
                            <h4 class="font-size-16 line-height-24 font-weight-400 mb-2">Delete campaign</h4>
                            <p class="font-size-14 line-height-20">
                                Deleting your campaign will delete your access and all your information on this campaign.</p>
                            <div></div>
                        </div>
                        <button
                            type="button"
                            class="btn flex-shrink-0 btn-default"
                            wire:click="delete"
                            wire:confirm="Are you sure you want to delete this campaign?"
                        >Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
