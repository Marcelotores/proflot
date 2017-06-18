@extends('app')

@section('content')
<div class="container">
     <h3>Salas</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>Periodo</a>
                 
                 </br>
                 </br>
                 <table class="table table-bordered">
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
                               <td>{{$sala->id}}</td>
                               <td>{{$sala->campus}}</td>
                               <td>{{$sala->capacity}}</td>
                               <td>{{$sala->number}}</td>
                              
                               <td><a href="{{ route('admin.salas.update',['id'=>$sala->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                               <td><a href="{{ route('admin.salas.destroy',['id'=>$sala->id])}}"><button type="button" class="btn btn-danger">Desabilitar</button></td>
                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                  
                </div>

        </div>
</div>   


@endsection