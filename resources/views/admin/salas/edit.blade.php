@extends('menu')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <div class="panel panel-default col-md-19 ">
        <div class="panel-heading">Editando Sala {{$sala->number }}</div><br>
        <div class="panel-body">
          @include('errors._errors') <!-- Refatorando o form -->  

          <div class="col-xs-12 col-md-8">
            {!! Form::model($sala, ['route'=>['admin.salas.update', $sala->id]]) !!}

            @include('admin.salas._form') <!-- Refatorando o form -->  

            <div class="forme-grup">
              {!! Form::submit('Atualizar',['class'=>'btn btn-primary']) !!}

            </div> 

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection