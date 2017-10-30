var _URL = window.URL || window.webkitURL;

$("#imagen_url").change(function(e) {

    var file, img;

//var imgbase64 = toDataURL($(this).val());

    if ((file = this.files[0])) {
        img = new Image();

        img.onload = function() {
          
          //validar medidas
          if(this.width < 500 || this.height < 380) {
              alert("La imagen esta por debajo de las  medidas requeridas");
              return false;
            }
          var canvas = document.createElement('CANVAS'),
          ctx = canvas.getContext('2d'), dataURL;
          canvas.height = this.height;
          canvas.width = this.width;
          ctx.drawImage(this, 0, 0);
          dataURL = canvas.toDataURL(this);    
          $('#img1').val(dataURL);
          $("#list").html('<img class="img-thumbnail"  id="Eimage" src='+ dataURL +'>');
          $('#btn-imagen-icono').hide();
          $('#data').css("display","block");
          $('#i').removeClass( "fa-5x" ).addClass( "fa-3x" );
        
      if(this.width === 500 && this.height === 380) {
            alert('Las medidas de la imagen son exactas');
          }

  
     
        };
        img.onerror = function() {
            alert( "not a valid file: " + file.type);
        };
       
        img.src = _URL.createObjectURL(file);
         }

});


