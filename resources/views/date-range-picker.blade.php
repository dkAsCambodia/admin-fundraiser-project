<div data-v-07ab28b9="" data-v-bba3536e="" class="d-md-inline-flex text-middle font-size-16 mt-1 mx-md-1">
    <div data-v-07ab28b9="" data-v-bba3536e="" class="min-w-0 flex-md-shrink-0">
        <div data-v-07ab28b9="" data-v-bba3536e="">
            <div tabindex="0"
                class="d-flex align-items-center cursor-pointer focus-outline form-control-static-text bg-transparent-hover-gray-30 text-gray-85">
                <div class="text-nowrap flex-shrink-0">
                    <div id="reportrange" style="form-control form-control-search pr-10 inactive">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span>
                            {{ $dateSpanData }}
                        </span> <i class="fa fa-caret-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {

        // var start = moment().subtract(30, 'days');
        // var end = moment();

        var start = moment().subtract(1, 'M');
        var end = moment();

        // var start = moment();
        // var end = moment();

        function cb(start, end) {
            @this.set('startDate', start.format('YYYY-MM-DD'));
            @this.set('endDate', end.format('YYYY-MM-DD'));
            @this.set('dateSpanData', start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    });
</script>
