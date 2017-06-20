@extends('menu')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-8 col-md-offset-1">
         <div class="panel panel-default col-md-19 ">
            <div class="panel-heading">Itens de Lotação</div><br>
               <div class="col-xs-10 col-md-offset-10">
                   <a href="{{route('admin.turmas.create')}}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Lotação</a>
                </div>          
                </br>
                </br>
                <table class="table table-condensed">
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
</div>
</div>   


@endsection