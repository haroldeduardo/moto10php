<?php

$alert='';
session_start(); // inicando la session

//se va validar  si la variable sesison existe en el momento de cargar la pagina
if(!empty($_SESSION['active'])){
    header('location:sistema/');
}

else{



$alert = '';
if (empty($_POST['usuario']) || empty($_POST['clave'])) {





    $alert = 'ingrese  su  usuario y su claves'; //empty si esta vacio

} else {




    require_once "conexion.php"; // ojo
    $user = $_POST['usuario'];
    $pass = $_POST['clave'];

    include_once "conexion.php";

    $query = mysqli_query($conexion, "select * from Usuario  where userEmp ='$user' and passEmp='$pass' ");



    $result = mysqli_num_rows($query); //guarad el resultado de la consulta

    if ($result > 0) {


        $data = mysqli_fetch_array($query); // como se devuleve en query lo guardamos en un array

      

        //creacion de la variables de session
        $_SESSION['active'] = true;
        $_SESSION['iduser'] = $data['idUusario']; //se crea una variable sessio iduser la cual ingresa en el array
        //$data la cual tiene los datos de  la tabla usuario de la bd y  asi con la demas variables de  la tabla
        $_SESSION['nombre'] = $data['userEmp'];
        $_SESSION['empleado'] = $data['idEmpleado'];

        //se va redireccionar a la pagina  del sistema

        header('location:sistema/');;
    } else {
        $alert = 'el usuario y la clave son incorrecto'; //empty si esta vacio
        session_destroy(); //de destruye la session cuando  los datos  son invalidos
        
    }
}



}


?>


<!DOCTYPE html>
<html lang="en">


<head>



    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
-->
    <style>



    </style>

    <title></title>


</head>

<body>



    <section id="container">

        <form action="" method="post">
            <h2>MOTO10RACING</h2>
            <h3>M10R</h3>
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="clave" placeholder="Contraseña">
            <div class="alert"><?php echo isset($alert)? $alert: ''; ?></div><!-- en php estamo  diciendo que nos imprima
             en el caso que exita alert  y si esta vacio que no los imprima nada es un if resumido-->
            <input type="submit" value="INGRESAR">

        </form>

    </section>

    <footer>
        <h4>
            moto10racing<br>
            by GreenApps S.A.S
            <h4>
    </footer>
</body>