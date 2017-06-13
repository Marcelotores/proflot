@extends('app')

@section('content')
<div class="container">
     <h3>Itens de Lotação</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="" class="btn btn-default"><span class="glyphicon glyphicon-equalizer">&nbsp ;</span>Periodo</a>
                 </br>
                 </br>
                 <table class="table table-bordered">
                    <thead>
                        <tr>
                           <th>ID</th> 
                           <th>Descrição</th> 
                           <th>Disciplina</th>  
                           <th>Sala</th>  
                           <th>Professor</th>  
                           <th>Dia</th>    
                           <th>Horários</th> 
                         </tr>
                    </thead>
                    <tbody>   
                           <tr>
                               @foreach($turmas as $turma)
                                     <td>{{$turma->id}}</td>
                                     <td>{{$turma->description}}</td>
                                     <td>{{$turma->disciplina->name}}</td>
                                     <td>{{$turma->sala->number}}</td>
                                     <td>{{$turma->user->name}}</td>
                                     <td>
                                       @foreach($turma->dias as $dia)
                                          {{$dia->dia}}
                                              <td>
                                                @foreach($turma->horarios as $horario)
                                                    {{$horario->letra}}
                                                @endforeach
                                              </td>

                                          <?php 
                                            break 
                                          ?>
                                       @endforeach
                                     </td>
                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                   
                </div>

        </div>
</div>   


@endsection