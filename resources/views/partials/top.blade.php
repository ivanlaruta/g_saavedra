
<div class="top_nav">
<style type="text/css">
  
  


</style>
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="glyphicon glyphicon-option-horizontal"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    
                @else
                    <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                       <i class="glyphicon glyphicon-user"></i>
                            {{ Auth::user()->usuario }}<span class="caret"></span>
                      </a>

                        <ul class="dropdown-menu" role="menu">

                            <li>
                                <a href="#"> <i class="fa fa-user pull-right"></i> Perfil </a>
                            </li>

                            <li>
                                <a href="#"> <i class="fa fa-cog pull-right"></i> Cotraseña </a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out pull-right"></i> Salir </a>
                              
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li> 
                           
                        </ul>
                    </li>
                  
                @endif
              </ul>              
            </nav>
          </div>
        </div>
