@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-info">
       <div class="panel-heading">Lolicitações Feitas </div>
       <div class="panel-body">
        <br>
        <a href="{{route('admin.coordenadores.solicitar')}}" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>Solicitação</a>
        <br>
        <div class="row">
         <div class="col-sm-6 col-md-12">
          <div class="thumbnail">
           <div class="caption">
             @foreach($solicitars as $solicitar)
             @if(Auth::user()->curso_id == $solicitar->curso_remetente_id && $solicitar->ocultar == 0)
             <div class="col-sm-6 col-md-offset-9">
              <a type="button" class="btn btn-info" href="{{route('admin.coordenadores.ocultar',['id'=>$solicitar->id])}}">Resolvido</a>
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
              <p type="button" class="btn btn-default disabled"><strong>Status</strong> {{$solicitar->status}}</p>
              @endif
              @if($solicitar->status == 'Aceita')
              <p type="button" class="btn btn-success disabled"><strong>Status</strong> {{$solicitar->status}}</p>
              @endif
              @if($solicitar->status == 'Rejeitada')
              <p type="button" class="btn btn-danger disabled"><strong>Status</strong> {{$solicitar->status}}</p>
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
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-primary">
        <div class="panel-heading">Lolicitações Recebidas <strong></strong></div>

        <div class="panel-body">
         @foreach($solicitars as $solicitar)
         @if(Auth::user()->curso_id == $solicitar->curso_id)
         <div class="row">
          <div class="col-sm-6 col-md-7">
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
                 <p type="button" class="btn btn-default disabled"><strong>Status</strong> {{$solicitar->status}}</p>
                 @endif
                 @if($solicitar->status == 'Aceita')
                 <p type="button" class="btn btn-success disabled"><strong>Status</strong> {{$solicitar->status}}</p>
                 @endif
                 @if($solicitar->status == 'Recusada')
                 <p type="button" class="btn btn-danger disabled"><strong>Status</strong> {{$solicitar->status}}</p>
                 @endif
                 @if(Auth::user()->curso_id <> $solicitar->curso_id)
                 <div class="alert alert-warning" role="alert">
                  <a href="#" class="alert-link">VOCÊ NÃO TEM SOLICITAÇÃO! </a>
                </div>
                @endif

              </ul>
              @if($solicitar->status == 'Pendente')
              <div class="row">
               @include('errors._errors')
               <div class="col-xs-12 col-md-8">
                {!! Form::open(['route'=>['admin.cordenadores.resposta',$solicitar->id]]) !!}
                <div class="forme-grup">
                  {!! Form::label('Justificativa',' Com as sequintes Observaçõe:') !!}
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
            </div>


            <!----------------------------------------------------
            <div class="btn-group">
              <button type="button" class="btn btn-info">Pesponder</button>
              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li class="btn-success"><a href="{{route('admin.coordenadores.aceitar',['id'=>$solicitar->id])}}" value="Aceita" name="status">Aceitar</a></li>
                <li class="btn-danger"><a href="{{route('admin.coordenadores.recusar',['id'=>$solicitar->id]) }}" value="Recusada" name="status">Recusar</a></li>
              </ul>
            </div>-->
            @endif
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