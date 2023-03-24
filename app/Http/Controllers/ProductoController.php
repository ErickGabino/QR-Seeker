<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use Validator;
use Hash;

class ProductoController extends Controller
{

    public function create(){
        return view('auth.registerProduc');
    }

    public function read(){
        $producto = \DB::table('productos')
        ->select('productos.*')
        ->orderBy('id','ASC')
        ->get();

        return view('auth.ConsultaProd')->with('ConsultaProd',$producto);
    }
    

   
    function imprimir($id){

 
            $producto = \DB::table('productos')->where('id','3')
            ->select('productos.*')
            ->orderBy('id','ASC')
            ->get();
            $pdf = \PDF::loadView('pdf',compact(('producto')));
            return $pdf->download('Factura.pdf');
          
 }

    public function store(Request $request){

        $validator= Validator::make($request->all(),[
            'nombre' => 'required',
            'categoria' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'Sucursal' => 'required',
            'imagen' => 'required',
            'qr' => 'required',
        ]);
    
        $data = $request->all();
        if( $validator->fails()){
    
            dd( 'Todo Mal');
        }else{
    
    
            $imagen =$request-> file( 'imagen');
            $nombre=time()."_".$imagen->getClientOriginalExtension();
            $destino = public_path('Productos/IMG');
    
            $request->imagen->move($destino,$nombre);

            $qr =$request-> file( 'qr');
            $qr=time()."_".$qr->getClientOriginalExtension();
            $destino = public_path('QRP/IMG');
    
            $request->qr->move($destino,$qr);
    
    
            $Datimg = new producto([
                'nombre'=>$request->nombre,
                'categoria'=>$request->categoria,
                'descripcion'=>$request->descripcion,
                'precio'=>$request->precio,
                'Sucursal'=>$request->Sucursal,
                'imagen'=>$nombre,
                'qr'=>$qr,
               
                'password'=>Hash::make($request->password)
    
            ]);
    
            $Datimg->save();
        }
        return redirect()->to('/registerProduc');
    }
  
    
}

/*public function store(Request $request){

    $validator= Validator::make($request->all(),[
        'name' => 'required',
        'nameap' => 'required',
        'nameam' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'txtAdmin' => 'required',
    ]);

    $data = $request->all();
    if( $validator->fails()){

        dd( 'Todo Mal');
    }else{


        $imagen =$request-> file( 'txtAdmin');
        $nombre=time()."_".$imagen->getClientOriginalExtension();
        $destino = public_path('Productos/IMG');

        $request->txtAdmin->move($destino,$nombre);

        $Datimg = new Adm([
            'name'=>$request->name,
            'nameap'=>$request->nameap,
            'nameam'=>$request->nameam,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'txtAdmin'=>$nombre,
            'password'=>Hash::make($request->password)

        ]);

        $Datimg->save();
    }
}

public function store(){
        
        $this->validate(request(),[
            'nombre' => 'required',
            'categoria' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'Sucursal' => 'required',
        ]);

        $registerProduc = producto::create(request(['nombre','categoria','descripcion','precio','Sucursal']));

        return redirect()->to('/registerProduc');
    }*/