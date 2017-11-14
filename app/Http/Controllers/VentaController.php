<?php

namespace App\Http\Controllers;


use App\Venta;
use App\Product;
use App\Cliente;
use App\Http\Requests;
use App\Http\Requests\VentaRequest;



class VentaController extends Controller
{


function registar() {
    confirm("Se ha registrado correctamente ");
}




function eliminar() {
    confirm("Se ha eliminado correctamente ");
}







  public function index(){
        $vent=Venta::orderBy('id','DESC')->paginate(4);
    	return view('venta.index',compact('vent'));
    }


    public function create(){
        $producto =Product::all();
        $cliente =Cliente::all();
        return view(('venta.create'),compact('producto','cliente'));
    }

public function store(VentaRequest $request){
    $vent = new Venta;
    $id_producto = $request->producto;
    $unidades = $request->unidades;

    $product = Product::find($id_producto);
    $product->minimo -= $unidades;
    $product->save();

$vent->id = $request->id;
$vent->fecha = $request->fecha;
$vent->producto = $id_producto;
$vent->cliente = $request->cliente;
$vent->unidades = $unidades;
$vent->total = $request->total;
$vent->save();

    return redirect()->route('venta.index')->with('info',"Se ha registrado correctamente la venta");
    registar();


}



public function edit($id){
    $vent = Venta::find($id);
    $producto = Product::all();
     $cliente =Cliente::all();
        return view('venta.edit',compact('vent','producto','cliente'));
    }


public function show($id){
    $vent = Venta::find($id);
        return view('venta.show',compact('vent'));
    }



public function update(VentaRequest $request,$id){
$vent = Venta::find($id);
   $vent->id = $request->id;
$vent->fecha = $request->fecha;
$vent->producto = $request->producto;
$vent->cliente = $request->cliente;
$vent->unidades = $request->unidades;
$vent->total = $request->total;
$vent->save();


    return redirect()->route('venta.index')->with('info',"Se actualizado correctamente");;


}





    public function destroy($id){
        $vent = Venta::find($id);
        $vent->delete();

    	 return redirect()->route('venta.index')->with('info',"Se eliminado correctamente");

    }





}
