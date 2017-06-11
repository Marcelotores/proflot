<div class="forme-grup">
 	{!! Form::label('Name','Nome:') !!}
 	{!! Form::text('name',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Email','E-mail:') !!}
 	{!! Form::email('email','example@gmail.com',['class'=>'form-control']) !!}
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
 	{!! Form::text('sex',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Username','Nome de Usuario:') !!}
 	{!! Form::text('username',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Password','Senha:') !!}
 	{!! Form::password('password',['class'=>'form-control']) !!}
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
 	{!! Form::select('cursos_id',$cursos,null,['class'=>'form-control']) !!}
 </div>
 <br> 