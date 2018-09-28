<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Cliente;
use App\Models\Tipo_habitacione;
use App\Http\Requests\ClienteRequest;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(ClienteRequest $request)
    {
        $data=new Cliente();
        $data->dni=$request->dni;
        $data->nombre=$request->nombre;
        $data->apellido=$request->apellido;
        $data->telefono=$request->telefono;
        $data->email=$request->email;
        $data->save();

        $cliente_id=$data->id;
        $m_cliente= new Cliente;
        $cliente=$m_cliente->GetClienteById($cliente_id);
        $m_tipo_habitaciones = new Tipo_habitacione;
        $tipos= $m_tipo_habitaciones->ListarTipoHabitaciones();

        return view('hotel.reserva.existe_cliente',compact('cliente', 'tipos'));

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
