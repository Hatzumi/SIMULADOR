<?php  include ("header.php");
?>

<head>
	<!--Estilos-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
<div class = "container">
    <br></br>
	<div class = "col-sm-8"><h2>Declaraciones Provisionales</h2></div>

	<div class = "row">
		<form method = "POST">
			<div class = "col-md-4">
            <placeholder>RFC: </placeholder>
			<input type = "text" class = "form-control" name = "rfc" id = "rfc" required>
			</div>

			<div class = "col-md-6">
			<placeholder>Periodicidad: </placeholder>
			<input type = "text" class = "form-control" name = "periodicidad" id = "periodicidad" required>
			</div>

			<div class = "col-md-6">
			<placeholder>Año: </placeholder>
			<input type = "number" class = "form-control" name = "año" id = "año" required>
			</div>

			<div class = "col-md-6">
			<placeholder>Tipo de Declaración: </placeholder>
			<input type = "text" class = "form-control" name = "tipo" id = "tipo" required>
			</div>

			<div class = "col-md-6">
			<placeholder>Mes a Declarar:</placeholder> <i class="fa fa-address-book" aria-hidden="true"></i>
			<br></br>
			<select name = "periodo">
				<option>Enero</option>
				<option>Febrero</option>
				<option>Marzo</option>
				<option>Abril</option>
				<option>Mayo</option>
				<option>Junio</option>
				<option>Julio</option>
				<option>Agosto</option>
				<option>Septiembre</option>
				<option>Octubre</option>
				<option>Noviembre</option>
				<option>Diciembre</option>
			</select>
			</div>

            <br></br>
            <div class = "col-md-12 pull-right">
                <button type = "submit" class = "btn btn-success">Siguiente >> </button>
            </div>
		</form>

	</div>
	</div>
</body>

<?php  include ("footer.php");
?>