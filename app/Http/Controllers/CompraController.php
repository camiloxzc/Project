<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $compras = Compra::orderBy('idcompra','ASC')->paginate();
        return view('compras.index',compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('compras.create');
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
        Compra::create($request->all());
        return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idcompra)
    {
        //
        $compras = Compra::find($idcompra);
        return view('compras.show')->with('compras',$compras);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idcompra)
    {
        //
        $compras = Compra::find($idcompra);
        return view('compras.edit')->with('compras',$compras);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idcompra)
    {
        //
        $compras = Compra::find($idcompra);
         //Actualizar datos  de los atributos a editar
         $compras->fecha = $request->fecha;
         $compras->preciototal = $request->preciototal;
         $compras->iva = $request->iva;
         $compras->update();
         return redirect()->route('compras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcompra)
    {
        //
        $compras=Compra::find($idcompra);
        $compras->delete();

        return back();
    }
}
