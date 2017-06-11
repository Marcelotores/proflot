@extends('app')


@section('content')
<div class="container">
     <h3>Clientes</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="{{ route('admin.tipos.create')}}" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>Tipo</a>
                 </br>
                 </br>
                 <table class="table table-bordered">
                    <thead>
                        <tr>
                           <th>Id</th>
                           <th>Des</th>
                           
                            <th colspan="3">Ações</th>
                            
                         </tr>
                    </thead>
                    <tbody>   
                           <tr>
                               @foreach($tipos as $tipo)
                               <td>{{$tipo->id}}</td>
                               <td>{{$tipo->description}}</td>
                               <td><a href="{{ route('admin.tipos.edit',['id'=>$tipo->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                
                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                   {!! $tipos->render() !!}
                </div>

        </div>
</div>   


@endsection