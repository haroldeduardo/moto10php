<?php

session_start(); // inicando la session

//se va validar  si la variable sesison existe en el momento de cargar la pagina
if (empty($_SESSION['active'])) {
	header('location: ../moto10.php');
}

?>





<header>
	<div class="header">




		<h1>ALMACEN MOTO10</h1>
		<? echo $_SESSION['iduser']; ?>
		<div class="optionsBar">
			<p><?php echo fechaC() ?></p> <!-- para que muestre la fecha actual del sistemas-->
        <span class="user"><?php echo$_SESSION['nombre']?></span>
		

		


			


		


			<img class="photouser" src="img/user.png" alt="Usuario">
			<a href="salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			<!--<img class="logo" src="img/logo.png" alt="logo" title="logo"></a>-->

		</div>
	</div>
	<?php include "nav.php"; ?>
</header>