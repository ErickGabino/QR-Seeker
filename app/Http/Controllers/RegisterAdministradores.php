<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adm;

class RegisterAdministradores extends Controller
{
    public function create(){
        return view('auth.registerAd');
    }

    //Visualisacion de datos
    public function read(){
        $Admninistradores = \DB::table('adms')
                   ->select('adms.*')
                   ->orderBy('id','ASC')
                   ->get();

        return view('auth.ConsultaAd')->with('ConsultaAd',$Admninistradores);
    }

    public function store(){
        
        $this->validate(request(),[
            'name' => 'required',
            'nameap' => 'required',
            'nameam' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'txtAdmin' => 'required',
        ]);

        $registerAd = Adm::create(request(['name','nameap','nameam','telefono','email','password','txtAdmin']));

  
        return redirect()->to('/registerAd');
    }
  
}