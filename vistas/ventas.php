<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>ventas</title>
	<?php require_once "menu.php"; ?>
	<?php require_once "dependencias.php" ?>
</head>
<body>

<div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
		 <h1>Venta de Mascotas</h1>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<span class="btn btn-default" id="ventaProductosBtn">Vender Mascota</span>
		 		<span class="btn btn-default" id="ventasHechasBtn">Reporte de Ganancias</span>
		 	</div>
		 </div>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<div id="ventaProductos"></div>
		 		<div id="ventasHechas"></div>
		 	</div>
		 </div>
	</div>
	</div>
	</div>
</body>
</html>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#ventaProductosBtn').click(function(){
				esconderSeccionVenta();
				$('#ventaProductos').load('ventas/ventasDeProductos.php');
				$('#ventaProductos').show();
			});
			$('#ventasHechasBtn').click(function(){
				esconderSeccionVenta();
				$('#ventasHechas').load('ventas/ventasyReportes.php');
				$('#ventasHechas').show();
			});
		});

		function esconderSeccionVenta(){
			$('#ventaProductos').hide();
			$('#ventasHechas').hide();
		}

	</script>

<?php 
	}else{
		header("location:../index.php");
	}
 ?>