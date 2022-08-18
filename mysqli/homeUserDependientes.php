<?php
include 'sesion-usuario.php';
include '_utils.php';
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T4K4CT8');</script>
    <!-- End Google Tag Manager -->
    <meta http-equiv="content-type" content="text/html; utf-8">
	<meta name="keywords" content=""/>
	<meta name="description" content="COVID-19" />
	<meta name="revisit-after" content="3 days" />
	<meta name="robots" content="ALL" />
	<meta name="rating" content="general" />
	<meta name="distribution" content="global" />
	<meta name="classification" content="Salud" />
	<meta name="copyright" content="COVID-19" />
	<meta name="author" content="COVID-19 - aLeX RaDa" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
    <title>Carebox-DependientesUser</title>
    <link rel="icon" href="favicon.ico">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- No es compatible con el calendario -->
	<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script-->

	<!--versión de servidor-->
	<!--link rel="stylesheet" href="https://bootstrap-validate.js.org/assets/main.css" crossorigin="anonymous"-->
	<!--versión local-->
	<link rel="stylesheet" href="net/css/main.css" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
	<script defer src="https://use.fontawesome.com/releases/v5.15.0/js/all.js"></script>	
	
	<link rel="stylesheet" href="css/jquery-ui.css" >
	
	<link rel="stylesheet" href="css/base.css">	
	<link rel="stylesheet" href="css/msg-alerts.css">
  
    <link rel="stylesheet" href="assets/plugins/aos/aos.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

	<link rel="stylesheet" type="text/css" href="Tables/css/jquery.dataTables.min.css" />	
	<link rel="stylesheet" type="text/css" href="Tables/css/general.css" />	
	<link rel="stylesheet" href="css/carebox.css">
<style>
	
.dosis-detail{
	min-width: 250px;
}

.eliminar{
	padding: 3px;
    background: #d20000;
    border: 1px solid red;
    text-align: center;
    border-radius: 5px;
    color: wheat;
    font-weight: bold;
	cursor: pointer;
}

/*sekeleton table loader*/
	.table-loader{
	   visibility:hidden;
	}
	
	.table-loader tbody{
	   display: none;
	}

	.table-loader:before {
		visibility:visible;
		display:table-caption;
		content: " ";
		width: 100%;
		height: 150px;
		background-image:
		linear-gradient( rgba(235, 235, 235, 1) 1px, transparent 0 ),
		linear-gradient(90deg, rgba(235, 235, 235, 1) 1px, transparent 0 ),
		linear-gradient( 90deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.5) 15%, rgba(255, 255, 255, 0) 30% ),
		linear-gradient( rgba(240, 240, 242, 1) 30px, transparent 0 );
		background-repeat: repeat;
		background-size: 1px 60px, calc(100% * 0.1666666666) 1px, 30% 100%, 2px 60px;
		background-position: 0 0, 0 0, 0 0, 0 0;
		animation: shine 0.5s infinite;
	}

	@keyframes shine {
		to {
			background-position: 0 0, 0 0, 40% 0, 0 0;
		}
	}
/*sekeleton table loader*/
</style>
		
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4K4CT8"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<div onclick="topFunction()" id="myBtn" title="Top" class="rounded-circle" >&nbsp;<i class="fas fa-chevron-up"></i>&nbsp;</div>

<div id="loading" class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="MDS"></div>
        <p>Please wait...</p>        
    </div>
</div>

