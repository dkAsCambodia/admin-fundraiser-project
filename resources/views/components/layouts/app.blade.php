<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $title ?? 'Welcome' }} - {{ config('app.name') }}</title>
    {{-- <link rel="stylesheet" href="https://static.fundraiseup.com/a0817413343f.dashboard.css" /> --}}
    <link rel="stylesheet" href="{{ URL::to('admin_panel/css/dashboard.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::to('admin_panel/rte/rte_theme_default.css') }}" />
    <script type="text/javascript" src="{{ URL::to('admin_panel/rte/rte.js') }}"></script>

    <style>
        .select-btn-new {
            display: flex;
            height: 50px;
            align-items: center;
            justify-content: space-between;
            padding: 0 16px;
            border-radius: 8px;
            cursor: pointer;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .select-btn-new .btn-text {
            font-size: 17px;
            font-weight: 400;
            color: #333;
        }

        .select-btn-new .arrow-dwn {
            display: flex;
            height: 21px;
            width: 21px;
            color: #fff;
            font-size: 14px;
            border-radius: 50%;
            background: #1675ac;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .select-btn-new.open .arrow-dwn {
            transform: rotate(-180deg);
        }

        .list-items {
            position: absolute;
            margin-top: 15px;
            border-radius: 8px;
            padding: 16px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            max-height: 220px;
            overflow-y: scroll;
            overflow-x: hidden;
            display: none;
            z-index: 1;
        }

        .select-btn-new.open~.list-items {
            display: block;
        }

        /* Always show the scrollbar of the dropdown */
        .select-btn-new.open~.list-items::-webkit-scrollbar {
            width: 8px;
            height: 0;
        }

        .select-btn-new.open~.list-items::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, .2);
            border-radius: 8px;
        }

        .select-btn-new.open~.list-items::-webkit-scrollbar-thumb:hover {
            background-color: rgba(0, 0, 0, .3);
        }

        .list-items .item {
            display: flex;
            align-items: center;
            list-style: none;
            height: 50px;
            cursor: pointer;
            transition: 0.3s;
            padding: 0 15px;
            border-radius: 8px;
        }

        .list-items .item:hover {
            background-color: #e7edfe;
        }

        .item .item-text {
            font-size: 16px;
            font-weight: 400;
            color: #333;
        }

        .item .checkbox {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 16px;
            width: 16px;
            border-radius: 4px;
            margin-right: 12px;
            border: 1.5px solid #c0c0c0;
            transition: all 0.3s ease-in-out;
        }

        .item.checked .checkbox {
            background-color: #1675ac;
            border-color: #1675ac;
        }

        .checkbox .check-icon {
            color: #fff;
            font-size: 11px;
            transform: scale(0);
            transition: all 0.2s ease-in-out;
        }

        .item.checked .check-icon {
            transform: scale(1);
        }
    </style>

    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        rte-bottom {
            display: none !important;
        }

        rte-floatpanel {
            display: none !important;
        }
    </style>

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 56px;
            height: 30px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 22px;
            width: 22px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #1675ac;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #1675ac;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>



    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>

<body class="home">
    <div class="page js-app" id="dashboard-module">
        <x-admin-navbar :page="$title" />
        {{ $slot }}
        {{-- <x-admin-footer /> --}}
    </div>
</body>
@livewireScripts


<div class="header-slide-menu d-xl-none" style="display: none;">
    <div class="mobile-menu">
        <a href="/insights" class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap" data-qa="dashboard-menu-insights"><span class="d-flex items-center"> <span>Insights</span></span></a> 
        <a href="/donations" class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap" data-qa="dashboard-menu-donations"><span class="d-flex items-center"> <span>Donations</span></span></a> 
        <a href="/campaigns" class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap" data-qa="dashboard-menu-campaigns"><span class="d-flex items-center"> <span>Campaigns</span></span></a> 
        <a href="/account/dashboard" class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap" data-qa="dashboard-menu-accounts"><span class="d-flex items-center"> <span>Accounts</span></span></a> 
        <!--<a href="/ARYVBYTG/elements" class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap router-link-exact-active active" data-qa="dashboard-menu-elements"><span class="d-flex items-center"> <span>Elements</span></span></a> 
        <a href="/ARYVBYTG/p2p/pages" class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap" data-qa="dashboard-menu-p2p"><span class="d-flex items-center"> <span>P2P</span></span></a> 
        <a href="/ARYVBYTG/recurrings" class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap" data-qa="dashboard-menu-recurrings"><span class="d-flex items-center"> <span>Recurring</span></span></a> 
        <a href="/ARYVBYTG/supporters" class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap" data-qa="dashboard-menu-supporters"><span class="d-flex items-center"> <span>Supporters</span></span></a>
        <a href="/ARYVBYTG/exports" class="d-flex focus-outline focus-outline-minus-2 header-menu-item text-nowrap" data-qa="dashboard-menu-exports"><span class="d-flex items-center"> <span>Exports</span></span></a>  -->
    </div>
