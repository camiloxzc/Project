<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $proveedors = Proveedor::orderBy('idproveedor','ASC')->paginate();
        return view('proveedors.index',compact('proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Proveedor::create($request->all());
        return redirect()->route('proveedors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idproveedor)
    {
        //
        $proveedors= Proveedor::find($idproveedor);
        return view('proveedors.show')->with('proveedors', $proveedors);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idproveedor)
    {
        //
        $proveedors= Proveedor::find($idproveedor);
        return view('proveedors.edit')->with('proveedores',$proveedors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idproveedor)
    {
        //
        $proveedors = Proveedor::find($idproveedor);
         //Actualizar datos  de los atributos a editar
         $proveedors->nit = $request->nit;
         $proveedors->proveedor = $request->proveedor;
         $proveedors->personacontacto = $request->personacontacto;
         $proveedors->correo = $request->correo;
         $proveedors->telefono = $request->telefono;
         $proveedors->direccion = $request->direccion;
         $proveedors->update();

         return redirect()->route('proveedors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idproveedor)
    {
        //
        $proveedors=Proveedor::find($idproveedor);
        $proveedors->delete();

        return back();
    }
}