<div class="wrapper">
    <!-- header menu -->    
    <div class="main_header">
        <section id="top-nav">
            <div class="container-fluid">
                <div class="top">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="left">
                                <ul class="list-unstyled m-b-0">
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="text-right d-none d-md-block">
                                <ul class="list-unstyled m-b-0">
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<!-- header -->
        <?php
			include '_header.php';		
		?>
		<!-- header -->
        
		<!-- Menu -->
		<?php									
		include 'menu-publico-registro.php';
		/*
		echo "lenguaje seleccionado: ". $lang;
		echo wr('WELCOME')."<br>";		
		echo tr("Hola mundo!");
		*/		
		?>
		<!-- Menu -->		

    <!-- Banner Inicio -->
    <!--<section id="hero">
        <div class="slider slider " style="background-image:url(assets/images/slider1.jpg)">
            <div class="container">
                <div class="slider_text">
                    <h3 class="title"><span><?php echo tr("Bienvenido a") ?></span> <br>
                        MDS <strong>Labs</strong></h3>
                    <p class="sub-title"><?php echo tr("Sistema para la administración de citas y pruebas de laboratorio") ?>.</p><br>                    
                </div>
				
				<?php
				//include 'avisos.php';		
				?>
				
				
            </div>
        </div>
    </section>-->

    <!-- Contenido -->
    <section class="main-section">

        <!-- Mi Perfil  -->
        <div class="about-us-section" id="contenido">
            <div class="container">
                <div class="row justify-content-between mt-4" >
					<!-- Dependientes -->
					<span id="misDependientes"></span>
						<div class="common-cnt row mb-2 mt-4" data-aos="fade-up">
							<div class="col-12 section-title-profile section-title p-2 text-left">
								<h2><?php echo tr("Mis <span>Dependientes </span>")?></h2>
							</div>                            
                        </div>
						<fieldset class="card-health">							
							<div id="misDependientesTable" data-aos="fade-left"></div>
						</fieldset>						
						
						<fieldset id="fieldAddDep" class="card-health mt-2 no-display" data-aos="fade-left">
							<legend id="cardAddDep">
								<div class="row">
									<div class="col-8">
										<strong><i class="fas fa-user-plus"></i> </strong><?php echo tr("Agregar Dependiente")?>
									</div>
									<div class="col-4 text-right">
										<strong> <i class="fas fa-chevron-circle-down"></i> </strong>
									</div>
								</div>
							</legend>
							<div class="common-cnt row " id="content_cardAddDep" data-aos="fade-down">
								<div class="col-12 p-3">
									<form id="add_form" name="add_form" class="form_validation">
									<fieldset id="addContact">
										<div class="row ">							
											<div class="col">
												<div class="form-group row">
													<label for="campo" class="col-12 col-md-4 text-danger"> <strong><?php echo tr("*Campo requerido")?> </strong></label>
												</div>	
												<div class="form-group row">
													<label for="nombre" class="col-12 col-md-4 "> <strong><i class="fas fa-user"></i> <?php echo tr("Nombre")?>:* </strong></label>
													<div class="col-12 col-md-8">
														<input type="text" class="form-control" required id="nombre" name="nombre" placeholder="<?php echo tr("Nombre")?>">
														<div class="invalid-feedback">
															<?php echo tr("El nombre es requerido") ?>
														</div>
													</div>
												</div>
												
												<div class="form-group row">
													<label for="apellidos" class="col-12 col-md-4"> <strong><i class="fas fa-user"></i> <?php echo tr("Apellidos")?>:* </strong></label>
													<div class="col-12 col-md-8">
														<input type="text" class="form-control" required id="apellidos" name="apellidos" placeholder="<?php echo tr("Apellidos")?>">
														<div class="invalid-feedback">
															<?php echo tr("Los apellidos son requeridos") ?>
														</div>
													</div>
												</div>
												
												<div class="form-group row">
													<label for="correo" class="col-12 col-md-4"> <strong><i class="fas fa-at"></i> <?php echo tr("Correo")?>: </strong> </label>
													<div class="col-12 col-md-8">
														<input type="email" class="form-control" id="correo" name="correo" placeholder="<?php echo tr("Correo")?>">
														<div class="invalid-feedback">
															<?php echo tr("El correo no cumple con el formato") ?>
														</div>
													</div>
												</div>
												
												<div class="form-group row">
													<label for="add_fecha_nacimiento" class="col-12 col-md-4"> <strong><i class="far fa-calendar-alt"></i> <?php echo tr("Fecha de Nacimiento")?>:* </strong></label>
													<div class="col-12 col-md-8">
														<input type="text" class="form-control" required onFocus="blur()" id="add_fecha_nacimiento" name="add_fecha_nacimiento" placeholder="dd/mm/aaaa">
														<div class="invalid-feedback">
															<?php echo tr("La fecha de nacimiento es requerida") ?>
														</div>
													</div>
												</div>
									
												<div class="form-group row">
													<label for="genero" class="col-12 col-md-4"> <strong><i class="fas fa-venus-mars"></i> <?php echo tr("Genero")?>:* </strong> </label>
													<div class="col-12 col-md-8">
														<select class="form-select" name="genero" id="genero" required>
															<option selected disabled value=""> <?php echo tr("Selecciona")?> </option>
															<option value="F"> <?php echo tr("Femenino")?> </option>
															<option value="M"> <?php echo tr("Masculino")?> </option>
														</select>
														<div class="invalid-feedback">
															<?php echo tr("Selecciona una opción") ?>
														</div>
													</div>
												</div>
												
												<div class="form-group row">
													<label for="tipo_identificacion" class="col-12 col-md-4"> <strong><i class="far fa-id-badge"></i> <?php echo tr("Tipo de Identificación")?>:* </strong></label>
													<div class="col-12 col-md-8">
														<select class="form-select" name="tipo_identificacion" id="tipo_identificacion" required>
															<option selected disabled value=""> <?php echo tr("Selecciona")?> </option>
															<option value="INE"> INE </option>
															<option value="CURP"> CURP </option>
															<option value="LICENCIA"> <?php echo tr('Licencia');?> </option>
															<option value="PASAPORTE"> <?php echo tr('Pasaporte');?> </option>
															<option value="OTRA"> <?php echo tr('Otra');?> </option>												
														</select>
														<div class="invalid-feedback">
															<?php echo tr("Selecciona una opción") ?>
														</div>
													</div>
												</div>
												
												<div class="form-group row">
													<label for="identificacion" class="col-12 col-md-4"> <strong><i class="far fa-id-card"></i> <?php echo tr("Identificación")?>:* </strong><a href="#" data-toggle="modal" data-target="#bannerformmodal" onClick="identificacion()"><i class="fas fa-info-circle"></i></a></label>
													<div class="col-12 col-md-8">
														<input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Identificación" required>
														<div class="invalid-feedback">
															<?php echo tr("La identificación es requerida") ?>
														</div>
													</div>
												</div>

												<div class="form-group row">
													<label for="parentesco" class="col-12 col-md-4"> <strong><i class="fas fa-people-arrows"></i> <?php echo tr("Parentesco") ?>:* </strong> </label>
													<div class="col-12 col-md-8">
														<select class="form-select" name="parentesco" id="parentesco" required>
															<option selected disabled value=""> <?php echo tr("Selecciona")?> </option>
														</select>
														<div class="invalid-feedback">
															<?php echo tr("Selecciona una opción") ?>
														</div>
													</div>
												</div>
												
												<div class="form-group mt-3 text-right">
													<button class="btn btn-primary btn-round" type="button" id="btnAddCancelDep"> &nbsp; <i class="fas fa-undo"></i> &nbsp; <?php echo tr("Cancelar")?> &nbsp;</button>
													<button class="btn btn-primary btn-round" type="button" id="btnAddInfoDep"> &nbsp; <i class="fas fa-save"></i> &nbsp; <?php echo tr("Enviar")?> &nbsp;</button>
													<button class="btn btn-primary btn-round no-display" type="button" disabled id="btnAddCancelInfoSpiner">
													  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
													   Actualizando...
													</button>
												</div>
											</div>
										</div>
									</fieldset>
									</form>
								</div>
							</div>
						</fieldset>						
						
						<div class="text-right" data-aos="fade-down">
							<button class="btn btn-warning btn-round " id="btnAddDep"><i class="fas fa-user-plus"></i> <?php echo tr("Agregar Dependiente")?> </button>
						</div>
					<!-- Dependientes -->

                </div>
            </div>
        </div>
        <!-- Mi Perfil  -->

    </section>

    <!-- footer -->    
	<?php
	include 'footer.php';		
	?>
	<!-- footer -->
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header card-info-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo tr("Información")?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><span id="textoModalInfo"></span>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info btn-round" data-dismiss="modal" aria-label="close"> <?php echo tr("Aceptar")?> </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">		
			<div class="modal-header card-info-header">				
				<h5 class="modal-title text-left" id="myModalLabel"><?php echo tr("Confirmar")?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>		
			<div class="modal-body">
				<p><?php echo tr("Está a punto de eliminar la información seleccionada y no puedrá ser recuperada") ?>.</p>
				<p><?php echo tr("Desa continuar?") ?></p>
				<p class="debug-url"></p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-round" data-dismiss="modal"><?php echo tr("Cancelar")?></button>
				<a class="btn btn-danger btn-ok btn-round text-white" id="delete"> <i class="fas fa-user-times"></i> <?php echo tr("Borrar")?></a>
			</div>
		</div>
	</div>
