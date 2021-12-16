<?php

namespace App\Http\Controllers;

use App\Models\Ofrenda;
use Illuminate\Http\Request;

class OfrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos = Ofrenda::join('admin', 'admin.id', 'ingresos.CodAdmin')
            ->get();

        return view('dashboard.panel.ingresos.ofrenda', compact('ingresos'));

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

    public function imprimir()
    {
        $ingresos = Ofrenda::join('admin', 'admin.id', 'ingresos.CodAdmin')
            ->get();
        $pdf = \PDF::loadview('dashboard.panel.ingresos.pdfofrenda', compact('ingresos'));
        //return $pdf->stream();
        return $pdf->download('ofrenda.pdf');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $save = Ofrenda::insert([
            "Cultos" => $request->Cultos,
            "Fecha" => $request->Fecha,
            "Monto" => $request->Monto,
            "CodAdmin" => auth()->user()->id,

        ]);
        return response()->json("Se Registro la Ofrenda", 200);
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