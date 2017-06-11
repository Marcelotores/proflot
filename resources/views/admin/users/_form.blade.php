<div class="forme-grup">
 	{!! Form::label('Name','Nome:') !!}
 	{!! Form::text('name',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Email','E-mail:') !!}
 	{!! Form::email('email',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Password','Senha:') !!}
 	{!! Form::password('password',['class'=>'form-control']) !!}
 </div>
 
 <div class="forme-grup">
 	{!! Form::label('CPF','CPF:') !!}
 	{!! Form::text('cpf',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Phone','Telefone:') !!}
 	{!! Form::text('phone',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Data','Data:') !!}
 	{!! Form::date('birth_date',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Sexo','Sexo:') !!}
 	{!! Form::select('sex',['Masculino' => 'Masculino', 'Femenino' => 'Femenino'],null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Tipos','Tipos') !!}
 	{!! Form::select('tipo_id',$tipos,null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Regime','Regime:') !!}
 	{!! Form::text('regiment',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Lates','Lates:') !!}
 	{!! Form::text('lates',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Curso','Curso') !!}
 	{!! Form::select('curso_id',$cursos,null,['class'=>'form-control']) !!}
 </div>

 <br> 

