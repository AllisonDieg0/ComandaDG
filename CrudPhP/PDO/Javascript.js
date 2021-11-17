 $('#formCadastro').on('submit',function(event){
  event.preventDefault();
  var Dados=$(this).serialize();
  
  $.ajax({
   url: 'controllers/cadastro.php',
   type: 'post',
   dataType: 'html',
   data: Dados,
   success:function(Dados){
    $('.Resultado').show().html(Dados);
   }
  });
 });