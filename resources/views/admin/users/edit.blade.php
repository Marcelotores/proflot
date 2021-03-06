@extends('menu')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <div class="panel panel-default col-md-19 ">
        <div class="panel-heading" style="color:#527a9d">Editando {{$user->name }}</div>
        <div class="panel-body">
          @include('errors._errors') <!-- Refatorando o form -->  

          <div class="col-xs-12 col-md-8">
            {!! Form::model($user, ['route'=>['admin.users.update', $user->id]]) !!}

            @include('admin.users._formEdite') <!-- Refatorando o form -->  

            <div class="forme-grup">
              {!! Form::submit('Atualizar',['class'=>'btn btn-primary']) !!}

            </div> 
            <div class="col-md-8 col-md-offset-12">
              <a href="{{ route('admin.users.index')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-hand-left"></span>Voltar</button></a>
            </div>

            {!! Form::close() !!}

          </div>

        </div>
      </div>  
    </div>   
  </div>  
</div>  


@endsection