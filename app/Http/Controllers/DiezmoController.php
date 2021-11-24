<?php

namespace App\Http\Controllers;
use App\Models\Diezmo;
use App\Models\Miembros;
use Illuminate\Http\Request;

class DiezmoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miembros=Miembros::get();
        $diezmos=Diezmo::
        join('miembros','miembros.Ci','diezmos.Ci')
        ->get();
        return view('dashboard.panel.ingresos.diezmos', compact('diezmos','miembros'));
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
       
            $save = Diezmo::insert([
                "Ci" => $request->Ci,
                "Fecha" => $request->Fecha,
                "Bs" => $request->Bs,
                "Dolar" => $request->Dolar,
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
        $miembros=Miembros::get();
        $diezmos=Diezmo::
        join('miembros','miembros.Ci','diezmos.Ci')
        ->get();
        return view('dashboard.panel.ingresos.diezmos', compact('diezmos','miembros'));
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
