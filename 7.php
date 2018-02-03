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
							<h5>Movimientos</h5>
							<hr>
							<table id="example" class="table table-bordered" cellspacing="0" width="100%">
						        <thead>
						            <tr>
						                <th>Usuario</th>
						                <th>Fecha</th>
						                <th>Monto</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>Tiger Nixon</td>
						                <td>2011/04/25</td>
						                <td>$320,800</td>
						            </tr>
						            <tr>
						                <td>Garrett Winters</td>
						                <td>2011/07/25</td>
						                <td>$170,750</td>
						            </tr>
						            <tr>
						                <td>Ashton Cox</td>
						                <td>2009/01/12</td>
						                <td>$86,000</td>
						            </tr>
						            <tr>
						                <td>Cedric Kelly</td>
						                <td>2012/03/29</td>
						                <td>$433,060</td>
						            </tr>
						            <tr>
						                <td>Airi Satou</td>
						                <td>2008/11/28</td>
						                <td>$162,700</td>
						            </tr>
						            <tr>
						                <td>Brielle Williamson</td>
						                <td>2012/12/02</td>
						                <td>$372,000</td>
						            </tr>
						            <tr>
						                <td>Herrod Chandler</td>
						                <td>2012/08/06</td>
						                <td>$137,500</td>
						            </tr>
						            <tr>
						                <td>Ashton Cox</td>
						                <td>2009/01/12</td>
						                <td>$86,000</td>
						            </tr>
						            <tr>
						                <td>Cedric Kelly</td>
						                <td>2012/03/29</td>
						                <td>$433,060</td>
						            </tr>
						            <tr>
						                <td>Airi Satou</td>
						                <td>2008/11/28</td>
						                <td>$162,700</td>
						            </tr>
						            <tr>
						                <td>Brielle Williamson</td>
						                <td>2012/12/02</td>
						                <td>$372,000</td>
						            </tr>
						            <tr>
						                <td>Herrod Chandler</td>
						                <td>2012/08/06</td>
						                <td>$137,500</td>
						            </tr>
						            <tr>
						                <td>Ashton Cox</td>
						                <td>2009/01/12</td>
						                <td>$86,000</td>
						            </tr>
						            <tr>
						                <td>Cedric Kelly</td>
						                <td>2012/03/29</td>
						                <td>$433,060</td>
						            </tr>
						            <tr>
						                <td>Airi Satou</td>
						                <td>2008/11/28</td>
						                <td>$162,700</td>
						            </tr>
						            <tr>
						                <td>Brielle Williamson</td>
						                <td>2012/12/02</td>
						                <td>$372,000</td>
						            </tr>
						            <tr>
						                <td>Herrod Chandler</td>
						                <td>2012/08/06</td>
						                <td>$137,500</td>
						            </tr>
						        </tbody>
						    </table>
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
	<script>
		$(document).ready(function() {
			$('#example').DataTable({
		        "language": {
		            "sProcessing":     "Procesando...",
					"sLengthMenu":     "Mostrar _MENU_ registros",
					"sZeroRecords":    "No se encontraron resultados",
					"sEmptyTable":     "Ningún dato disponible en esta tabla",
					"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
					"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					"sInfoPostFix":    "",
					"sSearch":         "Buscar:",
					"sUrl":            "",
					"sInfoThousands":  ",",
					"sLoadingRecords": "Cargando...",
					"oPaginate": {
						"sFirst":    "Primero",
						"sLast":     "Último",
						"sNext":     "Siguiente",
						"sPrevious": "Anterior"
					},
					"oAria": {
						"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
						"sSortDescending": ": Activar para ordenar la columna de manera descendente"
					}
		        }
		    });
		});
	</script>
</body>
</html>