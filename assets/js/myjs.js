$(document).ready(function(){
	
	var path = window.location.href;
	var login = sessionStorage.getItem("logguin");
	var prevurl = sessionStorage.getItem("lasTUrl");
	// obtener el url
      if(path == getAbsolutePath() && login == "logueado"){
	 	var session = document.getElementById("frmLogginVerif");
	 	var attr = session.getAttribute("data-id");
	 	if(attr == 1){
	 		Swal.fire({
	 		title: '¿Quieres salir de la aplicación?',
	 		showDenyButton: true,
	 		confirmButtonText: `Si Salir`,
	 		denyButtonText: `NO Quedarme`,
	 		}).then((result) => {
	 		/* Read more about isConfirmed, isDenied below */
	 		if (result.isConfirmed) {
				 sessionStorage.removeItem("logguin");
	 			$(location).attr('href',getAbsolutePath()+'Loggin/logout');
	 		} else if (result.isDenied) {
				sessionStorage.removeItem("lasTUrl");
	 			$(location).attr('href',prevurl);
	 		}
	 		})
	 	}
	 }
	/* disabled div usuario */
	$(".permisoDoctor").attr('disabled','disabled');
	$('.dropdown-toggle').on("click",function(){
		$('.dropdown-menu').toggleClass('show');
	  });
/* dat picker al campo fecha*/
	$('#dateInicio').datepicker({
		uiLibrary: 'bootstrap4',
		format: 'dd-mm-yyyy'
	})
/* datepiker rango de fechas */
 	var today, config,datepicker;
	 today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
	 config = {
		locale: 'de-de',
		uiLibrary: 'bootstrap4'
	};
 $('#datepicker').datepicker({
 	uiLibrary: 'bootstrap4',
 	format: 'dd-mm-yyyy',
 	value: hoy(),
 	maxDate: today
 });
 $('#datepickerInicio').datepicker({
 	uiLibrary: 'bootstrap4',
 	format: 'dd-mm-yyyy',
 	value: hoy(),
	 maxDate: today,
	 config
 });
/* data table paciente nuevo */
var groupColumn = 0;
var table = $('#listAllPaciente').DataTable({
	"columnDefs": [
		{ "visible": false, "targets": groupColumn }
	],
	"order": [[ groupColumn, 'asc' ]],
	"displayLength": 25,
	"drawCallback": function ( settings ) {
		var api = this.api();
		var rows = api.rows( {page:'current'} ).nodes();
		var last=null;

		api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
			if ( last !== group ) {
				$(rows).eq( i ).before(
					'<tr class="group text-center" style="background-color: #E1E6E8;font-size: larger;text-transform: uppercase;"><td colspan="5">'+group+'</td></tr>'
				);

				last = group;
			}
		} );
	}
} );

// Order by the grouping
$('#listAllPaciente tbody').on( 'click', 'tr.group', function () {
	var currentOrder = table.order()[0];
	if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
		table.order( [ groupColumn, 'desc' ] ).draw();
	}
	else {
		table.order( [ groupColumn, 'asc' ] ).draw();
	}
} );

/* para mostrar tip en lo sbotones */
	$('[data-toggle="tooltip"]').tooltip();   
/*detectamos el select seleccionado*/
	$(".inpuEstado").on('change',function(){
		var dato = $(this).val();
		var id = new FormData();
		var selectMun = '';
			id.append("idEstado",dato);
	 	$.ajax({
				url: getAbsolutePath()+"views/layout/ajax.php",
				method:"POST",
				data:id,
				cache:false,
				contentType:false,
				processData:false,
				beforeSend:function(){
				$('.spinnerWhite').html('<i class="fas fa-sync fa-spin"></i>');
						},
				success:function(exist){
				 $.each(exist, function(i,item){				
				 	 selectMun += '<option value="'+item.id+'">'+item.name+'</option>';
				 });
				 $("#inpuMunicipio").html(selectMun);
				 }
			})
	})

