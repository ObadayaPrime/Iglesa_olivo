<?php

namespace App\Http\Controllers;

use App\Models\DetalleMinisterio;
use App\Models\Ministerio;
use Illuminate\Http\Request;

class DetalleMinisterioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function imprimir($id)
    {
        $ministerio = Ministerio::where('ministerios.CodMinist', $id)->first();
        $usuarios = DetalleMinisterio::select('miembros.*', 'detalle_ministerio.Fecha as fecha_registro')
            ->where('detalle_ministerio.CodMinist', $id)
            ->join('miembros', 'miembros.Ci', 'detalle_ministerio.Ci')
            ->get();

        $pdf = \PDF::loadview('dashboard.panel.ministerio.pdfdetalleM', compact('usuarios', 'ministerio'));
        return $pdf->download('detalleM.pdf');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verificar = DetalleMinisterio::where('Ci', $request->Ci)
            ->where('CodMinist', $request->CodMinist)->first();
        if ($verificar) {
            return response()->json([
                "status" => "error",
                "message" => 'ya fue registrado',
            ], 200);
        } else {
            $detalleMinisterio = DetalleMinisterio::insert([
                'Ci' => $request->Ci,
                'CodMinist' => $request->CodMinist,
                'Fecha' => $request->Fecha,
            ]);
            if ($detalleMinisterio) {
                return response()->json([
                    "status" => "ok",
                    "message" => 'registrado correctamente',
                ], 200);
            } else {
                return response()->json([
                    "status" => "error",
                    "message" => 'hubo un error',
                ], 200);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ministerio = Ministerio::where('ministerios.CodMinist', $id)->first();
        $usuarios = DetalleMinisterio::select('miembros.*', 'detalle_ministerio.Fecha as fecha_registro')
            ->where('detalle_ministerio.CodMinist', $id)
            ->join('miembros', 'miembros.Ci', 'detalle_ministerio.Ci')
            ->get();
        return view('dashboard.panel.ministerio.listadetalle', compact('usuarios', 'ministerio'));
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