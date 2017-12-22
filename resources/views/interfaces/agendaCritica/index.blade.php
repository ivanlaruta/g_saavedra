@extends('layouts.main')

@section('style')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Empresas / <small>AGENDA CRITICA</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Actividades</h2>
            <ul class="nav navbar-right panel_toolbox">
              {{-- <li><a href="#" class="green btn_nuevo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar nuevo"><i class="fa fa-plus fa-lg green animated tada infinite"></i></a> --}}
              </li>
              
              <li><a>|</a>
              </li>
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Opciones 1</a>
                  </li>
                  <li><a href="#">Opciones 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            
             <a href="#" class="btn btn-success btn-round btn_nuevo pull-right " data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar nuevo"><i class="fa fa-plus"></i> </a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          <div class="table-responsive">

            {{-- <p>Simple table with project listing with progress and editing options</p> --}}

            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 1%">#</th>
                  <th style="width: 30%">Tema</th>
                  <th style="width: 10%">Areas</th>
                  <th style="width: 15%">Empresas</th>
                  <th style="width: 15%">Responasbles</th>
                  <th style="width: 1%">Criticidad</th>
                  <th style="width: 1%">Plazo</th>
                  <th style="width: 18%">Estado</th>
                  {{-- <th style="text-align: right; width: 1%;"><small>CONTINGENCIA (Bs)</small></th> --}}
                  <th style="width: 5%; text-align: right;">#Opciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($agendas as $det)
                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>{{$det->tema}}</strong></a>
                    <br />
                    <i class="fa fa-clock-o"></i><small> Creado el {{date("d/m/Y", strtotime($det->created_at))}}</small>
                    <br />
                    <i class="fa fa-user"></i><small> Por {{$det->usuario->usuario}}</small>
                  </td>
                  <td>
                    @if ($det->lista_areas->count() > 0)
                      @foreach ($det->lista_areas as $area)
                        <span class="label label-default">{{$area->param_area->nombre}}</span>
                      @endforeach
                    @endif
                  </td>
                  <td>
                    @if ($det->lista_empresas->count() > 0)
                      @foreach ($det->lista_empresas as $empresa)
                        <span class="label label-primary">{{$empresa->empresa->nombre_corto}} &nbsp;</span>
                      @endforeach
                    @endif
                  </td>
                  <td>
                  @if ($det->lista_responsables->count() > 0)
                    <ul class="list-inline">
                    @foreach ($det->lista_responsables as $responsable)
                      <li style="padding-left: 0px; padding-right: 0px;">
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$responsable->responsable->persona->nombre}} {{$responsable->responsable->persona->paterno}}"></a>
                      </li>
                    @endforeach
                    </ul>
                  @endif

                    
                  </td>
                  <td>
                    <span 
                    @if($det->param_criticidad->codigo =='1') class="label label-success" @endif
                    @if($det->param_criticidad->codigo =='2') class="label label-warning" @endif
                    @if($det->param_criticidad->codigo =='3') class="label label-danger" @endif
                    >
                    {{$det->param_criticidad->nombre_corto}}
                    </span>
                  </td>
                  <td>
                    <a>{{date("d/m/Y ", strtotime($det->plazo))}}</a>
                  </td>
                  <td class="project_progress">
                    <div class="progress progress_sm bg-white">
                      <div  role="progressbar" 
                        @if($det->param_estado->codigo == 3) class="progress-bar progress-bar-success" data-transitiongoal="{{$det->progreso}}" @endif
                        @if($det->param_estado->codigo == 2) class="progress-bar progress-bar-warning" data-transitiongoal="{{$det->progreso}}" @endif
                        @if($det->param_estado->codigo == 1) class="progress-bar progress-bar-danger" data-transitiongoal="{{$det->progreso + 5 }}" @endif
                        >
                      </div>
                    </div>
                    <small>{{$det->progreso}} % Completo</small><br />
                    <small
                    @if($det->param_estado->codigo == 1) class = "text-danger" @endif
                    @if($det->param_estado->codigo == 2) class = "text-warning" @endif
                    @if($det->param_estado->codigo == 3) class = "green" @endif
                    >{{$det->param_estado->nombre}}</small><br />
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Ultima modificacion"><i class="fa fa-clock-o"></i> <small>{{date("d/m/Y", strtotime($det->created_at))}}</small></a>
                  </td>
                  {{-- <td align="right"> {{$det->contingencia}} </td> --}}
                  <td class=" pull-right">
                    <div class="btn-group">
                      <a href="{{ route('agenda.detalle',$det->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Abrir" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                    </div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- end project list -->

            <div class="modal fade modal_add" id="Modal_nuevo" role="dialog" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content contenido_add">
                </div>
              </div>
            </div>

            <!-- end project list -->
      
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@section('scripts')
<script>

  var btn_nuevo = $(".btn_nuevo");

  btn_nuevo.on("click",function(){
    frm_nuevo($(this));
  });

  var modal=$(".modal_add");
  var modalContent = $(".contenido_add");

  var frm_nuevo = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('agenda.modalNuevo')}}",
      success: function(dataResult)
      {
        console.log(dataResult);
        modalContent.empty().html(dataResult);                        
        modal.modal('show');
        NProgress.done();
      },
      error: function(jqXHR, exception)
      {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        alert(msg);
        NProgress.done();
      }
    });
  }

</script> 
@endsection