/*:::::::::::::::::::::::::::::::::::::::::::::::validar toma de algun medicamento::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("#selectMedicamento").on('change', function(){
		var desicion = $(this).val();

		if(desicion == 1){
			$("#medicamento").css('display','block');
		}else if(desicion == 2){
			$("#medicamento").css('display','none');
		}
	})
/*:::::::::::::::::::::::::::::::::::::::::::::::validar el correo que sea unico::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("#inpuCorreo").on("change", function(){
		var emailer = $(this).val();
		var validar = expRegular("email",emailer);

		if(validar != 0){
			var mail = new FormData();
			mail.append("correo",emailer);
	 	$.ajax({
				url: getAbsolutePath()+"views/layout/ajax.php",
				method:"POST",
				data:mail,
				cache:false,
				contentType:false,
				processData:false,
				beforeSend:function(){
				$('.spinnerWhite').html('<i class="fas fa-sync fa-spin"></i>');
						},
				success:function(exsisteEmail){
					if(exsisteEmail == 1){
						$("#inpuCorreo").removeClass("is-valid");
						$("#error").removeClass("valid-feedback");

						$("#inpuCorreo").addClass("is-invalid");
						$("#error").addClass("invalid-feedback");
						$("#error").html("ESTE CORREO ESTA EN USO");
					}else if(exsisteEmail == 0){
						$("#inpuCorreo").removeClass("is-invalid");
						$("#error").removeClass("invalid-feedback");

						$("#inpuCorreo").addClass("is-valid");
						$("#error").addClass("valid-feedback");
						$("#error").html("CORRECTO!!");
					}			
				 }
			})
		}

	});
/*:::::::::::::::::::::::::::::::::::::::::::::::validar hombre o mujer para mostrar formulario::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("input:radio[name=customRadioSexo]").on('change',function(){
		if($(this).is(':checked')){
			var genero = $(this).val();
			if(genero == 'hombre'){
				$(".hideOn").attr('disabled','disabled');
			}else if(genero == 'mujer'){
				$(".hideOn").removeAttr('disabled');

			}
		}
	})
	$("#unputEmbarazos").on('change',function(){
		var valor = $(this).val();
		if(valor == 0){
			$("#inputNacidosTermino").val(0);
			$("#inputNacidosPre").val(0);
			$("#inputultimoEmbarazo").val('0001-01-01');
		}else if(valor > 0){
			$("#inputNacidosTermino").val(valor);
			$("#inputNacidosPre").val(valor);
		}
	})
/*:::::::::::::::::::::::::::::::::::::::::::::::validar si ah tenido cirugia::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("input:radio[name=cirugia]").on('change',function(){
		if($(this).is(':checked')){
			var surgery = $(this).val();
			if(surgery == 1){
				$(".disableoff").removeAttr('disabled');
			}else if(surgery == 2){
				$(".disableoff").attr('disabled','disabled');

			}
		}
	})
/*:::::::::::::::::::::::::::::::::::::::::::::::validar si ah tenido cirugia::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("input:radio[name=radioTratamiento]").on('change',function(){
		if($(this).is(':checked')){
			var tratamiento = $(this).val();
			if(tratamiento == 1){
				$(".anteriorMedicamento").removeAttr('disabled');
			}else if(tratamiento == 2){
				$(".anteriorMedicamento").attr('disabled','disabled');

			}
		}
	})
/*:::::::::::::::::::::::::::::::::::::::::::::::validar el enfermedades::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("#checkDeabetes").on('change',function(){
		if($(this).is(':checked')){
			$("#checkDeabetesParentesco").removeAttr('disabled');
			$('#checkNinguno').prop('checked',false);
		}else{
			$("#checkDeabetesParentesco").attr('disabled','disabled');			
		}
	})
	$("#checkHipertension").on('change',function(){
		if($(this).is(':checked')){
			$("#checkHipertensionParentesco").removeAttr('disabled');
			$('#checkNinguno').prop('checked',false);
		}else{
			$("#checkHipertensionParentesco").attr('disabled','disabled');			
		}
	})
	$("#checkAsma").on('change',function(){
		if($(this).is(':checked')){
			$("#checkAsmaParntesco").removeAttr('disabled');
			$('#checkNinguno').prop('checked',false);
		}else{
			$("#checkAsmaParntesco").attr('disabled','disabled');			
		}
	})
	$("#checkCancer").on('change',function(){
		if($(this).is(':checked')){
			$("#checkCancerParntesco").removeAttr('disabled');
			$('#checkNinguno').prop('checked',false);
		}else{
			$("#checkCancerParntesco").attr('disabled','disabled');			
		}
	})
	$("#checkAlergias").on('change',function(){
		if($(this).is(':checked')){
			$("#checkAlergiasParntesco").removeAttr('disabled');
			$('#checkNinguno').prop('checked',false);
		}else{
			$("#checkAlergiasParntesco").attr('disabled','disabled');			
		}
	})
	 // Comprobar cuando cambia Ninguno Checkbox
	    $('#checkNinguno').on('change', function() {
	        if ($(this).is(':checked') ) {
	            $(".parentesco").prop("checked",false);
	            $(".parentesco").attr('disabled','disabled');

				$("#hide").attr('value','0');
	            $("#otroIndique").css('visibility','hidden');
            	$(".otroIndique").attr('disabled','disabled');
            	$("#checkDeabetesParentesco").attr('disabled','disabled');
            	$("#checkHipertensionParentesco").attr('disabled','disabled');	
            	$("#checkAsmaParntesco").attr('disabled','disabled');
				$("#checkCancerParntesco").attr('disabled','disabled');		
				$("#checkAlergiasParntesco").attr('disabled','disabled');		
	        } else{
	            $(".parentesco").removeAttr('disabled','disabled');
	        }
	    });
	    // Comprobar cuando cambia otros Checkbox
    $('#checkOtrosFamilia').on('change', function() {
        if ($(this).is(':checked') ) {
            $("#otroIndique").css('visibility','visible');
            $('.otroIndique').removeAttr('disabled');
        } else {
            $("#otroIndique").css('visibility','hidden');
            $(".otroIndique").attr('disabled','disabled');
        }
    });
/*:::::::::::::::::::::::::::::::::::::::::::::::validar checkbox actual::::::::::::::::::::::::::::::::::::::::::::::::::::*/

