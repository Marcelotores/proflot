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