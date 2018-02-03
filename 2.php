<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Texto Pago</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="col d-flex justify-content-between">
			<a href="http://localhost/texto-pago/">
				<img src="img/logo_TP.png">
			</a>
			<label class="custom_label">
				<strong>¡PAGUE Y RECIBA DINERO SIN EFECTIVO NI PUNTOS DE VENTA!</strong>
			</label>
		</div>
	</header>

	<main class="container">
		<div class="row">
			<div class="col contenido-principal">
				<div class="publicar">
					<div class="row">
						<div class="columna col-10 offset-1">
							<h5>Elija una cuenta</h5>
							<hr>
							<div class="form-group">
								<form action="">
									<div class="form-check form-check-inline" style="padding-left: -10px;">
										<label class="form-check-label-personal custom_label">
											<input type="radio" name="tipo_cuenta" id="personal" value="personal"> Personal
										</label>
										<label class="form-check-label-comercial custom_label">
											<input type="radio" name="tipo_cuenta" id="comercial" value="comercial" checked> Comercial
										</label>
									</div>
									<hr>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Nombre:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="nombre" id="nombre" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Apellido:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="apellido" id="apellido" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Cédula:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="cedula" id="cedula" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Usuario:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="usuario" id="usuario" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Nombre Comercial:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="nombre_comercial" id="nombre_comercial" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Razón Social:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="razon_social" id="razon_social" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Rif:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="rif" id="rif" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Elija un PIN:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="pin" id="pin" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Reintroduzca PIN:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="validar_pin" id="validar_pin" placeholder="">
											
										</div>
									</div>
									<div class="form-group btn_form_profile">
										<button type="submit" class="btn btn-sm btn-primary">Guardar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap4.min.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>