@extends('menu')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <div class="panel panel-default col-md-19 ">
        <div class="panel-heading">Salas</div><br>
        <div class="col-xs-10 col-md-offset-10">
          <a href="{{route('admin.salas.create')}}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Salas</a>
        </div>
       </br>
     </br>
     <table class="table table-condensed">
      <thead>
        <tr>
         <th>Id</th>
         <th>Campus</th>
         <th>Capacidade</th>
         <th>Número</th>

         <th colspan="3">Ações</th>

       </tr>
     </thead>
     <tbody> 
           <tr>
             @foreach($salas as $sala)
             @if($sala->active == 0 ) 
             <td style="color:#bdbdbd">{{$sala->id}}</td>
             <td style="color:#bdbdbd">{{$sala->campus}}</td>
             <td style="color:#bdbdbd">{{$sala->capacity}}</td>
             <td style="color:#bdbdbd">{{$sala->number}}</td>
             <td><a href="{{ route('admin.salas.edit',['id'=>$sala->id])}}"><button type="button" class="btn btn-success">Editar</button></a></td>
             <td><a href="{{ route('admin.salas.status',['id'=>$sala->id])}}"><button type="button" class="btn btn-primary">Ativar</button></a></td>
             @else
             <tr>
              <td>{{$sala->id}}</td>
              <td>{{$sala->campus}}</td>
              <td>{{$sala->capacity}}</td>
              <td>{{$sala->number}}</td>
              <td><a href="{{ route('admin.salas.edit',['id'=>$sala->id])}}"><button type="button" class="btn btn-success">Editar</button></a></td>
              <td><a href="{{ route('admin.salas.status',['id'=>$sala->id])}}"><button type="button" class="btn btn-danger">Desabilitar</button></a></td>
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
</div>   


@endsection