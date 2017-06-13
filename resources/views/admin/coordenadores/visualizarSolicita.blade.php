@extends('app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lolicitações Feitas <strong></strong></div>

                <div class="panel-body">
              
                       <ul>
                           
                          
                           <li>{{$solicita->id}}</li>
                           <li>O curso {{ $cursoRemetente}} Solicitar</li>
                           <li>Professor Solicitado {{$professorSolicitado}}</li>
                           <li> do curso {{$cursoSolicitado}}</li>
                           <li> Para Ministrar A disciplina {{$disciplinaSolicitado}}</li>
                           <li>do Fluxo{{fluxoSolicitado}}</li>
        
                           <li>{{$solicita->obs}}</li>
                        
                      
                   
                       </ul>
                       
           </div>
       </div>
   </div>
</div>
</div>  


@endsection