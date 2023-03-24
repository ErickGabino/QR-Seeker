<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function create(){
        return view('auth.sucursal');
    }

    public function read(){
        $sucursal = \DB::table('sucursals')
        ->select('sucursals.*')
        ->orderBy('id','ASC')
        ->get();

        return view('auth.ConsultaSuc')->with('ConsultaSuc',$sucursal);
    }

    public function store(){
        
        $this->validate(request(),[
            'nombre' => 'required',
            'direccion' => 'required',
            'pagina' => 'required',
            'telefono' => 'required',
        ]);

        $sucursals = Sucursal::create(request(['nombre','direccion','pagina','telefono']));

        return redirect()->to('/sucursal');
    }
}
