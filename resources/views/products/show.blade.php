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
                            <div class="table-responsive">
									
										       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
														<th><h2><font color="green">ID </font></h2></th>
														<th><h2><font color="green">&nbsp;&nbsp;&nbsp; Producto&nbsp;&nbsp;</font></h2></th>
														<th><h2><font color="green">Cantidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></h2></th>
														<th><h2><font color="green"> Precio compra</font> </h2></th>
														<th><h2><font color="green"> Precio venta</font> </h2></th>
														<th><h2><font color="green"> Vencimiento</font> </h2></th>
</tr>
<a href="{{ route('products.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>

								
							
									<div class="table-wrapper">
<a href="{{ route('products.edit', $product->id)}}" class="btn btn-warning pull-rigth button small btn-block"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>&nbsp; Editar</a>
														
													
												</thead>
												
												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $product->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $product->nombre}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ $product->minimo}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ $product->precio_compra}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ $product->precio_venta}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ $product->fecha_vencimiento}}</h4></td></h3>
	</td>
	</tr>
	</table>
	</tbody>
	{!! $product->body !!}
	</div>
						</div>
						</div>
						</div>
						<div class="clearfix"> </div>
												</tbody>
												
											</table>
										</div>
											</table>
										</div>
									</section>
</div>
								<div class="clearfix"> </div>
							</div>
</div>
</div></div></div></div>




@stop


        
    <!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->




