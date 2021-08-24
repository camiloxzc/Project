<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicioProducto;

class ServicioProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $nombre  = $request->get('nombre');
    	$precio = $request->get('precio');

        $ServiciosProductos = ServicioProducto::orderBy('idservicioproducto', 'ASC')
            ->nombre($nombre)
    		->precio($precio)
            ->paginate(10);

        return view('ServiciosProductos.index', compact('ServiciosProductos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ServiciosProductos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ServicioProducto::create($request->all());
        return redirect()->route('ServiciosProductos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idservicioproducto)
    {
        //
        $ServicioProducto = ServicioProducto::find($idservicioproducto);
        return view('ServiciosProductos.show')->with('ServicioProducto',$ServicioProducto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idservicioproducto)
    {
        $ServicioProducto = ServicioProducto::find($idservicioproducto);
        return view('ServiciosProductos.edit')->with('ServicioProducto',$ServicioProducto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idservicioproducto)
    {
         //Buscar registro de la tabla
         $ServicioProducto = ServicioProducto::find($idservicioproducto);
         //Actualizar datos  de los atributos a editar
         $ServicioProducto->nombre = $request->nombre;
         $ServicioProducto->descripcion = $request->descripcion;
         $ServicioProducto->precio = $request->precio;
         $ServicioProducto->cantidad = $request->cantidad;
         $ServicioProducto->estado = $request->estado;
         $ServicioProducto->idcategoria = $request->idcategoria;
         $ServicioProducto->iddetalleserviciousuario = $request->iddetalleserviciousuario;
        $ServicioProducto->update();

        return redirect()->route('ServiciosProductos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idservicioproducto)
    {
        //
        $idservicioproducto=ServicioProducto::find($idservicioproducto);
        $idservicioproducto->delete();

        return back();
    }
    public function changeStatus(Request $request){

        $EstadoUpdate = ServicioProducto::findOrFail($request->idservicioproducto)->update(['estado' => $request->estado]);

        if($request->estado == 0)  {
            $newStatus = '<br> <button type="button" class="btn btn-sm btn-danger">Inactiva</button>';
        }else{
            $newStatus ='<br> <button type="button" class="btn btn-sm btn-success">Activa</button>';
        }

        return response()->json(['var'=>''.$newStatus.'']);
        }
}
