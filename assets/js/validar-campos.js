$(document).ready(function () {
    $("#btn-input-cliente").on('click', function () {
        $("#registroCliente").submit(function (e) {
            var nameCustomer = emptyInput($("#nameCustomer").val());
            var rfcCustomer = emptyInput($("#rfcCustomer").val());
            var streetCustomer = emptyInput($("#streetCustomer").val());
            var numeroCustomer = emptyInput($("#numeroCustomer").val());
            var inpuEstado = emptyInput($("#inpuEstado").val());
            var inpuMunicipio = emptyInput($("#inpuMunicipio").val());
            var coloniaCustomer = emptyInput($("#coloniaCustomer").val());
            var numeroCustomer = emptyInput($("#numeroCustomer").val());
            var RutaCustomer = emptyInput($("#RutaCustomer").val());
            var nameContactoCustomer = emptyInput($("#nameContactoCustomer").val());
            var emailContactoCustomer = emptyInput($("#emailContactoCustomer").val());
            var telPrCustomer = emptyInput($("#telPrCustomer").val());
            var telSecCustomer = emptyInput($("#telSecCustomer").val());

            var registro = { "nombre_nameCustomer": nameCustomer, "rfc_rfcCustomer": rfcCustomer, "nombre_streetCustomer": streetCustomer, "phone_numeroCustomer": numeroCustomer, "phone_inpuEstado": inpuEstado, "phone_inpuMunicipio": inpuMunicipio, "nombre_coloniaCustomer": coloniaCustomer, "phone_numeroCustomer": numeroCustomer, "phone_RutaCustomer": RutaCustomer, "nombre_nameContactoCustomer": nameContactoCustomer, "email_emailContactoCustomer": emailContactoCustomer, "phone_telPrCustomer": telPrCustomer, "ohone_telSecCustomer": telSecCustomer }
            for (const clave in registro) {

                var indice = separaTexto(clave)
                if (registro[clave] === "empty") {
                    console.log(registro[clave]);
                  $("#"+indice[1]).css('border', '1px solid red')
                  $("."+indice[1]).html('este campo es obligatorio')
                  $("."+indice[1]).css('color', 'red')
                  e.preventDefault();
              }  else {
                  var error = expRegular(indice[0], $("#"+indice[1]).val());
                  if (error != 0) {
                      $("#"+indice[1]).css('border','1px solid green')
                      $("."+indice[1]).html('correcto')
                  }else{
                      $("#"+indice[1]).css('border', '1px solid red')
                      $("."+indice[1]).html('Formato Incorrecto')
                      $("."+indice[1]).css('color', 'red')
                      e.preventDefault();
                  }
  
              }
              
            }

        })
    });
});