$("#checkDeabetesActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkDeabetesActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkDeabetesActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkHipertensionActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkHipertensionActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkHipertensionActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkAsmaActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkAsmaActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkAsmaActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkCancerActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkCancerActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkCancerActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkAlergiasActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkAlergiasActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkAlergiasActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkDislipidemiasActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkDislipidemiasActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkDislipidemiasActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkHepaticosActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkHepaticosActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkHepaticosActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkRenalesActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkRenalesActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkRenalesActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkUrinariosActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkUrinariosActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkUrinariosActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkProstataActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkProstataActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkProstataActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkDisfusionActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkDisfusionActualParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkDisfusionActualParentesco").attr('disabled','disabled');			
	}
})
$("#checkHipotiroidismoActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkHipotiroidismoParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkHipotiroidismoParentesco").attr('disabled','disabled');			
	}
})
$("#checkHipertiroidismoActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkHipertiroidismoParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkHipertiroidismoParentesco").attr('disabled','disabled');			
	}
})
$("#checkSindromeActual").on('change',function(){
	if($(this).is(':checked')){
		$("#checkSindromeParentesco").removeAttr('disabled');
		$('#checkNingunoActual').prop('checked',false);
	}else{
		$("#checkSindromeParentesco").attr('disabled','disabled');			
	}
})
// Comprobar cuando cambia Ninguno Checkbox
$('#checkNingunoActual').on('change', function() {
	if ($(this).is(':checked') ) {
		$(".actual").prop("checked",false);
		$(".actual").attr('disabled','disabled');
		
		$("#hide").attr('value','0');
		$("#otroIndiqueActual").css('visibility','hidden');
		$(".otroIndiqueActual").attr('disabled','disabled');
		$("#checkDeabetesActualParentesco").attr('disabled','disabled');
		$("#checkHipertensionActualParentesco").attr('disabled','disabled');	
		$("#checkCancerActualParentesco").attr('disabled','disabled');			
		$("#checkAsmaActualParentesco").attr('disabled','disabled');	
		$("#checkAlergiasActualParentesco").attr('disabled','disabled');	
		$("#checkDislipidemiasActualParentesco").attr('disabled','disabled');
		$("#checkHepaticosActualParentesco").attr('disabled','disabled');		
		$("#checkRenalesActualParentesco").attr('disabled','disabled');		
		$("#checkUrinariosActualParentesco").attr('disabled','disabled');
		$("#checkProstataActualParentesco").attr('disabled','disabled');	
		$("#checkDisfusionActualParentesco").attr('disabled','disabled');	
		$("#checkHipotiroidismoParentesco").attr('disabled','disabled');		
		$("#checkHipertiroidismoParentesco").attr('disabled','disabled');		
		$("#checkSindromeParentesco").attr('disabled','disabled');		
	} else{
		$(".actual").removeAttr('disabled','disabled');
	}
});
// Comprobar cuando cambia otros Checkbox
$('#otroActual').on('change', function() {
	if ($(this).is(':checked') ) {
		$("#otroIndiqueActual").css('visibility','visible');
		$('.otroIndiqueActual').removeAttr('disabled');
	} else {
		$("#otroIndiqueActual").css('visibility','hidden');
		$(".otroIndiqueActual").attr('disabled','disabled');
	}
	});
	/*:::::::::::::::::::::::::::::::::::::::::::::::colocar nombre en nombre de consutorio::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("#inpuColoniaConsultorio").on('change', function() {
		var valorCalle,valorSelect,nuevoNombre;
		valorCalle = $(this).val();
		valorSelect = $(".altaConsultorio option:selected").text();
		nuevoNombre = $("#intputnameConsultorio").val(valorSelect+' '+valorCalle);
		
		
		
	});
	
	/*:::::::::::::::::::::::::::::::::::::::::::::::sumar y resatar control::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("#inputMesotrolSumaResta").on('keyup',function(){
		var totalNow = parseInt($("#mesoTotal").html(),10);
		var updateNow = parseInt($(this).val(),10);
		var control = $("#meso").attr('id');
		var jsonBack;
		jsonBack = enviarAjax(control,totalNow,updateNow);	
	});
	$("#inputControlSumaResta").on('keyup',function(){
		var totalNow = parseInt($("#conTotal").html(),10);
		var updateNow = parseInt($(this).val(),10);
		var control = $("#con").attr('id');
		var jsonBack;
		jsonBack = enviarAjax(control,totalNow,updateNow);		
	});
	/*:::::::::::::::::::::::::::::::::::::::::::::::VALIDAR BOTONES DE ACTUALIZAR MESO::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("#btnSumaCon,#btnRestarCon").on("click",function(){
		var validarInput = emptyInput($("#inputControlSumaResta").val());

		if(validarInput == "empty"){
			$("#inputControlSumaResta").css("border","1px solid red");
			$(".errorSumResta").css("color","red");
			$(".errorSumResta").html("DEBES INGRESAR NUMERO A SUMAR O A RESTAR");
			return false;
		}

	});
	$("#btnSumaMeso,#btnRestarMeso").on("click",function(){
		var validarInputMeso = emptyInput($("#inputMesotrolSumaResta").val());
		
		if(validarInputMeso == "empty"){
			$("#inputMesotrolSumaResta").css("border","1px solid red");
			$(".errorSumResta").css("color","red");
			$(".errorSumResta").html("DEBES INGRESAR NUMERO A SUMAR O A RESTAR");
			return false;
		}

	});
/* :::::::::::::::::::::::::::::::::::::::::::::::loguin:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: */
	$("#emailLoggin").on('change',function(){
		var email = $(this).val();
		var validarEmail =  expRegular("email",email);

		if(validarEmail != 0){
			var mail = new FormData();
			mail.append("correoLoggin",email);
	 	$.ajax({
				url: getAbsolutePath()+"views/layout/ajax.php",
				method:"POST",
				data:mail,
				cache:false,
				contentType:false,
				processData:false,
				beforeSend:function(){
				$('.spinnerWhite').html('<i class="fas fa-sync fa-spin"></i>');
						},
				success:function(emaillog){				
					if(emaillog){
						$("#tipoUser").val(emaillog.tipo);
						if(emaillog.tipo == 2 || emaillog.tipo == 3){
							$(".selectH").css('display','block');
						}else{
							$(".selectH").css('display','none');
						}
					}else{
						$("#tipoUser").val(0);
					}
				 }
			})
		}
	});

	$(".btnstart").on("click", function(){		
		$("#frmLogginVerif").submit(function(e){
			var correo = emptyInput($("#emailLoggin").val());
			var pass = emptyInput($("#inputPassLoggin").val());
			var tipo = $("#tipoUser").val();
			if(correo == "empty"){
				$("#emailLoggin").attr('placeholder','RECUERDA ESTE CAMPO ES OBLIGATORIO');
				e.preventDefault();
			}

			if(pass == "empty"){
				$("#inputPassLoggin").attr('placeholder','RECUERDA ESTE CAMPO ES OBLIGATORIO');
				e.preventDefault();
			}

			if(tipo == 2 || tipo == 3){
				var select = emptyInput($("#consul option:selected").val());

				if(select == "empty"){
					$(".errorSelect").css({'color':'red','opacity':'0.5','font-family': "'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"});
					$(".errorSelect").html('RECUERDA ESTE CAMPO ES OBLIGATORIO');
					e.preventDefault();
				}
			}

			
		})
	})
