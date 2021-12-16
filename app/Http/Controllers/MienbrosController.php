<?php

namespace App\Http\Controllers;

use App\Models\Miembros;
use App\Models\Ministerio;
use Illuminate\Http\Request;

class MienbrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miembros = Miembros::get();
        $ministerios = Ministerio::get();
        return view('dashboard.panel.mienbros.nuevo', compact('miembros', 'ministerios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    public function imprimir()
    {
        $miembros = Miembros::get();
        $pdf = \PDF::loadview('dashboard.panel.mienbros.pdfmiembros', compact('miembros'));
        //return $pdf->stream();
        return $pdf->download('miembros.pdf');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $verificarCi = Miembros::where("Ci", $request->CI)->first();
        if ($verificarCi == null) {
            $save = Miembros::insert([
                "Ci" => $request->CI,
                "nombre" => $request->nombre,
                "apellidoP" => $request->apelldoP,
                "apellidoM" => $request->apelldoM,
                "FechaNac" => $request->fechaNac,
                "sexo" => $request->sexo,
                "Telefono" => $request->telefono,
                "Estado" => $request->estado,
                "Direccion" => $request->dirrecion,
            ]);
            return response()->json("registrado", 200);
        } else {
            return response()->json("usuario ya existe", 200);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $miembros = Miembros::get();
        $ministerios = Ministerio::get();
        return view('dashboard.panel.mienbros.lista', compact('miembros', 'ministerios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $miembro = Miembros::where("Ci", $id)->first();
        return view('dashboard.panel.mienbros.edit', compact('miembro'));
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
        //dd($request->all());
        $save = Miembros::where("Ci", $request->Ci)->update([
            "nombre" => $request->nombre,
            "apellidoP" => $request->apellidoP,
            "apellidoM" => $request->apellidoM,
            "FechaNac" => $request->FechaNac,
            "sexo" => $request->sexo,
            "Telefono" => $request->Telefono,
            "Estado" => $request->Estado,
            "Direccion" => $request->Direccion,
        ]);
        return response()->json("Modificado", 200);

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