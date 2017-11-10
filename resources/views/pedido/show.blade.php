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

      <h3 class="agile_heading">Pedido</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr Pedido</p>
     
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
													<th><h2><font color="green">ID </font></h2></th>
														<th><h2><font color="green">&nbsp;Cliente </font></h2></th>
														<th><h2><font color="green">&nbsp;Producto</font></h2></th>
															<th><h2><font color="green">&nbsp;unidades</font></h2></th>
																<th><h2><font color="green">&nbsp;fecha</font></h2></th>
																<th><h2><font color="green">&nbsp;Total</font></h2></th>
																<th><h2><font color="green">&nbsp;Tipo</font></h2></th>
														
</tr>
<a href="{{ route('pedido.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>

								<br>	<br>	<br>	<br>
							
				
														
													
												</thead>
												
												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $ped->id}}</h4></td></h3>
	<h3><td><h4>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->cliente}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->producto}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->unidades}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->fecha}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->total}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
@if ($ped->tipo === 0)
    Pendiente
@elseif ($ped->tipo === 1)
    Completado
@elseif ($ped->tipo === 2)
    Cancelado
@endif


	
	
	
	</h4></td></h3>


	</td>
	</tr>
	</table>
	</tbody>
	{!! $ped->body !!}
	</div>
						</div>
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




@stop


        
    <!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->




