<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bienestar y Nueva Imagen</title>
    <!-- css stylo base -->
    <link href="<?=base_url?>assets/css/styles.css" rel="stylesheet" />
    <!-- css stylo propio -->
    <link href="<?=base_url?>assets/css/stilo.css" rel="stylesheet" />
    <!-- css boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- max css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css datatable -->
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- css datepicker -->    
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    
    <!-- js boostrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- max js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- datepicker -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script> 
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript">   </script>    
  <!-- datatables -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <!-- fontawensome -->
    <script src="https://kit.fontawesome.com/1849e1867b.js" crossorigin="anonymous"></script>
    <!-- swet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script src="<?=base_url?>assets/js/myjs.js"></script>
    <script src="<?=base_url?>assets/js/validar-campos.js"></script>
<!--     <script src="<?=base_url?>assets/demo/chart-area-demo.js"></script>
    <script src="<?=base_url?>assets/demo/chart-bar-demo.js"></script>
    <script src="<?=base_url?>assets/demo/datatables-demo.js"></script> -->

</head>
<body>
    <?php
    $status = 0; if (isset($_SESSION['usuario'])){$status = $_SESSION['usuario']['status'];} ?>
<div class="limiter" data-status="<?=$status;?>">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?=base_url?>assets/img/inicio.jpg);"><!-- http://www.freepik.com -->
					<span class="login100-form-title-1">
						INICIAR SESIÓN
					</span>
				</div>
				 <?php if(isset($_SESSION['loggin'])){echo '<p class="alert alert-danger errorLoggin" role="alert"><strong>'.$_SESSION['loggin']."</strong></p>";}?>
				 <?php Utls::deleteSession('loggin')?>
				<form action="<?=base_url?>Loggin/verificar" method="POST" class="login100-form validate-form" id="frmLogginVerif" data-id="<?=$status?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Correo</span>
						<input class="input100" type="text" name="username" placeholder="Enter Email" id="emailLoggin">
						<span class="focus-input100"></span>
						<input type="hidden" name="tipoUser" id="tipoUser">
                    </div>
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password" id="inputPassLoggin">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<!-- <button type="submit" class="login100-form-btn btnstart"> -->
						<button type="submit" class="login100-form-btn">
							Login
						</button>
                    </div>
                    <?php if(isset($_SESSION['errorLoguin'])){echo '<p class="alert alert-danger text-black-50 small mt-3" role="alert"><strong>'.$_SESSION['errorLoguin']."</strong></p>";}?>
                    <?php Utls::deleteSession('errorLoguin')?>
				</form>
			</div>
		