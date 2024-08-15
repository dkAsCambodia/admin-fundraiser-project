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
                                                        class="tabs">
                                                        <div data-v-ee4eaf20="" tabindex="0"
                                                            data-qa="suggested-amounts-first-tab"
                                                            class="tab focus-outline focus-outline-minus-2 px-sm-5 active"
                                                            >
                                                            one-time
                                                        </div>
                                                         <!-- New Changes - New Tab 2 name added-->
                                                        <div data-v-ee4eaf21="" tabindex="0" data-qa="suggested-amounts-second-tab" class="tab focus-outline focus-outline-minus-2 px-sm-5">
                                                        monthly
                                                    </div>
                                                    </div> 
                                                    <!-- New Changes - New Tab 2 name added - End --->
                                                    <div data-v-ee4eaf20="" class="c-tab p-3 p-sm-5" >
                                                       
                                                         <!-- New Changes - Checkbox Added -->
                                                         <div data-v-1d3fc6aa="" class="ui-checkbox" style="max-width: 460px;"><label class="ui-checkbox-label"><span class="ui-checkbox-control">
                                                            <input type="checkbox" wire:model="bundle_status" {{$bundle_status== '1' ? 'checked' : ''}} data-qa="enable-hints-checkbox" id="enableHintsCheckboxOne"><span class="ui-checkbox-icon"></span></span><span data-qa="enable-hints-checkbox-field" class="ui-checkbox-text">
                                              Enable impact descriptions 
                                              </span></label><div data-qa="enable-hints-checkbox-hint" class="ui-checkbox-hint">
                                                Boost supporters’ engagement and generosity by telling them how their funds might be used (e.g. “$30 can buy
                                                school supplies for one child”).
                                              </div></div>
                                              <hr data-v-1d3fc6aa="" class="my-5 my-md-6">
                                                <!-- New Changes - Checkbox Added - End -->
                                                 <!-- New Changes - Checkbox Added - End -->
                                              <div data-v-1d3fc6aa="" id="hintDivOne" style="display:{{ $bundle_status== '1' ? 'block' : 'none' }};">
                                                <p class="mb-5 mb-md-6 font-size-14 line-height-20">
                                                    <span data-qa="hints-description-for-ai-enabled">
      Fill in at least 6 impact descriptions for our AI to choose from. The more you fill in, the better, as the AI will have a wider range of amounts to choose from. Each supporter will see 3 amounts in Checkout.</span></p>
      <div class="d-none d-sm-flex items-end mb-2">
        <div class="shrink-0 pe-2" style="flex-basis: 136px;">Amount</div>
        <div class="grow-1 min-w-0">Impact description</div>
     </div>

     <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778825-amount" class="d-sm-none mb-2">Amount</label>
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" wire:model ="impactAmount1" inputmode="numeric" class="form-control control-price" id="v-1720413778825-amount" placeholder="$5" data-qa="secondTab-amount-option-0-input">
        </div>

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778825-description" class="d-sm-none mb-2">Impact description</label>
            <div data-v-9ef0dda4="" index="0" data-qa="secondTab-hint-option-0-input">
                <input id="v-1720413778825-description" wire:model ="impactDesc1" placeholder="Helps fund an awareness campaign" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;">
            </div>
        </div>
    </div>

    <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778827-amount" class="d-sm-none mb-2">Amount</label>
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" wire:model ="impactAmount2" inputmode="numeric" class="form-control control-price" id="v-1720413778827-amount" placeholder="$10" data-qa="secondTab-amount-option-1-input">
        </div>

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778827-description" class="d-sm-none mb-2">Impact description</label>
            <div data-v-9ef0dda4="" index="1" data-qa="secondTab-hint-option-1-input">
                <input id="v-1720413778827-description" wire:model ="impactDesc2" placeholder="Supports our core operations" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;">
            </div>
        </div>
    </div>

    <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778829-amount" class="d-sm-none mb-2">Amount</label> 
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" wire:model ="impactAmount3" inputmode="numeric" class="form-control control-price" id="v-1720413778829-amount" placeholder="$30" data-qa="secondTab-amount-option-2-input">
        </div> 

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778829-description" class="d-sm-none mb-2">Impact description</label> 
            <div data-v-9ef0dda4="" index="2" data-qa="secondTab-hint-option-2-input">
                <input id="v-1720413778829-description" wire:model ="impactDesc3" placeholder="Enables us to expand our services" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;"> 
            </div>
        </div> 
    </div>
    
    <!--AI Div Start -->
    {{-- <div id="aiDesOne" style="display: none;">
    <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778830-amount" class="d-sm-none mb-2">Amount</label> 
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" inputmode="numeric" class="form-control control-price" id="v-1720413778830-amount" placeholder="$50" data-qa="secondTab-amount-option-3-input">
        </div> 

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778830-description" class="d-sm-none mb-2">Impact description</label> 
            <div data-v-9ef0dda4="" index="3" data-qa="secondTab-hint-option-3-input">
                <input id="v-1720413778830-description" placeholder="Helps fund an awareness campaign" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;"> 
            </div>
        </div> 
    </div> --}}

    {{-- <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778832-amount" class="d-sm-none mb-2">Amount</label> 
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" inputmode="numeric" class="form-control control-price" id="v-1720413778832-amount" placeholder="$100" data-qa="secondTab-amount-option-4-input">
        </div> 

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778832-description" class="d-sm-none mb-2">Impact description</label> 
            <div data-v-9ef0dda4="" index="4" data-qa="secondTab-hint-option-4-input">
                <input id="v-1720413778832-description" placeholder="Supports our core operations" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;"> 
            </div>
        </div>
    </div> --}}
        
        {{-- <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
            <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
                <label data-v-9ef0dda4="" for="v-1720413778833-amount" class="d-sm-none mb-2">Amount</label> 
                <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" inputmode="numeric" class="form-control control-price" id="v-1720413778833-amount" placeholder="$200" data-qa="secondTab-amount-option-5-input">
            </div> 

            <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
                <label data-v-9ef0dda4="" for="v-1720413778833-description" class="d-sm-none mb-2">Impact description</label> 
                <div data-v-9ef0dda4="" index="5" data-qa="secondTab-hint-option-5-input">
                    <input id="v-1720413778833-description" placeholder="Enables us to expand our services" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;"> 
                </div>
            </div> <!---->
        </div>  --}}

        {{-- <button type="button" data-qa="hints-add-new-button" class="btn btn-default d-flex items-center">
            <svg svg-inline="" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="icon-stroke font-size-18 shrink-0 ms-minus-1 me-2">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
      Add amount
    </button> 
    </div><!--AI Div Start --> --}}


    <div class="mt-5 max-w-px-400">
        <label for="v-1720413778834-default-hint" class="mb-2">Default monthly suggested amount</label> 
        <select id="v-1720413778834-default-hint" class="form-control custom-select">
            <option value="0">$5 · Helps fund an awareness campaign</option>
            <option value="1">$10 · Supports our core operations</option>
            <option value="2">30 · Enables us to expand our services</option>
            <option value="3">$50 · Helps fund an awareness campaign</option>
            <option value="4">$100 · Supports our core operations</option>
            <option value="5">$200 · Enables us to expand our services</option>
        </select>
    </div>
