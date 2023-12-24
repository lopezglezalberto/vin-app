<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/fonts/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('asset/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('asset/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('asset/css/icheck/flat/green.css') }}" rel="stylesheet" />


    <link href="{{ asset('asset/js/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('asset/js/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('asset/js/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('asset/js/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('asset/js/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('/asset/ckeditor/ckeditor.js') }}"></script>

    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('asset/assets/js/ie8-responsive-file-warning.js') }}"></script>
    <![endif]-->


    <!-- editor -->
    {{--<link href="{{ asset('asset/font-awesome/4.5.0/css/font-awesome.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('asset/css/editor/external/google-code-prettify/prettify.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/editor/index.css') }}" rel="stylesheet">
    <!-- select2 -->
    <link href="{{ asset('asset/css/select/select2.min.css') }}" rel="stylesheet">

    <script src="https://unpkg.com/vue-swal" rel="stylesheet" type="text/css"></script>
    <!-- switchery -->
    <link rel="stylesheet" href="{{ asset('asset/css/switchery/switchery.min.css') }}" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('asset/js/5shiv.min.js') }}"></script>
    <script src="{{ asset('asset/js/respond.min.js') }}"></script>
    <![endif]-->

    <style>
        td.details-control {
            background: url('{{ asset('details_open.png') }}') no-repeat center center;
            cursor: pointer;
            vertical-align: middle;
        }
        tr.shown td.details-control {
            background: url('{{ asset('details_close.png') }}') no-repeat center center;
        }

    </style>

    @yield('titulo')

    <style>

        #contenido {
            color: black/*/!*#636b6f*!/*/;
        }

        .nav{
            color: black;
        }

        body div {
            color: black;
            width: auto;
        }

        .table td  {
            text-align: center;
        }

        .table th  {
            text-align: center;
        }


        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 120px;
            height: 120px;

        }
        .lds-ellipsis div {
            position: absolute;

            top: 33px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: white;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }
        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
        }
        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }
        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(0);
            }
        }
        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(24px, 0);
            }
        }

        .loader {

            margin: 0 auto;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            color: black;
            /*background: black;*/
            background-color: rgba(0, 0, 0, .7);
            /*opacity: 0.50;*/
            /*background-color: transparent;*/
            display: flex;
            justify-content: center;
            align-items: center;
            vertical-align: middle;

            z-index: 100000;
        }
    </style>

    @yield('encabezado')

</head>

<body class="nav-md">

<div id="app">
    <App></App>
</div>

<!-- /datepicker -->
<!-- /footer content -->

<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

<!-- bootstrap progress js -->
<script src="{{ asset('asset/js/progressbar/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('asset/js/nicescroll/jquery.nicescroll.min.js') }}"></script>

<!-- icheck -->
<script src="{{ asset('asset/js/icheck/icheck.min.js') }}"></script>

<script src="{{ asset('asset/js/select/select2.full.js') }}"></script>

<script src="{{ asset('asset/js/custom.js') }}"></script>



<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('asset/js/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/datepicker/daterangepicker.js') }}"></script>

<!-- ion_range -->
<link rel="stylesheet" href="{{ asset('asset/css/normalize.css') }}" />
<link rel="stylesheet" href="{{ asset('asset/css/ion.rangeSlider.css') }}" />
<link rel="stylesheet" href="{{ asset('asset/css/ion.rangeSlider.skinFlat.css') }}" />

<!-- select2 -->

<!-- pace -->
<script src="{{ asset('asset/js/pace/pace.min.js') }}"></script>
<script src="{{mix('js/app.js')}}"></script>



<script  src="https://www.google.com/recaptcha/api.js"></script>

<!-- select2 -->
<script>

    $(document).ready(function() {

        $(".select2_room").select2({
            placeholder: "Select the equipment code...",
            allowClear: true
        });

    });
</script>

<!-- /select2 -->

<!-- Datatables-->
<script src="{{ asset('asset/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('asset/js/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('asset/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('asset/js/datatables/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/datatables/jszip.min.js') }}"></script>

<script src="{{ asset('asset/js/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('asset/js/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('asset/js/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('asset/js/datatables/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('asset/js/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('asset/js/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('asset/js/datatables/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/datatables/dataTables.scroller.min.js') }}"></script>

<!-- PNotify -->
<script type="text/javascript" src="{{ asset('asset/js/notify/pnotify.core.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/notify/pnotify.buttons.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/notify/pnotify.nonblock.js') }}"></script>


<script src="{{ asset('asset/js/input_mask/jquery.inputmask.js') }}"></script>

<script>
    $(document).ready(function() {
        $(":input").inputmask();
    });
</script>

@yield('script')

</body>

</html>
