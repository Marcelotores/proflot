@extends('app')


@section('content')
<div class="container">
 <h3>Estagiário</h3>

 <div class="row">

  <div class="col-xs-12 col-md-8">
 </br>
  </br>

<ul class="list-group">
  <li class="list-group-item"><p>ID: </b>{{$estagiario->id}}</li>
  <li class="list-group-item"><b>Nome: </b>{{$estagiario->name}}</li>
  <li class="list-group-item"><b>E-mail: </b>{{$estagiario->email}} </li>
  <li class="list-group-item"><b>Telefone: </b>{{$estagiario->phone}}</li>
  <li class="list-group-item"><b>Data de Nascimento: </b>{{$estagiario->birth_date}}</li>
  <li class="list-group-item"><b>Sexo: </b>{{$estagiario->sex}}</li>
  <li class="list-group-item"><b>Curso: </b>{{$curso}}</li>
  <li class="list-group-item"><b>Tipo: </b></li>
</ul>

</div>

</div>
</div>   


@endsection