</div>
<!-- new changes end --> 
                                                        <div data-v-ee4eaf20="" id="hintDivDefaultOne" style="display:{{ $bundle_status== '1' ? 'none' : 'block' }};max-width:408px">
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
                                                    <!-- New Changes - Tab 2 Added -->
                                                    <div data-v-ee4eaf20="" class="c-tab p-3 p-sm-5 d-none">
                                                         <!-- New Changes - Checkbox Added -->
                                                         <div data-v-1d3fc6aa="" class="ui-checkbox" style="max-width: 460px;"><label class="ui-checkbox-label"><span class="ui-checkbox-control"><input type="checkbox" data-qa="enable-hints-checkbox" id="enableHintsCheckboxMonth"><span class="ui-checkbox-icon"></span></span><span data-qa="enable-hints-checkbox-field" class="ui-checkbox-text">
                                              Enable impact descriptions
                                              </span></label><div data-qa="enable-hints-checkbox-hint" class="ui-checkbox-hint">
                                                Boost supporters’ engagement and generosity by telling them how their funds might be used (e.g. “$30 can buy
                                                school supplies for one child”).
                                              </div></div>
                                              <hr data-v-1d3fc6aa="" class="my-5 my-md-6">
                                             <!-- New Changes - Checkbox Added - End -->
                                              <div data-v-1d3fc6aa="" id="hintDivMonth" style="display: none;">
                                                <p class="mb-5 mb-md-6 font-size-14 line-height-20">
                                                    <span data-qa="hints-description-for-ai-enabled">
      Fill in at least 6 impact descriptions for our AI to choose from. The more you fill in, the better, as the AI will have a wider range of amounts to choose from. Each supporter will see 3 amounts in Checkout.</span></p>
      <div class="d-none d-sm-flex items-end mb-2">
        <div class="shrink-0 pe-2" style="flex-basis: 136px;">Amount</div>
        <div class="grow-1 min-w-0">Impact description</div>
     </div>

     <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778825-amount" class="d-sm-none mb-2">Amount</label>
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" wire:model ="impactAmount1" inputmode="numeric" class="form-control control-price" id="v-1720413778825-amount" placeholder="$5" data-qa="secondTab-amount-option-0-input">
        </div>

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778825-description" class="d-sm-none mb-2">Impact description</label>
            <div data-v-9ef0dda4="" index="0" data-qa="secondTab-hint-option-0-input">
                <input id="v-1720413778825-description" wire:model ="impactDesc1" placeholder="Helps fund an awareness campaign" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;">
            </div>
        </div>
    </div>

    <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778827-amount" class="d-sm-none mb-2">Amount</label>
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" wire:model ="impactAmount2" inputmode="numeric" class="form-control control-price" id="v-1720413778827-amount" placeholder="$10" data-qa="secondTab-amount-option-1-input">
        </div>

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778827-description" class="d-sm-none mb-2">Impact description</label>
            <div data-v-9ef0dda4="" index="1" data-qa="secondTab-hint-option-1-input">
                <input id="v-1720413778827-description" wire:model ="impactDesc2" placeholder="Supports our core operations" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;">
            </div>
        </div>
    </div>

    <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778829-amount" class="d-sm-none mb-2">Amount</label> 
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" wire:model ="impactAmount3" inputmode="numeric" class="form-control control-price" id="v-1720413778829-amount" placeholder="$30" data-qa="secondTab-amount-option-2-input">
        </div> 

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778829-description" class="d-sm-none mb-2">Impact description</label> 
            <div data-v-9ef0dda4="" index="2" data-qa="secondTab-hint-option-2-input">
                <input id="v-1720413778829-description" wire:model ="impactDesc3" placeholder="Enables us to expand our services" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;"> 
            </div>
        </div> 
    </div>
    <!--AI Div Start -->
    {{-- <div id="aiDesMonth" style="display: none;">
    <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778830-amount" class="d-sm-none mb-2">Amount</label> 
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" inputmode="numeric" class="form-control control-price" id="v-1720413778830-amount" placeholder="$50" data-qa="secondTab-amount-option-3-input">
        </div> 

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778830-description" class="d-sm-none mb-2">Impact description</label> 
            <div data-v-9ef0dda4="" index="3" data-qa="secondTab-hint-option-3-input">
                <input id="v-1720413778830-description" placeholder="Helps fund an awareness campaign" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;"> 
            </div>
        </div> <!---->
    </div> --}}

    {{-- <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
        <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
            <label data-v-9ef0dda4="" for="v-1720413778832-amount" class="d-sm-none mb-2">Amount</label> 
            <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" inputmode="numeric" class="form-control control-price" id="v-1720413778832-amount" placeholder="$100" data-qa="secondTab-amount-option-4-input">
        </div> 

        <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
            <label data-v-9ef0dda4="" for="v-1720413778832-description" class="d-sm-none mb-2">Impact description</label> 
            <div data-v-9ef0dda4="" index="4" data-qa="secondTab-hint-option-4-input">
                <input id="v-1720413778832-description" placeholder="Supports our core operations" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;"> 
            </div>
        </div>
        </div>
        
        <div data-v-9ef0dda4="" class="p-rel d-flex items-end items-sm-center flex-wrap flex-sm-nowrap mb-6 mb-sm-4">
            <div data-v-9ef0dda4="" class="shrink-0 c-amount-control">
                <label data-v-9ef0dda4="" for="v-1720413778833-amount" class="d-sm-none mb-2">Amount</label> 
                <input data-v-9ef0dda4="" type="text" dir="auto" autocomplete="off" inputmode="numeric" class="form-control control-price" id="v-1720413778833-amount" placeholder="$200" data-qa="secondTab-amount-option-5-input">
            </div> 

            <div data-v-9ef0dda4="" class="c-hint-control min-w-0 mt-3 mt-sm-0 ms-sm-2">
                <label data-v-9ef0dda4="" for="v-1720413778833-description" class="d-sm-none mb-2">Impact description</label> 
                <div data-v-9ef0dda4="" index="5" data-qa="secondTab-hint-option-5-input">
                    <input id="v-1720413778833-description" placeholder="Enables us to expand our services" dir="auto" class="form-control text-ibm" style="padding-inline: 12px 0px;"> 
                </div>
            </div> <!---->
        </div> 
   
        <button type="button" data-qa="hints-add-new-button" class="btn btn-default d-flex items-center">
            <svg svg-inline="" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="icon-stroke font-size-18 shrink-0 ms-minus-1 me-2">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
      Add amount
    </button>  --}}
     {{-- </div><!--AI Div End --> --}}
    <div class="mt-5 max-w-px-400">
        <label for="v-1720413778834-default-hint" class="mb-2">Default monthly suggested amount</label> 
        <select id="v-1720413778834-default-hint" class="form-control custom-select">
            <option value="0">$5 · Helps fund an awareness campaign</option>
            <option value="1">$10 · Supports our core operations</option>
            <option value="2">30 · Enables us to expand our services</option>
            <option value="3">$50 · Helps fund an awareness campaign</option>
            <option value="4">$100 · Supports our core operations</option>
            <option value="5">$200 · Enables us to expand our services</option>
        </select>
    </div>
