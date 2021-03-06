@extends('layout2')


@section('titulo')


   <li ><a href="{{route('products.index')}}"><em class="fa fa-dropbox">&nbsp;</em> Productos</a></li>
            <li ><a href="{{route('venta.index')}}"><em class="fa fa-smile-o ">&nbsp;</em> Ventas</a></li>
            <li class="active"><a href="{{route('pedidoAdmin.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
            <li ><a href="{{route('proveedor.index')}}"><em class="fa fa-users">&nbsp;</em> Proveedores</a></li>
            <li><a href="{{route('products.index')}}"><em class="fa fa-users">&nbsp;</em> Clientes</a></li>
  <li><a href="/perfil"><em class="fa fa-cog">&nbsp;</em> Perfil</a></li>
            <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <em class="fa fa-power-off">&nbsp;</em>
                            SALIR
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </li>

@endsection


@section('content')

<div id="page-inner">
     <div class="row">
                <div class="col-md-12">
                   <div class="panel panel-default">


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
														<th><h2><font color="green">&nbsp;Cliente </font></h2></th>
														<th><h2><font color="green">&nbsp;Producto</font></h2></th>
															<th><h2><font color="green">&nbsp;unidades</font></h2></th>
																<th><h2><font color="green">&nbsp;fecha</font></h2></th>
																<th><h2><font color="green">&nbsp;Total</font></h2></th>
																<th><h2><font color="green">&nbsp;Tipo</font></h2></th>

</tr>
<a href="{{ route('pedidoAdmin.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Volver</a>



									<div class="table-wrapper">



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

	<a href="{{ route('despachar', ['id'=>$ped->id,'tipo'=>1])}}" class="btn btn-success pull-rigth button small btn-block"><i class="fa fa-check fa-2x" aria-hidden="true"></i>&nbsp; Despachar</a>
	<a href="{{ route('despachar', ['id'=>$ped->id,'tipo'=>2])}}" class="btn btn-danger pull-rigth button small btn-block"><i class="fa fa-times fa-2x" aria-hidden="true"></i>&nbsp; Cancelar</a>

	</tbody>
	{!! $ped->body !!}
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
