<?php

namespace App\Http\Controllers;
use App\Models\Ministerio;
use Illuminate\Http\Request;

class MinisterioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $ministerios=Ministerio::get();
        return view('dashboard.panel.ministerio.ministeriocreate', compact('ministerios'));
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
        $verificarCi=Ministerio::where("CodMinist", $request->CodMinist)->first();
        if ($verificarCi==null) {
            $save = Ministerio::insert([
                "CodMinist" => $request->CodMinist,
                "NombreMinist" => $request->NombreMinist,
                "FechaR" => $request->FechaR,
                "Telefono" => $request->Telefono,
                "DireccionM" => $request->DireccionM,
            ]);
            return response()->json("registrado", 200);
        }else {
            return response()->json("Ministerio ya existe", 200);
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
        $ministerios=Ministerio::get();
        return view('dashboard.panel.ministerio.listaministerio', compact('ministerios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ministerio=Ministerio::where("CodMinist", $id)->first();
        return view('dashboard.panel.ministerio.ministerioedit', compact('ministerio'));
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
        $save = Ministerio::where("CodMinist", $request->CodMinist)->update([
            "NombreMinist" => $request->NombreMinist,
            "Telefono" => $request->Telefono,
            "FechaR" => $request->FechaR,
            "DireccionM" => $request->DireccionM,
            
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
