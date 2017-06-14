@extends('menu')

@section('content')
<div class="container">
     <h3>Disciplinas</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="{{route('admin.disciplinas.create')}}" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>Disciplina</a>
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
                                @if($disciplina->active == 0 ) 
                                <td style="color:#bdbdbd">{{$disciplina->id}}</td>
                                <td style="color:#bdbdbd">{{$disciplina->name}}</td>
                    
                                <td style="color:#d9edf7"><a href="{{ route('admin.disciplinas.status',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-success">Ativar</button></a></td>
                                @else
                                <tr>
                                <td>{{$disciplina->id}}</td>
                                <td>{{$disciplina->name}}</td>
                                <td><a href="{{ route('admin.disciplinas.edit',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                                <td><a href="{{ route('admin.disciplinas.show',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-success">Visualizar</button></a></td>
                                <td><a href="{{ route('admin.disciplinas.status',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-danger">Desativar</button></a></td>
                                 @endif
                                @endforeach
                                 </tr>
                     </tbody>
                  </table>
                   
                </div>

        </div>
</div>   


@endsection