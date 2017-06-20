@extends('menu')

@section('content')

<div class="container">
	<div class="col-md-8 col-md-offset-1">

		<div class="row">

			<div class="col-md-14 col-md-offset-1">
				<div class="panel panel-info">
					<div class="panel-heading">Relatorios</div>
					<div class="panel-body">
						<div class="btn-group btn-group-justified" role="group" aria-label="...">
					
							<div class="btn-group" role="group">
								<a href="{{route('admin.salas.index')}}"><button type="button" class="btn btn-default">Salas</button></a>
							</div>
							<div class="btn-group" role="group">
								<a href="{{route('admin.disciplinas.index')}}"><button type="button" class="btn btn-default">Disciplinas</button></a>
							</div>
							<div class="btn-group" role="group">
								<a href="{{Route('admin.users.index')}}"><button type="button" class="btn btn-default">Usuarios</button></a>
							</div>
							<div class="btn-group" role="group">
								<a href="{{route('admin.turmas.index')}}"><button type="button" class="btn btn-default">Lotação</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection