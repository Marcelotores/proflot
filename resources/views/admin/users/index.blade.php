@extends('menu')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <div class="panel panel-default col-md-19 ">
        <div class="panel-heading">Disciplina</div><br>
        <div class="col-xs-5 col-md-offset-10">
            <a href="{{route('admin.users.create')}}" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Professor</a>
        </div><br>
        <table class="table table-condensed">
            <thead>
                <tr>
                   <th>Id</th>
                   <th>Nome</th>
                   <th>E-mail</th>
                   <th>Telefone</th>
                   <th>Regime</th>
                   <th colspan="3">Ações</th>

               </tr>
           </thead>
           <tbody>   
             <tr>
                @foreach($users as $user)
                @if(Auth::user()->curso_id == $user->curso_id)
            </tr>
            @if($user->active == 0 ) 
            <td style="color:#bdbdbd">{{$user->id}}</td>
            <td style="color:#bdbdbd">{{$user->name}}</td>
            <td style="color:#bdbdbd">{{$user->email}}</td>
            <td style="color:#bdbdbd">{{$user->phone}}</td>
            <td style="color:#bdbdbd">{{$user->regiment}}</td>
            <td style="color:#bdbdbd">{{$user->tipos_id}}</td>

            <td><a href="{{ route('admin.users.status',['id'=>$user->id])}}"><button type="button" class="btn btn-primary">Ativar</button></a></td>
            <td ><a href="{{ route('admin.users.show',['id'=>$user->id])}}"><button type="button" class="btn btn-success">Visualizar</button></a></td>
            <td><a href="{{ route('admin.users.status',['id'=>$user->id])}}"><button type="button" class="btn btn-danger disabled">Desativar</button></a></td>
            @else
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->regiment}}</td>
            <td>{{$user->tipos_id}}</td>
            <td><a href="{{ route('admin.users.edit',['id'=>$user->id])}}"><button type="button" class="btn btn-info">Editar</button></a></td>
            <td><a href="{{ route('admin.users.show',['id'=>$user->id])}}"><button type="button" class="btn btn-success">Visualizar</button></a></td>
            <td><a href="{{ route('admin.users.status',['id'=>$user->id])}}"><button type="button" class="btn btn-danger">Desativar</button></a></td>
            @endif
            @endif

        </tr>

        @endforeach
    </tbody>
</table>
{!! $users->render() !!}
</div>

</div>
</div>
</div>   








@endsection