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
			<div style="margin-top: 7px; text-align: right; font-family: 'Roboto', sans-serif; font-size: 14px;">
				<strong>Bienvenido</strong> @user! 
				<strong>Saldo:</strong> Bs. 999.999.999
				<a href="#">
					<img src="img/help.png" height="22px" style="padding: 5px;">
				</a>
				<a href="#" class="btn-menu" id="btn-menu">
				<img src="img/menu.png">
			</a>
			</div>
		</div>
	</header>

	<main class="container">
		<div class="row">
			<div class="col-12 col-md-3 barra-lateral-izquierda" id="barra-lateral-izquierda">
				<nav>
					<a href="http://localhost/texto-pago/3.php">Enviar</a>
					<a href="">Retirar</a>
					<a href="http://localhost/texto-pago/7.php">Movimientos</a>
				</nav>
			</div>

			<a href="#" class="fondo-enlace hidden-md-up" id="fondo-enlace"></a>
			
			<div class="col contenido-principal">
				<div class="publicar">
					<div class="row">
						<div class="columna col-10 offset-1">
							<h5>Enviar</h5>
							<hr>
							<div class="form-group">
								<form action="">
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Monto:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="monto" id="monto" placeholder="Bs. 999.999.999">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Para:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="destinatario" id="destinatario" placeholder="Nombre, teléfono o usuario">
										</div>
									</div>
									<div class="form-group row">
										<label for="smFormGroupInput" class="custom_label col-sm-3 col-form-label col-form-label-sm"><strong>Nota:</strong></label>
										<div class="col-sm-9">
											<input class="form-control form-control-sm custom_input" type="text" name="asunto" id="asunto" placeholder="Cine, almuerzo, pago, etc.">
										</div>
									</div>	

									<div class="form-group btn_form_envio">
										<button type="submit" class="btn btn-sm btn-primary">Enviar</button>
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