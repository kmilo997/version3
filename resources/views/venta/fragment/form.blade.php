<div class="col-md-1"></div>

<div class="col-md-10">





<a href="{{ route('venta.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a><br>



<div class="form-group" >
{!! Form::label('fecha','Fecha')!!}
{!! Form::date('fecha',null,['class'=> 'form-control '])!!}
</div>


<div class="form-group" >
{!! Form::label('producto','Producto')!!}
<select id="producto" class="form-control" name="producto" >
<option disabled="true" value="0" selected>Nombre -:- Precio -:- Cantidad</option>
@foreach($producto as $product)
<option value="{{$product['id']}}">{{$product['nombre']}} -:- {{$product['precio_venta']}} -:- {{$product['minimo']}}</option>
@endforeach
</select>
</div>


<div class="form-group" >
{!! Form::label('cliente','Cliente')!!}

<select id="cliente" class="form-control" name="cliente">
<option disabled="true" selected>Nombre Cliente</option>

@foreach($user as $cli)
<option value="{{$cli['email']}}">{{$cli['name']}} </option>
@endforeach
</select>
</div>



<div class="form-group" >
{!! Form::label('unidades','Unidades')!!}
<input type="number" class="form-control"  value="number" id="unidades" name="unidades" >

</div>


<div class="form-group">

{!! Form::label('total','total venta')!!}
<input type="number" class="form-control"  id="total" name="total"  readonly>
</div>







<div>
{!! Form::submit('Guardar',['class '=> ' form-group  btn-block btn-lg btn btn-primary'])!!}
</div>
</div>

<!---
<div>
{!! Form::reset('Borrar datos del formulario',['class '=> ' form-group btn btn-danger btn-lg '])!!}
</div> -->
