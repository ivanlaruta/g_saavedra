{!! Form::open(array('route' => ['agenda.add'], 'method' => 'get' , 'id'=>'loginForm','class'=>'form-horizontal form-label-left')) !!}

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">NUEVA ACTIVIDAD.</h4> 
  </div>
  <div class="modal-body">
  <div class="row">
    <div class="form-horizontal form-label-left ">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <label>Tema:</label>
          <input type="text" class="form-control" id="tema" name="tema" required="required" autofocus="" placeholder="Tema" style="text-transform:uppercase;">
        </div>
      </div>
    </div>
    <div class="form-horizontal form-label-left">
      <div class="row col-md-12">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Area(s):</label>
          <select class="form-control selectArea" name="area[]" multiple="multiple" id="area" data-width="100%">
          @foreach($areas as $det)
            <option value={{$det->id}}> {{$det->nombre}}</option>
          @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Empresa(s):</label>
          <select class="form-control selectEmpresa" name="empresa[]" multiple="multiple" id="empresa" data-width="100%">
          @foreach($empresas as $det)
            <option value={{$det->id}}> {{$det->nombre_corto}}</option>
          @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Responsable(s):</label>
          <select class="form-control selectResponsable" name="responsable[]" multiple="multiple" id="responsable" data-width="100%">
          @foreach($responsables as $det)
            <option value={{$det->id}}> {{$det->persona->nombre}} {{$det->persona->paterno}}</option>
          @endforeach
          </select>
        </div>
      </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Plazo:</label>
            <div class="col-md-12">
              <input type="text" name = "plazo" class="form-control has-feedback-left" id="plazo" aria-describedby="inputSuccess2Status2">
              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              <span id="inputSuccess2Status2" class="sr-only">(success)</span>
            </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Criticidad:</label>
          <select class="form-control select2" name="criticidad" id="criticidad" data-width="100%">
          @foreach($criticidad as $det)
            <option value={{$det->id}}> {{$det->nombre}}</option>
          @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Estado:</label>
          <select class="form-control select2" name="estado" id="estado" data-width="100%" disabled="">
          @foreach($estado as $det)
            <option value={{$det->id}}> {{$det->nombre}}</option>
          @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label>Contingencia (Bs):</label>
          <input type="text" class="form-control" id="contingencia" name="contingencia" required="required">
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
          <label>Propuesta/ Comentario:</label>
          <textarea class="form-control" rows="2" id="comentario" name="comentario" required="required"></textarea>
        </div>
      </div>
    </div>
</div>
</div>

<div class="modal-footer">
  <input type="submit" class="btn btn-success guardar show_all_records" id="show_all_records" value="Guardar">
</div>


{!! Form::close()!!}

<script type="text/javascript">
      $('.select2').select2();
      $('.selectArea').select2({placeholder: 'AREA'});
      $('.selectEmpresa').select2({placeholder: 'EMPRESA'});
      $('.selectResponsable').select2({placeholder: 'RESPONSABLE'});



var eta = $("#plazo");
  eta.daterangepicker({
    singleDatePicker:true,
    minDate: moment(),
    locale: {
            format: 'YYYY-MM-DD'
        }
  });

</script>

         