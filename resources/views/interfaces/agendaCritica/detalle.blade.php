@extends('layouts.main')

@section('style')
  <style type="text/css">
    .sombra {
      padding: 10px;
      box-shadow: 3px 6px 10px #7777;
    }
  </style>
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><a href="{{ route('agenda.index') }}">Detalle Actividad </a><small> DETALLE</small></h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">

                <div class="x_panel">
                  

                  <div class="x_title">
                    <h2>{{$agenda->tema}}</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <ul class="stats-overview">
                        <li>
                          <span class="name"> Plazo </span><br>
                          <span class="value text-success"> {{date("d/m/Y", strtotime($agenda->plazo))}} </span>
                         
                        </li>
                        <li>
                          <span class="name"> Criticidad </span><br>
                          <span class="value text-success"> {{$agenda->param_criticidad->nombre_corto}} </span>
                          
                        </li>
                        <li>
                          <span class="name"> Progreso </span><br>
                          <span @if($agenda->progreso == '100') class="value text-success animated pulse infinite" @else class="value text-warning" @endif>{{$agenda->progreso}}%</span>
                        </li>

                      </ul>
                      <br />

                      <div>
                        <h4>Actividades</h4>
                        @if($agenda->param_estado->codigo < 3 )
                          @if($agenda->progreso <100)
                          <a data-toggle="modal" href="#myModal" class="btn btn-success btn-round pull-right "><i class="fa fa-plus"></i> </a>
                          @else
                          <a class="btn btn-success btn-round pull-right info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ya tiene 100 % de progreso, no se puede crear mas actividades "><i class="fa fa-plus"></i> </a>
                          @endif
                        @endif
                       
                        <hr>
                        <ul class="messages">
                        @if ($agenda->lista_actividades->count() > 0)
                          @foreach ($agenda->lista_actividades as $actividad)
                            <li>
                              <img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar">
                            
                              <div class="message_wrapper sombra">
                                <h4 class="heading">{{$actividad->titulo}} <a class="pull-right"><i class="fa fa-pencil"></i></a></h4>
                                {{$actividad->progreso}}% de avance
                                <blockquote class="message">{{$actividad->descripcion}}</blockquote>
                                <br />
                                <p class="url">
                                  <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                  <a href="#"><i class="fa fa-user"></i> {{$actividad->usuario->usuario}}</a>
                                  <a class="pull-right"><i class="fa fa-clock-o"></i> {{date("d/m/Y H:i", strtotime($actividad->created_at))}}</a>
                                    
                                </p>
                              </div>
                            </li>
                            
                          @endforeach
                        @endif
                        </ul>
                      </div>
                    </div>

                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <section class="panel">

                        <div class="x_title">
                          <h2>Propuesta/ Comentario</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                          {{-- <h3 class="green"><i class="fa fa-paint-brush"></i> </h3> --}}

                          <p>{{$agenda->propuesta_comentario}}</p>
                          <br />

                          <div class="project_detail">
                            <p class="title">Creado por:</p>
                            <p>{{$agenda->usuario->usuario}}</p>
                            <p class="title">Fecha creacion:</p>
                            <p>{{date("d/m/Y h:i", strtotime($agenda->created_at))}}</p>
                            <p class="title">Areas:</p>
                            @if ($agenda->lista_areas->count() > 0)
                              @foreach ($agenda->lista_areas as $area)
                                <span class="label label-default">{{$area->param_area->nombre}}</span>
                              @endforeach
                            @endif
                              <p> </p>
                            <p class="title">Empresas:</p>
                            @if ($agenda->lista_empresas->count() > 0)
                              @foreach ($agenda->lista_empresas as $empresa)
                                <span class="label label-primary">{{$empresa->empresa->nombre_corto}} &nbsp;</span>
                              @endforeach
                            @endif
                            <p> </p>
                            <p class="title">Responsables:</p>
                            @if ($agenda->lista_responsables->count() > 0)
                              <ul class="list-inline">
                              @foreach ($agenda->lista_responsables as $responsable)
                                <li style="padding-left: 0px; padding-right: 0px;">
                                  <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$responsable->responsable->persona->nombre}} {{$responsable->responsable->persona->paterno}}"></a>
                                </li>
                              @endforeach
                              </ul>
                            @endif

                          </div>
                          <br />
                          <br />
                          <h5>Datos de actividad</h5>
                          <ul class="list-unstyled project_files">
                            <li><a><i class="fa fa-clock-o"></i> <strong>Plazo:</strong> {{date("d/m/Y ", strtotime($agenda->plazo))}}</a>
                            </li>
                            <li><a><i class="fa fa-warning"></i> <strong>Criticidad:</strong> {{$agenda->param_criticidad->nombre_corto}}</a>
                            </li>
                            <li><a><i class="fa fa-mail-forward"></i> <strong>Estado:</strong> {{$agenda->param_estado->nombre}} </a>
                            </li>
                            <li><a><i class="fa fa-mail-forward"></i> <strong>Contingecia:</strong>  {{$agenda->contingencia}}</a>
                            </li>
                          </ul>
                          <br />

                          <div class="text-center mtop20">
                          @if($agenda->param_estado->codigo < 3 )
                            @if($agenda->progreso <100)
                              <a class="btn btn-sm btn-warning btn-block des" data-toggle="tooltip" data-placement="top" title="" data-original-title="Debe tener 100 % de progreso para cerrar esta actividad">Finalizar</a>
                            @else
                              {{-- <a href="{{ route('agenda.finalizarAgenda',$agenda->id)}}" class="btn btn-sm btn-success btn-block ">Si</a> --}}
                             <a data-toggle="modal" href="#myModal2" class="btn btn-sm btn-warning btn-block">Finalizar</a>
                            @endif
                          @endif
                          </div>
                        </div>
                      </section>
  

                      <!-- Modal -->
                      <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                           
                            <div class="modal-body">
                              <p> Esta opcion cerrara el tema. No se podra realizar ediciones, agregar, quitar actividades y el estado cambiara a finalizado.</p>
                              <p> ¿Desea continuar?</p>
                            </div>
                            <div align="center">
                              <a href="{{ route('agenda.finalizarAgenda',$agenda->id)}}" class="btn btn-danger">Si</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end project-detail sidebar -->

                    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="myModal">
                    <div class="modal-dialog">
                      {!! Form::open(array('route' => ['agenda.actividadAdd'], 'method' => 'get' , 'id'=>'activityForm','class'=>'form-horizontal form-label-left')) !!}
                      <input type="hidden" id="id_agenda" name="id_agenda" value="{{$agenda->id}}">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Nueva actividad</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                              <div class="form-horizontal form-label-left ">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <label>Titulo:</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" required="required" autofocus="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-horizontal form-label-left">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <label>Descripcion:</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" required="required" rows="2" ></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="form-horizontal form-label-left">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <label>Progreso:</label>
                                    <input type="number" min="1" max="{{100-$agenda->progreso}}" class="form-control col-md-4 col-xs-12" id="progreso" name="progreso" required="required">
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <input type="submit" class="btn btn-success guardar show_all_records" id="show_all_records" value="Guardar">
                        </div>
                      </div>
                      {!! Form::close()!!}
                    </div>
                  </div>


                    <!-- end project-detail sidebar -->

                  </div>
                </div>
              </div>

              @if($agenda->param_estado->codigo == 3 )
              <div class="pricing ui-ribbon-container">
                <div class="ui-ribbon-wrapper" style="width: 100px;">
                  <div class="ui-ribbon" style="background-color:#059e7d; font-size: 11px; width: 150px;">
                    FINALIZADO!
                  </div>
                </div>
              </div>
              @endif

            </div>
          </div>
</div>



@endsection

@section('scripts')
<script>
  $(".des").on("click",function(){
    
   init_PNotify();

   function init_PNotify() {
            new PNotify({title: "Error al finalizar",type: "error",text: 'Debe completar el 100 % de progreso para finalizar el tema' ,styling: 'bootstrap3',});
        }; 
  });

   $(".info").on("click",function(){

   init_PNotify();

   function init_PNotify() {
            new PNotify({title: "No se pudo completar",type: "error",text: 'Ya tiene 100% de progreso, no puede agregar mas actividades' ,styling: 'bootstrap3',});
        }; 
  });

   
</script> 
@endsection