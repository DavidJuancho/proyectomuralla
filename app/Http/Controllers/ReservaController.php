<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Tipo_habitacione;
use App\Models\Cliente;
use App\Models\Reserva;
use App\Models\Habitacione;
use App\Models\Reserva_habitacione;
class ReservaController extends Controller
{

    public function seleccionar_tipo(Request $request)
    {
        $m_cliente=new Cliente;
        $cliente=$m_cliente->GetClienteById($request->cliente_id);

        $m_habitaciones=new Habitacione;
        $habitaciones=$m_habitaciones->habitacionesPorTipo($request->tipo_id);
        
        $tipo=Tipo_habitacione::find($request->tipo_id);
        //return view('hotel.home');        
        return view('hotel.reserva.store', compact('cliente', 'habitaciones','tipo'));        
    }


    public function buscar_cliente(Request $request)
    {
        $dni=$request->dni;
        $m_cliente= new Cliente;
        $cliente=$m_cliente->GetClienteByDni($dni);

        $m_tipo_habitacion = new Tipo_habitacione;
        $tipos= $m_tipo_habitacion->ListarTipoHabitaciones(); 
        //var_dump($habitaciones); exit();
        if((count($cliente))>0)
        {
            return view('hotel.reserva.existe_cliente',compact('cliente', 'tipos'));
        }
        else
        {
            $reservas=Reserva::all();
            return view('hotel.reserva.registrar_cliente',compact('reservas','dni'));
        }

    }

    public function reservaciones()
    {
        return view('hotel.reserva.reservacion');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m_reserva = new Reserva;
        $reservas = $m_reserva->listar();
        return view('hotel.reserva.index', compact('reservas'));
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
        $reservacion = new Reserva;
        $reservacion->cliente_id = $request->cliente_id;

        $reservacion->dias = $request->dias;
        $reservacion->fecha = $request->fecha;
        $reservacion->save();

        $reserva_hab = new Reserva_habitacione;        
        $reserva_hab->habitacione_id = $request->habitaciones;
        $reserva_hab->reserva_id = $reservacion->id;
        $reserva_hab->precio = (double)$request->precio_tipo;
        $reserva_hab->save();

        $reservacion->precio=(double)$reservacion->dias*$reserva_hab->precio;
        
        $reservacion->save();

        return redirect('/')->withFlashSuccess ("Registrado correctamente");
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
