@extends('menu')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default col-md-19 ">
				<div class="panel-heading" style="color:#527a9d">ERRO</div>
				<div class="panel-body">
					<div class="alert alert-danger">
						<ul>

							<li>{{$teste}} </li>


						</ul>
						<br>
						<br>
						<div class="col-xs-1.col-md-4">
							<a href="{{ route('admin.turmas.create')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-hand-left"></span>Voltar</button></a>
						</div>
					</div>


				</div>
			</div>

		</div>
	</div>
 @endsection