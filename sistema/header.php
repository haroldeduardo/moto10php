<?php

session_start(); // inicando la session

//se va validar  si la variable sesison existe en el momento de cargar la pagina
if(empty($_SESSION['active'])){
    header('location: ../moto10.php');
}

?>





<header>
		<div class="header">
			
			<h1>Sistema Facturación</h1>
			<div class="optionsBar">
				<p>Guatemala, 20 noviembre de 2017</p>
				<span>|</span>
				<span class="user">Julio Estrada</span>
				
				<img class="photouser" src="img/user.png" alt="Usuario">
				<a href="salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
		<?php include "nav.php";?>
	</header>