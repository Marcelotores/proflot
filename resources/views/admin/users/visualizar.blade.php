@extends('menu')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default col-md-19 ">
				<div class="panel-heading" style="color:#527a9d">Visualizar</div>
				<div class="panel-body">



					<ul class="list-group">

						<li class="list-group-item"><b> </b><strong> Nome:</strong> {{$user->name}}</li>
						<li class="list-group-item"><b> </b><strong>Email:</strong> {{$user->email}}</li>
						<li class="list-group-item"><b> </b><strong>Telefone:</strong> {{$user->phone}}</li>
						<li class="list-group-item"><b> </b> <strong>Data De Nascimento:</strong> {{$user->birth_date}}</li>
						<li class="list-group-item"><b> </b><strong> Sexo: </strong>{{$user->sex}}</li>
						<li class="list-group-item"><b> </b><strong> Regime: </strong>{{$user->regiment}}</li>
						<li class="list-group-item"><b> </b><strong> Curriculo Lattes: </strong>{{$user->lates}}</li>
						<li class="list-group-item"><b> </b><strong> Função: </strong>{{$tipos}}</li>
						<li class="list-group-item"><b> </b><strong> Curso: </strong>{{$cursos}}</li>

					</ul>
					<div class="col-xs-1.col-md-4">
						<a href="{{ route('admin.users.index')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-hand-left"></span>Voltar</button></a>
					</div>

				</div>

			</div>
		</div>

	</div>
</div>   


@endsection