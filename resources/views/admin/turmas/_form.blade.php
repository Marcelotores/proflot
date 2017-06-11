


    <style type="text/css">
      .carregando{
        color:#ff0000;
        display:none;
      }
    </style>


    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script >
        $(function(){
        $('#periodo_id').change(function(){
          if( $(this).val() ) {
            $('#disciplina_id').hide();
            $('.carregando').show();
            
            $.get("/admin/disciplinas/periodo/" + $(this).val(), function(data, status){
              var options = '<option value="">Escolha a disciplina</option>'; 
              for (var i = 0; i < data.length; i++) {
                options += '<option value=' + data[i].id + '>' + data[i].name + '</option>';
              }

              $('#disciplina_id').html(options).show();
              $('.carregando').hide();

            });
          } 

        });
      });
    </script>
    



    {!! Form::label('Periodo','Período:') !!}

    <select name="periodo_id" id="periodo_id" class="form-control">
      <option value="">
        Escolha o Período
      </option> 
      <?php
      foreach ($periodos as $periodo):
        ?>
      <option value="<?= $periodo->id ?>">
        <?= $periodo->description ?></br>
      </option> 
      <?php
      endforeach;
      ?>
    </select>

    {!! Form::label('Disciplina','Disciplina:') !!}
    <span class="carregando">Aguarde, carregando...</span>
    <select name="disciplina_id" id="disciplina_id" class="form-control">
      <option value="">
      Escolha a Disciplina
      </option> 
      <?php foreach($disciplinas as $disciplina) :?>
        <option value="<?$disciplina->id?>">
          <?=$disciplina->name?></br>
        </option> 
      <?php endforeach?>
    </select>


 <div class="forme-grup">
  {!! Form::label('Professor','Professor:') !!}
  {!! Form::select('user_id', $users, null, ['class'=>'form-control', 'placeholder' => 'Escolha o Professor']) !!}
 </div>

  <div class="forme-grup">
  {!! Form::label('Salas','Sala:') !!}
  {!! Form::select('sala_id', $salas, null, ['class'=>'form-control']) !!}
 </div>

 <div class="forme-grup">
  {!! Form::label('Turma','Turma:') !!}
  {!! Form::text('description',null,['class'=>'form-control', 'placeholder' => 'A, B...']) !!}
 </div>

 <hr>

 <div class="forme-grup">
  {!! Form::label('Dia','Dia:') !!}
  {!! Form::select('dia', $dias, null,['class'=>'form-control', 'placeholder' => 'Escolha o Dia']) !!}
 </div>



<br>

{!! Form::label('Horario','Horários:') !!}
<br>
@foreach($horarioss as $horario)
  <div class="forme-grup">
  <input type="checkbox" name="letra[]" value="{{$horario->id}}" /> {{$horario->letra}}<br /> 
  </div>
  @endforeach


</select>
<br>

   


