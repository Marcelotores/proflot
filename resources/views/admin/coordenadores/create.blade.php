@extends('app')


@section('content')
<div class="container">
     <h3>Novo Coordenador</h3>
       
         <div class="row">
           @include('errors._errors')
           
              <div class="col-xs-12 col-md-8">
                {!! Form::open(['route'=>'admin.coordenadores.update','class'=>'form']) !!}

                    @include('admin.coordenadores._form') <!-- Refatorando o form --> 

                   <div class="forme-grup">
                    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                    
                  </div> 
                  
                {!! Form::close() !!}
                 
                </div>

        </div>
</div>   


@endsection