<div class="content-row">
    <div class="d-table-cell text-top">
      <div class="h-100">
        <div class="container mt-6 mt-xl-10 d-flex flex-column h-100">
            @include('livewire.campaign.navbar')
          <div data-v-09345d12="" class="c-common-tab flex-grow-1 d-flex flex-column">
            <form wire:submit="save">
                <div data-v-09345d12="" class="d-flex flex-column panel mb-0 flex-grow-1 min-h-0">
                <div data-v-09345d12="" class="d-md-flex flex-grow-1 min-h-0">
                    <div data-v-28de74e8="" class="c-menu border-top-left-radius-base flex-shrink-0" data-v-09345d12="">
                    <div data-v-28de74e8="" class="c-menu-items d-flex d-md-block border-top-radius-base">
                        <div data-v-28de74e8="" class="d-md-none flex-shrink-0 pl-3"></div>
                            @include('livewire.campaign.sidebar')
                        <div data-v-28de74e8="" class="d-md-none flex-shrink-0 pl-3"></div>
                    </div>
                    </div>
                    <div data-v-09345d12="" class="d-none d-md-block border-right border-gray-40 flex-shrink-0"></div>
                    <div data-v-09345d12="" class="flex-grow-1 min-w-0">
                        <div class="px-6 px-xl-8 pt-6 pt-xl-8 pb-10 pb-xl-12" data-v-09345d12="">
                            <div class="max-w-px-700">
                                <div class="max-w-px-550">
                                    <h2 class="  line-height-24 font-weight-400 mb-4">Campaign Details</h2>
                                </div>
                                <div class="max-w-px-550">
                                    <div class="mb-6">
                                        <label for="short_details" class="mb-2">Title<span class="text-danger">*</span></label>
                                        <textarea cols="30" rows="5"
                                            id="short_details"
                                            class="form-control"
                                            style="max-width:400px"
                                            wire:model="shortDetails"></textarea>
                                        @error('shortDetails')
                                            <small class="form-text text-muted text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <hr class="">
                                <div class="" style="max-width: 100%;">
                                    <div class="mb-6">
                                        <label for="short_details" class="mb-2">Page Content<span class="text-danger">*</span></label>

                                        <div>
                                            <div
                                                wire:ignore id="div_editor1" style="height: 300px;"
                                            >
                                            {!! $pageContent !!}
                                            </div>
                                            @error('pageContent')
                                                <small class="form-text text-muted text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror
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
                            <svg svg-inline="" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="icon-stroke d-block">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                            </svg>
                            </span>
                        </span>Preview </button>
                        <button type="submit" class="btn btn-color-transition btn-primary m-2" name="action-save" data-qa="dashboard-campaign-save-changes-button">&nbsp;Save changes&nbsp;</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
        document.addEventListener("livewire:initialized", () => {
            editor1.attachEvent('change', function(){
                @this.set('pageContent', editor1.getHTMLCode())
                // if(@this.pageContent.length == 0){
                //     @this.set('pageContent', editor1.getHTMLCode())
                // }else if (editor1.getHTMLCode() === "" ||
                // editor1.getPlainText().length === 1 || editor1.getPlainText().length === 0) {
                //     @this.set('pageContent', '');
                // }
            })
        });
        let editor1 = new RichTextEditor("#div_editor1", { editorResizeMode: "none" });
    </script>
  </div>
