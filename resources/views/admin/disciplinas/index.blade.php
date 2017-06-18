
@extends('menu')

@section('content')   
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <div class="panel panel-default col-md-19 ">
        <div class="panel-heading">Disciplina</div><br>
        <div class="col-xs-10 col-md-offset-10">
            <a href="{{route('admin.disciplinas.create')}}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Disciplina</a>
        </div>
        
            <table class="table table-condensed">
                <thead>
                    <tr>
                     <th>Id</th>
                     <th>Disciplina</th>
                       <th>Carga Horaria</th>
                       <th>Período</th>
                       <th colspan="5">        Ações</th>

                 </tr>
             </thead>
             <tbody>  

                 <tr>
                     @foreach($disciplinas as $disciplina)
                     @if($disciplina->active == 0 ) 
                     <td style="color:#bdbdbd">{{$disciplina->id}}</td>
                     <td style="color:#bdbdbd">{{$disciplina->name}}</td>
                     <td style="color:#bdbdbd">{{$disciplina->carga_horaria}}</td>
                     <td style="color:#bdbdbd">{{$disciplina->periodo->description}}</td>
                     <td style="color:#d9edf7"><a href="{{ route('admin.disciplinas.status',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-primary">Ativar</button></a></td>
                     <td class=""><a href="{{ route('admin.disciplinas.show',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-success">Visualizar</button></a></td>
                     <td class=""><a href="{{ route('admin.disciplinas.status',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-danger disabled">Desativar</button></a></td>
                     @else
                     <tr>
                        <td class="">{{$disciplina->id}}</td>
                        <td  class="">{{$disciplina->name}}</td>
                        <td  class="">{{$disciplina->carga_horaria}}</td>
                        <td class="">{{$disciplina->periodo->description}}</td>
                        <td class=""><a href="{{ route('admin.disciplinas.show',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-success">Visualizar</button></a></td>
                        <td class=""><a href="{{ route('admin.disciplinas.status',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-danger">Desativar</button></a></td>
                        @endif
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


