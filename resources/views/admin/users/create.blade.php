@extends('menu')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <div class="panel panel-default col-md-19 ">
        <div class="panel-heading" style="color:#527a9d">Registro</div>
        <div class="panel-body">
         @include('errors._errors')

         <div class="col-xs-12 col-md-10">
          {!! Form::open(['route'=>'admin.users.store','class'=>'form']) !!}

          @include('admin.users._form') <!-- Refatorando o form --> 

          <div class="forme-grup">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}

          </div> 

          {!! Form::close() !!}

        </div>

      </div>
    </div>   
  </div>

</div>



@endsection