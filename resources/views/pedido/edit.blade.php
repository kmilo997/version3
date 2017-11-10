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

      <h3 class="agile_heading">Pedidos</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr Pedidos</p>
     
    </div>
  </div>



 </div>


					
							</div>
					
<!-- Content -->
			 <div class="panel-body">

							
								

<a href="{{ route('pedido.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>


	


@include('pedido.fragment.error')


{!! Form::model($ped,['route'=> ['pedido.update', $ped->id] , 'method' => 'PUT'])  !!}

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

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
      
      @stop





