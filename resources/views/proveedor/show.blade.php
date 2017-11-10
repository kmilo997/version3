@extends('layout2')

@section('titulo')


 <li>
                        <a  href="{{route('products.index')}}"><i class="fa fa-dashboard"></i> Producto</a>
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
                        <a class="active-menu" href="{{route('proveedor.index')}}"><i class="fa fa-table"></i> Proveedores</a>
                    </li>
                    <li>

@endsection


@section('content')

<div id="page-inner">
     <div class="row">
                <div class="col-md-12">
                   <div class="panel panel-default">
                        <div class="panel-heading">

      <h3 class="agile_heading">Proveedores</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr Proveedores</p>
     
    </div>
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
													<th><h2><font color="green">NIT </font></h2></th>
														<th><h2><font color="green">Nombre </font></h2></th>
														<th><h2><font color="green">Telefono</font></h2></th>
														<th><h2><font color="green"> Direccion</font></h2></th>
														<th><h2><font color="green"> Correo</font> </h2></th>
															<th><h2><font color="green"> Ciudad</font> </h2></th>
</tr>
<a href="{{ route('proveedor.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>

								
							
									<div class="table-wrapper">
<a href="{{ route('proveedor.edit', $prov->id)}}" class="btn btn-warning pull-rigth button small btn-block"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>&nbsp; Editar</a>
														
													
												</thead>
												
												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $prov->id}}</h4></td></h3>
	<h3><td><h4>{{ $prov->Nombre}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>{{ $prov->Telefono}}</h4></td></h3>
	<h3><td><h4>{{ $prov->Direccion}}</h4></td></h3>
	<h3><td><h4>{{ $prov->Correo}}</h4></td></h3>
	<h3><td><h4>{{ $prov->Ciudad}}</h4></td></h3>

	</td>
	</tr>
	</table>
	</tbody>
	{!! $prov->body !!}
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




