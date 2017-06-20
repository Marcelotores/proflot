@extends('menu')

@section('content')

<div class="container">
  <div class="col-md-8 col-md-offset-1">

    <div class="row">

      <div class="col-md-8 col-md-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">Lolicitações Feitas </div>
          <div class="panel-body">
            <div class="col-xs-10 col-md-offset-5 btn-group btn-group-justified" role="group" aria-label="..."> 
              <div class="col-xs-3 ">
                <a href="{{route('admin.coordenadores.solicitar')}}" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Solicitação</a>
              </div>
              <div class="col-xs-2 ">
                <a href="{{route('admin.coordenadores.mostraOculta')}}" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span>Solicitação Resolvidas</a>
              </div>
            </div>
          </br>
        </br>
        <div class="row">
          <div class="col-sm-6 col-md-12">
           <div class="thumbnail">
            <div class="caption">
              
             @foreach($solicitars as $solicitar)
             
             @if(Auth::user()->curso_id == $solicitar->curso_remetente_id && $solicitar->ocultar == 1)
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
</div>
</div>
</div>

@endsection

