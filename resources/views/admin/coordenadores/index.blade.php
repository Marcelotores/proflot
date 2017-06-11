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
                               @foreach($coordenadores as $coordenador)
                               <td>{{$coordenador->id}}</td>
                               <td>{{$coordenador->name}}</td>
                               <td>{{$coordenador->email}}</td>
                               <td>{{$coordenador->phone}}</td>
                               <td>{{$coordenador->regiment}}</td>
                               <td>{{$coordenador->tipos_id}}</td>

                               <td><a href="{{ route('admin.professores.edit',['id'=>$coordenador->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                                <td><a href="{{ route('admin.professores.show',['id'=>$coordenador->id])}}"><button type="button" class="btn btn-success">Visualizar</button></a></td>
                               <td><a href="{{ route('admin.coordenadores.destroy',['id'=>$coordenador->id])}}"><button type="button" class="btn btn-danger">Desfazer Coordenador</button></a></td>
                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                  
                </div>

        </div>
</div>   


@endsection