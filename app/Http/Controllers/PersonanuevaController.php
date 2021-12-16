<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Miembros;
use App\Models\Personanueva;
use Illuminate\Http\Request;

class PersonanuevaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nuevapersona = Personanueva::get();

        $Actividades = actividad::get();
        //dd($Actividades);
        return view('dashboard.panel.nuevapersona.persona', compact('nuevapersona', 'Actividades'));
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
        $nuevapersona = Personanueva::get();
        $Actividad = actividad::get();
        $pdf = \PDF::loadview('dashboard.panel.nuevapersona.pdfpersona', compact('nuevapersona', 'Actividad'));
        //return $pdf->stream();
        return $pdf->download('persona.pdf');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verificarCIn = Personanueva::where("CIn", $request->CIn)->first();
        if ($verificarCIn == null) {
            $save = Personanueva::insert([
                "CIn" => $request->CI,
                "Nombre" => $request->Nombre,
                "ApellidoP" => $request->ApellidoP,
                "ApellidoM" => $request->ApellidoM,
                "Sexo" => $request->Sexo,
                "Telefono" => $request->telefono,
                "Actividad" => $request->Actividad,
                "Direccionn" => $request->Direccionn,
            ]);
            return response()->json("registrado", 200);
        } else {
            return response()->json("Persona ya existe", 200);
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
        $nuevapersona = Personanueva::get();
        return view('dashboard.panel.nuevapersona.listapersona', compact('nuevapersona'));
    }

    public function mostrar_persona(Request $request, $id)
    {
        $nuevapersona = Personanueva::find($id);
        return response()->json($nuevapersona, 200);
    }
    public function store_modal(Request $request)
    {
        $mienbros = Miembros::insert([
            "Ci" => $request->ci,
            "nombre" => $request->nombre,
            "apellidoP" => $request->apellidoP,
            "apellidoM" => $request->apellidoM,
            "FechaNac" => $request->fechaNac,
            "sexo" => $request->sexo,
            "Telefono" => $request->telefono,
            "Estado" => $request->estado,
            "Direccion" => $request->dirrecion,
        ]);
        $nuevapersona = Personanueva::find($request->ci)->delete();
        return response()->json([
            "status" => "guardado",
            "message" => "registrado correctamente",
        ], 200);
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
