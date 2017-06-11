@extends('app')


@section('content')
<div class="container">
 <h3>Professor</h3>

 <div class="row">

  <div class="col-xs-12 col-md-8">
 </br>
  </br>

<ul class="list-group">
  <li class="list-group-item"><p>ID: </b>{{$professor->id}}</li>
  <li class="list-group-item"><b>Nome: </b>{{$professor->name}}</li>
  <li class="list-group-item"><b>E-mail: </b>{{$professor->email}} </li>
  <li class="list-group-item"><b>Telefone: </b>{{$professor->phone}}</li>
  <li class="list-group-item"><b>Data de Nascimento: </b>{{$professor->birth_date}}</li>
  <li class="list-group-item"><b>Sexo: </b>{{$professor->sex}}</li>
  <li class="list-group-item"><b>Regime: </b>{{$professor->regiment}}</li>
  <li class="list-group-item"><b>Curso: </b>{{$curso}}</li>
  <li class="list-group-item"><b>Tipo: </b>{{$tipo}}</li>
</ul>

</div>

</div>
</div>   


@endsection