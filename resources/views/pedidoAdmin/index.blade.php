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
								<div class="inner">

									
										
										<div class="table-wrapper">
										        <table>
												<thead>
													    <tr>
														<th><h2><font color="green"> ID </font></h2></th>
														<th><h2><font color="green">&nbsp;&nbsp;Fecha Pedido</font></h2></th>
														<a href="{{ url('/exportarPedidos')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" ><i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>&nbsp; Exportar a Excel</a>
														
														
													</tr>
												</thead>
												<tbody>
													
													<tbody>
@foreach($ped as $v)
<tr><div text-align="center">
	<h3><td><h4>{{ $v->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;{{ $v->fecha}}</h4></td></h3>
</div>

	<td></font>
   
	<a href="{{ route('pedidoAdmin.show',$v->id)}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-binoculars fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Despachar </a>
	 
    </td>





	
		<form action="{{ route('pedidoAdmin.destroy',$v->id)}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">





<td></font>
   
	@if ($v->tipo === 0)
    <a href="#" class="btn btn-warning  button small btn-block pull-rigth"><i class="	fa fa-clock-o fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Pendiente
@elseif ($v->tipo === 1)
    <a href="#" class="btn btn-success  button small btn-block pull-rigth"><i class="	fa fa-check fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Completado
@elseif ($v->tipo === 2)
    <a href="#" class="btn btn-danger  button small btn-block pull-rigth"><i class="	fa fa-remove fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Cancelado
@endif</a>
	 
    </td>
		
	
		</form>
</td>

</tr>
@endforeach


</tbody>
</table>
{!! $ped->render() !!}	
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
       @endsection

