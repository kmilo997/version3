@extends(Config::get('entrust-gui.layout'))

@section('heading', 'Create User')

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
                            <a class="btn btn-block btn-success" href="{{ route('entrust-gui::users.index') }}"><span class="btn-label"><i class="fa fa-reply "></i></span>Listado</a>


<form action="{{ route('entrust-gui::users.store') }}" method="post" role="form">
    @include('entrust-gui::users.partials.form')
    <button type="submit" id="create" class="btn btn-success btn-block btn-primary"><span class="btn-label"><i class=" fa fa-save "></i></span>Guardar</button>
   
</form>
@endsection
