<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>
    @yield('headjs')

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ url('/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('/favicon.ico') }}" type="image/x-icon">

    {{--Bootstrap and Sass--}}
    <link rel="stylesheet" href="{{ url(elixir('css/app.css')) }}">

    {{--AdminLTE and Less--}}
    <link rel="stylesheet" href="{{ url(elixir('css/admin.css')) }}">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css">

    {{--Plugins CSS--}}

    <link rel="stylesheet" href="{{ url(elixir('css/plugins.css')) }}">
    {{--custom css--}}
    <link rel="stylesheet" href="{{url('/opt/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('/opt/intro/introjs.css')}}">

    <script src="{{url('/opt/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('/opt/sweetalert.css')}}">
    {{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootcards/1.0.0/css/bootcards-ios.min.css">--}}


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{--emoji --}}
    <link rel="stylesheet" href="{{url('/opt/emoji/emojionearea.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <link rel="stylesheet" href="{{url('/css/custome.css')}}">

    @yield('css')
</head>
{{--<body class="hold-transition fixed sidebar-mini skin-red-light">--}}
<body class="hold-transition fixed sidebar-mini @if(Auth::user()->theme == "") skin-red @else {{Auth::user()->theme}} @endif">

@yield('content')
<script>
    function appPath() {
        return "{{url('/')}}";
    }
</script>

<script src="{{ url(elixir('js/app.js')) }}"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
<script src="http://cdn.datatables.net/buttons/1.2.1/js/buttons.flash.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://unpkg.com/flatpickr"></script>
<script src="{{url('/opt/pdfmake.min.js')}}"></script>
<script src="{{url('/opt/vfs_fonts.js')}}"></script>
<script src="http://cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
<script src="http://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
<script src="{{url('/opt/intro/intro.js')}}"></script>
<script type="text/javascript" src="{{url('/opt/emoji/emojionearea.min.js')}}"></script>

<script type="text/javascript" src="{{url('/opt/toast.js')}}"></script>


<script>

    $(document).ready(function () {

        $('#intro').click(function () {
            introJs().start();
        });


        if (document.getElementById('status')) {
            $("#status").emojioneArea({
                pickerPosition: "bottom"
            });
        }

        if (document.getElementById('skype')) {
            $("#message").emojioneArea();
        }
    });
    // notification start


    document.addEventListener('DOMContentLoaded', function () {
        if (Notification.permission !== "granted")
            Notification.requestPermission();
    });




    $('.lang').click(function () {
        var lang = $(this).attr('data-id');
        $.ajax({
            type: 'POST',
            url: '{{url('/language/change')}}',
            data: {
                'lang': lang
            },
            success: function (data) {
                if (data == "success") {
                    location.reload();
                } else {
                    alert(data);
                }
            },
            error: function (data) {
                alert("Something went wrong , Please check console message or log");
                console.log(data.responseText);
            }
        });
        alert("Changing language");
    })
</script>
@yield('js')
<script>
    $(document).ready(function () {


        var table = $('#mytable').DataTable({
            responsive: true,

            dom: '<""flB>tip',
            buttons: [
                {
                    extend: 'excel',
                    text: '<button class="btn btn-success btn-xs fak"><i class="fa fa-file-excel-o"></i> Export all to excel</button>'
                },
                {
                    extend: 'csv',
                    text: '<button class="btn btn-warning btn-xs fak"><i class="fa fa-file-o"></i> Export all to csv</button>'
                },
                {
                    extend: 'pdf',
                    text: '<button class="btn btn-danger btn-xs fak"><i class="fa fa-file-pdf-o"></i> Export all to pdf</button>'
                },
                {
                    extend: 'print',
                    text: '<button class="btn btn-default btn-xs fak"><i class="fa fa-print"></i> Print all</button>'
                },
            ]
        });


    });
</script>
</body>
</html>
