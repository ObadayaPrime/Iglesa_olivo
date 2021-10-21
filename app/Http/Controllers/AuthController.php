<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest', ['only' => 'showlogin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.auth.login');
    }

    /**
    * login
    *
    * @return void
    */
    public function login(Request $request)
    {
        $credentials = $this->validate(request(), [
            'username' => 'required|string',
            'password' => 'required|string'
            ]);
        $messages=[
                'username.required'=>"reqerido",
                'password.required'=>"password requerido",
            ];
        $error = Validator::make($request->all(), $credentials, $messages);

        $user = User::where('user', request()->input('username'))
        ->where('password', request()->input('password'))
        ->first();
   
        $remember_me = request()->has('remember') ? true : false;
        if (empty($user)) {
            return response()->json('no logeado', 200); 
            /*return redirect(route('showlogin'))
            ->with('flash', 'usuario no encontrado')
            ->withInput([request()->input('username')])
            ->withError(['username'=>trans('auth.failed')]);*/
            
        } else {
  
            if (Auth::loginUsingId($user->id , $remember_me)) {
            
                return response()->json('logeoado', 200); ;
            }
        }
    }
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            request()->session()->flush();
            request()->session()->invalidate();
        }
        return redirect(route('showlogin'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function inicio(){
        return view('dashboard.inicio');
    }
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
