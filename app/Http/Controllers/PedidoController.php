<?php

namespace App\Http\Controllers;


use App\Pedido;
use App\Product;
use App\Cliente;
use App\Http\Requests;
use App\Http\Requests\PedidoRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class PedidoController extends Controller
{


function registar() {
    confirm("Se ha registrado correctamente ");
}




function eliminar() {
    confirm("Se ha eliminado correctamente ");
}






public function limpiar(){
  
    DB::table('pedidos')->where('tipo', '!=', 0)->delete();
    return redirect()->route('pedido.index');
    }




  public function index(){
    $a = Auth::user()->name;
        $ped=Pedido::where('cliente',$a)->orderBy('id','DESC')->paginate(4);
        
    	return view('pedido.index',compact('ped'));
    }


    public function create(){
        $producto =Product::all();
        $cliente =Cliente::all();
        return view(('pedido.create'),compact('producto','cliente'));
    }

public function store(PedidoRequest $request){
    $ped = new Pedido;
    $id_producto = $request->producto;
    $unidades = $request->unidades;


$ped->id = $request->id;
$ped->fecha = $request->fecha;
$ped->producto = $id_producto;
$ped->cliente = Auth::user()->name;;
$ped->unidades = $unidades;
$ped->total = $request->total;
$ped->tipo = 0;

$ped->save();

    return redirect()->route('pedido.index');
   
  
    
}



public function edit($id){
    $ped = Pedido::find($id);
    $producto = Product::all();
     $cliente =Cliente::all();
        return view('pedido.edit',compact('ped','producto','cliente'));
    }


public function show($id){
    $ped = Pedido::find($id);
        return view('pedido.show',compact('ped'));
    }



public function update(PedidoRequest $request,$id){
$ped = Pedido::find($id);
   $ped->id = $request->id;
$ped->fecha = $request->fecha;
$ped->producto = $request->producto;
$ped->cliente = $request->cliente;
$ped->unidades = $request->unidades;
$ped->total = $request->total;
$ped->tipo = $request->tipo;
$ped->save();


    return redirect()->route('pedido.index');
    
    
}





    public function destroy($id){
        $ped = Pedido::find($id);
        $ped->delete();
        
    	 return redirect()->route('pedido.index');
         
    }





}

