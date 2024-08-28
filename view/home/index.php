
<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
		?>
		
<!DOCTYPE html>
<html>
			<?php require_once("../MainHead/head.php");?>
			<title Grupo Quest Help Desk</></title>

</head>
<body class="with-side-menu">

<?php require_once("..\MainHeader\header.php");?>

	<div class="mobile-menu-left-overlay"></div>

	<?php require_once("..\MainNav\Nav.php");?>
	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
        <div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							
							<ol class="breadcrumb breadcrumb-simple">
								
							
							</ol>
						</div>
					</div>
				</div>
			</header>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<?php require_once("../MainJS/js.php");?>

	<script type="text/javascript" src="home.js"></script>


</body>
</html>
<?php
	}
	else {
		header("location:" . Conectar::ruta() . "index.php");
	}
	
?>
