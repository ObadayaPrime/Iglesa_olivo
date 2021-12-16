<?php

namespace App\Http\Controllers;

use App\Models\Diezmo;
use App\Models\Ofrenda;
use DB;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enero = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-01-01', '2021-01-31'])->first();

        $febrero = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-02-01', '2021-02-31'])->first();
        $marzo = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-03-01', '2021-03-31'])->first();

        $abril = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-04-01', '2021-04-31'])->first();
        $mayo = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-05-01', '2021-05-31'])->first();

        $junio = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-06-01', '2021-06-31'])->first();
        $julio = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-07-01', '2021-07-31'])->first();

        $agosto = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-08-01', '2021-08-31'])->first();
        $septiembre = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-09-01', '2021-09-31'])->first();

        $octubre = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-10-01', '2021-10-30'])->first();
        $noviembre = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-11-01', '2021-11-31'])->first();

        $diciembre = Diezmo::select(
            DB::raw('SUM(Bs) as total')
        )
            ->whereBetween('Fecha', ['2021-12-01', '2021-12-30'])->first();

        $enero1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-01-01', '2021-01-31'])->first();

        $febrero1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-02-01', '2021-02-31'])->first();
        $marzo1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-03-01', '2021-03-31'])->first();

        $abril1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-04-01', '2021-04-31'])->first();
        $mayo1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-05-01', '2021-05-31'])->first();

        $junio1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-06-01', '2021-06-31'])->first();
        $julio1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-07-01', '2021-07-31'])->first();

        $agosto1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-08-01', '2021-08-31'])->first();
        $septiembre1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-09-01', '2021-09-31'])->first();

        $octubre1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-10-01', '2021-10-30'])->first();
        $noviembre1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-11-01', '2021-11-31'])->first();

        $diciembre1 = Ofrenda::select(
            DB::raw('SUM(Monto) as total')
        )
            ->whereBetween('Fecha', ['2021-12-01', '2021-12-30'])->first();

        return view('dashboard.inicio', compact('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre',
            'enero1', 'febrero1', 'marzo1', 'abril1', 'mayo1', 'junio1', 'julio1', 'agosto1', 'septiembre1', 'octubre1', 'noviembre1', 'diciembre1'));
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
        //
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