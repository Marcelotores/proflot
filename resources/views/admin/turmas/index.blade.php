@extends('app')

@section('content')
<div class="container">
     <h3>Itens de Lotação</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>Periodo</a>
                 </br>
                 </br>
                 <table class="table table-bordered">
                    <thead>
                        <tr>
                           <th>Itens</th>       
                         </tr>
                    </thead>
                    <tbody>   
                           <tr>
                               @foreach($item as $i)
                               <td>
                                  Professor: {{$i->professor}} <br>
                                  Disciplina: {{$i->name}} <br>
                                  Sala: {{$i->number}}
                               </td>
                           
                            </tr>
                                @endforeach
                     </tbody>
                  </table>
                   
                </div>

        </div>
</div>   


@endsection