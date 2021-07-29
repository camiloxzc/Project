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
    public function index()
    {
        //
        $ServiciosProductos = ServicioProducto::paginate(10);

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
    public function show(ServicioProducto $ServicioProducto)
    {
        //
        return view('ServiciosProductos.show', compact('ServicioProducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicioProducto $ServicioProducto)
    {
        //
        return view('ServiciosProductos.edit', compact('ServicioProducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicioProducto $ServicioProducto)
    {
        //
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
}
