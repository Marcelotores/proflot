    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="{{ URL::asset('lib/jquery-3.2.1.js') }}"></script>
    <script src="{{ URL::asset('js/carrega_disciplinas.js') }}"> </script>
    <script src="{{ URL::asset('js/modal_horarios.js') }}"> </script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">


    {!! Form::label('Periodo','Período:') !!}

    <select name="periodo_id" id="periodo_id" class="form-control">
      <option value="">
        Escolha o Período
      </option> 
      <?php foreach ($periodos as $periodo): ?>
      <option value="<?= $periodo->id ?>">
        <?= $periodo->description ?></br>
      </option> 
      <?php endforeach?>
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

   {!! Form::label('Horario','Horários:') !!}
    <br>

    <div class="row">
    @foreach($dias as $dia)
   
             <div class="col-sm-2">  
                 {{$dia->dia}}
                   <br>
                 @foreach($horarios as $horario)
          
                    <input type="checkbox" name="letra[{{$dia->id}}][]" value="{{$horario->id}}" />
                    {{$horario->letra}} - {{$horario->start_time}} às {{$horario->end_time}}
                    <br>
                  
                  @endforeach 
            </div>
     
           
    @endforeach    
</div>

     <div class="forme-grup">
      {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
    </div>



  <!-- Segunda seção -->



<!--


<a href="#janela1" rel="modal">Setar horários</a>
 
<div class="window" id="janela1">
    <a href="#" class="fechar">X Fechar</a>

    {!! Form::label('Horario','Horários:') !!}
    <br>

    <div class="row">
    @foreach($dias as $dia)
   
                
            {{$dia->dia}}
              <br>
          
            <div class="col-sm-2">     
             @foreach($horarios as $horario)
      
                <input type="checkbox" name="letra[{{$dia->id}}][]" value="{{$horario->id}}" />
                {{$horario->letra}} - {{$horario->start_time}} às {{$horario->end_time}}
                <br>
              
              @endforeach 
            </div>
          
          
    

      
        
    @endforeach    
    </div>



     <div class="forme-grup">
      {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
    </div>
</div>

<div id="mascara"></div>



<br>
-->

 
 
<!-- mascara para cobrir o site -->  


   


