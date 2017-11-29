<div class="col-md-1"></div>

<div class="col-md-10">





<a href="{{ route('products.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a><br>


<div class="form-group">

{!! Form::label('id','codigo')!!}
{!! Form::number('id',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('nombre','Nombre del producto')!!}
{!! Form::text('nombre',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('minimo','Cantidad')!!}
{!! Form::number('minimo',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('fecha_vencimiento','Fecha de vencimiento')!!}
{!! Form::date('fecha_vencimiento',null,['class	'=> 'form-control'])!!}
</div>


<div class="form-group">

{!! Form::label('precio_venta','Precio venta')!!}
{!! Form::number('precio_venta',null,['class	'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::submit('Guardar',['class '=> ' form-group btn-block btn-lg btn btn-primary'])!!}
</div>	
</div>