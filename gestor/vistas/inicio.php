<?php 
session_start();

if (isset($_SESSION['usuario'])) {
	include "header.php";
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12" style="text-align: center;">
				<div class="jumbotron">
					<h1 class="display-4">GESTOR DE ARCHIVO EN PHP Y MYSQL</h1>
					<p class="lead">PAGINA WEB CREADA PARA GESTIONAR TUS ARCHIVOS</p>
					<hr class="my-4">
					<p><img src="../img/android.jpg" class="img-thumbnail" width="300px" /></p>
					<p class="lead">
					<a class="btn btn-primary btn-lg" href="https://www.youtube.com/watch?v=UEgb-rpytwQ&list=PLoRfWwOOv4jyc4AGixmxVA3YLoQLraDDG&index=1" role="button">FUENTE</a>
					
					<a class="btn btn-primary btn-lg" href="https://www.youtube.com/channel/UCEJD8IkseO_6Cscby8DSU0A" role="button">CANAL</a>
						
					</p>
				</div>


			</div>
		</div>
	</div>

	<?php
	include "footer.php"; 
} else {
	header("location:../index.php");
}
?>