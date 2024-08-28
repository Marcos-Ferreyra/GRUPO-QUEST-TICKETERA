<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
		?>
		
<!DOCTYPE html>
<html>
			<?php require_once("../MainHead/head.php");?>
			<title Grupo Quest Nuevo Ticket</></title>

</head>
<body class="with-side-menu">

<?php require_once("..\MainHeader\header.php");?>

	<div class="mobile-menu-left-overlay"></div>

	<?php require_once("..\MainNav\Nav.php");?>
	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

        <header class="section-header">


				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>	
            <div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podrá generar nuevos Tickets
				</p>

				<h5 class="m-t-lg with-border">Detalles del Ticket</h5>

				<div class="row">
	<form method="post" id="ticket_form">
		<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION['usu_id']; ?>">
		
		<div class="col-lg-6">
			<fieldset class="form-group">
				<label class="form-label semibold" for="exampleInput">Categoría</label>
				<select id="cat_id" name="cat_id" class="form-control">
					<!-- Opciones de categorías irían aquí -->
				</select>
			</fieldset>
		</div>
		
		<div class="col-lg-6">
			<fieldset class="form-group">
				<label class="form-label" for="exampleInputEmail1">Título</label>
				<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="" value="">
			</fieldset>
		</div>
		
		<div class="col-lg-12">
    <fieldset class="form-group">
        <label class="form-label" for="tick_descrip">Descripción</label>
        <div class="summernote-ES">
            <textarea id="tick_descrip" class="summernote" name="tick_descrip"></textarea>
        </div>
    </fieldset>
</div>

		<div class="col-lg-12">
			<button type="submit" name="action" value="add" class="btn btn-nav btn-rounded btn-inline btn-custom">Guardar</button>
		</div>
	</form>
</div><!--.row-->

            
      
	
    
        </div><!--.Contenido-->

	<?php require_once("../MainJS/js.php");?>

	<script type="text/javascript" src="Nuevoticket.js"></script>


</body>
</html>
<?php
	}
	else {
		header("location:" . Conectar::ruta() . "index.php");
	}
	
?>
