@extends('menu')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default col-md-19 ">
				<div class="panel-heading" style="color:#527a9d">Novo Item de Lotação</div>
				<div class="panel-body">
					@include('errors._errors')

					<div class="col-xs-12 col-md-8">
						{!! Form::open(['route'=>'admin.turmas.store','class'=>'form']) !!}

						@include('admin.turmas._form') <!-- Refatorando o form --> 

						{!! Form::close() !!}

					</div>
				


@endsection