</div>	

<!-- qr -->    
<div class="modal fade" id="myModalQR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header card-info-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo tr("Scann QR")?></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><span id="textoModalQR"></span>.</p>
		    <div id="qrcode" class="mx-auto w-100 pb-3" style="max-width:200px;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info btn-round" data-dismiss="modal" aria-label="close"> <?php echo tr("Cerrar")?> </button>
      </div>
    </div>
  </div>
</div>
<!-- qr -->

<!-- info ine -->    
<div class="modal fade" id="bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header card-info-header">
        <h5 class="modal-title" id=""><?php echo tr("Info")?></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">    
		  <p id="titulo_info"></p>    
		    <div class="mx-auto w-100 pb-3" style="max-width:400px;">
				<img  width="374" height="300" id="identificacion_img">
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info btn-round" data-dismiss="modal" aria-label="close"> <?php echo tr("Cerrar")?> </button>
      </div>
    </div>
  </div>
</div>
<!-- info ine end -->


<div class="no-display">
	Token: <p id="token"></p>
</div>

<!-- Scripts  --->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/countto.js"></script>

<script src="js/jquery-ui.js"></script>
<script src="js/datepicker-es.js"></script>
<script src="js/jquery.ui.datepicker.validation.js"></script>

<link href="//cdn.rawgit.com/swisnl/jQuery-contextMenu/master/dist/jquery.contextMenu.css" rel="stylesheet"/>
<script src="//cdn.rawgit.com/swisnl/jQuery-contextMenu/master/dist/jquery.contextMenu.js"></script>

