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
                               @foreach($professores as $professor)
                               <td>{{$professor->id}}</td>
                               <td>{{$professor->name}}</td>
                               <td>{{$professor->email}}</td>
                               <td>{{$professor->phone}}</td>
                               <td>{{$professor->regiment}}</td>
                               <td>{{$professor->tipos_id}}</td>

                               <td><a href="{{ route('admin.professores.edit',['id'=>$professor->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                                <td><a href="{{ route('admin.professores.show',['id'=>$professor->id])}}"><button type="button" class="btn btn-success">Visualizar</button></a></td>
                               <td><a href="{{ route('admin.professores.destroy',['id'=>$professor->id])}}"><button type="button" class="btn btn-danger">Desabilitar</button></a></td>
                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                  
                </div>

        </div>
</div>   


@endsection