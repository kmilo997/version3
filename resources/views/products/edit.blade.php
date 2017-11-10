@extends('layout2')

@section('titulo')


 <li>
                        <a  class="active-menu"  href="{{route('products.index')}}"><i class="fa fa-dashboard"></i> Producto</a>
                    </li>
                    <li>
                        <a href="{{route('pedidoAdmin.index')}}"><i class="fa fa-desktop"></i> Pedidos</a>
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

 <div id="page-inner">
     <div class="row">
                <div class="col-md-12">
                   <div class="panel panel-default">
                        <div class="panel-heading">

      <h3 class="agile_heading">Productos</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr productos</p>
     
    </div>
  </div>



 </div>


					
							</div>
					
<!-- Content -->
				
								 <div class="panel-body">
									
							
				
	

							
								

<a href="{{ route('products.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>


	


@include('products.fragment.error')


{!! Form::model($product,['route'=> ['products.update', $product->id] , 'method' => 'PUT'])  !!}

@include('products.fragment.form')

{!! Form::close() !!}


</div>





</div>
</div>
</div>

</div>
<div class="clearfix"> </div>
</div>
</div>

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
      
      @stop





