
				<div class="forme-grup">
					{!! Form::label('Periodo','Periodo:') !!}
					{!! Form::select('periodo_id',$periodos,null,['class'=>'form-control']) !!}
				</div>


				<div class="forme-grup">
					{!! Form::label('Nome','Nome:') !!}
					{!! Form::text('name',null,['class'=>'form-control']) !!}
				</div>

				<div class="forme-grup">
					{!! Form::label('Optativa','Optativa: ') !!}<br>
					{!! Form::label('Nao','Não ') !!}
					{!! Form::radio('optativa', 0) !!}
					{!! Form::label('Sim','Sim') !!}
					{!! Form::radio('optativa', 1) !!}
				</div>

				<div class="forme-grup">
					{!! Form::label('Pratica','Pratica: ') !!}<br>
					{!! Form::label('Nao','Não') !!}
					{!! Form::radio('pratica', 0) !!}
					{!! Form::label('Sim','Sim') !!}
					{!! Form::radio('pratica', 1) !!}
				</div>

				<div class="forme-grup">
					{!! Form::label('Carga Horaria','Carga Horária:') !!}
					{!! Form::text('carga_horaria',null,['class'=>'form-control']) !!}
				</div>


<br> 