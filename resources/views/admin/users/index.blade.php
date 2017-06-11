@extends('app')


@section('content')
<div class="container">
     <h3>Professores</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>Professor</a>
                 </br>
                 
                 </br>
                 <table class="table table-bordered">
                    <thead>
                        <tr>
                         <th>Id</th>
                         <th>Nome</th>
                         <th>E-mail</th>
                         <th>Telefone</th>
                         <th>Regime</th>
                         <th>Tipo</th>
                         <th colspan="3">Ações</th>
                            
                         </tr>
                    </thead>
                    <tbody>   
                           <tr>
                            @foreach($users as $user)
                                </tr>
                                @if($user->active == 0 ) 
                                <td style="color:#bdbdbd">{{$user->id}}</td>
                                <td style="color:#bdbdbd">{{$user->name}}</td>
                                <td style="color:#bdbdbd">{{$user->email}}</td>
                                <td style="color:#bdbdbd">{{$user->phone}}</td>
                                <td style="color:#bdbdbd">{{$user->regiment}}</td>
                                <td style="color:#bdbdbd">{{$user->tipos_id}}</td>
                    
                                <td style="color:#d9edf7"><a href="{{ route('admin.users.status',['id'=>$user->id])}}"><button type="button" class="btn btn-success">Ativar</button></a></td>
                                @else
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->regiment}}</td>
                                <td>{{$user->tipos_id}}</td>
                                <td><a href="{{ route('admin.users.edit',['id'=>$user->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                                <td><a href="{{ route('admin.users.show',['id'=>$user->id])}}"><button type="button" class="btn btn-success">Visualizar</button></a></td>
                                <td><a href="{{ route('admin.users.status',['id'=>$user->id])}}"><button type="button" class="btn btn-danger">Desativar</button></a></td>
                                 @endif
                                   
                            </tr>

                            @endforeach
                     </tbody>
                  </table>
                  {!! $users->render() !!}
                </div>

        </div>
</div>   


@endsection