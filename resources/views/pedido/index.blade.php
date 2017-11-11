@extends('inicio2')

@section('titulo')


 
                        <a class="active-menu"  href="{{route('pedidoAdmin.index')}}"><i class="fa fa-desktop"></i> Pedidos</a>
                    </li>
          <li>
                        <a  href="{{route('cliente.index')}}"><i class="fa fa-bar-chart-o"></i> Cotizacion</a>
                    </li>
                   

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
														<th><h2><font color="green"> ID </font></h2></th>
														<th><h2><font color="green">&nbsp;&nbsp;Fecha Pedido</font></h2></th>
														<a href="{{ route('pedido.create')}}" class="btn btn-success button small btn-block btn-lg pull-rigth"><i class="fa fa-plus fa-2x" aria-hidden="true"></i>&nbsp; Nuevo</a>
														
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
   
	<a href="{{ route('pedido.show',$v->id)}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-eye fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Ver</a>
	 
    </td>





	
		<form action="{{ route('pedido.destroy',$v->id)}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">





<td></font>
   
	@if ($v->tipo === 0)
    <a href="#" class="btn btn-warning  button small disabled btn-block pull-rigth"><i class="	fa fa-clock-o fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Pendiente
@elseif ($v->tipo === 1)
    <a href="#" class="btn btn-success  button small disabled btn-block pull-rigth"><i class="	fa fa-check fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Completado
@elseif ($v->tipo === 2)
    <a href="#" class="btn btn-danger  button small disabled btn-block pull-rigth"><i class="	fa fa-times fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Cancelado
@endif</a>
	 
    </td>
		
	
		</form>
</td>

</tr>
@endforeach


</tbody>
</table>
{!! $ped->render() !!}	
<a href="{{ url('/limpiar')}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-trash-o fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Limpiar</a>
	</div>
						</div>
						<a href="{{ url('/exportarPedidos')}}" class="btn btn-success button small  btn-lg pull-rigth" ><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Exportar a Excel</a>	
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