<script type="text/javascript" src="js/context-menu.js"></script>

<script	type="text/javascript" src="Tables/js/jquery.dataTables.min.js"></script>
<script	type="text/javascript" src="Tables/js/general.js"></script>
<script type="text/javascript" src="js/general.js"></script>


<script type="text/javascript" src="js/profile_direccion.js"></script>
<script type="text/javascript" src="js/profile_dependiente.js"></script>
<script type="text/javascript" src="js/profile_metrica.js"></script>
<script type="text/javascript" src="js/catalogo_direcciones.js"></script>
<script type="text/javascript" src="js/qrcode.js"></script>

<?php
 include '_firebase.php';
?>

<script>


	var timer;
	var datosUsuario;
	var datosUsuarioVac={};
	var datosDependientes;	
	var datosDirecciones;
	var datosParentesco;
	var datosMetricas;
	var id_dependiente;
	var formValidated=false;
	var formValidatedDep=false;
	var formValidatedDir=false;
	var fechaNacimientoDialog;	
	var fechaNacimientoDialogAdd;

	$.datepicker.setDefaults($.datepicker.regional["es"]);
		
	$(function() {		

		$(document)
		.ajaxStart(function () {
			$("#loading").show();
		})
		.ajaxStop(function () {
			$("#loading").hide();
		});
		
		$('#confirm-delete').on('show.bs.modal', function(e) {           
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));            
        });

		$('#myModal').on('hidden.bs.modal', function (e) {			
		});

		$('#myModalQR').on('hidden.bs.modal', function (e) {
			clearTimeout(myTimer);	
			$("#qrcode").html('');			
			$("#textoModalQR").html('');		
		});
		
		
		$("#btnGenQR").click(function() {
			generarQR(USER_ID);
		});
				
		
		fechaNacimientoDialog=$("#fecha_nacimiento");
		fechaNacimientoDialog.datepicker({		
			dateFormat: 'dd-mm-yy',
			firstDay: 0,
			minDate: "-90Y" ,
			yearRange: "-100:+0",
			maxDate: "0Y",
			changeMonth: true,
			changeYear: true,		
			buttonImageOnly: false		
		});
		
		fechaNacimientoDialogAdd=$("#add_fecha_nacimiento");
		fechaNacimientoDialogAdd.datepicker({		
			dateFormat: 'dd-mm-yy',
			firstDay: 0,
			minDate: "-90Y" ,
			yearRange: "-100:+0",
			maxDate: "0Y",
			changeMonth: true,
			changeYear: true,		
			buttonImageOnly: false		
		});
		
				
		buscaUsuario();
		buscaDependientes(USER_ID,true);
		buscaCatalogoParentesco();
	});
	
	function buscaUsuario(){
		jQuery.support.cors = true; 
		$.ajax({			
			data: '{"correo" :"'+ USER_CORREO+'","token": "'+token+'"}',
			type: "POST",
			dataType: "json",			
			contentType: 'application/json',
			headers: {
				'Accept': '*/*',				
				'X-Requested-With':  'XMLHttpRequest',                   
                'Cache-Control':'no-cache'				
			},			
			url: "servicios/srv_obtener_info_perfil.php",
		})
		 .done(function( data, textStatus, jqXHR ) {
			console.log(data);
			if(data){
				if(!data.estatus){
					datosUsuario=data;												
					$("#tableUserData").removeClass('table-loader').show();
					$("#tableUserData tbody").show();				
				}
				if(data.estatus==99 || data.estatus==98){
					console.log("Error de sesion ...");
				}
			}
			else{
				console.log("No hay información buscaUsuario");
			}
		 })
		 .always(function (){
			 console.log("finalizo buscaUsuario");			 
		 })
		 .fail(function( jqXHR, textStatus, errorThrown ) {
			console.log( "buscaUsuario ERROR: " +  textStatus);
		});
	
	}	


	/***************************************************************************/
	/* Dependientes														       */
	/***************************************************************************/
	function getTemplateDependiente(json){
		console.log("json getTemplateDependiente");
		console.log(json);
		var dependientes=
                    '	<legend id="cardDep_'+json.id+'" data-vald="0">'+
                    '		<div class="row">'+
                    '			<div class="col-8">'+
                    '				<strong><i class="fas fa-people-arrows"></i> </strong><span id="descripcionDep">'+json.descripcion+'</span>'+
                    '			</div>'+
                    '			<div class="col-4 text-right" id="arrow_cardDep_'+json.id+'">'+
                    '				<strong> <i class="fas fa-chevron-circle-down"></i> </strong>'+
                    '			</div>'+
                    '		</div>'+
                    '	</legend>'+
                    '	<div id="content_cardDep_'+json.id+'" class="no-display">'+
                    '		<div class="common-cnt row" id="sectionShowInfoDep_'+json.id+'" data-aos="fade-up">'+
                    '			<div class="col-12  p-3">'+
                    '				<div class="table-responsive ">'+
                    '					<table class="table table-border table-sm">'+
                    '						<tbody>'+					
                    '							<tr>'+
                    '								<td class="nowrap">'+
                    '									<strong><i class="fas fa-user"></i> <?php echo tr("Nombre") ?>: </strong>'+
                    '								</td>'+
                    '								<td class="w-50">'+
                    '									 <span id="nombreDep">'+json.nombre+'</span>'+
                    '								</td>'+														
                    '							</tr>'+

                    '							<tr>'+
                    '								<td class="nowrap">'+
                    '									<strong><i class="fas fa-user"></i> <?php echo tr("Apellidos") ?>: </strong>'+
                    '								</td>'+
                    '								<td>'+
                    '									 <span id="apellidosDep">'+json.apellidos+'</span>'+
                    '								</td>'+																	
                    '							</tr>'+
                                                
                    '							<tr>'+
                    '								<td class="nowrap">'+
                    '									<strong><i class="fas fa-at"></i> <?php echo tr("Correo") ?>: </strong> '+
                    '								</td>'+
                    '								<td>'+
                    '									<span id="correoDep">'+json.correo+'</span>'+
                    '								</td>'+									
                    '							</tr>'+
                                                
                    '							<tr>'+
                    '								<td class="nowrap">'+
                    '									<strong><i class="far fa-calendar-alt"></i> <?php echo tr("Fecha de Nacimiento") ?>: </strong>'+
                    '								</td>'+
                    '								<td>'+
                    '									<span id="fecha_nacimientoDep">'+json.fecha_nacimiento+'</span>'+
                    '								</td>'+																	
                    '							</tr>'+
                                                
                    '							<tr>'+
                    '								<td class="nowrap">'+
                    '									<strong><i class="fas fa-venus-mars"></i> <?php echo tr("Genero") ?>: </strong>'+
                    '								</td>'+
                    '								<td>'+
                    '									 <span id="generoDep">'+json.genero+'</span>'+
                    '								</td>'+																
                    '							</tr>'+
                    '							<tr>'+
                    '								<td class="nowrap">'+
                    '									<strong><i class="far fa-id-badge"></i> <?php echo tr("Tipo de Identificación") ?>: </strong>'+
                    '								</td>'+
                    '								<td>'+
                    '									 <span id="tipoIdentificacionDep">'+json.tipo_identificacion+'</span>'+
                    '								</td>'+						
                    '							</tr>'+
                    '							<tr>'+
                    '								<td class="nowrap">'+
                    '									<strong><i class="far fa-id-card"></i> <?php echo tr("Identificación") ?>: </strong>'+
                    '								</td>'+						
                    '								<td>'+
                    '									 <span id="identificacionDep">'+json.identificacion+'</span>'+
                    '								</td>'+							
                    '							</tr>'+
                    '						</tbody>'+
                    '					</table>'+
                    '				</div>'+				
                                        
                    '				<div class="text-right pr-5">'+
                    '					<button class="btn btn-primary btn-round " onClick="btnEditInfoDep('+json.id+')" id="btnEditInfoDep'+json.id+'"><i class="far fa-edit"></i> <?php echo tr("Editar") ?> </button>'+
                    '					<button class="btn btn-danger btn-round" data-href="javascript:btnBorrarDep('+json.id+')" data-toggle="modal" data-target="#confirm-delete"><i class="far fa-trash-alt"></i> <?php echo tr("Borrar") ?> </button>'+
                    '				</div>'+
                    '			</div>'+                      							
                    '		</div>'+
                        
                    '		<div class="common-cnt row no-display" id="sectionEditInfoDep_'+json.id+'" data-aos="fade-down">'+
                    '			<div class="col-12 p-3">'+
                    '				<form id="edit_form_dep_'+json.id+'" name="edit_form_dep_'+json.id+'" class="form_validation">'+
                    '				<fieldset id="editContact">'+
                    '					<div class="row ">'+							
                    '						<div class="col">'+
                    '							<div class="form-group row">'+
                    '								<label for="nombre" class="col-12 col-md-4 "> <strong><i class="fas fa-user"></i> <?php echo tr("Nombre") ?>: </strong></label>'+
                    '								<div class="col-12 col-md-8">'+
                    '									<input type="text" class="form-control" required id="nombre" name="nombre" placeholder="<?php echo tr("Nombre") ?>">'+
                    '									<div class="invalid-feedback">'+
                    '										<?php echo tr("El nombre es requerido") ?>'+
                    '									</div>'+
                    '								</div>'+
                    '							</div>'+
                                                
                    '							<div class="form-group row">'+
                    '								<label for="apellidos" class="col-12 col-md-4"> <strong><i class="fas fa-user"></i> <?php echo tr("Apellidos") ?>: </strong></label>'+
                    '								<div class="col-12 col-md-8">'+
                    '									<input type="text" class="form-control" required id="apellidos" name="apellidos" placeholder="<?php echo tr("Apellidos") ?>">'+
                    '									<div class="invalid-feedback">'+
                    '										<?php echo tr("Los apellidos son requeridos") ?>'+
                    '									</div>'+
                    '								</div>'+
                    '							</div>'+
                                                
                    '							<div class="form-group row">'+
                    '								<label for="correo" class="col-12 col-md-4"> <strong><i class="fas fa-at"></i> <?php echo tr("Correo") ?>: </strong> </label>'+
                    '								<div class="col-12 col-md-8">'+
                    '									<input type="email" class="form-control" id="correo" name="correo" placeholder="<?php echo tr("Correo") ?>">'+
                    '									<div class="invalid-feedback">'+
                    '										<?php echo tr("El correo no cumple con el formato") ?>'+
                    '									</div>'+
                    '								</div>'+
                    '							</div>'+
                                                
                    '							<div class="form-group row">'+
                    '								<label for="fecha_nacimiento_'+json.id+'" class="col-12 col-md-4"> <strong><i class="far fa-calendar-alt"></i> <?php echo tr("Fecha de Nacimiento") ?>: </strong></label>'+
                    '								<div class="col-12 col-md-8">'+
                    '									<input type="text" class="form-control" required onFocus="blur()" id="fecha_nacimiento_'+json.id+'" name="fecha_nacimiento_'+json.id+'" placeholder="dd/mm/aaaa">'+
                    '									<div class="invalid-feedback">'+
                    '										<?php echo tr("La fecha de nacimiento es requerida") ?>'+
                    '									</div>'+
                    '								</div>'+
                    '							</div>'+
                                    
                    '							<div class="form-group row">'+
                    '								<label for="genero" class="col-12 col-md-4"> <strong><i class="fas fa-venus-mars"></i> <?php echo tr("Genero") ?>: </strong> </label>'+
                    '								<div class="col-12 col-md-8">'+
                    '									<select class="form-select" name="genero" id="genero" required>'+
                    '										<option selected disabled value=""> <?php echo tr("Selecciona") ?> </option>'+
                    '										<option value="F"> <?php echo tr("Femenino") ?> </option>'+
                    '										<option value="M"> <?php echo tr("Masculino") ?> </option>'+
                    '									</select>'+
                    '									<div class="invalid-feedback">'+
                    '										<?php echo tr("Selecciona una opción") ?>'+
                    '									</div>'+
                    '								</div>'+
                    '							</div>'+
                                                
                    '							<div class="form-group row">'+
                    '								<label for="tipo_identificacion" class="col-12 col-md-4"> <strong><i class="far fa-id-badge"></i> <?php echo tr("Tipo de Identificación") ?>: </strong> </label>'+
                    '								<div class="col-12 col-md-8">'+
                    '									<select class="form-select" name="tipo_identificacion" id="tipo_identificacion" >'+
                    '										<option selected disabled value=""> <?php echo tr("Selecciona") ?> </option>'+
                    '										<option value="INE"> INE </option>'+
                    '										<option value="CURP"> CURP </option>'+
                    '										<option value="LICENCIA"> <?php echo tr('Licencia') ?> </option>'+
                    '										<option value="PASAPORTE"> <?php echo tr('Pasaporte') ?> </option>'+
                    '										<option value="OTRA"> <?php echo tr('Otra') ?> </option>'+												
                    '									</select>'+
                    '									<div class="invalid-feedback">'+
                    '										<?php echo tr("Selecciona una opción") ?>'+
                    '									</div>'+
                    '								</div>'+
                    '							</div>'+
                                                
                    '							<div class="form-group row">'+
                    '								<label for="identificacion" class="col-12 col-md-4"> <strong><i class="far fa-id-card"></i> <?php echo tr("Identificación") ?>: </strong></label>'+
                    '								<div class="col-12 col-md-8">'+
                    '									<input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="<?php echo tr("Identificación") ?>">'+
                    '									<div class="invalid-feedback">'+
                    '										<?php echo tr("La identificación es requerida") ?>'+
                    '									</div>'+
                    '								</div>'+
                    '							</div>'+
                    
                    '							<div class="form-group row">'+
                    '								<label for="parentesco" class="col-12 col-md-4"> <strong><i class="fas fa-people-arrows"></i> <?php echo tr("Parentesco") ?>: </strong> </label>'+
                    '								<div class="col-12 col-md-8">'+
                    '									<select class="form-select" name="parentesco" id="parentesco" required>'+
                    '										<option selected disabled value=""> <?php echo tr("Selecciona") ?> </option>'+
                    '									</select>'+
                    '									<div class="invalid-feedback">'+
                    '										<?php echo tr("Selecciona una opción") ?>'+
                    '									</div>'+
                    '								</div>'+
                    '							</div>'+
                                                
                    '							<div class="form-group mt-3 text-right">'+
                    '								<button class="btn btn-primary btn-round" type="button" onClick="btnCancelInfoDep('+json.id+')"> &nbsp; <i class="fas fa-undo"></i> &nbsp; <?php echo tr("Regresar") ?> &nbsp;</button>'+
                    '								<button class="btn btn-primary btn-round" type="button" onClick="btnUpdateInfoDep('+json.id+')"> &nbsp; <i class="fas fa-save"></i> &nbsp; <?php echo tr("Actualizar Información") ?> &nbsp;</button>'+
                    '								<button class="btn btn-primary btn-round no-display" type="button" disabled id="btnCancelInfoSpiner">'+
                    '								  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'+
                    '								   Actualizando...'+
                    '								</button>'+
                    '							</div>'+
                    '						</div>'+
                    '					</div>'+
                    '				</fieldset>'+
                    '				</form>'+
                    '			</div>'+
                    '		</div>'+
                    '	</div>';
    	return dependientes;
	}

	function generarQR(id_){
		jQuery.support.cors = true; 
		$.ajax({			
			data: '{"id_usuario" :'+ USER_ID +',"token": "'+token+'"}',
			type: "POST",
			dataType: "json",			
			contentType: 'application/json',
			headers: {
				'Accept': '*/*',				
				'X-Requested-With':  'XMLHttpRequest',                   
                'Cache-Control':'no-cache'				
			},			
			url: "servicios/srv_generar_qr.php",
		})
		 .done(function( data, textStatus, jqXHR ) {
			console.log(data);
			if (data.code == 1) {
				$('#myModalQR').modal('show');					
				var qrcodeEsp = new QRCode(document.getElementById("qrcode"), {
					width : 200,
					height : 200,      
				});						
				url1="https://angomedical.com/MDSLabs/homeMiQR.php?id="+data.url;
				qrcodeEsp.makeCode(url1);	
				myTimer = setTimeout(function() {
							timeOverQR();
				}, 600000);			
			}
			else{
				console.log("No hay información buscaUsuario");
			}
		 })
		 .always(function (){
			 console.log("finalizo generarQR");			 			
		 })
		 .fail(function( jqXHR, textStatus, errorThrown ) {
			console.log( "generarQR ERROR: " +  textStatus);				
		});
	}
	function timeOverQR() {
		console.log("Tiempo de apartado terminado");
		clearTimeout(myTimer);
		var xf = '<div class="row pb-3"><div class="col-lg-6 col-md-6 col-sm-12 pb-5"><svg class="ico-svg-warn" version="1.1" id="Capa_1"'+
										'xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"'+
										'x="0px" y="0px" viewBox="0 0 1000 1000"'+
										'style="enable-background:new 0 0 1000 1000;" xml:space="preserve">'+
										'<style type="text/css">'+
										'.st0 {'+
											'		fill: #FFFFFF;'+
											'	stroke: #000000;'+
											'	stroke-miterlimit: 10;'+
											'}'+
											'</style>'+
											'<ellipse class="st0" cx="516.5" cy="507.4" rx="309.4" ry="358.4" />'+
											'<g>'+
											'<path d="M500,10C229.4,10,10,229.4,10,500s219.4,490,490,490s490-219.4,490-490S770.6,10,500,10z M500,796.2'+
											'c-34.7,0-62.8-28.1-62.8-62.8s28.1-62.8,62.8-62.8s62.8,28.1,62.8,62.8C562.8,768.1,534.7,796.2,500,796.2z M550.2,594.3'+
											'c0,27.7-22.5,50.2-50.2,50.2s-50.2-22.5-50.2-50.2l-25.1-310.7c0-0.5,0.3-1,0.3-1.5c0-1-0.3-2-0.3-3c0-41.6,33.7-75.3,75.3-75.3'+
											's75.3,33.7,75.3,75.3c0,1-0.3,2-0.3,3c0,0.5,0.3,1,0.3,1.5L550.2,594.3z" />'+
											'</g>'+
											'</svg></div><div class="col-lg-6 col-md-6 col-sm-12"><strong>Se ha agotado la vigencia del QR.</strong></div>';
		$("#qrcode").html(xf);
	}

