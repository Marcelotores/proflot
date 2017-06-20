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
            {!! Form::model($user, ['route'=>['admin.users.updateSenha', $user->id]]) !!}

            @include('admin.users._formSenha')<br> <!-- Refatorando o form -->  
            <div class="col-xs-10 col-md-offset-1 btn-group btn-group-justified" role="group" aria-label="..."> 
              <div class="forme-grup">
                {!! Form::submit('Atualizar Senha',['class'=>'btn btn-primary']) !!}
              </div> 
            </div>

            {!! Form::close() !!}

          </div>

        </div>
      </div>  
    </div>   
  </div>  
</div>  


@endsection