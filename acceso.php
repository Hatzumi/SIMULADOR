<?php include ("header.php"); ?>

<head>
	<!--Estilos
	<link rel = "stylesheet" href = "css/estilos.css">-->
	<title> SIMULADOR del SAT </title>
</head>

<body>
<div class = "container w-50 bg-white mt-5 rounded shadow">
	<div class = "row align-items-stretch">
		<div class = "col bg d-none d-lg-block col-md-5 col-lg-5 col-lx-6 rounded">

		</div>
		<h2 class = "fw-bold text-center py-5"> - Bienvenido - </h2>
		<form method = "POST">
			<div class = "mb-3">
            <label class = "form-label">RFC: </label>
			<input type = "text" class = "form-control" name = "rfc" id = "rfc" required>
			</div>

			<div class = "mb-4">
			<label for = "password" class = "form-label">Contraseña: </label>
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
			<br></br>
			<div class = "my-3">
                <span> Olvidó su contraseña?  <a href = "recuperar_pass.php">Recuperar mi contraseña </a></span>
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