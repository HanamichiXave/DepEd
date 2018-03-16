<!DOCTYPE html>
<html>
<head>
    <title>Parent Management Portal</title>
    <link rel="icon" href="{!! asset('assets/images/logonatin.png')!!}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
    <!-- css for nav bar -->
    <link href="{!! asset('assets/custom/css/style.css')!!}" rel="stylesheet">
    <link href="{!! asset('assets/Datatables/css/jquery.dataTables.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('assets/fontawesome/font-awesome.min.css')!!}" rel="stylesheet">
    <!-- end of css  -->
    <!-- your custom css -->
    <link href="{!! asset('assets/custom/css/parent/parent.css')!!}" rel="stylesheet">
    <!-- end of your custom css -->
</head>
<body>
    @yield('page')

    <!-- plugin scripts -->
    <script src="{!! asset('assets/jquery/dist/jquery.min.js')!!}"></script>
    <script src="{!! asset('assets/jquery-ui/jquery-ui.min.js')!!}"></script>
    <script src="{!! asset('assets/Datatables/js/jquery.dataTables.min.js')!!}"></script>

    <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js')!!}"></script>

    <script src="{!! asset('assets/Datatables/js/datatables.bootstrap.js')!!}"></script>
    <script src="{!! asset('assets/Datatables/js/dataTables.buttons.min.js')!!}"></script>

    <script src="{!! asset('assets/Datatables/js/buttons.bootstrap.min.js')!!}"></script>
    <script src="{!! asset('assets/Datatables/js/buttons.html5.min.js')!!}"></script>
    <script src="{!! asset('assets/Datatables/js/buttons.print.min.js')!!}"></script>

    <script src="{!! asset('assets/Datatables/js/dataTables.fixedColumns.min.js')!!}"></script>
    <script src="{!! asset('assets/Datatables/js/dataTables.fixedHeader.min.js')!!}"></script>
    <script src="{!! asset('assets/Datatables/js/dataTables.keyTable.min.js')!!}"></script>
    <script src="{!! asset('assets/Datatables/js/dataTables.scroller.min.js')!!}"></script>

    <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
    <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
    <!-- end of plugin scripts -->
    <!-- your custom script -->

    <!-- end of your custom script -->
</body>
</html>