<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Accionista;
use App\Accionista_Empresa;
use App\Parametrica;
use App\Responsable;
use App\Agenda_Critica;
use App\Areas_Agenda;
use App\Empresa_Agenda;
use App\Responsable_Agenda;
use App\Actividad_Agenda;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $agendas=Agenda_Critica::all();
        return view('interfaces.agendaCritica.index')
        ->with('agendas',$agendas)
        ;
    }

    public function modalNuevo()
    {
        $areas=Parametrica::where('tabla','area')->get();
        $criticidad=Parametrica::where('tabla','criticidad')->get();
        $estado=Parametrica::where('tabla','estado_actividad')->get();
        $responsables=Responsable::all();
        $empresas =Empresa::all(); 
        return view('interfaces.agendaCritica.modalNuevo')
        ->with('areas',$areas)
        ->with('empresas',$empresas)
        ->with('criticidad',$criticidad)
        ->with('responsables',$responsables)
        ->with('estado',$estado)
        ;
    }

    public function detalle($id)
    {
        $agenda=Agenda_Critica::find($id);
                
        return view('interfaces.agendaCritica.detalle')
        ->with('agenda',$agenda)
        ;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(':)');
    }

    public function add(Request $request)
    {
        $hoy = Carbon::now('America/La_Paz')->format('Y-m-d');

        $add_agenda = new Agenda_Critica();

        $add_agenda -> tema = strtoupper($request->tema);
        $add_agenda -> propuesta_comentario = $request->comentario;
        $add_agenda -> plazo = $request->plazo;
        $add_agenda -> criticidad = $request->criticidad;
        $add_agenda -> contingencia = $request->contingencia;
        $add_agenda -> estado = 11;
        $add_agenda -> created_by = Auth::user()->id;
        
        $add_agenda -> progreso = '0';
        $add_agenda -> save();

        for ($i=0; $i < sizeof($request->area); $i++) 
        {
            $nuevo_area_agenda = new Areas_Agenda();
            $nuevo_area_agenda -> id_agenda = $add_agenda ->id;
            $nuevo_area_agenda -> id_area = $request->area[$i];
            $nuevo_area_agenda -> created_by = Auth::user()->id;
            $nuevo_area_agenda ->save();
        }

        for ($i=0; $i < sizeof($request->empresa); $i++) 
        {
            $nuevo_empresa_agenda = new Empresa_Agenda();
            $nuevo_empresa_agenda -> id_agenda = $add_agenda ->id;
            $nuevo_empresa_agenda -> id_empresa = $request->empresa[$i];
            $nuevo_empresa_agenda -> created_by = Auth::user()->id;
            $nuevo_empresa_agenda ->save();
        }

        for ($i=0; $i < sizeof($request->responsable); $i++) 
        {
            $nuevo_responsable_agenda = new Responsable_Agenda();
            $nuevo_responsable_agenda -> id_agenda = $add_agenda ->id;
            $nuevo_responsable_agenda -> id_responsable = $request->responsable[$i];
            $nuevo_responsable_agenda -> created_by = Auth::user()->id;
            $nuevo_responsable_agenda -> save();
        }

        return redirect()->route('agenda.index')->with('mensaje',"Creado exitosamente."); 
    }


    public function actividadAdd(Request $request)
    {
        $add_actividad = new Actividad_Agenda();
        $add_actividad -> id_agenda = $request -> id_agenda;
        $add_actividad -> titulo = strtoupper($request -> titulo);
        $add_actividad -> descripcion = $request -> descripcion;
        $add_actividad -> progreso = $request -> progreso;
        $add_actividad -> created_by = Auth::user()->id;
        $add_actividad -> save();

        $agenda=Agenda_Critica::find($request->id_agenda);
        $aux= $agenda -> progreso;
        $aux2=$request -> progreso;
        $agenda -> progreso = $aux + $aux2;
        if($agenda -> progreso > 0 && $agenda -> progreso < 100)
        {
            $agenda -> estado = 12;
        }
        $agenda -> save();

        return redirect()->route('agenda.detalle', ['id' =>$request->id_agenda])->with('mensaje',"Acitividad creada exitosamente."); 
    }


    public function finalizarAgenda($id)
    {
        $agenda=Agenda_Critica::find($id);
        $agenda -> estado = 13;
        $agenda -> save();

        return redirect()->route('agenda.index')->with('mensaje',"Acitividad finalizada.")
        ->with('agenda',$agenda)
        ;        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
