@extends('layout2')

@section('titulo')


 <li>
                        <a    href="{{route('products.index')}}"><i class="fa fa-dashboard"></i> Producto</a>
                    </li>
                    <li>
                        <a class="active-menu" href="{{route('pedidoAdmin.index')}}"><i class="fa fa-desktop"></i> Pedidos</a>
                    </li>
          <li>
                        <a href="{{route('cliente.index')}}"><i class="fa fa-bar-chart-o"></i> Clientes</a>
                    </li>
                    <li>
                        <a  href="{{route('venta.index')}}"><i class="fa fa-qrcode"></i> Ventas</a>
                    </li>
                    
                    <li>
                        <a href="{{route('proveedor.index')}}"><i class="fa fa-table"></i> Proveedores</a>
                    </li>
                    <li>

@endsection


@section('content')
    <!-- Main -->
 <div id="page-inner">
     <div class="row">
                <div class="col-md-12">
                   <div class="panel panel-default">
                        <div class="panel-heading">

      <h3 class="agile_heading">Pedidos</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr Pedidos</p>
     
    </div>
  </div>



 </div>


					
							</div>
						<!-- Content -->




<div class="wrapper">
							
							
								

<a href="{{ route('pedidoAdmin.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>



								
							

						
				
									
									




@include('pedido.fragment.error')


{!! Form::open(['route'=> 'pedido.store']) !!}

@include('pedido.fragment.form')

{!! Form::close() !!}






</div>




</div>
</div>

</div>

</div>
<div class="clearfix"> </div>
</div>
</div>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

$( "#producto" ).change(function() {
calcular();
});

$( "#unidades" ).blur(function() {
calcular();
});

function calcular(){
var producto = $("#producto option:selected").html().split(" -:- ");
var nombre = producto[0];
var precio = producto[1];
var maximo = producto[2];
 var unidades = $("#unidades").val();
 if(unidades == ""){
alert("digite las unidades de "+nombre);
 //}else if(unidades > maximo || unidades < 1){
   }else if(unidades < 1){
   alert("digite minimo 1  y maximo "+maximo+" unidades de "+nombre);
 }else{
$("#total").val(precio*unidades);
}
}
</script>

<!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
    @endsection
       





