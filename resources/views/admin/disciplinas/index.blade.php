@extends('app')

@section('content')
<div class="container">
     <h3>Disciplinas</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>Periodo</a>
                 </br>
                 </br>
                 <table class="table table-bordered">
                    <thead>
                        <tr>
                           <th>Id</th>
                           <th>Disciplina</th>
                           
                            <th colspan="3">Ações</th>
                            
                         </tr>
                    </thead>
                    <tbody>   
                           <tr>
                               @foreach($disciplinas as $disciplina)
                               <td>{{$disciplina->id}}</td>
                               <td>{{$disciplina->name}}</td>
                               <td><a href="{{ route('admin.disciplinas.show',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-success">Detalhes</button></td>
                               <td><a href="{{ route('admin.disciplinas.edit',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                               <td><a href="{{ route('admin.disciplinas.destroy',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-danger">Desabilitar</button></td>
                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                   
                </div>

        </div>
</div>   


@endsection