    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="{{ URL::asset('lib/jquery-3.2.1.js') }}"></script>
    <script src="{{ URL::asset('js/carrega_disciplinas.js') }}"> </script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">



  <div class="forme-grup">
  {!! Form::label('Periodo','Periodo') !!}
  {!! Form::select('periodo_id',$periodos, $periodo, ['class'=>'form-control']) !!}
 </div>

    <select name="periodo_id" id="periodo_id" class="form-control">
      <option value="">
        Escolha o Período
      </option> 
      <option value="<?$periodo?>" selected>
        <?$periodo->description?>
      </option> 
      <?php
      foreach ($periodos as $periodo):
        ?>

      <option value="<?= $periodo->id ?>" >
        <?= $periodo->description ?></br>
      </option> 
      <?php
      endforeach;
      ?>
    </select>

 