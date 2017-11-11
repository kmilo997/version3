@extends(Config::get('entrust-gui.layout'))


@section('content')

<div id="page-inner">
     <div class="row">
                <div class="col-md-12">
                   <div class="panel panel-default">
                        <div class="panel-heading">

      <h3 class="agile_heading">Clientes</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr clientes</p>
     
    </div>
  </div>



 </div>


					
							</div>


<div class="models--actions">
    <a class="btn btn-success btn-block btn-primary" href="{{ route('entrust-gui::users.create') }}"><span class="btn-label"><i class="fa fa-plus"></i></span>Añadir Cliente</a>

</div>
<table class="table table-striped">
  <tr>
    <th>Email</th>
    <th>Acciones</th>
  </tr>
  @foreach($users as $user)
    <tr>
      <td>{{ $user->email }}</th>
      <td class="col-xs-3">
        <form action="{{ route('entrust-gui::users.destroy', $user->id) }}" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::users.edit', $user->id) }}"><span class="btn-label"><i class="fa fa-pencil"></i></span>Editar</a>
          <button type="submit" class="btn btn-labeled btn-danger"><span class="btn-label"><i class="fa fa-trash"></i></span>Borrar</button>
        </form>
      </td>
    </tr>
  @endforeach
</table>
<div class="text-center">
  {!! $users->render() !!}
</div>
@endsection
