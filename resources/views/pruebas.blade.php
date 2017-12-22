@extends('layouts.main')

@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>SIGC <small>Seguimiento </small></h3>
      </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="row">
              <div class="col-md-8">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Seguimineto proyecto SIGC <small>commit's git </small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Dic</p>
                        <p class="day">1</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Creacion</a>
                        <p>Preparacion de framework herrrmaientas y librerias.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Dic</p>
                        <p class="day">4</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Backend basico</a>
                        <p>Prepara y creacion de migraciones y modelos.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Dic</p>
                        <p class="day">5</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Base de datos</a>
                        <p>Diseño base de datos parametrizacion.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Dic</p>
                        <p class="day">7</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Incio Front</a>
                        <p>desarollo de frontend basico con datos planos.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Dic</p>
                        <p class="day">8</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Caratula</a>
                        <p>Disñeo pagina de inicio.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Dic</p>
                        <p class="day">13</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Maquetado agenda critica</a>
                        <p>Disñeo pagina de inicio.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Dic</p>
                        <p class="day">14</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Estructurando datos agenda</a>
                        <p>Datos y faltantes agenda critica.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Dic</p>
                        <p class="day">16</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Base de daots agenda critica</a>
                        <p>Creacion de bd de agenda critica.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Dic</p>
                        <p class="day">20</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">altas agenda critica</a>
                        <p>proceos modelos y controladores para realizar altas mediante vistas.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>El clima hoy <small>web services</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="temperature"><b>Viernes</b>, 11:49 AM
                          <span>F</span>
                          <span><b>C</b>
                                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="weather-icon">
                          <span>
                              <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                          </span>

                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="weather-text">
                          <h2>La Paz
                              <br><i>Parcialmente nublado</i>
                          </h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="weather-text pull-right">
                        <h3 class="degrees">13</h3>
                      </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row weather-days">
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Lun</h2>
                          <h3 class="degrees">15</h3>
                          <span>
                            <canvas id="clear-day" width="32" height="32">
                            </canvas>
                          </span>
                          <h5>15
                              <i>km/h</i>
                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mar</h2>
                          <h3 class="degrees">15</h3>
                          <canvas height="32" width="32" id="rain"></canvas>
                          <h5>12
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mie</h2>
                          <h3 class="degrees">17</h3>
                          <canvas height="32" width="32" id="snow"></canvas>
                          <h5>14
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Jue</h2>
                          <h3 class="degrees">18</h3>
                          <canvas height="32" width="32" id="sleet"></canvas>
                          <h5>15
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Vie</h2>
                          <h3 class="degrees">18</h3>
                          <canvas height="32" width="32" id="wind"></canvas>
                          <h5>11
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Sab</h2>
                          <h3 class="degrees">16</h3>
                          <canvas height="32" width="32" id="cloudy"></canvas>
                          <h5>10
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- end of weather widget -->
    </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection