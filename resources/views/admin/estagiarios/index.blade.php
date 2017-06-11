@extends('app')

@section('content')
<div class="container">
     <h3>Estagiários</h3>
       
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
                               @foreach($estagiarios as $estagiario)
                               <td>{{$estagiario->id}}</td>
                               <td>{{$estagiario->name}}</td>
                               <td><a href="{{ route('admin.estagiarios.show',['id'=>$estagiario->id])}}"><button type="button" class="btn btn-success">Detalhes</button></td>
                               <td><a href="{{ route('admin.estagiarios.edit',['id'=>$estagiario->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                               <td><a href="{{ route('admin.estagiarios.destroy',['id'=>$estagiario->id])}}"><button type="button" class="btn btn-danger">Desabilitar</button></td>

                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                   
                </div>

        </div>
</div>   


@endsection