<h3>Remetente <strong>{{$remetente}}</strong></h3>
<div class="forme-grup">
 	{!! Form::label('remetente','Remetente:') !!}
 	{!! Form::text('curso_remetente_id', Auth::user()->cursos_id) !!}
 </div>
<div class="forme-grup">
 	{!! Form::label('Destinatário','Destinatário:') !!}
 	{!! Form::select('cursos_id', $cursos, null, ['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Disciplinas',' A Disciplinas:') !!}
 	{!! Form::select('disciplinas_id', $disciplinas, null, ['class'=>'form-control']) !!}
 </div> 
 <div class="forme-grup">
 	{!! Form::label('Fluxo',' Do Fluxo:') !!}
 	{!! Form::select('fluxos_id', $fluxos, null, ['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Professor',' O Professor:') !!}
 	{!! Form::select('users_id', $users, null, ['class'=>'form-control']) !!}
 </div>

 <div class="forme-grup">
 	{!! Form::label('Observaçõe',' Com as sequintes Observaçõe:') !!}
 	{!! Form::textarea('obs',null,['placeholder' => 'Horario desejado 8:40 a 11:50...','class'=>'form-control']) !!}
 </div> 
 
 
 