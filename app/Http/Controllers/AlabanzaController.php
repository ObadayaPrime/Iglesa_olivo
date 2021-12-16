<?php

namespace App\Http\Controllers;

use App\Models\Alabanza;
use Illuminate\Http\Request;

class AlabanzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alabanza = Alabanza::get();
        return view('dashboard.panel.alabanzas.alabanzascreate', compact('alabanza', ));
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
        $alabanza = Alabanza::get();
        $pdf = \PDF::loadview('dashboard.panel.alabanzas.pdfalabanza', compact('alabanza'));
        //return $pdf->stream();
        return $pdf->download('alabanza.pdf');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = Alabanza::insert([
            "ID" => $request->ID,
            "Nombre" => $request->Nombre,
            "tipo" => $request->tipo,
            "letra" => $request->letra,
            "video" => $request->video,
            "tipo2" => $request->tipo2,
        ]);
        return response()->json("registrado", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $alabanza = Alabanza::get();
        return view('dashboard.panel.alabanzas.listaalabanza', compact('alabanza', ));
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