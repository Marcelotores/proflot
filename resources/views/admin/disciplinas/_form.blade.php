
 <div class="forme-grup">
 	{!! Form::label('Periodo','Periodo:') !!}
 	{!! Form::select('periodo_id',$periodos,null,['class'=>'form-control']) !!}
 </div>

  <div class="forme-grup">
 	{!! Form::label('Fluxo','Fluxo:') !!}
 	{!! Form::select('fluxo_id',$fluxos,null,['class'=>'form-control']) !!}
 </div>

 <div class="forme-grup">
 	{!! Form::label('Nome','Nome:') !!}
 	{!! Form::text('name',null,['class'=>'form-control']) !!}
 </div>

 <div class="forme-grup">
 	{!! Form::label('Optativa','Optativa: ') !!}<br>
    {!! Form::label('Nao','Não ') !!}
 	{!! Form::radio('optativa', 'Não', true) !!}
 	{!! Form::label('Sim','Sim ') !!}
	{!! Form::radio('optativa', 'Sim') !!}
 </div>

 <div class="forme-grup">
 	{!! Form::label('Pratica','Prática:') !!}
 	{!! Form::text('pratica','Sim',['class'=>'form-control']) !!}
 </div>

  <div class="forme-grup">
 	{!! Form::label('Carga Horaria','Carga Horária:') !!}
 	{!! Form::text('carga_horaria',null,['class'=>'form-control']) !!}
 </div>

 <br> 