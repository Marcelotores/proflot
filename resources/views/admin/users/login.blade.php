@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				
					<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>oops!</strong> Parece que você teve problemas com as entradas.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

						 {!! Form::open(['route'=>'login.store','method'=>'POST','class'=>'form-horizontal']) !!}
						
						 <div class="forme-grup">
						 	{!! Form::label('Email','E-mail:',['class'=>'col-md-4 control-label']) !!}
						 	<div class="col-md-6">
						 		{!! Form::email('email',null,['class'=>'form-control']) !!}
						 	</div>
						 </div></br></br>

                        <div class="forme-grup">
						 	{!! Form::label('Senha','Senha:',['class'=>'col-md-4 control-label']) !!}
						 	<div class="col-md-6">
						 		{!! Form::password('password',['class'=>'form-control']) !!}
						 	</div>
						 </div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								{!! Form::submit('Entra',['class'=>'btn btn-primary']) !!}

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					 {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