</div>

<div class="header-slide-menu-overlay d-xl-none" id="header-slide-menu-overlay" style="display: none;"></div>    

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
<script>
 $('#header-slide-menu-open').click(function () {
    $('.header-slide-menu').show();
    $('.header-slide-menu-overlay').show();
 });

 $('#header-slide-menu-overlay').click(function () {
    $('.header-slide-menu').hide();
    $('.header-slide-menu-overlay').hide();
 });


    $(window).click(function() {
        var elems = document.querySelectorAll(".select-btn-new.form-control");
        [].forEach.call(elems, function(el) {
            el.classList.remove("open");
        });
    });

    function handleDropdownNavBar(e) {
        e.classList.toggle("open");
        var x = document.getElementById("myDIVNavBar");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        var y = document.getElementById("iconRotate180");
        y.classList.toggle("icon-rotate-180");
    }


    function closeModalEmailPassword(e) {
        document.getElementById("model-" + e).style.display = "none";
    }

    //New changes Start
    document.addEventListener('DOMContentLoaded', function () {
    var tabs = document.querySelectorAll('[data-v-ee4eaf20] .tab');
    var tabContents = document.querySelectorAll('[data-v-ee4eaf20] .c-tab');

    tabs.forEach(function(tab, index) {
        tab.addEventListener('click', function() {
            tabs.forEach(function(t) { t.classList.remove('active'); });
            tabContents.forEach(function(tc) { tc.classList.add('d-none'); });
            tab.classList.add('active');
            tabContents[index].classList.remove('d-none');
        });
    });
});

     $(document).ready(function () {

         $('#enableHintsCheckboxOne').change(function () {
            if (this.checked) {
                $('#hintDivOne').show();// enableHintsCheckboxMonth hintDivMonth hintDivDefaultMth
                $('#hintDivDefaultOne').hide();
            } else {
                $('#hintDivOne').hide();
                $('#hintDivDefaultOne').show();
            }
            // Trigger change event on #hitDivAi
                 $('#hitDivAi').trigger('change');
        });

        $('#enableHintsCheckboxMonth').change(function () {
            if (this.checked) {
                $('#hintDivMonth').show();// aiDesOne aiDesMonth hitDivAi
                $('#hintDivDefaultMth').hide();
            } else {
                $('#hintDivMonth').hide();
                $('#hintDivDefaultMth').show();
            }
            // Trigger change event on #hitDivAi
                 $('#hitDivAi').trigger('change');
        });

        //Ai check box based hide/show process
        $('#hitDivAi').change(function () {
            if (this.checked) {
                var activeTabDataQa = getActiveTab();
                if(activeTabDataQa=='suggested-amounts-first-tab'){ //First tab enable 
                        $('#aiDesOne').show();
                        $('#aiDesMonth').hide();
                }
                else{ //Second tab enable 
                     $('#aiDesOne').hide();
                $('#aiDesMonth').show(); 
                }
            } else {
                $('#aiDesOne').hide();
                $('#aiDesMonth').hide();
            }
        });
    });
    // Function to get the currently active tab
        function getActiveTab() {
            var activeTab = document.querySelector('[data-v-ee4eaf20] .tab.active');
            return activeTab ? activeTab.getAttribute('data-qa') : null; // Assuming data-qa holds the tab identifier
        }
    //New changes End
</script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

@stack('scripts')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />

</html>
