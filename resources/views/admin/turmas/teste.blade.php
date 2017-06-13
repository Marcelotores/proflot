@extends('app')


@section('content')


 <script src="{{ URL::asset('lib/jquery-3.2.1.js') }}"></script>

<style>
  .window{
    display:none;
    width:300px;
    height:300px;
    position:absolute;
    left:0;
    top:0;
    background:#FFF;
    z-index:9900;
    padding:10px;
    border-radius:10px;
}
 
#mascara{
    display:none;
    position:absolute;
    left:0;
    top:0;
    z-index:9000;
    background-color:#000;
}
 
.fechar{display:block; text-align:right;}
</style>

<script>
  $(document).ready(function(){
    $("a[rel=modal]").click( function(ev){
        ev.preventDefault();
 
        var id = $(this).attr("href");
 
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();
     
        //colocando o fundo preto
        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        $('#mascara').fadeIn(1000); 
        $('#mascara').fadeTo("slow",0.8);
 
        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
        $(id).css({'top':top,'left':left});
        $(id).show();   
    });
 
    $("#mascara").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });
});
</script>


                {!! Form::open(['route'=>'admin.turmas.store','class'=>'form']) !!}

                    <a href="#janela1" rel="modal">Janela modal</a>
 
<div class="window" id="janela1">
    <a href="#" class="fechar">X Fechar</a>
    <h4>Escolha os dias e horários</h4>
    <div class="forme-grup">
      {!! Form::label('Dia','Dia:') !!}
      {!! Form::select('dia', $dias, null,['class'=>'form-control', 'placeholder' => 'Escolha o Dia']) !!}
    </div>

    <br>

    {!! Form::label('Horario','Horários:') !!}
    <br>
    @foreach($horarios as $horario)
    <div class="forme-grup">
      <input type="checkbox" name="letra[]" value="{{$horario->id}}" />
      {{$horario->letra}} - {{$horario->start_time}} às {{$horario->end_time}}<br /> 
    </div>
    @endforeach

                   <div class="forme-grup">
                    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                    
                  </div> 
                  
                {!! Form::close() !!}


</div>
 
 
<!-- mascara para cobrir o site -->  
<div id="mascara"></div>


@endsection