/* :::::::::::::::::::::::::::::::::::::::::::::::::::::::CobroEstaturaObservacion::::::::::::::::::::::::::::::::::::::::::::::::::::::::: */
	$("#btnUpdateRegistro").on('click',function(){
		$("#frmCobroEstatura").submit(function(e){
			var cobro = emptyInput($("#cobro").val());
			var estatura = emptyInput($("#txtEstatura").val());
			var observacion = emptyInput($("#observacion").val());
			var contenido;

			if(cobro == "empty"){
				$("#cobro").addClass('is-invalid');
				$("#alertaCobro").addClass('invalid-feedback');
				$("#alertaCobro").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				cobro = expRegular('decimales',$("#cobro").val());
				if(cobro != 0){
					$("#cobro").addClass('is-valid');
					$("#alertaCobro").addClass('valid-feedback');
					$("#alertaCobro").html('CORRECTO!!');
				}else{
					$("#cobro").addClass('is-invalid');
					$("#alertaCobro").addClass('invalid-feedback');
					$("#alertaCobro").html('FORMATO INVALIDO');
					e.preventDefault();
				}
			}

			if(estatura == "empty"){
				$("#txtEstatura").addClass('is-invalid');
				$("#alertaEstatura").addClass('invalid-feedback');
				$("#alertaEstatura").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				estatura = expRegular('decimales',$("#txtEstatura").val());
				if(estatura != 0){
					$("#txtEstatura").addClass('is-valid');
					$("#alertaEstatura").addClass('valid-feedback');
					$("#alertaEstatura").html('CORRECTO!!');
				}else{
					$("#txtEstatura").addClass('is-invalid');
					$("#alertaEstatura").addClass('invalid-feedback');
					$("#alertaEstatura").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
			}

			if(observacion == "empty"){
				$("#observacion").addClass('is-invalid');
				$("#alertaObs").addClass('invalid-feedback');
				$("#alertaObs").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				observacion = expRegular('messagge',$("#observacion").val());
				contenido = $("#observacion").val().length;

				if(observacion =! 0 && contenido <= 500){
					$("#observacion").addClass('is-valid');
					$("#alertaObs").addClass('valid-feedback');
					$("#alertaObs").html('CORRECTO!!');
				}else{
					$("#observacion").addClass('is-invalid');
					$("#alertaObs").addClass('invalid-feedback');
					$("#alertaObs").html('MENOR A 500 CARACTERES O NO INGRESES VALORES INCORRECTOS');
					e.preventDefault();
				}
			}

		})
	});

	/* modals de mesoterapia */
	$('#saveMesoterapia').on('click',function(e){
		e.preventDefault();
		var usarMEso = $("#mesoUsarTotal").val();
		var existecia = parseInt($(".totalMesoNumero").text());
		 
		if(existecia>=usarMEso){
			$("#mesoterapia").val(usarMEso);
			$('#mesoterapiaModal').modal('hide');
			if ($('.modal-backdrop').is(':visible')) {
				$('body').removeClass('modal-open'); 
				$('.modal-backdrop').remove(); 
			};
		}else{
			$("#verificaer").html('NO HAY CANTIDAD SUFICIENTE PARA TU PEDIDO<br>')
			return false;
		}
		
	})
	/* modals de consetrados */
	$('#saveconcentrado').on('click',function(e){
		e.preventDefault();
		var usarMEso = $("#concentradoUsarTotal").val();
		var existecia = parseInt($(".totalConcetradoNumero").text());
		if(existecia>=usarMEso){
			$("#concentrado").val(usarMEso);
			$('#concentradopiaModal').modal('hide');
			if ($('.modal-backdrop').is(':visible')) {
				$('body').removeClass('modal-open'); 
				$('.modal-backdrop').remove(); 
				};
		}else{
			$("#verificarConcentrado").html('NO HAY CANTIDAD SUFICIENTE PARA TU PEDIDO<br>')
			return false;
		}
		
	})

	/* calcular la perdida de peso */

	$("#peso").on("change",function(){
		var pesoActual = parseFloat($(this).val());
		var ultimoPeso = parseFloat($("#ultimoPeso").val());
		var totalPesoPerdido;
		if(ultimoPeso == 0){
			$("#lostWeight").val(pesoActual);
			$("#arrowupdown").removeClass('far fa-arrow-alt-circle-up');
			$("#arrowupdown").removeClass('far fa-arrow-alt-circle-down');
			$("#arrowupdown").addClass('fa fa-arrows');
			$("#lostWeight").css({'border':'1px solid  #f39c12','color':'#7f8c8d'});
			$("#arrowupdown").css('color',' #f39c12');
			$("#tittleWeightLost").val('0');
		}else if(ultimoPeso == pesoActual){
			$("#lostWeight").val(pesoActual);
			$("#arrowupdown").removeClass('far fa-arrow-alt-circle-up');
			$("#arrowupdown").removeClass('far fa-arrow-alt-circle-down');
			$("#arrowupdown").addClass('fa fa-arrows-h');
			$("#lostWeight").css({'border':'1px solid  #f39c12','color':'#7f8c8d'});
			$("#arrowupdown").css('color',' #f39c12');
			$("#tittleWeightLost").val('3');
		}else if(ultimoPeso >= pesoActual){
			  totalPesoPerdido = restar(ultimoPeso,pesoActual);
			  $("#lostWeight").val(dosDecimales(totalPesoPerdido.toFixed(2)));
			  $("#lostWeight").css({'border':'1px solid rgba(30, 180, 30, 0.781)','color':'rgba(30, 180, 30, 0.781)'});
			  $("#arrowupdown").css('color','rgba(30, 180, 30, 0.781)');
			  $("#arrowupdown").removeClass('far fa-arrow-alt-circle-up');
			  $("#arrowupdown").addClass('far fa-arrow-alt-circle-down');
			  $("#titleWeight").html('Perdido');
			  $("#tittleWeightLost").val('1');
			  
			}else{
				totalPesoPerdido = restar(pesoActual,ultimoPeso);
				$("#lostWeight").val(dosDecimales(totalPesoPerdido));
				$("#lostWeight").css({'border':'1px solid rgba(241, 31, 31, 0.822)','color':'rgba(241, 31, 31, 0.822)'});
				$("#arrowupdown").css('color','rgba(241, 31, 31, 0.822)');
				$("#arrowupdown").removeClass('far fa-arrow-alt-circle-down');
				$("#arrowupdown").addClass('far fa-arrow-alt-circle-up');
				$("#titleWeight").html('Ganado');
				$("#tittleWeightLost").val('2');
		};
	});

	// Mostrar div de pagos

	$("#btnPagoToggle").click(function(){
		  $("#seccionPagos").toggle('slow',function(){
			$("#btnPagoToggle").animate({
				left: '-20%',
      			opacity: '0'
			}),
			$("#btnUpdateRegistro").animate({
				marginLeft: "0in",				
				height: 'toggle'
			  });
		  });
		  $("#cobro").toggle('slow');
	})
	$("#observ").on('keyup',function(){
		var letras;
		letras = $(this).val().length;
		if(letras >= 500){
			var hola = $("#observ").val( $("#observ").val().substring(0, 500));
			return false;
		}else{
			$("#sumaTextoObser").text(letras);
		}
	})

	/* sumar las dos cantidades de dinero en efectivo y de tarjeta */
	$("#inputefectivo").on('keyup',function(){
		
		var efectivo = $(this).val();
		var tarjeta = $("#inputTarjeta").val();
		var cobro = parseInt($("#cobroConsultaDato").val());
		var faltante;

		var suma = sumar(parseInt(efectivo),parseInt(tarjeta));
		if(suma < cobro){
			faltante = restar(cobro,suma);
			$("#btnUpdateRegistro").attr('disabled','disabled');
			$(".alertEfectivo").css('color','red');
			$(".alertEfectivo").text('RESTA $'+faltante+' PESOS');
		}else if(suma == cobro){
			$(".alertEfectivo").text('RESTA $0 PESOS');
			$("#btnUpdateRegistro").removeAttr('disabled');
		}else if(suma > cobro){
			$("#btnUpdateRegistro").attr('disabled','disabled');
			$(".alertEfectivo").text('LA SUMA DE EFECTIVO Y TARJETA ES MAYOR AL COBRO');
		}
	});
	$("#inputTarjeta").on('keyup',function(){
		
		var efectivo = $(this).val();
		var tarjeta = $("#inputefectivo").val();
		var cobro = parseInt($("#cobroConsultaDato").val());
		var faltante;

		var suma = sumar(parseInt(efectivo),parseInt(tarjeta));
		if(suma < cobro){
			var tarjetaEfectivo = sumar(parseInt(efectivo),parseInt(tarjeta));			
			faltante = restar(cobro,tarjetaEfectivo);
			$("#btnUpdateRegistro").attr('disabled','disabled');
			$(".alertEfectivo").css('color','red');
			$(".alertEfectivo").text('RESTA $'+faltante+' PESOS');
			
		}else if(suma == cobro){
			$(".alertEfectivo").text('RESTA $0 PESOS');
			$("#btnUpdateRegistro").removeAttr('disabled');
		}else if(suma > cobro){
			$("#btnUpdateRegistro").attr('disabled','disabled');
			$(".alertEfectivo").text('LA SUMA DE EFECTIVO Y TARJETA ES MAYOR AL COBRO');
		}
	});

	/* validar que no se tome mas dinero del que hay en la pantalla de registrar gastos */
	 $("#dineroAtomar").on("keyup",function(){
	 	var gasto = parseInt($(this).val());
	 	var fisico = parseInt($("#quedaDinero").val());

	 	if(isNaN(gasto)){
	 		$("#dineroAtomar").addClass('is-invalid');
	 		$("#alertadineroAtomar").addClass('invalid-feedback');
	 		$("#alertadineroAtomar").html('INGRESA UN NUMERO VALIDO');
	 		$("#enviarDatos").attr("disabled","disabled");
	 		$("#enviarDatos").css("cursor","no-drop");			
	 		return false;
	 	}

	 	if(gasto > fisico){
	 		$("#dineroAtomar").addClass('is-invalid');
	 		$("#alertadineroAtomar").addClass('invalid-feedback');
	 		$("#alertadineroAtomar").html('NO PUEDES TOMAR MAS DINERO DEL QUE HAY EN CAJA');
	 		$("#enviarDatos").attr("disabled","disabled");
	 		$("#enviarDatos").css("cursor","no-drop");
	 	}else{
	 		$("#dineroAtomar").removeClass('is-invalid');
	 		$("#alertadineroAtomar").removeClass('invalid-feedback');
	 		$("#dineroAtomar").addClass('is-valid');
	 		$("#alertadineroAtomar").addClass('valid-feedback');
	 		$("#alertadineroAtomar").html('correcto!!');
	 		$("#enviarDatos").removeAttr("disabled");
	 		$("#enviarDatos").css("cursor","default");
	 	}
	 });

	 $("#motivoGasto").on("keyup",function(){
	 	var motivo = $(this).val();
	 	var verifMotivo =  expRegular('messagge',motivo);

	 	if(verifMotivo == 0){
	 		$("#motivoGasto").addClass('is-invalid');
	 		$("#alertaMotivo").addClass('invalid-feedback');
	 		$("#alertaMotivo").html('NO SE PUEDEN USAR CARACTERES ESPECIALES');
	 		$("#enviarDatos").attr("disabled","disabled");
	 		$("#enviarDatos").css("cursor","no-drop");
	 	}else{
	 		$("#motivoGasto").removeClass('is-invalid');
	 		$("#alertaMotivo").removeClass('invalid-feedback');
	 		$("#motivoGasto").addClass('is-valid');
	 		$("#alertaMotivo").addClass('valid-feedback');
	 		$("#alertaMotivo").html('correcto');
	 		$("#enviarDatos").removeAttr("disabled");
	 		$("#enviarDatos").css("cursor","default");
	 	}
	 })

	 $("#btnReporteFEchas").on("click", function(e){
		 e.preventDefault();
		 var fecha1 = $("#datepickerInicio").val();
		 var fecha2 = $("#datepicker").val();
		 var validar1 = expRegular('date',fecha1);
		 var validar2 = expRegular('date',fecha2);

		 if(validar1 == 0 || validar2 == 0){			  
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Tienes una fecha incorrecta verifica'
				})
		 }else{
			 $(location).attr('href',getAbsolutePath()+'Avanzado/reporte&dOne='+fecha1+'&Dtwo='+fecha2);
			 
		 }

		 
	 });
	 /* seleccionar todos los pacientes */
	 $("#Paciente").click(function(){
		 $(".pacientesChecks").prop('checked',this.checked);
	 });
	 $(".pacientesChecks").click(function(){
		 if ($(".pacientesChecks").length==$(".pacientesChecks:checked").length) {
			 $("#Paciente").prop("checked", true);
		}else{
			$("#Paciente").prop("checked",false);			
	  }
	});
	 /* seleccionar todos los consultorios */
	 $("#Consultorio").click(function(){
		$(".consultorioCheck").prop('checked',$(this).prop("checked"));
	});
	$(".consultorioCheck").click(function(){
		if ($(".consultorioCheck").length==$(".consultorioCheck:checked").length) {
			$("#Consultorio").prop("checked", true);
	   }else{
		   $("#Consultorio").prop("checked",false);			
	 }
   });
	/* seleccionar todos los consultorios */
	 $("#Doctor").click(function(){
		$(".doctorCheck").prop('checked',$(this).prop("checked"));
	});

	$(".doctorCheck").click(function(){
		if ($(".doctorCheck").length==$(".doctorCheck:checked").length) {
			$("#Doctor").prop("checked", true);
	   }else{
		   $("#Doctor").prop("checked",false);			
	 }
   });
	/* seleccionar todos los consultorios */
	 $("#Avanzado").click(function(){
		$(".avanzadoChecks").prop('checked',$(this).prop("checked"));
	});
	$(".avanzadoChecks").click(function(){
		if ($(".avanzadoChecks").length==$(".avanzadoChecks:checked").length) {
			$("#Avanzado").prop("checked", true);
	   }else{
		   $("#Avanzado").prop("checked",false);			
	 }
   });
   /* TENER CHECKBOX PREDETERMINADOS */
   $("select#tipoUser").on("change",function(){
	   /* obtenemos el valor del select */
	   var valor  = $(this).val();
	   $("#permisoDoctor").css({'display':'inline-flex','width':'100%'});
	   $("#permisoDoctor2").css('display','block');
		/* si el valor es doctor */
	   if(valor == 2){
		   /* deshabiliamos los checkbox que esten activos */
		   if(".pacientesChecks:checked"){
			$(".pacientesChecks").prop('checked',false);
			$("#Paciente").prop("checked", false);
		   }
		   if(".consultorioCheck:checked"){
			$(".consultorioCheck").prop('checked',false);
			$("#Consultorio").prop("checked", false);
		   }
		   if(".doctorCheck:checked"){
			$(".doctorCheck").prop('checked',false);
			$("#Doctor").prop("checked", false);
		   }
		   if(".avanzadoChecks:checked"){
			$(".avanzadoChecks").prop('checked',false);
			$("#Avanzado").prop("checked", false);
		   }
		   /* habilitamos los checkbos de los doctores */
			$(".pacientesChecks").prop('checked',true);
			$("#Paciente").prop("checked", true);
			$("#registroDiario").prop("checked",true);
			$("#registroGastos").prop("checked",true);
	   }else if(valor == 3){
		   /* si el valor del select es de administrador habilitamos todos los checkbox */
			$("#Paciente").prop('checked',true)
			$(".pacientesChecks").prop('checked',true);
			$("#Consultorio").prop('checked',true)
			$(".consultorioCheck").prop('checked',true);
			$("#Doctor").prop('checked',true)
			$(".doctorCheck").prop('checked',true);
			$("#Avanzado").prop('checked',true)
			$(".avanzadoChecks").prop('checked',true);
	   }
   });
   $("#pacienteDatos,#pacienteEditar,#pacienteAlta").on("click",function(e){
	Swal.fire(
		'DEHABILITAR?',
		'ESTE CAMPO NO SE RECOMIENDA DEHABILITAR',
		'warning'
	  )
	//   $("#pacienteDatos").prop('checked',true);
	  $(this).prop('checked',true);
   });

   /* activar o desactivar el motivo del cambio de estatus */
   $("select#statusUSer").on("change",function(){
	   var stats = $(this).val();
	   if(stats == 2 || stats == 3){
		   $("#MotivoStatus").css('display',"block");
		}else{
			$("#MotivoStatus").css('display',"none");

		}
   });
});