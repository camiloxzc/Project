<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitudServicio;


class SolicitudServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SolicitudesServicios = SolicitudServicio::paginate(10);

        return view('SolicitudesServicios.index', compact('SolicitudesServicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SolicitudesServicios.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SolicitudServicio::create($request->all());
        return redirect()->route('SolicitudesServicios.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idsolicitudservicio)
    {
        $SolicitudServicio = SolicitudServicio::find($idsolicitudservicio);
        return view('SolicitudesServicios.show')->with('SolicitudServicio',$SolicitudServicio);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idsolicitudservicio)
    {
        $SolicitudServicio = SolicitudServicio::find($idsolicitudservicio);
        return view('SolicitudesServicios.edit')->with('SolicitudServicio',$SolicitudServicio);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idsolicitudservicio)
    {
            //Buscar registro de la tabla
             $SolicitudServicio = SolicitudServicio::find($idsolicitudservicio);
             //Actualizar datos  de los atributos a editar
             $SolicitudServicio->fechasolicitud = $request->fechasolicitud;
             $SolicitudServicio->fechaservicio = $request->fechaservicio;
             $SolicitudServicio->precio = $request->precio;
             $SolicitudServicio->modalidad = $request->modalidad;
             $SolicitudServicio->direccion = $request->direccion;
             $SolicitudServicio->idestadoservicio = $request->idestadoservicio;
             $SolicitudServicio->idusuario = $request->idusuario;
            $SolicitudServicio->update();

            return redirect()->route('SolicitudesServicios.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idsolicitudservicio)
    {
        $idsolicitudservicio=SolicitudServicio::find($idsolicitudservicio);
        $idsolicitudservicio->delete();

        return back();
    }
}
