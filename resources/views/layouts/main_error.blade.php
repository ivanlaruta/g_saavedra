    <!DOCTYPE html>
    <html lang="{{ config('app.locale') }}">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='shortcut icon' type='image/x-icon' href='{{URL::asset('favicon.ico')}}' />
        <title>SIGC </title>

        <!-- Bootstrap -->

        <link href="{{asset('bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        
        <!-- Custom Theme Style -->
        <link href="{{asset('bower_components/gentelella/build/css/custom.min.css')}}" rel="stylesheet">


        <!-- animate.css -->
        <link href="{{asset('bower_components/animate.css/animate.min.css')}}" rel="stylesheet">
    </head>

    <body class="nav-md ">
    <style type="text/css">
         tfoot {
    display: table-header-group;
    background: #9aadc0;
  }
    </style>
        <div class="container body">
            <div class="main_container">

                



                @yield('content')


                <!-- /page content -->



                <!-- footer content -->
                @include('partials.footer')
                <!-- /footer content -->

            </div>
        </div>


        <!-- jQuery -->

        <script src="{{asset('bower_components/gentelella/vendors/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('bower_components/gentelella/vendors/fastclick/lib/fastclick.js')}}"></script>
        <!-- NProgress -->
        <script src="{{asset('bower_components/gentelella/vendors/nprogress/nprogress.js')}}"></script>
        <!-- Chart.js -->
        <script src="{{asset('bower_components/gentelella/vendors/Chart.js/dist/Chart.min.js')}}"></script>
        <!-- jQuery Sparklines -->
        <script src="{{asset('bower_components/gentelella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
        <!-- morris.js -->
        <script src="{{asset('bower_components/gentelella/vendors/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('bower_components/gentelella/vendors/morris.js/morris.min.js')}}"></script>
        <!-- gauge.js -->
        <script src="{{asset('bower_components/gentelella/vendors/gauge.js/dist/gauge.min.js')}}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{asset('bower_components/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
        <!-- Skycons -->
        <script src="{{asset('bower_components/gentelella/vendors/skycons/skycons.js')}}"></script>
        <!-- Flot -->
        <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.js')}}"></script>
        <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.time.js')}}"></script>
        <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.resize.js')}}"></script>
        <!-- Flot plugins -->
        <script src="{{asset('bower_components/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
        <script src="{{asset('bower_components/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
        <script src="{{asset('bower_components/gentelella/vendors/flot.curvedlines/curvedLines.js')}}"></script>
        <!-- DateJS -->
        <script src="{{asset('bower_components/gentelella/vendors/DateJS/build/date.js')}}"></script>

       
    <!-- iCheck -->
    



    

    @yield('scripts')
<!-- Custom Theme Scripts -->
    {{--     <script src="{{asset('bower_components/gentelella/build/js/custom.min.js')}}"></script> --}}   
    


    <script src="{{asset('js/custom.js')}}"></script>



    {{-- alertas --}}
    @if(!session('mensaje')==null)

    <script type="text/javascript"> 
        var mensaje='{{session('mensaje')}}';

        function init_PNotify() {
            new PNotify({title: "Correcto",type: "success",text: mensaje ,styling: 'bootstrap3',});
        }; 
    </script>>    
    @endif﻿

    @if(!session('mensaje_info')==null)

    <script type="text/javascript"> 
        var mensaje_info='{{session('mensaje_info')}}';

        function init_PNotify() {
            new PNotify({title: "Correcto",type: "info",text: mensaje_info ,styling: 'bootstrap3',});
        }; 
    </script>>    
    @endif﻿

    @if(!session('mensaje_error')==null)

    <script type="text/javascript"> 
        var mensaje_error='{{session('mensaje_error')}}';

        function init_PNotify() {
            new PNotify({title: "Error",type: "error",text: mensaje_error ,styling: 'bootstrap3',});
        }; 
    </script>>    
    @endif﻿



    </body>

    </html>


