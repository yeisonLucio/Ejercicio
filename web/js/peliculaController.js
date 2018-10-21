$(function(){

});




function obtenerFormulario(){
  var data= $('form').serializeArray();
  var datos="p";
  $.each(data, function(i, field){
    var datos= field.name ;
  });

alert(datos);

}


function guardarPelicula(){

  /*var v_action="";

     if($('#id').val().length<1)  //Se lega por modificación de cliente
   {

       console.log("\nSe registrara el estudiante ");
       v_action="registrar";

   }
   else{
       console.log("se actualizara el estudiante");
       v_action = "actualizar";
   }*/
    //capturando los datos del formulario

      var nombre=$('#appbundle_pelicula_nombre').val();
      var duracion= $('#appbundle_pelicula_duracion').val();
      var genero= $('#appbundle_pelicula_genero').val();
      var calidad= $('#appbundle_pelicula_calidad').val();
      var idioma= $('#appbundle_pelicula_idioma').val();
      //var Fechalanzamiento= $('#appbundle_pelicula_Fechalanzamiento').val();


      /*console.log("nombre: "+nombre+" duracion: "+duracion+" genero: "
              +genero+" calidad: "+calidad+" idioma: "
              +idioma);*/
      $.ajax({
       type: "POST",
       url: "{{ (path('new')) }}",
       data:	{
           nombre:nombre,
           duracion:duracion,
           genero:genero,
           calidad:calidad,
           idioma:idioma

       },
       dataType: 'text',
       beforeSend: function(data) {
           //alert("data enviada..."+data);

       },
       success: function(data){
           alert("data :"+data);
           if(data){


           }



       }

       });
}

function eliminarPelicula(){

}

function modificarPelicula(){

}

function listarPelicula(){

}
