@extends('app')

@section('content')
<div class="container">
     <h3>Clientes</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>Periodo</a>
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
                               @foreach($periodos as $periodo)
                               <td>{{$periodo->id}}</td>
                               <td>{{$periodo->description}}</td>
                               <td><a href="{{ route('admin.periodos.edit',['id'=>$periodo->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                               <td><button type="button" class="btn btn-danger">Excluir</button></td>
                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                   {!! $periodos->render() !!}
                </div>

        </div>
</div>   


@endsection