<div class="content-row">
    <div class="d-table-cell text-top">
        <div data-v-07ab28b9="">
            <div data-v-07ab28b9="" class="container mt-6 mt-xl-10">
                <div data-v-07ab28b9="" qa="donations-table">
                    <div>
                        <div class="panel mb-0" style="background-color: antiquewhite">
                            <div class="mb-0 p-rel table-responsive-xl">
                                <div data-v-42ed51cc="" class="">
                                    <div data-v-42ed51cc="" class="scroll-container border-radius-base">
                                        <div data-v-42ed51cc=""
                                            class="d-table table mb-0 table-hor-border d-table-panel p-rel table-hover">
                                            <div data-v-42ed51cc="" class="d-thead">
                                                <div data-v-42ed51cc="" class="d-tr">
                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                TransactionId
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                Main Campaign
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                               Main Campaign title
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                currency
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                Amount
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                          
                                                <div data-v-42ed51cc="" class="d-tbody">
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate">
                                                            {{ !empty($upsellTransactionsList[0]->transaction_id) ? $upsellTransactionsList[0]->transaction_id : '' }}
                                                        </div>
                                                    </div>
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate max-w-px-200">
                                                            <img src="{{ !empty($upsellTransactionsList[0]->causeDetail->photo) ? url('') .'/'. 'storage/' . $upsellTransactionsList[0]->causeDetail->photo : 'https://ucarecdn.com/ef2e85d9-cab0-4b53-bbaf-74db14adf71b/-/resize/516x/-/format/auto/' }}" height="50px" alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate">
                                                            {{ !empty($upsellTransactionsList[0]->causeDetail->title) ? $upsellTransactionsList[0]->causeDetail->title : '' }}
                                                        </div>
                                                    </div>
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate max-w-px-200">
                                                            {{ !empty($upsellTransactionsList[0]->currency) ? $upsellTransactionsList[0]->currency : '' }}
                                                        </div>
                                                    </div>
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate max-w-px-200">
                                                            {{ !empty($upsellTransactionsList[0]->currency_symbol) ? $upsellTransactionsList[0]->currency_symbol : '' }}{{ !empty($upsellTransactionsList[0]->total_amount) ? $upsellTransactionsList[0]->total_amount : '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            <div data-v-42ed51cc="" class="d-tbody">
                                                <div class="d-td">
                                                    <div title="" class="text-truncate max-w-px-200">
                                                        <strong>{{ $recordCount > 1 ? 'SubTotal' : 'Total'}} :</strong>
                                                    </div>
                                                </div>
                                                <div class="d-td"></div>
                                                <div class="d-td"></div>
                                                <div class="d-td"></div>
                                                <div class="d-td">
                                                    <div title="" class="text-truncate max-w-px-200">
                                                        <strong>{{ !empty($upsellTransactionsList[0]->currency_symbol) ? $upsellTransactionsList[0]->currency_symbol : '' }}{{ !empty($upsellTransactionsList[0]->total_amount) ? $upsellTransactionsList[0]->total_amount : '' }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <hr class="my-0"> --}}
                              
                            </div>
                        </div><br/>
                        @if($recordCount > 1)
                        <div data-v-07ab28b9="" class="panel bg-white info-popper-wrap">
                            <div data-v-07ab28b9="" class="pl-6 pr-4 pr-md-6 px-xl-8 py-4 py-md-7">
                                <div data-v-07ab28b9="" class="d-flex justify-content-between mx-minus-1">
                                    <div data-v-07ab28b9="" class="mx-1 align-self-center min-w-0">
                                        <div data-v-07ab28b9="" data-qa="donations-title"
                                            class="font-size-20 line-height-28 font-size-md-24 line-height-md-32">
                                            <div data-v-07ab28b9="" class="d-flex flex-wrap">
                                                <div data-v-07ab28b9=""
                                                    class="min-w-0 mr-1 overflow-hidden text-overflow-ellipsis">
                                                    Upsells of {{ $upsellTransactionsList[0]->causeDetail->title ?? ''}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-07ab28b9="" class="d-md-block d-none">
                                <hr data-v-07ab28b9="" class="my-0">
                                <div data-v-07ab28b9="" class="bg-gray-10 border-bottom-radius-base">
                                    <div data-v-bba3536e="" data-v-07ab28b9="">
                                        <div data-v-bba3536e="" class="px-6 px-xl-8 pt-2 py-md-4">
                                            <div data-v-bba3536e="" class="d-table table-layout-fixed w-100">
                                                <div data-v-bba3536e="" class="d-table-cell">
                                                    <div data-v-bba3536e="" data-title="Filter Donations">
                                                        <div data-v-07ab28b9="" data-v-bba3536e=""
                                                            class="mx-minus-4 mx-md-minus-5 mt-minus-1 font-size-0">
                                                            <div data-v-bba3536e=""
                                                                class="d-md-inline-flex text-middle font-size-16 mt-md-1 mx-md-1">
                                                                <div class="p-rel mx-md-4">
                                                                   
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="panel mb-0">
                            <div class="mb-0 p-rel table-responsive-xl">
                                <div data-v-42ed51cc="" class="">
                                    <div data-v-42ed51cc="" class="scroll-container border-radius-base">
                                        <div data-v-42ed51cc=""
                                            class="d-table table mb-0 table-hor-border d-table-panel p-rel table-hover">
                                            <div data-v-42ed51cc="" class="d-thead">
                                                <div data-v-42ed51cc="" class="d-tr">
                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                Sr. No.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                TransactionID
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                Upsell Campaign
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                Upsell Campaign title
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                Currency
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-42ed51cc=""
                                                        class="d-th bg-gray-10-hover-gray-10 text-gray-100 w-30">
                                                        <div data-v-42ed51cc="" class="d-flex align-items-center">
                                                            <div data-v-42ed51cc=""
                                                                class="font-size-12 line-height-16 font-weight-600 text-uppercase">
                                                                Amount
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            @forelse ($upsellTransactionsList as $key => $upselltransaction)
                                                @if($key > 0)
                                                <div data-v-42ed51cc="" class="d-tbody">
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate">
                                                            {{ $key }}
                                                        </div>
                                                    </div>
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate">
                                                            {{ !empty($upselltransaction->transaction_id) ? $upselltransaction->transaction_id : '' }}
                                                        </div>
                                                    </div>
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate max-w-px-200">
                                                            <img src="{{ !empty($upselltransaction->causeDetail->photo) ? url('') .'/'. 'storage/' . $upselltransaction->causeDetail->photo : 'https://ucarecdn.com/ef2e85d9-cab0-4b53-bbaf-74db14adf71b/-/resize/516x/-/format/auto/' }}" height="50px" alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate">
                                                            {{ !empty($upselltransaction->causeDetail->title) ? $upselltransaction->causeDetail->title : '' }}
                                                        </div>
                                                    </div>
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate max-w-px-200">
                                                            {{ !empty($upselltransaction->currency) ? $upselltransaction->currency : '' }}
                                                        </div>
                                                    </div>
                                                    <div class="d-td">
                                                        <div title="" class="text-truncate max-w-px-200">
                                                            {{ !empty($upselltransaction->currency_symbol) ? $upselltransaction->currency_symbol : '' }}{{ !empty($upselltransaction->total_amount) ? $upselltransaction->total_amount : '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @empty
                                                <div class="" data-v-42ed51cc=""></div>
                                                <div data-v-42ed51cc="">
                                                    <hr data-v-42ed51cc="" class="my-0">
                                                    <div data-v-42ed51cc="" class="p-rel">
                                                        <div class="" data-v-42ed51cc="">
                                                            <div class="h-empty-panel p-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforelse
                                            <div data-v-42ed51cc="" class="d-tbody">
                                                <div class="d-td">
                                                    <div title="" class="text-truncate max-w-px-200">
                                                        <strong>Total :</strong>
                                                    </div>
                                                </div>
                                                <div class="d-td"></div>
                                                <div class="d-td"></div>
                                                <div class="d-td"></div>
                                                <div class="d-td"></div>
                                                <div class="d-td">
                                                    <div title="" class="text-truncate max-w-px-200">
                                                        <strong>{{ !empty($upselltransaction->currency_symbol) ? $upselltransaction->currency_symbol : '' }}{{ !empty($TotalTransactionAmount) ? $TotalTransactionAmount : '' }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <hr class="my-0"> --}}
                              
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
