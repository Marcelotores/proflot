@extends('menu')

@section('content')

<div class="container">
    <div class="col-md-8 col-md-offset-1">

      <div class="row">

        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-info">
                  <div class="panel-heading">Lolicitações Feitas </div>
                       <div class="panel-body">
                        <div class="col-xs-10 col-md-offset-9 btn-group btn-group-justified" role="group" aria-label="..."> 
                          <div class="col-xs-10  ">
                            <a href="{{route('admin.coordenadores.solicitar')}}" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Solicitação</a>
                          </div>
            
                        </div>
                                 </br>
                                   </br>
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                     <div class="thumbnail">
                                          <div class="caption">
                          
                                               @foreach($solicitars as $solicitar)
                        
                                                   @if(Auth::user()->curso_id == $solicitar->curso_remetente_id && $solicitar->ocultar == 0)
                                                       <div class="col-sm-6 col-md-offset-9">
                                                            <a type="button" class="btn btn-danger" href="{{route('admin.coordenadores.ocultar',['id'=>$solicitar->id])}}">Excluir</a>
                                                        </div>
                                                        <h4><strong>Remetente: {{$solicitar->remetente}}</strong></h4>
                                                        <p type="button"> Solicita ao curso de <strong>{{$solicitar->curso->description}}</strong>
                                                           o professor <strong>{{$solicitar->user->name}}</strong> 
                                                           Para Ministrar <strong>{{$solicitar->disciplina->name}}</strong>
                                                           do fluxo <strong>{{$solicitar->fluxo->description}}</strong></p>
                                                        <p type="button"><strong>Observações:</strong> {{$solicitar->obs}}</p><br>
                                                       @if($solicitar->status <> 'Pendente')
                                                           <p type="textarea"><strong>Justificativa:</strong> {{$solicitar->resposta}}</p>
                                                       @endif
                                                       @if($solicitar->status == 'Pendente')
                                                       <div class="alert alert-warning" role="alert">
                                                        <p class="disabled"><strong>Status</strong> {{$solicitar->status}}</p>
                                                      </div>
                                                           
                                                       @endif
                                                       @if($solicitar->status == 'Aceita')
                                                       <div class="alert alert-success" role="alert">
                                                        <p class="disabled"><strong>Status:</strong> {{$solicitar->status}}</p>
                                                      </div>
                                                           
                                                       @endif
                                                       @if($solicitar->status == 'Rejeitada')
                                                       <div class="alert alert-danger" role="alert">
                                                        <p><strong>Status:</strong> {{$solicitar->status}}</p>
                                                      </div>
                                                          
                                                       @endif
                                                       @if(Auth::user()->curso_id <> $solicitar->curso_remetente_id)
                                                            <div class="alert alert-warning" role="alert">
                                                                <a href="#" class="alert-link">VOCÊ NÃO FEZ SOLICITAÇÃO! </a>
                                                             </div>
                                                       @endif
                                                       </br><p>--------------------------------------------------------------------------------------------------</p>

                                                    @endif

                                                 @endforeach
                                          </div>  
                                     </div>
                               </div>
                         </div>
                    </div>
            </div>
      </div>

    <div class="col-md-8 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">Lolicitações Recebidas <strong></strong></div>
                <div class="panel-body">
                     @foreach($solicitars as $solicitar)
                        @if(Auth::user()->curso_id == $solicitar->curso_id)
                          <div class="row">
                               <div class="col-sm-6 col-md-12">
                                   <div class="thumbnail">
                                        <div class="caption">
                                            <h4><strong>Remetente: {{$solicitar->remetente}}</strong></h4>
                                             <p type="button"> Solicita ao curso de <strong>{{$solicitar->curso->description}}</strong>
                                                o professor <strong>{{$solicitar->user->name}}</strong> 
                                                Para Ministrar <strong>{{$solicitar->disciplina->name}}</strong>
                                                do fluxo <strong>{{$solicitar->fluxo->description}}</strong></p>
                                             <p type="button"><strong>Observações:</strong> {{$solicitar->obs}}</p>
                                             @if($solicitar->status <> 'Pendente')
                                                 <p type="textarea"><strong>Justificativa:</strong> {{$solicitar->resposta}}</p>
                                             @endif
                                             @if($solicitar->status == 'Pendente')
                                             <div class="alert alert-warning" role="alert">
                                              <p class="disabled"><strong>Status</strong> {{$solicitar->status}}</p>
                                            </div>
                                             @endif
                                             @if($solicitar->status == 'Aceita')
                                             <div class="alert alert-success" role="alert">
                                              <p class="disabled"><strong>Status:</strong> {{$solicitar->status}}</p>
                                            </div>
                                             @endif
                                             @if($solicitar->status == 'Recusada')
                                             <div class="alert alert-danger" role="alert">
                                              <p><strong>Status:</strong> {{$solicitar->status}}</p>
                                            </div>
                                             @endif
                                             @if($solicitar->status == 'Pendente')
                                               
                                                     <div class="col-xs-12 col-md-8">
                                                          {!! Form::open(['route'=>['admin.cordenadores.resposta',$solicitar->id]]) !!}
                                                              <div class="forme-grup">
                                                                 {!! Form::label('Justificativa',' Com as sequintes Observações:') !!}
                                                                 {!! Form::textarea('resposta',null,['placeholder' => 'Justificativa ao negar!','class'=>'form-control']) !!}
                                                              </div> 
                                                              <div class="forme-grup">
                                                                 {!! Form::label('Status','Status: ') !!}<br>
                                                                 {!! Form::label('Rejeitada','Rejeitada ') !!}
                                                                 {!! Form::radio('status', 'Rejeitada', true) !!}
                                                                 {!! Form::label('Aceita','Aceita ') !!}
                                                                 {!! Form::radio('status', 'Aceita') !!}
                                                              </div>  
                                                              <div class="forme-grup">
                                                                 {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                                                              </div>         
                                                          {!! Form::close() !!}
                                                     </div>
                                                  </br><p>--------------------------------------------------------------------------------------------------</p>
                                             @endif
                                              
                                       </div>
                                    </div>
                                 </div>
                          </div> 

 
                        @endif
                     @endforeach
                  </div>
              </div>
          </div>
       </div>
   </div>
</div>

@endsection

