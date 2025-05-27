<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
      return view('user/index');
    }

    public function login(){
        return view('modules/auth/login');
    }


    public function registro(){
        return view('modules/auth/registro');
    }


  public function registrar(Request $request){


    $request->validate([        
        'name' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/','max:30'],
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6'
    ]);


     $item = new User();
     $item->name = $request->name;
     $item->email = $request->email;
     $item->password = Hash::make($request->password);
     $item->save();
     return to_route('login')->with('registro_exitoso', '¡Registro completado correctamente!');
  }


  public function logear(Request $request){
    $request->validate([                
        'email' => 'required|email',
        'password' => 'required|string|min:6'
    ]);


      $credenciales  = [
         'email' => $request->email,
         'password' => $request->password
      ];
      if (Auth::attempt($credenciales)) {
           return to_route('productos.index');
      }
      else{
           return to_route('login');
      }
  }


  public function logout(){
     session()->flush();
     Auth::logout();
     return to_route('login');
  }

}
