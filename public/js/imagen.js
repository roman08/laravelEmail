$(document).ready(function(){
 //$('#btn-imagen-icono').removeAttr("style");

});
//recuṕerar imagen
$(document).ready(function(){
    $('.btn-imagen').click(function(){
        $('#imagen_url').click();
    });
});
$(document).ready(function(){
    
  
   var imagen = $('#img1').val();
    if(imagen != '')
        {   
           // alert('imagen');   
            document.getElementById("list").innerHTML = ['<img class="img-thumbnail" src="'+ imagen+ '" />'];

            $('#img').hide();
           // $('#btn-imagen-icono').hide();
        }
});