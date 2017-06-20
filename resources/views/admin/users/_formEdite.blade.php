<div class="col-xs-10 col-md-offset-1 btn-group btn-group-justified" role="group" aria-label="..."> 
	<div class="col-xs-12  ">
		<div class="forme-grup">
			{!! Form::label('Name','Nome:') !!}
			{!! Form::text('name',null,['class'=>'form-control']) !!}
		</div>
	</div>
</div>
<div class="col-xs-10 col-md-offset-1 btn-group btn-group-justified" role="group" aria-label="..."> 
	<div class="col-xs-6  ">
		<div class="forme-grup">
			{!! Form::label('Email','E-mail:') !!}
			{!! Form::email('email',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-6  ">
		<div class="forme-grup">
			{!! Form::label('CPF','CPF:') !!}
			{!! Form::text('cpf',null,['class'=>'form-control']) !!}
		</div>
	</div>
</div>	
<div class="col-xs-10 col-md-offset-1 btn-group btn-group-justified" role="group" aria-label="..."> 
	<div class="col-xs-6  ">
		<div class="forme-grup">
			{!! Form::label('Phone','Telefone:') !!}
			{!! Form::text('phone',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-xs-6  ">
		<div class="forme-grup">
			{!! Form::label('Data','Data:') !!}
			{!! Form::date('birth_date',null,['class'=>'form-control']) !!}
		</div>
	</div>
</div>	
<div class="col-xs-10 col-md-offset-1 btn-group btn-group-justified" role="group" aria-label="..."> 

	<div class="col-xs-6  ">
		<div class="forme-grup">
			{!! Form::label('Sexo','Sexo: ') !!}<br>
			{!! Form::label('Masculino','Masculino ') !!}
			{!! Form::radio('sex', 'Masculino') !!}
			{!! Form::label('Femenino','Femenino') !!}
			{!! Form::radio('sex', 'Femenino') !!}
		</div>
	</div>
</div>
<div class="col-xs-10 col-md-offset-1 btn-group btn-group-justified" role="group" aria-label="..."> 
	
	<div class="col-xs-6  ">
		<div class="forme-grup">
			{!! Form::label('Tipos','Tipos') !!}
			{!! Form::select('tipo_id',$tipos,null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-6  ">
		<div class="forme-grup">
			{!! Form::label('Regime','Regime:') !!}
			{!! Form::text('regiment',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="forme-grup">
		{!! Form::label('Lattes',' URL Curriculo Lattes:') !!}
		{!! Form::text('lates',null,['class'=>'form-control']) !!}
	</div>
	<br> 

