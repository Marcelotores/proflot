@extends('menu')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-5">
			<div class="panel panel-default">
				<div class="panel-heading">Acesso Rapido</div>

				<div class="panel-body">
					<nav class="navibar navbar-m1p sidebar" role="navigation">
						<div class="container-fluid">
							<div class="collapse navbar-collapse">
								<ul class="navi navibar-navi">
									
									<!-- Banner -->
									<li class="">
										<a href="#">Aterar Senha
											<span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">recent_actors</span>
										</a>

									</li>
									<li class="">
									    <a href="/logout">Sair
											<span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">pageview</span>
										</a>

									</li>
									<li class="">
										<a href="/admin/logs">Logs
											<span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons" style="font-size:36px">pageview</span>
										</a>

									</li>
								</ul>
							</div>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
</div>
@endsection