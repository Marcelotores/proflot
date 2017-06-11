@extends('app')

@section('content')
 
<div class="container">
 <h3>Disciplina</h3>

 <div class="row">

  <div class="col-xs-12 col-md-8">
 </br>
  </br>

<ul class="list-group">
  <li class="list-group-item"><p>ID: </b>{{$disciplina->id}}</li>
  <li class="list-group-item"><b>Disciplina: </b>{{$disciplina->name}}</li>
  <li class="list-group-item"><b>Fluxo: </b>{{$disciplina->fluxos_id}} </li>
  <li class="list-group-item"><b>Período: </b>{{$disciplina->periodos_id}}</li>
  <li class="list-group-item"><b>Optativa: </b>{{$disciplina->optativa}}</li>
  <li class="list-group-item"><b>Prática: </b>{{$disciplina->pratica}}</li>
  <li class="list-group-item"><b>Horários: </b> 

                               @foreach($horarios as $horario)
                               <br>
                                  {{$horario->start_time}} -
                                  {{$horario->end_time}} 
                                  
                               @endforeach

  </li>
  <li class="list-group-item"><b>Carga Horária: </b>{{$disciplina->carga_horaria}}</li>
</ul>

</div>

</div>
</div> 


@endsection