function getTranslate(texto) {	
    var userLang = navigator.language || navigator.userLanguage;
    usrLArray = userLang.split('-');
    userLang = usrLArray[0];
    console.log('browser language: ' + userLang);    
    if (userLang == 'es')
        return texto;
    else{
		var textR = translateMessages(texto);
        if(textR!=undefined)					
			return textR.en;
		else
			return texto;
	}
}

function getLanguageTable(){
	var userLang = navigator.language || navigator.userLanguage;
    usrLArray = userLang.split('-');
    userLang = usrLArray[0];
    console.log('browser language: ' + userLang);    
    if (userLang == 'es')
        return languageES;
    else
		return languageEN;
}

function translateMessages(texto) {
    var messages = {
        "No tiene información de salud registrada, agregue una a métrica para su monitoreo": {            
            en: 'You have not registered any health information',
        },
		"No hay metricas disponibles": {            
            en: 'No metrics available',
        },
		"No tiene direcciones registradas": {
            en: 'You have not registered any address',
        },
		"No tiene dependientes registrados": {
            en: 'You have not registered any relative',
        },
		
		
		
    }
    return (messages[texto]);
}

function identificacion(){
    let option = " ";
    let aux = document.getElementsByName('tipo_identificacion');
    if(aux[1].value != ""){option = aux[1].value;}
    switch (option) {
        case 'INE':
            $('#titulo_info').html('<?php echo tr("Si seleccionas [INE], captura tu [Clave de elector]"); ?>');
            $("#identificacion_img").attr("src","assets/images/INE.jpeg");
            break;
        case 'CURP':
            $('#titulo_info').html('<?php echo tr("Si seleccionas [CURP], captura tu [Clave CURP]"); ?>');
            $("#identificacion_img").attr("src","assets/images/CURP.jpeg");
            break;
        case 'LICENCIA':
            $('#titulo_info').html('<?php echo tr("Si seleccionas [Licencia de conducir], captura tu [No. de licencia]"); ?>');
            $("#identificacion_img").attr("src","assets/images/LICENCIA.jpeg");
            break;
        case 'PASAPORTE':
            $('#titulo_info').html('<?php echo tr("Si seleccionas [Pasaporte], captura tu [No. de pasaporte]"); ?>');
            $("#identificacion_img").attr("src","assets/images/PASAPORTE.jpeg");
            break;
        default:
            $('#titulo_info').html('<?php echo tr("Si seleccionas [Otro], captura tu [Clave]"); ?>');
            $("#identificacion_img").attr("src","assets/images/OTRO.jpeg");
            break;
    }
}

</script>

</body>
</html>
