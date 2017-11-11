@extends('layout2')

@section('titulo')


 <li>
                        <a  href="{{route('products.index')}}"><i class="fa fa-dashboard"></i> Producto</a>
                    </li>
                    <li>
                        <a href="{{route('pedidoAdmin.index')}}"><i class="fa fa-desktop"></i> Pedidos</a>
                    </li>
          <li>
                        <a href="/admin/users"><i class="fa fa-bar-chart-o"></i> Clientes</a>
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

						<!-- Content -->
						 
							 <div class="panel-body">
                            <div class="table-responsive">
									
										       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													    <tr>
														<th><h2><font color="green"> NIT </font></h2></th>
														<th><h2><font color="green">Nombre</font></h2></th>
														<a href="{{ route('proveedor.create')}}" class="btn btn-success button small btn-block btn-lg pull-rigth"><i class="fa fa-plus fa-2x" aria-hidden="true"></i>&nbsp; Nuevo</a>
														
														
													</tr>
												</thead>
												<tbody>
													
													<tbody>
@foreach($prov as $pv)
<tr><div text-align="center">
	<h3><td><h4>{{ $pv->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>{{ $pv->Nombre}}</h4></td></h3>
</div>
	<td></font>
   
	<a href="{{ route('proveedor.show',$pv->id)}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-eye fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Ver</a>
	 
    </td>


	<td>
	<a class=" btn btn-warning button small btn-block pull-rigth" href="{{ route('proveedor.edit',$pv->id)}}"><i class="fa fa-pencil fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Editar</a>
    
	
    
	</td>


</script>
	<td>
		<form action="{{ route('proveedor.destroy',$pv->id)}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">

<button class="btn btn-danger button small  btn-block pull-rigth" onclick="myFunction()"><i class="fa fa-trash-o fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Borrar</button>

		
	
		</form>
</td>

</tr>
@endforeach


</tbody>
</table>
{!! $prov->render() !!}	
	</div>
						</div>
						<br><br>



<a href="{{ url('/exportarProveedores')}}" class="btn btn-success button small  btn-lg pull-rigth" ><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Exportar a Excel</a>	
						</div>
						</div>
						
												</tbody>
												
											</table>
										</div>
											</table>
										</div>
									</section>
</div>
								
							</div>
</div>
</div></div></div></div>
       @endsection

