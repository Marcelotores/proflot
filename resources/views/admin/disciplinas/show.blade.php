@extends('menu')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Disciplina</div>

        <div class="panel-body">
          <ul class="list-group">
            <li class="list-group-item"><b>Disciplina: </b>{{$disciplina->name}}</li>
            <li class="list-group-item"><b>Período: </b>{{ $disciplina->periodo->description}}</li>
          </b>
          @if($disciplina->optativa == 0)
          <li class="list-group-item"><b>Optativa: Não{{$disciplina->optativa}} </li>
          @endif
          @if($disciplina->optativa == 1)
          <li class="list-group-item"><b>Optativa: Sim{{$disciplina->optativa}} </li>
          @endif
          @if($disciplina->pratica = 0)   
          <li class="list-group-item"><b>Prática: </b>Não{{$disciplina->pratica}}</li>
          @endif
          @if($disciplina->pratica = 1)  
          <li class="list-group-item"><b>Prática: </b>Sim{{$disciplina->pratica}}</li>
          @endif
          <li class="list-group-item"><b>Carga Horaria: </b>{{ $disciplina->carga_horaria}}</li>


        </ul>

        <div class="col-xs-10 .col-md-10">
         <a href="{{ route('admin.disciplinas.edit',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Editar</button></a>
       </div>
       <div class="col-xs-1.col-md-4">
        <a href="{{ route('admin.disciplinas.index')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-hand-left"></span>Voltar</button></a>
      </div>
      
    </div>
  </div>
</div>
</div>
</div>



@endsection