</div>
<!-- new changes end --> 


        <div data-v-ee4eaf20="" id="hintDivDefaultMth" style="max-width:408px">
            <div class="mb-5">
                <label data-v-ee4eaf20="" for="defaultAmountMonthly" class="mb-2">Default monthly donation amount<span class="text-danger">*</span></label>
                <input data-v-ee4eaf20="" type="text" class="c-donation-control form-control control-price" wire:model="defaultAmountMonthly" id="defaultAmountMonthly">
            </div>
            <label data-v-ee4eaf20="" class="mb-2">Suggested monthly donation amount presets<span class="text-danger">*</span></label>
            <div data-v-ee4eaf20="" class="d-flex flex-wrap mb-minus-3">
                <input data-v-ee4eaf20="" type="number" class="c-donation-control form-control mb-3" placeholder="$500" wire:model="suggestedAmountMonthly.one">
                <input data-v-ee4eaf20="" type="number" class="c-donation-control form-control mb-3" placeholder="$200" wire:model="suggestedAmountMonthly.two">
                <input data-v-ee4eaf20="" type="number" class="c-donation-control form-control mb-3" placeholder="$100" wire:model="suggestedAmountMonthly.three">
                <input data-v-ee4eaf20="" type="number" class="c-donation-control form-control mb-3" placeholder="$50" wire:model="suggestedAmountMonthly.four">
                <input data-v-ee4eaf20="" type="number" class="c-donation-control form-control mb-3" placeholder="$25" wire:model="suggestedAmountMonthly.five">
                <input data-v-ee4eaf20="" type="number" class="c-donation-control form-control mb-3" placeholder="$10" wire:model="suggestedAmountMonthly.six">
            </div>
            <p data-v-ee4eaf20="" class="mt-3 font-size-14 line-height-20">
                List six suggested donation amounts. Offering a range of suggested amounts can encourage donors to contribute at a level that is comfortable for them.
            </p>
        </div>
    </div>
                                                    <!-- new design changes end-->
                                                </div>
                                                <!-- new changes made here -->
                                                <div data-v-1d3fc6aa="" class="max-w-px-450 ui-checkbox"><label class="ui-checkbox-label"><span class="ui-checkbox-control"><input type="checkbox" id="hitDivAi" data-qa="qa"><span class="ui-checkbox-icon"></span></span><span data-qa="qa-field" class="ui-checkbox-text"><span data-v-1d3fc6aa="" class="me-1">Use personalized suggested options</span> <span data-v-1d3fc6aa="" class="icon-slot d-inline-block icon-slot-35" data-original-title="This feature uses AI to optimize the giving experience and boost conversion." title=""><span class="p-abs centered font-size-35 "><span class="ds-ai-badge ds-ai-badge-sm d-flex"><svg svg-inline="" focusable="false" role="presentation" fill="none" height="24" viewBox="0 0 24 24" width="24" stroke-width="1.4" xmlns="http://www.w3.org/2000/svg" class="icon-fill shrink-0 d-block font-size-14 me-0-5"><g fill="currentColor"><path d="M13.86 1.38a.15.15 0 01.28 0l2.267 6.125a.15.15 0 00.089.088L22.62 9.86a.15.15 0 010 .282l-6.125 2.266a.15.15 0 00-.088.089L14.14 18.62a.15.15 0 01-.282 0l-2.266-6.125a.15.15 0 00-.088-.088L5.38 10.14a.15.15 0 010-.282l6.125-2.266a.15.15 0 00.088-.089zM5.864 13.498a.15.15 0 01.273 0l1.34 2.949a.15.15 0 00.075.074l2.948 1.34a.15.15 0 010 .273l-2.948 1.34a.15.15 0 00-.075.075l-1.34 2.948a.15.15 0 01-.273 0l-1.34-2.948a.15.15 0 00-.075-.074l-2.948-1.34a.15.15 0 010-.274l2.948-1.34a.15.15 0 00.075-.074z"></path></g></svg> <span class="text-uppercase font-weight-600 font-size-15">AI</span></span></span></span></span></label><div data-qa="qa-hint" class="ui-checkbox-hint">
          Take advantage of machine learning to maximize your revenues. When this option is enabled, our system learns
          from your supporters and suggests the maximum comfortable donation amount specific to each individual
          supporter.
        </div></div>
                                                <!-- changes end -->
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
