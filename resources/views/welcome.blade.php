<!DOCTYPE HTML>

<html>
    <head>
        <title> SIGC </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link href="{{asset('hielo/assets/css/main.css')}}" rel="stylesheet" type="text/css">
         <link href="{{asset('bower_components/animate.css/animate.min.css')}}" rel="stylesheet">
    </head>
    <body>

            <header id="header" class="alt">
                <div class="logo"><a href="#">Sistema SIGC</a></div>
                @if (Auth::check())
                    <a href="#menu" class="animated infinite pulse" >INICIO </a>
                @else
                    <a class="animated infinite pulse" href="{{ url('/login') }}">INGRESAR </a>
                @endif
                    
            </header>

            <nav id="menu">
                <ul class="links">
                    @if (Auth::check())<li><a style="color: #fff;">sesion : {{ strtoupper(Auth::user()->usuario) }}</a></li>@endif
                    <li><a href="{{ url('/inicial') }}">Pagina inicio</a></li>
                    <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                         Cerrar 
                    </a>
                  
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li> 
                </ul>
            </nav>

            <section class="banner full">
                <article>
                    <img src="{{asset('hielo/images/slide01.jpg')}}" alt="" />
                    <div class="inner">
                        <header>
                            <p> Monitoreo gerenecial sociedades SAAVEDRA</p>
                            <h2 style="opacity: 0.58; font-size: 3.8rem;">SISTEMA DE INFORMACIÓN CORPORATIVA</h2>
                        </header>
                    </div>
                </article>
                <article>
                    <img src="{{asset('hielo/images/slide02.jpg')}}" alt="" />
                    <div class="inner">
                        <header>
                            <p> Organizacion inmobiliaria</p>
                            <h2 style="opacity: 0.58; font-size: 3.8rem;">SISTEMA DE INFORMACIÓN CORPORATIVA</h2>
                        </header>
                    </div>
                </article>
                <article>
                    <img src="{{asset('hielo/images/slide03.jpg')}}"  alt="" />
                    <div class="inner">
                        <header>
                            <p> Organizacion Automotriz</p>
                            <h2 style="opacity: 0.58; font-size: 3.8rem;">SISTEMA DE INFORMACIÓN CORPORATIVA</h2>
                        </header>
                    </div>
                </article>
                <article>
                    <img src="{{asset('hielo/images/slide04.jpg')}}"  alt="" />
                    <div class="inner">
                        <header>
                            <p> Indicadores finacieros</p>
                            <h2 style="opacity: 0.58; font-size: 3.8rem;">SISTEMA DE INFORMACIÓN CORPORATIVA</h2>
                        </header>
                    </div>
                </article>
                <article>
                    <img src="{{asset('hielo/images/slide05.jpg')}}"  alt="" />
                    <div class="inner">
                        <header>
                            <p> Gestion</p>
                            <h2 style="opacity: 0.58; font-size: 3.8rem;">SISTEMA DE INFORMACIÓN CORPORATIVA</h2>
                        </header>
                    </div>
                </article>
            </section>

            <section id="two" class="wrapper style3">
                <div class="inner">
                    <header class="align-center">
                        <p> Sistema que permite acceder a  KPI's necesarios para una buena administración y adecuada toma de decisiones.</p>
                        <h2>SISTEMA DE INFORMACIÓN CORPORATIVA</h2>
                    </header>
                </div>
            </section>

            <footer id="footer">
                <div class="container">
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                    </ul>
                </div>
                <div class="copyright">
                    &copy; TOYOSA. Todos los derechos reservados.
                </div>
            </footer>

        <!-- Scripts -->
            <script src="{{asset('hielo/assets/js/jquery.js')}}"></script>

            <script src="{{asset('hielo/assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('hielo/assets/js/jquery.scrollex.min.js')}}"></script>
            <script src="{{asset('hielo/assets/js/skel.min.js')}}"></script>
            <script src="{{asset('hielo/assets/js/util.js')}}"></script>
            <script src="{{asset('hielo/assets/js/main.js')}}"></script>

    </body>
</html>