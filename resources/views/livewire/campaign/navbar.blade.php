<div class="panel flex-shrink-0">
    <div class="px-6 px-xl-8 py-4 py-xl-6">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="min-w-0 mb-4 mb-lg-0 mr-lg-8">
                <div class="font-size-14 line-height-24 mb-2">
                    <div class="d-flex">
                        <div class="mr-2">
                            <div class="icon-slot icon-slot-18">
                                <div class="p-abs centered font-size-18 text-pink-60">
                                    <svg svg-inline="" focusable="false" role="presentation"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon-stroke">
                                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                        <line x1="4" y1="22" x2="4" y2="15"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="my-minus-1">
                            <span qa="campaign-page" class="d-inline-block my-1 mr-1">Campaign</span>
                        </div>
                    </div>
                </div>
                <div class="font-size-20 font-size-sm-24 line-height-28 line-height-sm-30">
                    <div title="{{ $causeDetailData->title }}" data-qa="campaign-name" class="text-truncate">
                        {{ $causeDetailData->title }}
                    </div>
                </div>
            </div>
            <div class="d-lg-flex justify-content-end">
                <div class="d-none d-lg-block mx-4 mx-xl-6 border-left border-gray-50"></div>
                <div class="d-lg-none my-2 border-top border-gray-40"></div>
                <div>
                    <div class="font-size-14 line-height-20 text-gray-85">Slug</div>
                    <div class="d-flex">
                        <div class="mr-2">
                            <div class="text-monospace text-nowrap">
                                {{ $causeDetailData->slug }}
                            </div>
                        </div>
                        <div>
                            <div class="icon-slot icon-slot-34">
                                <div tabindex="0"
                                    class="btn-icon btn-icon-default p-abs centered cursor-pointer text-noselect d-flex align-items-center justify-content-center"
                                    data-click-id="$17" data-keyup-id="$18" data-original-title="Copy" title="">
                                    <svg svg-inline="" focusable="false" role="presentation"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon-stroke">
                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2">
                                        </rect>
                                        <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"></path>
                                    </svg>
                                </div>
                                <div class="btn-icon-holder p-abs centered d-flex align-items-center justify-content-center"
                                    style="display:none" data-original-title="Copied" title="">
                                    <svg svg-inline="" focusable="false" role="presentation"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon-stroke">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0">
    <div class="bg-gray-10 border-bottom-radius-base overflow-x-auto">
        <div class="d-flex">
            <div class="pl-xl-8 pl-6 flex-shrink-0"></div>
            <div>
                <div data-qa="widget-tab-menu" class="tabs-menu">
                    <a href="/campaigns/{{ $causeDetailData->id }}/create" wire:navigate
                        class="tab-menu focus-outline focus-outline-minus-2 @if ($camPage == 'create') active @endif"
                        data-qa="menu-settings-overview">
                        <span>Overview</span>
                    </a>
                    <a href="/campaigns/{{ $causeDetailData->id }}/setting" wire:navigate
                        class="tab-menu focus-outline focus-outline-minus-2 @if ($camPage == 'setting') active @endif"
                        data-qa="menu-settings-settings">
                        <span>Settings</span>
                    </a>
                    <a href="/campaigns/{{ $causeDetailData->id }}/action" wire:navigate
                        class="tab-menu focus-outline focus-outline-minus-2 @if ($camPage == 'action') active @endif">
                        <span>Actions</span>
                    </a>
                </div>
            </div>
            <div class="pl-xl-8 pl-6 flex-shrink-0"></div>
        </div>
    </div>
</div>
