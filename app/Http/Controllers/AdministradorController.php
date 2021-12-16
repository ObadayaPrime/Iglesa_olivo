<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Miembros;
use Illuminate\Http\Request;
use DB;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin=User::get();
        $miembros=Miembros::get();
        $roles=DB::table('roles')->where('estado',1)->get();
        return view('dashboard.panel.administrador.administrador', compact('admin','miembros','roles'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verificarUser=User::where("user", $request->user)->first();
        if ($verificarUser==null) {
            $usuario = User::insertGetId([
                "user" => $request->user,
                "password" => $request->password,
                "email" => $request->email,
                "rol" => $request->rol,
                "Ci" => $request->Ci,
            ]);
            $roles=DB::table('roles_admin')->insert([
                "estado" => 1,
                "admin_id" => $usuario,
                "roles_id" => $request->rol,
            ]);
            return response()->json("registrado", 200);
        }else {
            return response()->json("usuario ya existe", 200);
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
        $admin=User::get();
        $miembros=Miembros::get();
        return view('dashboard.panel.administrador.administrador', compact('admin','miembros'));

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
