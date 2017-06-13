@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lolicitações Feitas <strong></strong></div>

                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                        <h3>{{Auth::user()->cursos_id}}</h3>
                        <tr>
                           <th>Id</th>
                           <th>User Id</th>
                           <th>curso</th>
                           <th>disciplina</th>
                           <th>remetente</th>
                           <th colspan="3">Ações</th>
                            <th>Responder</th>

                       </tr>
                   </thead>
                   <tbody>   
                     <tr>
                      @foreach($solicitars as $solicitar)
                       
                       <td>{{$solicitar->id}}</td>
                       <td>{{$solicitar->user->name}}</td>
                       <td>{{$solicitar->curso->description}}</td>
                       <td>{{$solicitar->disciplina->name}}</td>
                    

                      
                     </tr>

                     @endforeach
                   </tbody>
               </table>  
                     
                       
           </div>
       </div>
   </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lolicitações Recebidas <strong></strong></div>

                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                        <h3>{{Auth::user()->cursos_id}}</h3>
                        <tr>
                           <th>Id</th>
                           <th>User Id</th>
                           <th>curso</th>
                           <th>disciplina</th>
                           <th>remetente</th>
                           <th>Status</th>
                           <th>Observarções</th>
                          <th>Responder</th>

                       </tr>
                   </thead>
                   <tbody>   
                       <tr>
                           @foreach($solicitars as $solicitar)
                           @if(Auth::user()->cursos_id == $solicitar->cursos_id)
                           <td>{{$solicitar->id}}</td>
                           <td>{{$solicitar->users_id}}</td>
                           <td>{{$solicitar->cursos_id}}</td>
                           <td>{{$solicitar->disciplinas_id}}</td>
                           <td>{{$solicitar->curso_remetente_id}}</td>
                           <td>{{$solicitar->status}}</td>
                           <td>{{$solicitar->obs}}</td>
            
                              
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