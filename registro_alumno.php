<?php include ("header.php"); ?>

<head>
	<!--Estilos
	<link rel = "stylesheet" href = "css/estilos.css">-->

</head>

<body>
<div class = "container w-50 bg-white mt-5 rounded shadow">
	<div class = "row align-items-stretch">
		<div class = "col bg d-none d-lg-block col-md-5 col-lg-5 col-lx-6 rounded">

		</div>
		<h2 class = "fw-bold text-center py-5"> - Registro de Alumnos - </h2>
		<form method = "POST">
			<div class = "mb-4">
            <label class = "form-label">Nombre Completo </label>
			<input type = "text" class = "form-control" name = "nombrec" id = "nombrec" required>
			</div>

            <div class = "mb-4">
            <label class = "form-label">Grado </label>
			<input type = "text" class = "form-control" name = "grado" id = "grado" required>
			</div>

            <div class = "mb-4">
            <label class = "form-label">Grupo </label>
			<input type = "text" class = "form-control" name = "grupo" id = "grupo" required>
			</div>

			<div class = "mb-4">
			<label class = "form-label">Obligaciones </label>
			<input type = "text" class = "form-control" name = "obligaciones" id = "obligaciones" required>
			</div>

            <div class = "mb-4">
			<label class = "form-label">RFC </label>
			<input type = "text" class = "form-control" name = "rfc" id = "rfc" required>
			</div>

            <div class = "mb-4">
			<label for = "password" class = "form-label">Contraseña </label>
			<input type = "password" class = "form-control" name = "contraseña" id = "contraseña" required>
			</div>

			<div class = "row">
				<div class = "col">
					<button id = "btnRFID" type = "button" class = "btn btn-outline-success w-100 my-1">
						RFID
					</button>
					<button id = "btnLOAD" type = "button" class = "btn btn-outline-success w-100 h-100 my-1">
						<div class="d-flex justify-content-center">
  							<div class="spinner-border text-success" role="status">
    							<span class="visually-hidden">Loading...</span>
  							</div>
						</div>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#btnLOAD").hide();
	});
	$(document).ready(function() {
		$("#btnRFID").click(function() {
			$(this).hide();
			$('#btnLOAD').html(
			);
		});
	});
</script>

</body>

<?php include ("footer.php"); ?>