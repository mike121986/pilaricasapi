$(document).ready(function () {

	var path = window.location.href;
	var login = sessionStorage.getItem("logguin");
	var prevurl = sessionStorage.getItem("lasTUrl");
	// obtener el url
	if (path == getAbsolutePath() && login == "logueado") {
		var session = document.getElementById("frmLogginVerif");
		var attr = session.getAttribute("data-id");
		if (attr == 1) {
			Swal.fire({
				title: '¿Quieres salir de la aplicación?',
				showDenyButton: true,
				confirmButtonText: `Si Salir`,
				denyButtonText: `NO Quedarme`,
			}).then((result) => {
				/* Read more about isConfirmed, isDenied below */
				if (result.isConfirmed) {
					sessionStorage.removeItem("logguin");
					$(location).attr('href', getAbsolutePath() + 'Loggin/logout');
				} else if (result.isDenied) {
					sessionStorage.removeItem("lasTUrl");
					$(location).attr('href', prevurl);
				}
			})
		}
	}
	/* disabled div usuario */
	$(".permisoDoctor").attr('disabled', 'disabled');
	$('.dropdown-toggle').on("click", function () {
		$('.dropdown-menu').toggleClass('show');
	});
	/* dat picker al campo fecha*/
	$('#dateInicio').datepicker({
		uiLibrary: 'bootstrap4',
		format: 'dd-mm-yyyy'
	})
	/* datepiker rango de fechas */
	var today, config, datepicker;
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
		"order": [[groupColumn, 'asc']],
		"displayLength": 25,
		"drawCallback": function (settings) {
			var api = this.api();
			var rows = api.rows({ page: 'current' }).nodes();
			var last = null;

			api.column(groupColumn, { page: 'current' }).data().each(function (group, i) {
				if (last !== group) {
					$(rows).eq(i).before(
						'<tr class="group text-center" style="background-color: #E1E6E8;font-size: larger;text-transform: uppercase;"><td colspan="5">' + group + '</td></tr>'
					);

					last = group;
				}
			});
		}
	});

	// Order by the grouping
	$('#listAllPaciente tbody').on('click', 'tr.group', function () {
		var currentOrder = table.order()[0];
		if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
			table.order([groupColumn, 'desc']).draw();
		}
		else {
			table.order([groupColumn, 'asc']).draw();
		}
	});

	/* para mostrar tip en lo sbotones */
	$('[data-toggle="tooltip"]').tooltip();
	/*detectamos el select seleccionado*/
	$(".inpuEstado").on('change', function () {
		var dato = $(this).val();
		var id = new FormData();
		var selectMun = '';
		id.append("idEstado", dato);
		$.ajax({
			url: getAbsolutePath() + "views/layout/ajax.php",
			method: "POST",
			data: id,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function () {
				$('.spinnerWhite').html('<i class="fas fa-sync fa-spin"></i>');
			},
			success: function (exist) {
				$.each(exist, function (i, item) {
					selectMun += '<option value="' + item.id + '">' + item.name + '</option>';
				});
				$("#inpuMunicipio").html(selectMun);
			}
		})
	})


	/*:::::::::::::::::::::::::::::::::::::::::::::::validar el correo que sea unico::::::::::::::::::::::::::::::::::::::::::::::::::::*/
	$("#inpuCorreo").on("change", function () {
		var emailer = $(this).val();
		var validar = expRegular("email", emailer);

		if (validar != 0) {
			var mail = new FormData();
			mail.append("correo", emailer);
			$.ajax({
				url: getAbsolutePath() + "views/layout/ajax.php",
				method: "POST",
				data: mail,
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function () {
					$('.spinnerWhite').html('<i class="fas fa-sync fa-spin"></i>');
				},
				success: function (exsisteEmail) {
					if (exsisteEmail == 1) {
						$("#inpuCorreo").removeClass("is-valid");
						$("#error").removeClass("valid-feedback");

						$("#inpuCorreo").addClass("is-invalid");
						$("#error").addClass("invalid-feedback");
						$("#error").html("ESTE CORREO ESTA EN USO");
					} else if (exsisteEmail == 0) {
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

	/* :::::::::::::::::::::::::::::::::::::::::::::::loguin:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: */
	$("#emailLoggin").on('change', function () {
		var email = $(this).val();
		var validarEmail = expRegular("email", email);

		if (validarEmail != 0) {
			var mail = new FormData();
			mail.append("correoLoggin", email);
			$.ajax({
				url: getAbsolutePath() + "views/layout/ajax.php",
				method: "POST",
				data: mail,
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function () {
					$('.spinnerWhite').html('<i class="fas fa-sync fa-spin"></i>');
				},
				success: function (emaillog) {
					if (emaillog) {
						$("#tipoUser").val(emaillog.tipo);
						if (emaillog.tipo == 2 || emaillog.tipo == 3) {
							$(".selectH").css('display', 'block');
						} else {
							$(".selectH").css('display', 'none');
						}
					} else {
						$("#tipoUser").val(0);
					}
				}
			})
		}
	});

	$(".btnstart").on("click", function () {
		$("#frmLogginVerif").submit(function (e) {
			var correo = emptyInput($("#emailLoggin").val());
			var pass = emptyInput($("#inputPassLoggin").val());
			var tipo = $("#tipoUser").val();
			if (correo == "empty") {
				$("#emailLoggin").attr('placeholder', 'RECUERDA ESTE CAMPO ES OBLIGATORIO');
				e.preventDefault();
			}

			if (pass == "empty") {
				$("#inputPassLoggin").attr('placeholder', 'RECUERDA ESTE CAMPO ES OBLIGATORIO');
				e.preventDefault();
			}

			if (tipo == 2 || tipo == 3) {
				var select = emptyInput($("#consul option:selected").val());

				if (select == "empty") {
					$(".errorSelect").css({ 'color': 'red', 'opacity': '0.5', 'font-family': "'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif" });
					$(".errorSelect").html('RECUERDA ESTE CAMPO ES OBLIGATORIO');
					e.preventDefault();
				}
			}


		})
	})

	// agregar conacto al cliente
	$("#btn-AgregarContacto").on("click", function () {

		let contador = 0;
		var contacto = Array();
		let registro = Array();
		var nameContactoCustomer = emptyInput($("#nameContactoCustomer").val());
		var emailContactoCustomer = emptyInput($("#emailContactoCustomer").val());
		var telPrCustomer = emptyInput($("#telPrCustomer").val());
		var telSecCustomer = emptyInput($("#telSecCustomer").val());


		if (emailContactoCustomer == "empty") { emailContactoCustomer = "empty@empty.com" }
		if (telSecCustomer === "empty") { telSecCustomer = '00000000' }

		registro.push({ "nombre_nameContactoCustomer_30": nameContactoCustomer, "phone_telPrCustomer_12": telPrCustomer, "email_emailContactoCustomer_100": emailContactoCustomer, "phone_telSecCustomer_12": telSecCustomer })

		for (var clave in registro[0]) {
			var indice = separaTexto(clave)
			if (registro[0][clave] === "empty") {
				$("#" + indice[1]).css('border', '1px solid red')
				$("." + indice[1]).html('este campo es obligatorio')
				$("." + indice[1]).css('color', 'red')
				contador = contador + 1;
			} else {

				var error = expRegular(indice[0], registro[0][clave]);
				if (error != 0) {
					let largoTexto = tamanoTxt(registro[0][clave], indice[2])
					if (largoTexto) {
						$("#" + indice[1]).css('border', '1px solid green')
						$("." + indice[1]).html('correcto')
						$("." + indice[1]).css('color', 'green')
					} else {
						$("#" + indice[1]).css('border', '1px solid red')
						$("." + indice[1]).html('EXCEDE EL TAMAÑO PERMITIDO')
						$("." + indice[1]).css('color', 'red')
						contador = contador + 2;
					}
				} else {
					$("#" + indice[1]).css('border', '1px solid red')
					$("." + indice[1]).html('Formato Incorrecto')
					$("." + indice[1]).css('color', 'red')
					contador = contador + 2;
				}

			}
		}

		if (contador === 0) {
			var data = { "data": registro };
			var json = JSON.stringify(data);
			$.ajax({
				url: getAbsolutePath() + "views/layout/ajax.php",
				method: "POST",
				data: { "contacto": json },
				cache: false,
				beforeSend: function (setContacto) {
					$('.spinnerCliente').html('<i class="fas fa-sync fa-spin"></i>');
				},
				success: function (setContacto) {

					$('.spinnerCliente').html('');
					if (setContacto > 3) {
						$('#mensajeCliente').html('<div class="alert alert-danger" role="alert">No se puede agregar mas contactos a esta Cliente</div>');
					} else {
						$('#mensajeCliente').html('<div class="alert alert-success" role="alert">se agrego correctamente ' + setContacto + ' ITEMS</div>');
					}
				}
			});
			$("#nameContactoCustomer").val('');
			$("#emailContactoCustomer").val('');
			$("#telPrCustomer").val('');
			$("#telSecCustomer").val('');
		}
	});

});