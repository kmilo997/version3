<div class="col-md-1"></div>

<div class="col-md-10">





<a href="{{ route('pedido.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a><br>





<div class="form-group" >
{!! Form::label('fecha','Fecha')!!}
{!! Form::date('fecha',null,['class'=> 'form-control '])!!}
</div>


<div class="form-group" >
{!! Form::label('producto','Producto (Nombre,precio,Cantidad)')!!}
<select id="producto" class="form-control" name="producto" >
<option disabled="true" value="0" selected>Nombre -:- Precio -:- Cantidad</option>
@foreach($producto as $product)
<option value="{{$product['id']}}">{{$product['nombre']}} -:- {{$product['precio_venta']}} -:- {{$product['minimo']}}</option>
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

<!--
<div class="form-group" >
{!! Form::label('tipo','Tipo')!!}
<select id="tipo" class="form-control" name="tipo" >

<option value="0">pendiente</option>
<option value="1">completado</option>
<option value="2">cancelado</option>
</select>
</div>

 {!! Form::text('unidades',null,['class'=> 'form-control '])!!} -->




<div>
{!! Form::submit('Guardar',['class '=> ' form-group btn-block btn-lg btn btn-primary'])!!}
</div>

</div>

<input type="reset" name="limpiar" value="Borrar datos del formulario" />