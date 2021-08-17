$(document).ready(function(){
    $("#btn-env").on('click',function(){
        $("#registro").submit(function(e){
            var name = emptyInput($("#intputname").val());
            var app = emptyInput($("#inputAppat").val());
            var apm = emptyInput($("#inputApmat").val());
            var sexo = $("input:radio[name='customRadioSexo']:checked").val();
            var date = emptyInput($("#dateInicio").val());
            var estatura = emptyInput($("#inpuEstatura").val());
            var ocup = emptyInput($("#inpuOcupacion").val());
            var select = emptyInput($("#inpuEstadoCivil").val());
            var cel = emptyInput($("#inpuCelular").val());
            var mail = emptyInput($("#inpuCorreo").val());
            var rd = emptyInput($("#inpuRedSocial").val());
            var selectEdo = emptyInput($("#inpuEstado").val());
            var selectMun = emptyInput($("#inpuMunicipio").val());
            var cp = emptyInput($("#inpuCP").val());
            var colonia = emptyInput($("#inpuColonia").val());
            var calle = emptyInput($("#inpuCalle").val());
            var tel = emptyInput($("#inpuTelEmergencia").val());
            var parentesco = emptyInput($("#inpuParentesco").val());
            var recomienda = emptyInput($("#inpuNombreRecomienda").val());
            var motivo = emptyInput($("#inpuMotivo").val());
            var selectMedicamento = $("#selectMedicamento").val();
            var medicamento = emptyInput($("#inputNombreMedicamento").val());
            var diabetesActual = $("#checkDeabetes").val();
            var DeabetesParentesco = emptyInput($("#checkDeabetesParentesco").val());
            var HipertensionActual = $("#checkHipertension").val();
            var HipertensionParentesco = emptyInput($("#checkHipertensionParentesco").val());
            var asmaActual = $("#checkAsma").val();
            var asmaParentesco = emptyInput($("#checkAsmaParntesco").val());
            var cancerActual = $("#checkCancer").val();
            var cancerParentesco = emptyInput($("#checkCancerParntesco").val());
            var alergiasActual = $("#checkAlergias").val();
            var alergiasParentesco = emptyInput($("#checkAlergiasParntesco").val());
            var otrosActual = $("#checkOtrosFamilia").val();
            var otrosParentescoIndique = emptyInput($("#otroIndiquetxtHide").val());
            var otrosParentesco = emptyInput($("#otroIndiquetxtParentesco").val());
            var DeabetesPersonal = emptyInput($("#checkDeabetesActualParentesco").val());
            var HipertensionPersonal = emptyInput($("#checkHipertensionActualParentesco").val());
            var AsmaPersonal = emptyInput($("#checkAsmaActualParentesco").val());
            var CancerPersonal = emptyInput($("#checkCancerActualParentesco").val());
            var AlergiasPersonal = emptyInput($("#checkAlergiasActualParentesco").val());
            var DislipidemiasPersonal = emptyInput($("#checkDislipidemiasActualParentesco").val());
            var HepaticosPersonal = emptyInput($("#checkHepaticosActualParentesco").val());
            var RenalesPersonal = emptyInput($("#checkRenalesActualParentesco").val());
            var UrinariosPersonal = emptyInput($("#checkUrinariosActualParentesco").val());
            var ProstataPersonal = emptyInput($("#checkProstataActualParentesco").val());
            var DisfusionPersonal = emptyInput($("#checkDisfusionActualParentesco").val());
            var HipotiroidismoPersonal = emptyInput($("#checkHipotiroidismoParentesco").val());
            var HipertiroidismoPersonal = emptyInput($("#checkHipertiroidismoParentesco").val());
            var SindromePersonal = emptyInput($("#checkSindromeParentesco").val());
            var otroPersonal = emptyInput($('#hideOtroActual').val());
            var otroTratamientoPersonal = emptyInput($('#otrotratamientoActual').val());
            var cirugia = $("input:radio[name=cirugia]:checked").val();
            var cirugiaName1 = emptyInput($('#idNameOperacionuno').val());
            var cirugiaFecha1 = emptyInput($('#idfechaOperacionuno').val());
            var embarazo = emptyInput($('#unputEmbarazos').val());
            var nacTermino = emptyInput($('#inputNacidosTermino').val());
            var nacPretermino = emptyInput($('#inputNacidosPre').val());
            var anticonceptivo = emptyInput($('#MedotoAnticonceptivo').val());
            var tratamiento = $("input:radio[name=radioTratamiento]:checked").val();
            var txtTratamiento = emptyInput($('#medicamentoAnterior').val());
            var contenido;

            if(name == "empty"){
                $("#intputname").addClass('is-invalid');
                $("#alertaName").addClass('invalid-feedback');
                $("#alertaName").html('CAMPO OBLIGATORIO');
                e.preventDefault();
            }else{
                name = expRegular('frm',$("#intputname").val());
                if(name != 0){
                    $("#intputname").removeClass("is-invalid");
                    $("#alertaName").removeClass("invalid-feedback");
                    $("#intputname").addClass('is-valid');
                    $("#alertaName").addClass('valid-feedback');
                    $("#alertaName").html('CORRECTO!!');
                }else{
                    $("#intputname").addClass('is-invalid');
                    $("#alertaName").addClass('invalid-feedback');
                    $("#alertaName").html('FORMATO INVALIDO');
                    e.preventDefault();
                }
            }

             if(app == "empty"){
                 $("#inputAppat").addClass('is-invalid');
                 $("#alertaApp").addClass('invalid-feedback');
                 $("#alertaApp").html('CAMPO OBLIGATORIO');
                 e.preventDefault();
             }else{
                 app = expRegular('frm',$("#inputAppat").val());
                 if(app != 0){
                     $("#inputAppat").removeClass("is-invalid");
                     $("#alertaApp").removeClass("invalid-feedback");
                     $("#inputAppat").addClass('is-valid');
                     $("#alertaApp").addClass('valid-feedback');
                     $("#alertaApp").html('CORRECTO!!');
                 }else{
                     $("#inputAppat").addClass('is-invalid');
                     $("#alertaApp").addClass('invalid-feedback');
                     $("#alertaApp").html('FORMATO INVALIDO');
                     e.preventDefault();	
                 }
             }

             if(apm == "empty"){
                 $("#inputApmat").addClass('is-invalid');
                 $("#alertaApm").addClass('invalid-feedback');
                 $("#alertaApm").html('CAMPO OBLIGATORIO');
                 e.preventDefault();
             }else{
                 apm = expRegular('frm',$("#inputApmat").val());
                 if(apm != 0){
                     $("#inputApmat").removeClass("is-invalid");
                     $("#alertaApm").removeClass("invalid-feedback");
                     $("#inputApmat").addClass('is-valid');
                     $("#alertaApm").addClass('valid-feedback');
                     $("#alertaApm").html('CORRECTO!!');
                 }else{
                     $("#inputApmat").addClass('is-invalid');
                     $("#alertaApm").addClass('invalid-feedback');
                     $("#alertaApm").html('FORMATO INVALIDO');
                     e.preventDefault();
                 }
             }

             /* validar radio botton */
             if($("input[name='customRadioSexo']:radio").is(':checked')){
                $(".genero").css('border','1px solid #28A745');
                $("#alertRadio").css({"font-size": "small","color":"#28A745"});
                $("#alertRadio").html('CORRECTO!!');
             }else{
                $(".genero").css('border','1px solid red');
                $("#alertRadio").css({"font-size": "small","color":"red"});
                $("#alertRadio").html('FORMATO INVALIDO');
                e.preventDefault();
             }
             /* validar fecha de nacimiento */
             if(date == "empty"){
                $("#dateInicio").addClass('is-invalid');
                $("#inpuEdad").addClass('is-invalid');
                $("#alertaDate").css({"font-size": "small","color":"red"});
                $("#alertaDate").html('CAMPO OBLIGATORIO');
                $("#alertaEdad").addClass('invalid-feedback');
                $("#alertaEdad").html('FORMATO INVALIDO');
                e.preventDefault();
            }else{
                date = expRegular('date',$("#dateInicio").val());
                if(date != 0){
                    $("#dateInicio").removeClass("is-invalid");
                    $("#inpuEdad").removeClass("is-invalid");
                    $("#alertaEdad").removeClass("invalid-feedback");
                    $("#dateInicio").addClass('is-valid');
                    $("#alertaDate").css({"font-size": "small","color":"#28A745"});
                    $("#alertaDate").html('CORRECTO!!');
                    $("#inpuEdad").addClass('is-valid');
                    $("#alertaEdad").addClass('valid-feedback');
                    $("#alertaEdad").html('CORRECTO!!');
                }else{
                    $("#dateInicio").addClass('is-invalid');
                    $("#inpuEdad").addClass('is-invalid');
                    $("#alertaEdad").addClass('invalid-feedback');
                    $("#alertaEdad").html('FORMATO INVALIDO');
                    $("#alertaDate").css({"font-size": "small","color":"red"});
                    $("#alertaDate").html('FORMATO INVALIDO');
                    e.preventDefault();
                }
            }
            /* validar estatura */
            if(estatura == "empty"){
				$("#inpuEstatura").addClass('is-invalid');
				$("#alertaEstatura").addClass('invalid-feedback');
				$("#alertaEstatura").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				estatura = expRegular('decimales',$("#inpuEstatura").val());
				if(estatura != 0){
                    $("#inpuEstatura").removeClass("is-invalid");
                    $("#alertaEstatura").removeClass("invalid-feedback");
					$("#inpuEstatura").addClass('is-valid');
					$("#alertaEstatura").addClass('valid-feedback');
					$("#alertaEstatura").html('CORRECTO!!');
				}else{
					$("#inpuEstatura").addClass('is-invalid');
					$("#alertaEstatura").addClass('invalid-feedback');
					$("#alertaEstatura").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            
            /* validamos ocupacion */
            if(ocup == "empty"){
				$("#inpuOcupacion").addClass('is-invalid');
				$("#alertOcupacion").addClass('invalid-feedback');
				$("#alertOcupacion").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				ocup = expRegular('frm',$("#inpuOcupacion").val());
				if(ocup != 0){
                    $("#inpuOcupacion").removeClass("is-invalid");
                    $("#alertOcupacion").removeClass("invalid-feedback");
					$("#inpuOcupacion").addClass('is-valid');
					$("#alertOcupacion").addClass('valid-feedback');
					$("#alertOcupacion").html('CORRECTO!!');
				}else{
					$("#inpuOcupacion").addClass('is-invalid');
					$("#alertOcupacion").addClass('invalid-feedback');
					$("#alertOcupacion").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            /* validamos estado civil */
            if(select == "empty"){
				$("#inpuEstadoCivil").addClass('is-invalid');
				$("#alertSelect").addClass('invalid-feedback');
				$("#alertSelect").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				select = expRegular('frm',$("#inpuEstadoCivil").val());
				if(select != 0){
                    $("#inpuEstadoCivil").removeClass("is-invalid");
                    $("#alertSelect").removeClass("invalid-feedback");
					$("#inpuEstadoCivil").addClass('is-valid');
					$("#alertSelect").addClass('valid-feedback');
					$("#alertSelect").html('CORRECTO!!');
				}else{
					$("#inpuEstadoCivil").addClass('is-invalid');
					$("#alertSelect").addClass('invalid-feedback');
					$("#alertSelect").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            /* validamos telefono */
            if(cel == "empty"){
				$("#inpuCelular").addClass('is-invalid');
				$("#alertTel").addClass('invalid-feedback');
				$("#alertTel").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
                cel = expRegular('phone',$("#inpuCelular").val());
                contenido = $("#inpuCelular").val().length;
				if(cel != 0){
                    if(contenido > 9 && contenido < 12){
                        $("#inpuCelular").removeClass("is-invalid");
                        $("#alertTel").removeClass("invalid-feedback");
                        $("#inpuCelular").addClass('is-valid');
                        $("#alertTel").addClass('valid-feedback');
                        $("#alertTel").html('CORRECTO!!');
                    }else{
                        $("#inpuCelular").addClass('is-invalid');
                        $("#alertTel").addClass('invalid-feedback');
                        $("#alertTel").html('La nueva marcacion es de 10 digitos y extrangero 12');
                    }
				}else{
					$("#inpuCelular").addClass('is-invalid');
					$("#alertTel").addClass('invalid-feedback');
					$("#alertTel").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            /* validamos correo */
            if(mail == "empty"){
				$("#inpuCorreo").addClass('is-invalid');
				$("#error").addClass('invalid-feedback');
				$("#error").html('CAMPO OBLIGATORIO');
				e.preventDefault();
            }
            /* validamos redsocial */
            if(rd == "empty"){
                $("#inpuRedSocial").addClass('is-invalid');
                $("#alertRS").addClass('invalid-feedback');
                $("#alertRS").html('CAMPO OBLIGATORIO');
                e.preventDefault();
            }else{
                rd = expRegular('nombre',$("#inpuRedSocial").val());
                if(rd != 0){
                    $("#inpuRedSocial").removeClass("is-invalid");
                    $("#alertRS").removeClass("invalid-feedback");
                    $("#inpuRedSocial").addClass('is-valid');
                    $("#alertRS").addClass('valid-feedback');
                    $("#alertRS").html('CORRECTO!!');
                }else{
                    $("#inpuRedSocial").addClass('is-invalid');
                    $("#alertRS").addClass('invalid-feedback');
                    $("#alertRS").html('FORMATO INVALIDO');
                    e.preventDefault();
                }
            }

            /* validamos estado */
            if(selectEdo == "empty"){
				$("#inpuEstado").addClass('is-invalid');
				$("#alertSelectEdo").addClass('invalid-feedback');
				$("#alertSelectEdo").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				selectEdo = $.isNumeric($("#inpuEstado").val());
				if(selectEdo){
                    $("#inpuEstado").removeClass("is-invalid");
                    $("#alertSelectEdo").removeClass("invalid-feedback");
					$("#inpuEstado").addClass('is-valid');
					$("#alertSelectEdo").addClass('valid-feedback');
					$("#alertSelectEdo").html('CORRECTO!!');
				}else{
					$("#inpuEstado").addClass('is-invalid');
					$("#alertSelectEdo").addClass('invalid-feedback');
					$("#alertSelectEdo").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }

            /* validamos Municipio */
            if(selectMun == "empty"){
				$("#inpuMunicipio").addClass('is-invalid');
				$("#alertSelectMun").addClass('invalid-feedback');
				$("#alertSelectMun").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				selectMun = $.isNumeric($("#inpuMunicipio").val());
				if(selectMun){
                    $("#inpuMunicipio").removeClass("is-invalid");
                    $("#alertSelectMun").removeClass("invalid-feedback");
					$("#inpuMunicipio").addClass('is-valid');
					$("#alertSelectMun").addClass('valid-feedback');
					$("#alertSelectMun").html('CORRECTO!!');
				}else{
					$("#inpuMunicipio").addClass('is-invalid');
					$("#alertSelectMun").addClass('invalid-feedback');
					$("#alertSelectMun").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }

            /* validamos Codigo postal */
            if(cp == "empty"){
				$("#inpuCP").addClass('is-invalid');
				$("#alertCp").addClass('invalid-feedback');
				$("#alertCp").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
                cp = expRegular('phone',$("#inpuCP").val());
                contenido = $("#inpuCP").val().length;
				if(cp != 0){
                    if(contenido == 5){
                        $("#inpuCP").removeClass("is-invalid");
                        $("#alertCp").removeClass("invalid-feedback");
                        $("#inpuCP").addClass('is-valid');
                        $("#alertCp").addClass('valid-feedback');
                        $("#alertCp").html('CORRECTO!!');
                    }else{
                        $("#inpuCP").addClass('is-invalid');
                        $("#alertCp").addClass('invalid-feedback');
                        $("#alertCp").html('El Codigo Postal es de 5 digitos');
                    }
				}else{
					$("#inpuCP").addClass('is-invalid');
					$("#alertCp").addClass('invalid-feedback');
					$("#alertCp").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            /* validamos Colonia */
            if(colonia == "empty"){
				$("#inpuColonia").addClass('is-invalid');
				$("#alertColonia").addClass('invalid-feedback');
				$("#alertColonia").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				colonia = expRegular('frm',$("#inpuColonia").val());
				if(colonia != 0){
                    $("#inpuColonia").removeClass("is-invalid");
                    $("#alertColonia").removeClass("invalid-feedback");
					$("#inpuColonia").addClass('is-valid');
					$("#alertColonia").addClass('valid-feedback');
					$("#alertColonia").html('CORRECTO!!');
				}else{
					$("#inpuColonia").addClass('is-invalid');
					$("#alertColonia").addClass('invalid-feedback');
					$("#alertColonia").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            /* validamos Calle */
            if(calle == "empty"){
				$("#inpuCalle").addClass('is-invalid');
				$("#alertCalle").addClass('invalid-feedback');
				$("#alertCalle").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				calle = expRegular('dir',$("#inpuCalle").val());
				if(calle != 0){
                    $("#inpuCalle").removeClass("is-invalid");
                    $("#alertCalle").removeClass("invalid-feedback");
					$("#inpuCalle").addClass('is-valid');
					$("#alertCalle").addClass('valid-feedback');
					$("#alertCalle").html('CORRECTO!!');
				}else{
					$("#inpuCalle").addClass('is-invalid');
					$("#alertCalle").addClass('invalid-feedback');
					$("#alertCalle").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            /* validamos Tel Emergencia */
            if(tel == "empty"){
				$("#inpuTelEmergencia").addClass('is-invalid');
				$("#alertEmergencia").addClass('invalid-feedback');
				$("#alertEmergencia").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				tel = expRegular('phone',$("#inpuTelEmergencia").val());
				if(tel != 0){
                    $("#inpuTelEmergencia").removeClass("is-invalid");
                    $("#alertEmergencia").removeClass("invalid-feedback");
					$("#inpuTelEmergencia").addClass('is-valid');
					$("#alertEmergencia").addClass('valid-feedback');
					$("#alertEmergencia").html('CORRECTO!!');
				}else{
					$("#inpuTelEmergencia").addClass('is-invalid');
					$("#alertEmergencia").addClass('invalid-feedback');
					$("#alertEmergencia").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
             /* validamos Parentesco*/
             if(parentesco == "empty"){
				$("#inpuParentesco").addClass('is-invalid');
				$("#alertParentesco").addClass('invalid-feedback');
				$("#alertParentesco").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				parentesco = expRegular('frm',$("#inpuParentesco").val());
				if(parentesco != 0){
                    $("#inpuParentesco").removeClass("is-invalid");
                    $("#alertParentesco").removeClass("invalid-feedback");
					$("#inpuParentesco").addClass('is-valid');
					$("#alertParentesco").addClass('valid-feedback');
					$("#alertParentesco").html('CORRECTO!!');
				}else{
					$("#inpuParentesco").addClass('is-invalid');
					$("#alertParentesco").addClass('invalid-feedback');
					$("#alertParentesco").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            /* validamos Nombre Recomienda*/
            if(recomienda == "empty"){
				$("#inpuNombreRecomienda").addClass('is-invalid');
				$("#alertrecomienda").addClass('invalid-feedback');
				$("#alertrecomienda").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				recomienda = expRegular('frm',$("#inpuNombreRecomienda").val());
				if(recomienda != 0){
                    $("#inpuNombreRecomienda").removeClass("is-invalid");
                    $("#alertrecomienda").removeClass("invalid-feedback");
					$("#inpuNombreRecomienda").addClass('is-valid');
					$("#alertrecomienda").addClass('valid-feedback');
					$("#alertrecomienda").html('CORRECTO!!');
				}else{
					$("#inpuNombreRecomienda").addClass('is-invalid');
					$("#alertrecomienda").addClass('invalid-feedback');
					$("#alertrecomienda").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            /* validamos Motivo*/
            if(motivo == "empty"){
				$("#inpuMotivo").addClass('is-invalid');
				$("#alertMotivo").addClass('invalid-feedback');
				$("#alertMotivo").html('CAMPO OBLIGATORIO');
				e.preventDefault();
			}else{
				motivo = expRegular('messagge',$("#inpuMotivo").val());
				if(motivo != 0){
                    $("#inpuMotivo").removeClass("is-invalid");
                    $("#alertMotivo").removeClass("invalid-feedback");
					$("#inpuMotivo").addClass('is-valid');
					$("#alertMotivo").addClass('valid-feedback');
					$("#alertMotivo").html('CORRECTO!!');
				}else{
					$("#inpuMotivo").addClass('is-invalid');
					$("#alertMotivo").addClass('invalid-feedback');
					$("#alertMotivo").html('FORMATO INVALIDO');
					e.preventDefault();	
				}
            }
            /* si esta seleccionado en si en medicamento */
            if(selectMedicamento == 1){
                /* validamos Motivo*/
                if(medicamento == "empty"){
                    $("#inputNombreMedicamento").addClass('is-invalid');
                    $("#alertMedicamneto").addClass('invalid-feedback');
                    $("#alertMedicamneto").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    medicamento = expRegular('messagge',$("#inputNombreMedicamento").val());
                    if(medicamento != 0){
                        $("#inputNombreMedicamento").removeClass("is-invalid");
                        $("#alertMedicamneto").removeClass("invalid-feedback");
                        $("#inputNombreMedicamento").addClass('is-valid');
                        $("#alertMedicamneto").addClass('valid-feedback');
                        $("#alertMedicamneto").html('CORRECTO!!');
                    }else{
                        $("#inputNombreMedicamento").addClass('is-invalid');
                        $("#alertMedicamneto").addClass('invalid-feedback');
                        $("#alertMedicamneto").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            si esta seleccionado Diabetes Antecedente */
            if($("#checkDeabetes").is(':checked')){
                /* validamos Motivo*/
                if(DeabetesParentesco == "empty"){
                    $("#checkDeabetesParentesco").addClass('is-invalid');
                    $("#alertDiabetesAntecedente").addClass('invalid-feedback');
                    $("#alertDiabetesAntecedente").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    DeabetesParentesco = expRegular('messagge',$("#checkDeabetesParentesco").val());
                    if(DeabetesParentesco != 0){
                        $("#checkDeabetesParentesco").removeClass("is-invalid");
                        $("#alertDiabetesAntecedente").removeClass("invalid-feedback");
                        $("#checkDeabetesParentesco").addClass('is-valid');
                        $("#alertDiabetesAntecedente").addClass('valid-feedback');
                        $("#alertDiabetesAntecedente").html('CORRECTO!!');
                    }else{
                        $("#checkDeabetesParentesco").addClass('is-invalid');
                        $("#alertDiabetesAntecedente").addClass('invalid-feedback');
                        $("#alertDiabetesAntecedente").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado Hipertension antecedente */
            if($("#checkHipertension").is(':checked')){
                /* validamos Motivo*/
                if(HipertensionParentesco == "empty"){
                    $("#checkHipertensionParentesco").addClass('is-invalid');
                    $("#alertHipertensionAntecedente").addClass('invalid-feedback');
                    $("#alertHipertensionAntecedente").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    HipertensionParentesco = expRegular('messagge',$("#checkHipertensionParentesco").val());
                    if(HipertensionParentesco != 0){
                        $("#checkHipertensionParentesco").removeClass("is-invalid");
                        $("#alertHipertensionAntecedente").removeClass("invalid-feedback");
                        $("#checkHipertensionParentesco").addClass('is-valid');
                        $("#alertHipertensionAntecedente").addClass('valid-feedback');
                        $("#alertHipertensionAntecedente").html('CORRECTO!!');
                    }else{
                        $("#checkHipertensionParentesco").addClass('is-invalid');
                        $("#alertHipertensionAntecedente").addClass('invalid-feedback');
                        $("#alertHipertensionAntecedente").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado Asma Antecedente*/
            if($("#checkAsma").is(':checked')){
                /* validamos Motivo*/
                if(asmaParentesco == "empty"){
                    $("#checkAsmaParntesco").addClass('is-invalid');
                    $("#alertAsmaAntecedente").addClass('invalid-feedback');
                    $("#alertAsmaAntecedente").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    asmaParentesco = expRegular('messagge',$("#checkAsmaParntesco").val());
                    if(asmaParentesco != 0){
                        $("#checkAsmaParntesco").removeClass("is-invalid");
                        $("#alertAsmaAntecedente").removeClass("invalid-feedback");
                        $("#checkAsmaParntesco").addClass('is-valid');
                        $("#alertAsmaAntecedente").addClass('valid-feedback');
                        $("#alertAsmaAntecedente").html('CORRECTO!!');
                    }else{
                        $("#checkAsmaParntesco").addClass('is-invalid');
                        $("#alertAsmaAntecedente").addClass('invalid-feedback');
                        $("#alertAsmaAntecedente").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado Cancer Antecedente*/
            if($("#checkCancer").is(':checked')){
                /* validamos Motivo*/
                if(cancerParentesco == "empty"){
                    $("#checkCancerParntesco").addClass('is-invalid');
                    $("#alertCancerAntecedente").addClass('invalid-feedback');
                    $("#alertCancerAntecedente").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    DeabetesParentesco = expRegular('messagge',$("#checkCancerParntesco").val());
                    if(DeabetesParentesco != 0){
                        $("#checkCancerParntesco").removeClass("is-invalid");
                        $("#alertCancerAntecedente").removeClass("invalid-feedback");
                        $("#checkCancerParntesco").addClass('is-valid');
                        $("#alertCancerAntecedente").addClass('valid-feedback');
                        $("#alertCancerAntecedente").html('CORRECTO!!');
                    }else{
                        $("#checkCancerParntesco").addClass('is-invalid');
                        $("#alertCancerAntecedente").addClass('invalid-feedback');
                        $("#alertCancerAntecedente").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado Alergias Antecedente*/
            if($("#checkAlergias").is(':checked')){
                /* validamos Motivo*/
                if(alergiasParentesco == "empty"){
                    $("#checkAlergiasParntesco").addClass('is-invalid');
                    $("#alertAlergiasAntecedente").addClass('invalid-feedback');
                    $("#alertAlergiasAntecedente").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    alergiasParentesco = expRegular('messagge',$("#checkAlergiasParntesco").val());
                    if(alergiasParentesco != 0){
                        $("#checkAlergiasParntesco").removeClass("is-invalid");
                        $("#alertAlergiasAntecedente").removeClass("invalid-feedback");
                        $("#checkAlergiasParntesco").addClass('is-valid');
                        $("#alertAlergiasAntecedente").addClass('valid-feedback');
                        $("#alertAlergiasAntecedente").html('CORRECTO!!');
                    }else{
                        $("#checkAlergiasParntesco").addClass('is-invalid');
                        $("#alertAlergiasAntecedente").addClass('invalid-feedback');
                        $("#alertAlergiasAntecedente").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado en si en medicamento otrosActual*/
            if($("#checkOtrosFamilia").is(':checked')){
                /* validamos Motivo*/
                if(otrosParentescoIndique == "empty"){
                    $("#otroIndiquetxtHide").addClass('is-invalid');
                    $("#alertOtrosIndiqueAntecedente").addClass('invalid-feedback');
                    $("#alertOtrosIndiqueAntecedente").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    if(otrosParentesco == "empty"){
                        $("#otroIndiquetxtParentesco").addClass('is-invalid');
                        $("#alertOtrosParentescoAntecedente").addClass('invalid-feedback');
                        $("#alertOtrosParentescoAntecedente").html('CAMPO OBLIGATORIO');
                        e.preventDefault();
                    }else{
                        otrosParentesco = expRegular('messagge',$("#otroIndiquetxtParentesco").val());
                        if(otrosParentesco != 0){
                            $("#otroIndiquetxtParentesco").removeClass("is-invalid");
                            $("#alertOtrosParentescoAntecedente").removeClass("invalid-feedback");
                            $("#otroIndiquetxtParentesco").addClass('is-valid');
                            $("#alertOtrosParentescoAntecedente").addClass('valid-feedback');
                            $("#alertOtrosParentescoAntecedente").html('CORRECTO!!');
                        }else{
                            $("#otroIndiquetxtParentesco").addClass('is-invalid');
                            $("#alertOtrosParentescoAntecedente").addClass('invalid-feedback');
                            $("#alertOtrosParentescoAntecedente").html('FORMATO INVALIDO');
                            e.preventDefault();	

                        }
                    }
                    otrosParentescoIndique = expRegular('messagge',$("#otroIndiquetxtHide").val());
                    if(otrosParentescoIndique != 0){
                        $("#otroIndiquetxtHide").removeClass("is-invalid");
                        $("#alertOtrosIndiqueAntecedente").removeClass("invalid-feedback");
                        $("#otroIndiquetxtHide").addClass('is-valid');
                        $("#alertOtrosIndiqueAntecedente").addClass('valid-feedback');
                        $("#alertOtrosIndiqueAntecedente").html('CORRECTO!!');
                    }else{
                        $("#otroIndiquetxtHide").addClass('is-invalid');
                        $("#alertOtrosIndiqueAntecedente").addClass('invalid-feedback');
                        $("#alertOtrosIndiqueAntecedente").html('FORMATO INVALIDO');
                        e.preventDefault();	

                    }
                }
            }
            /* //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
             si esta seleccionado Diabetes Personal*/
            if($("#checkDeabetesActual").is(':checked')){
                /* validamos Motivo*/
                if(DeabetesPersonal == "empty"){
                    $("#checkDeabetesActualParentesco").addClass('is-invalid');
                    $("#alertDiabetesPersonal").addClass('invalid-feedback');
                    $("#alertDiabetesPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    DeabetesPersonal = expRegular('messagge',$("#checkDeabetesActualParentesco").val());
                    if(DeabetesPersonal != 0){
                        $("#checkDeabetesActualParentesco").removeClass("is-invalid");
                        $("#alertDiabetesPersonal").removeClass("invalid-feedback");
                        $("#checkDeabetesActualParentesco").addClass('is-valid');
                        $("#alertDiabetesPersonal").addClass('valid-feedback');
                        $("#alertDiabetesPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkDeabetesActualParentesco").addClass('is-invalid');
                        $("#alertDiabetesPersonal").addClass('invalid-feedback');
                        $("#alertDiabetesPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado Hipertension antecedente */
            if($("#checkHipertensionActual").is(':checked')){
                /* validamos Motivo*/
                if(HipertensionPersonal == "empty"){
                    $("#checkHipertensionActualParentesco").addClass('is-invalid');
                    $("#alertHiperPersonal").addClass('invalid-feedback');
                    $("#alertHiperPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    HipertensionPersonal = expRegular('messagge',$("#checkHipertensionActualParentesco").val());
                    if(HipertensionPersonal != 0){
                        $("#checkHipertensionActualParentesco").removeClass("is-invalid");
                        $("#alertHiperPersonal").removeClass("invalid-feedback");
                        $("#checkHipertensionActualParentesco").addClass('is-valid');
                        $("#alertHiperPersonal").addClass('valid-feedback');
                        $("#alertHiperPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkHipertensionActualParentesco").addClass('is-invalid');
                        $("#alertHiperPersonal").addClass('invalid-feedback');
                        $("#alertHiperPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado Asma Antecedente*/
            if($("#checkAsmaActual").is(':checked')){
                /* validamos Motivo*/
                if(AsmaPersonal == "empty"){
                    $("#checkAsmaActualParentesco").addClass('is-invalid');
                    $("#alertAsmPersonal").addClass('invalid-feedback');
                    $("#alertAsmPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    AsmaPersonal = expRegular('messagge',$("#checkAsmaActualParentesco").val());
                    if(AsmaPersonal != 0){
                        $("#checkAsmaActualParentesco").removeClass("is-invalid");
                        $("#alertAsmPersonal").removeClass("invalid-feedback");
                        $("#checkAsmaActualParentesco").addClass('is-valid');
                        $("#alertAsmPersonal").addClass('valid-feedback');
                        $("#alertAsmPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkAsmaActualParentesco").addClass('is-invalid');
                        $("#alertAsmPersonal").addClass('invalid-feedback');
                        $("#alertAsmPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado Cancer Antecedente*/
            if($("#checkCancerActual").is(':checked')){
                /* validamos Motivo*/
                if(CancerPersonal == "empty"){
                    $("#checkCancerActualParentesco").addClass('is-invalid');
                    $("#alertCanPersonal").addClass('invalid-feedback');
                    $("#alertCanPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    CancerPersonal = expRegular('messagge',$("#checkCancerActualParentesco").val());
                    if(CancerPersonal != 0){
                        $("#checkCancerActualParentesco").removeClass("is-invalid");
                        $("#alertCanPersonal").removeClass("invalid-feedback");
                        $("#checkCancerActualParentesco").addClass('is-valid');
                        $("#alertCanPersonal").addClass('valid-feedback');
                        $("#alertCanPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkCancerActualParentesco").addClass('is-invalid');
                        $("#alertCanPersonal").addClass('invalid-feedback');
                        $("#alertCanPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado Alergias Antecedente*/
            if($("#checkAlergiasActual").is(':checked')){
                /* validamos Motivo*/
                if(AlergiasPersonal == "empty"){
                    $("#checkAlergiasActualParentesco").addClass('is-invalid');
                    $("#alertAlergPersonal").addClass('invalid-feedback');
                    $("#alertAlergPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    AlergiasPersonal = expRegular('messagge',$("#checkAlergiasActualParentesco").val());
                    if(AlergiasPersonal != 0){
                        $("#checkAlergiasActualParentesco").removeClass("is-invalid");
                        $("#alertAlergPersonal").removeClass("invalid-feedback");
                        $("#checkAlergiasActualParentesco").addClass('is-valid');
                        $("#alertAlergPersonal").addClass('valid-feedback');
                        $("#alertAlergPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkAlergiasActualParentesco").addClass('is-invalid');
                        $("#alertAlergPersonal").addClass('invalid-feedback');
                        $("#alertAlergPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado Dislipidemia Antecedente */
            if($("#checkDislipidemiasActual").is(':checked')){
                /* validamos Motivo*/
                if(DislipidemiasPersonal == "empty"){
                    $("#checkDislipidemiasActualParentesco").addClass('is-invalid');
                    $("#alertDisliPersonal").addClass('invalid-feedback');
                    $("#alertDisliPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    DislipidemiasPersonal = expRegular('messagge',$("#checkDislipidemiasActualParentesco").val());
                    if(DislipidemiasPersonal != 0){
                        $("#checkDislipidemiasActualParentesco").removeClass("is-invalid");
                        $("#alertDisliPersonal").removeClass("invalid-feedback");
                        $("#checkDislipidemiasActualParentesco").addClass('is-valid');
                        $("#alertDisliPersonal").addClass('valid-feedback');
                        $("#alertDisliPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkDislipidemiasActualParentesco").addClass('is-invalid');
                        $("#alertDisliPersonal").addClass('invalid-feedback');
                        $("#alertDisliPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }
            /* si esta seleccionado Hepaticos Antecedente */
            if($("#checkHepaticosActual").is(':checked')){
                /* validamos Motivo*/
                if(HepaticosPersonal == "empty"){
                    $("#checkHepaticosActualParentesco").addClass('is-invalid');
                    $("#alertHepatiPersonal").addClass('invalid-feedback');
                    $("#alertHepatiPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    HepaticosPersonal = expRegular('messagge',$("#checkHepaticosActualParentesco").val());
                    if(HepaticosPersonal != 0){
                        $("#checkHepaticosActualParentesco").removeClass("is-invalid");
                        $("#alertHepatiPersonal").removeClass("invalid-feedback");
                        $("#checkHepaticosActualParentesco").addClass('is-valid');
                        $("#alertHepatiPersonal").addClass('valid-feedback');
                        $("#alertHepatiPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkHepaticosActualParentesco").addClass('is-invalid');
                        $("#alertHepatiPersonal").addClass('invalid-feedback');
                        $("#alertHepatiPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }
            /* si esta seleccionado Renales Antecedente*/
            if($("#checkRenalesActual").is(':checked')){
                /* validamos Motivo*/
                if(RenalesPersonal == "empty"){
                    $("#checkRenalesActualParentesco").addClass('is-invalid');
                    $("#alertRenalesPersonal").addClass('invalid-feedback');
                    $("#alertRenalesPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    RenalesPersonal = expRegular('messagge',$("#checkRenalesActualParentesco").val());
                    if(RenalesPersonal != 0){
                        $("#checkRenalesActualParentesco").removeClass("is-invalid");
                        $("#alertRenalesPersonal").removeClass("invalid-feedback");
                        $("#checkRenalesActualParentesco").addClass('is-valid');
                        $("#alertRenalesPersonal").addClass('valid-feedback');
                        $("#alertRenalesPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkRenalesActualParentesco").addClass('is-invalid');
                        $("#alertRenalesPersonal").addClass('invalid-feedback');
                        $("#alertRenalesPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }
            /* si esta seleccionado Urinarios Antecedente*/
            if($("#checkUrinariosActual").is(':checked')){
                /* validamos Motivo*/
                if(UrinariosPersonal == "empty"){
                    $("#checkUrinariosActualParentesco").addClass('is-invalid');
                    $("#alertUrinariosPersonal").addClass('invalid-feedback');
                    $("#alertUrinariosPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    UrinariosPersonal = expRegular('messagge',$("#checkUrinariosActualParentesco").val());
                    if(UrinariosPersonal != 0){
                        $("#checkUrinariosActualParentesco").removeClass("is-invalid");
                        $("#alertUrinariosPersonal").removeClass("invalid-feedback");
                        $("#checkUrinariosActualParentesco").addClass('is-valid');
                        $("#alertUrinariosPersonal").addClass('valid-feedback');
                        $("#alertUrinariosPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkUrinariosActualParentesco").addClass('is-invalid');
                        $("#alertUrinariosPersonal").addClass('invalid-feedback');
                        $("#alertUrinariosPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }
            /* si esta seleccionado Prostata Antecedente*/
            if($("#checkProstataActual").is(':checked')){
                /* validamos Motivo*/
                if(ProstataPersonal == "empty"){
                    $("#checkProstataActualParentesco").addClass('is-invalid');
                    $("#alertProstataPersonal").addClass('invalid-feedback');
                    $("#alertProstataPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    ProstataPersonal = expRegular('messagge',$("#checkProstataActualParentesco").val());
                    if(ProstataPersonal != 0){
                        $("#checkProstataActualParentesco").removeClass("is-invalid");
                        $("#alertProstataPersonal").removeClass("invalid-feedback");
                        $("#checkProstataActualParentesco").addClass('is-valid');
                        $("#alertProstataPersonal").addClass('valid-feedback');
                        $("#alertProstataPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkProstataActualParentesco").addClass('is-invalid');
                        $("#alertProstataPersonal").addClass('invalid-feedback');
                        $("#alertProstataPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }
            /* si esta seleccionado Disfuncion herectil Antecedente */
            if($("#checkDisfusionActual").is(':checked')){
                /* validamos Motivo*/
                if(DisfusionPersonal == "empty"){
                    $("#checkDisfusionActualParentesco").addClass('is-invalid');
                    $("#alertDisfuncionPersonal").addClass('invalid-feedback');
                    $("#alertDisfuncionPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    DisfusionPersonal = expRegular('messagge',$("#checkDisfusionActualParentesco").val());
                    if(DisfusionPersonal != 0){
                        $("#checkDisfusionActualParentesco").removeClass("is-invalid");
                        $("#alertDisfuncionPersonal").removeClass("invalid-feedback");
                        $("#checkDisfusionActualParentesco").addClass('is-valid');
                        $("#alertDisfuncionPersonal").addClass('valid-feedback');
                        $("#alertDisfuncionPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkDisfusionActualParentesco").addClass('is-invalid');
                        $("#alertDisfuncionPersonal").addClass('invalid-feedback');
                        $("#alertDisfuncionPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }
            /* si esta seleccionado Hipotiroidismo Antecedente*/
            if($("#checkHipotiroidismoActual").is(':checked')){
                /* validamos Motivo*/
                if(HipotiroidismoPersonal == "empty"){
                    $("#checkHipotiroidismoParentesco").addClass('is-invalid');
                    $("#alertHipoPersonal").addClass('invalid-feedback');
                    $("#alertHipoPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    HipotiroidismoPersonal = expRegular('messagge',$("#checkHipotiroidismoParentesco").val());
                    if(HipotiroidismoPersonal != 0){
                        $("#checkHipotiroidismoParentesco").removeClass("is-invalid");
                        $("#alertHipoPersonal").removeClass("invalid-feedback");
                        $("#checkHipotiroidismoParentesco").addClass('is-valid');
                        $("#alertHipoPersonal").addClass('valid-feedback');
                        $("#alertHipoPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkHipotiroidismoParentesco").addClass('is-invalid');
                        $("#alertHipoPersonal").addClass('invalid-feedback');
                        $("#alertHipoPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }
            /* si esta seleccionado Hipertiroidismo Antecedente*/
            if($("#checkHipertiroidismoActual").is(':checked')){
                /* validamos Motivo*/
                if(HipertiroidismoPersonal == "empty"){
                    $("#checkHipertiroidismoParentesco").addClass('is-invalid');
                    $("#alertHipertiroidismoPersonal").addClass('invalid-feedback');
                    $("#alertHipertiroidismoPersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    HipertiroidismoPersonal = expRegular('messagge',$("#checkHipertiroidismoParentesco").val());
                    if(HipertiroidismoPersonal != 0){
                        $("#checkHipertiroidismoParentesco").removeClass("is-invalid");
                        $("#alertHipertiroidismoPersonal").removeClass("invalid-feedback");
                        $("#checkHipertiroidismoParentesco").addClass('is-valid');
                        $("#alertHipertiroidismoPersonal").addClass('valid-feedback');
                        $("#alertHipertiroidismoPersonal").html('CORRECTO!!');
                    }else{
                        $("#checkHipertiroidismoParentesco").addClass('is-invalid');
                        $("#alertHipertiroidismoPersonal").addClass('invalid-feedback');
                        $("#alertHipertiroidismoPersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }
            /* si esta seleccionado Sindrome de ovario polisticos Antecedente*/
            if($("#checkSindromeActual").is(':checked')){
                /* validamos Motivo*/
                if(SindromePersonal == "empty"){
                    $("#checkSindromeParentesco").addClass('is-invalid');
                    $("#alertSindromePersonal").addClass('invalid-feedback');
                    $("#alertSindromePersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    SindromePersonal = expRegular('messagge',$("#checkSindromeParentesco").val());
                    if(SindromePersonal != 0){
                        $("#checkSindromeParentesco").removeClass("is-invalid");
                        $("#alertSindromePersonal").removeClass("invalid-feedback");
                        $("#checkSindromeParentesco").addClass('is-valid');
                        $("#alertSindromePersonal").addClass('valid-feedback');
                        $("#alertSindromePersonal").html('CORRECTO!!');
                    }else{
                        $("#checkSindromeParentesco").addClass('is-invalid');
                        $("#alertSindromePersonal").addClass('invalid-feedback');
                        $("#alertSindromePersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }

            /* si esta seleccionado en si en medicamento otrosActual*/
            if($('#otroActual').is(':checked')){
                /* validamos Motivo*/
                if(otroPersonal == "empty"){
                    $("#hideOtroActual").addClass('is-invalid');
                    $("#alertotroHidePersonal").addClass('invalid-feedback');
                    $("#alertotroHidePersonal").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    if(otroTratamientoPersonal == "empty"){
                        $("#otrotratamientoActual").addClass('is-invalid');
                        $("#alertTratamientoPersonal").addClass('invalid-feedback');
                        $("#alertTratamientoPersonal").html('CAMPO OBLIGATORIO');
                        e.preventDefault();
                    }else{
                        otroTratamientoPersonal = expRegular('messagge',$("#otrotratamientoActual").val());
                        if(otroTratamientoPersonal != 0){
                            $("#otrotratamientoActual").removeClass("is-invalid");
                            $("#alertTratamientoPersonal").removeClass("invalid-feedback");
                            $("#otrotratamientoActual").addClass('is-valid');
                            $("#alertTratamientoPersonal").addClass('valid-feedback');
                            $("#alertTratamientoPersonal").html('CORRECTO!!');
                        }else{
                            $("#otrotratamientoActual").addClass('is-invalid');
                            $("#alertTratamientoPersonal").addClass('invalid-feedback');
                            $("#alertTratamientoPersonal").html('FORMATO INVALIDO');
                            e.preventDefault();	

                        }
                    }
                    otroPersonal = expRegular('messagge',$("#hideOtroActual").val());
                    if(otroPersonal != 0){
                        $("#hideOtroActual").removeClass("is-invalid");
                        $("#alertotroHidePersonal").removeClass("invalid-feedback");
                        $("#hideOtroActual").addClass('is-valid');
                        $("#alertotroHidePersonal").addClass('valid-feedback');
                        $("#alertotroHidePersonal").html('CORRECTO!!');
                    }else{
                        $("#hideOtroActual").addClass('is-invalid');
                        $("#alertotroHidePersonal").addClass('invalid-feedback');
                        $("#alertotroHidePersonal").html('FORMATO INVALIDO');
                        e.preventDefault();	

                    }
                }
            }

            /* si esta seleccionado en si en operaciones */
            if(cirugia == 1){
                /* validamos Motivo*/
                if(cirugiaName1 == "empty"){
                    $("#idNameOperacionuno").addClass('is-invalid');
                    $("#alertOperacionNameUno").addClass('invalid-feedback');
                    $("#alertOperacionNameUno").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    medicamento = expRegular('messagge',$("#idNameOperacionuno").val());
                    if(medicamento != 0){
                        $("#idNameOperacionuno").removeClass("is-invalid");
                        $("#alertOperacionNameUno").removeClass("invalid-feedback");
                        $("#idNameOperacionuno").addClass('is-valid');
                        $("#alertOperacionNameUno").addClass('valid-feedback');
                        $("#alertOperacionNameUno").html('CORRECTO!!');
                    }else{
                        $("#idNameOperacionuno").addClass('is-invalid');
                        $("#alertOperacionNameUno").addClass('invalid-feedback');
                        $("#alertOperacionNameUno").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }

                    if(cirugiaFecha1 == "empty"){
                        $("#idFechaOperacionuno").addClass('is-invalid');
                        $("#alertOperacionFechaUno").addClass('invalid-feedback');
                        $("#alertOperacionFechaUno").html('CAMPO OBLIGATORIO');
                        e.preventDefault();
                    }else{
                        FechaOperacionUno = expRegular('dateSlash',$('#idFechaOperacionuno').val());
                        if(FechaOperacionUno != 0){
                            $("#idFechaOperacionuno").removeClass("is-invalid");
                            $("#alertOperacionFechaUno").removeClass("invalid-feedback");
                            $("#idFechaOperacionuno").addClass('is-valid');
                            $("#alertOperacionFechaUno").addClass('valid-feedback');
                            $("#alertOperacionFechaUno").html('CORRECTO!!');
                        }else{
                            $("#idFechaOperacionuno").addClass('is-invalid');
                            $("#alertOperacionFechaUno").addClass('invalid-feedback');
                            $("#alertOperacionFechaUno").html('FORMATO INVALIDO');
                            e.preventDefault();	
                        }
                    }
                }

                contenido = $("#idNameOperacionDos").val().length;
                if(contenido > 0){
                    var Operacion = expRegular('messagge',$("#idNameOperacionDos").val());
                    if(Operacion != 0){
                        $("#idNameOperacionDos").removeClass("is-invalid");
                        $("#alertOperacionNameDos").removeClass("invalid-feedback");
                        $("#idNameOperacionDos").addClass('is-valid');
                        $("#alertOperacionNameDos").addClass('valid-feedback');
                        $("#alertOperacionNameDos").html('CORRECTO!!');
                        var fecha =  expRegular('dateSlash',$('#idFechaOperacionDos').val());
                        if(fecha != 0){
                            $("#idFechaOperacionDos").removeClass("is-invalid");
                            $("#alertOperacionFechaDos").removeClass("invalid-feedback");
                            $("#idFechaOperacionDos").addClass('is-valid');
                            $("#alertOperacionFechaDos").addClass('valid-feedback');
                            $("#alertOperacionFechaDos").html('CORRECTO!!');
                        }else{
                            $("#idFechaOperacionDos").addClass('is-invalid');
                            $("#alertOperacionFechaDos").addClass('invalid-feedback');
                            $("#alertOperacionFechaDos").html('FORMATO INVALIDO');
                            e.preventDefault();	
                        }                    
                     
                    }else{
                        $("#idNameOperacionDos").addClass('is-invalid');
                        $("#alertOperacionNameDos").addClass('invalid-feedback');
                        $("#alertOperacionNameDos").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }

                contenido = $("#idNameOperacionTres").val().length;
                if(contenido > 0){
                    var Operacion = expRegular('messagge',$("#idNameOperacionTres").val());
                    if(Operacion != 0){
                        $("#idNameOperacionTres").removeClass("is-invalid");
                        $("#alertOperacionNameTres").removeClass("invalid-feedback");
                        $("#idNameOperacionTres").addClass('is-valid');
                        $("#alertOperacionNameTres").addClass('valid-feedback');
                        $("#alertOperacionNameTres").html('CORRECTO!!');
                        var fecha =  expRegular('dateSlash',$('#idFechaOperacionTres').val());
                        if(fecha != 0){
                            $("#idFechaOperacionTres").removeClass("is-invalid");
                            $("#alertOperacionFechaTres").removeClass("invalid-feedback");
                            $("#idFechaOperacionTres").addClass('is-valid');
                            $("#alertOperacionFechaTres").addClass('valid-feedback');
                            $("#alertOperacionFechaTres").html('CORRECTO!!');
                        }else{
                            $("#idFechaOperacionTres").addClass('is-invalid');
                            $("#alertOperacionFechaTres").addClass('invalid-feedback');
                            $("#alertOperacionFechaTres").html('FORMATO INVALIDO');
                            e.preventDefault();	
                        }                    
                     
                    }else{
                        $("#idNameOperacionDos").addClass('is-invalid');
                        $("#alertOperacionNameDos").addClass('invalid-feedback');
                        $("#alertOperacionNameDos").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }               
            }

            if(sexo == 'mujer'){
                if(embarazo == "empty"){
                    $("#unputEmbarazos").addClass('is-invalid');
                    $("#alertEmbarazo").addClass('invalid-feedback');
                    $("#alertEmbarazo").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    embarazo = expRegular('phone',$("#unputEmbarazos").val());
                    if(embarazo != 0){
                        $("#unputEmbarazos").removeClass("is-invalid");
                        $("#alertEmbarazo").removeClass("invalid-feedback");
                        $("#unputEmbarazos").addClass('is-valid');
                        $("#alertEmbarazo").addClass('valid-feedback');
                        $("#alertEmbarazo").html('CORRECTO!!');
                    }else{
                        $("#unputEmbarazos").addClass('is-invalid');
                        $("#alertEmbarazo").addClass('invalid-feedback');
                        $("#alertEmbarazo").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }

                if(nacTermino == "empty"){
                    $("#inputNacidosTermino").addClass('is-invalid');
                    $("#alertTermino").addClass('invalid-feedback');
                    $("#alertTermino").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    nacTermino = expRegular('phone',$("#inputNacidosTermino").val());
                    if(nacTermino != 0){
                        $("#inputNacidosTermino").removeClass("is-invalid");
                        $("#alertTermino").removeClass("invalid-feedback");
                        $("#inputNacidosTermino").addClass('is-valid');
                        $("#alertTermino").addClass('valid-feedback');
                        $("#alertTermino").html('CORRECTO!!');
                    }else{
                        $("#inputNacidosTermino").addClass('is-invalid');
                        $("#alertTermino").addClass('invalid-feedback');
                        $("#alertTermino").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
                if(nacPretermino == "empty"){
                    $("#inputNacidosPre").addClass('is-invalid');
                    $("#alertPreTermino").addClass('invalid-feedback');
                    $("#alertPreTermino").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    nacPretermino = expRegular('phone',$("#inputNacidosPre").val());
                    if(nacPretermino != 0){
                        $("#inputNacidosPre").removeClass("is-invalid");
                        $("#alertPreTermino").removeClass("invalid-feedback");
                        $("#inputNacidosPre").addClass('is-valid');
                        $("#alertPreTermino").addClass('valid-feedback');
                        $("#alertPreTermino").html('CORRECTO!!');
                    }else{
                        $("#inputNacidosPre").addClass('is-invalid');
                        $("#alertPreTermino").addClass('invalid-feedback');
                        $("#alertPreTermino").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
                /* fecha ultimo embarazo */
                var fechaultimoEmbarazo =  expRegular('dateSlash',$('#inputultimoEmbarazo').val());
                if(fechaultimoEmbarazo != 0){
                    $("#inputultimoEmbarazo").removeClass("is-invalid");
                    $("#alertpartoLast").removeClass("invalid-feedback");
                    $("#inputultimoEmbarazo").addClass('is-valid');
                    $("#alertpartoLast").addClass('valid-feedback');
                    $("#alertpartoLast").html('CORRECTO!!');
                }else{
                    $("#inputultimoEmbarazo").addClass('is-invalid');
                    $("#alertpartoLast").addClass('invalid-feedback');
                    $("#alertpartoLast").html('FORMATO INVALIDO');
                    e.preventDefault();	
                } 

                /* fecha de regla */
                var fechaRegla =  expRegular('dateSlash',$('#unputregla').val());
                if(fechaRegla != 0){
                    $("#unputregla").removeClass("is-invalid");
                    $("#alertRegla").removeClass("invalid-feedback");
                    $("#unputregla").addClass('is-valid');
                    $("#alertRegla").addClass('valid-feedback');
                    $("#alertRegla").html('CORRECTO!!');
                }else{
                    $("#unputregla").addClass('is-invalid');
                    $("#alertRegla").addClass('invalid-feedback');
                    $("#alertRegla").html('FORMATO INVALIDO');
                    e.preventDefault();	
                } 

                if(anticonceptivo == "empty"){
                    $("#MedotoAnticonceptivo").addClass('is-invalid');
                    $("#alertAnticonceptivo").addClass('invalid-feedback');
                    $("#alertAnticonceptivo").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    name = expRegular('frm',$("#MedotoAnticonceptivo").val());
                    if(name != 0){
                        $("#MedotoAnticonceptivo").removeClass("is-invalid");
                        $("#alertAnticonceptivo").removeClass("invalid-feedback");
                        $("#MedotoAnticonceptivo").addClass('is-valid');
                        $("#alertAnticonceptivo").addClass('valid-feedback');
                        $("#alertAnticonceptivo").html('CORRECTO!!');
                    }else{
                        $("#MedotoAnticonceptivo").addClass('is-invalid');
                        $("#alertAnticonceptivo").addClass('invalid-feedback');
                        $("#alertAnticonceptivo").html('FORMATO INVALIDO');
                        e.preventDefault();
                    }
                }
            }

            if(tratamiento == 1){
                if(txtTratamiento == "empty"){
                    $("#medicamentoAnterior").addClass('is-invalid');
                    $("#alertTratamientoControl").addClass('invalid-feedback');
                    $("#alertTratamientoControl").html('CAMPO OBLIGATORIO');
                    e.preventDefault();
                }else{
                    embarazo = expRegular('frm',$("#medicamentoAnterior").val());
                    if(embarazo != 0){
                        $("#medicamentoAnterior").removeClass("is-invalid");
                        $("#alertTratamientoControl").removeClass("invalid-feedback");
                        $("#medicamentoAnterior").addClass('is-valid');
                        $("#alertTratamientoControl").addClass('valid-feedback');
                        $("#alertTratamientoControl").html('CORRECTO!!');
                    }else{
                        $("#medicamentoAnterior").addClass('is-invalid');
                        $("#alertTratamientoControl").addClass('invalid-feedback');
                        $("#alertTratamientoControl").html('FORMATO INVALIDO');
                        e.preventDefault();	
                    }
                }
            }


        })
    });

     $("#enviarDatos").on('click',function(){
     
         $("#restaDinero").submit(function(e){    
                 var gasto = emptyInput($("#dineroAtomar").val());
                 var fisico = parseInt($("#quedaDinero").val());
                 var motivo = emptyInput($("#motivoGasto").val());
              
                 if(gasto == 'empty'){
                     if(isNaN(gasto)){
                         $("#dineroAtomar").addClass('is-invalid');
                         $("#alertadineroAtomar").addClass('invalid-feedback');
                         $("#alertadineroAtomar").html('INGRESA UN NUMERO VALIDO');		
                         return false;
                     }
                     e.preventDefault();
                 }else{
                     if(isNaN(gasto)){
                         $("#dineroAtomar").addClass('is-invalid');
                         $("#alertadineroAtomar").addClass('invalid-feedback');
                         $("#alertadineroAtomar").html('INGRESA UN NUMERO VALIDO');	
                         return false;
                     }
          
                     if(gasto > fisico){
                         $("#dineroAtomar").addClass('is-invalid');
                         $("#alertadineroAtomar").addClass('invalid-feedback');
                         $("#alertadineroAtomar").html('NO PUEDES TOMAR MAS DINERO DEL QUE HAY EN CAJA');
                         e.preventDefault();
                     }else{
                         $("#dineroAtomar").removeClass('is-invalid');
                         $("#alertadineroAtomar").removeClass('invalid-feedback');
                         $("#dineroAtomar").addClass('is-valid');
                         $("#alertadineroAtomar").addClass('valid-feedback');
                         $("#alertadineroAtomar").html('correcto');
                     }
                    }
                 if(motivo == 'empty'){
                     $("#motivoGasto").addClass('is-invalid');
                     $("#alertaMotivo").addClass('invalid-feedback');
                     $("#alertaMotivo").html('ESTE CAMPO ES OBLIGATORIO');
                     e.preventDefault();
                 }else{
                     var verifMotivo =  expRegular('messagge',motivo);
          
                     if(verifMotivo == 0){
                         $("#motivoGasto").addClass('is-invalid');
                         $("#alertaMotivo").addClass('invalid-feedback');
                         $("#alertaMotivo").html('NO SE PUEDEN USAR CARACTERES ESPECIALES');
                         e.preventDefault();
                     }else{
                         $("#motivoGasto").removeClass('is-invalid');
                         $("#alertaMotivo").removeClass('invalid-feedback');
                         $("#motivoGasto").addClass('is-valid');
                         $("#alertaMotivo").addClass('valid-feedback');
                         $("#alertaMotivo").html('correcto');
                     }
                 }
        
         });
     });
});