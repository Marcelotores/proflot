@extends('menu')

@section('content')
<div class="container">
     <h3>Itens de Lotação</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="{{route('admin.turmas.create')}}" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>+Lotação</a>
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
                           <th>Informações</th>    
                           <th>Ações</th>
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
                                        <?php 

                                          if(isset($flag)) {
                                            if ($dia->id == $flag) {
                                              continue;
                                            }
                                          }
                                        $flag = $dia->id;

                                        ?>
                                         Dia: {{$dia->dia}} -
                                         Hora:
                             
                                        <br>
                                       @endforeach
                                     </td>
                                      <td>
                                        <a href="{{ route('admin.turmas.destroy',['id'=>$turma->id])}}">
                                        <button type="button" class="btn btn-danger">Excluir Item</button></a>
                                      </td>
                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                   
                </div>

        </div>
</div>   


@endsection