<?php
include 'login.php';
session_start();
if(!empty ($_SESSION['active']))
{
    echo "<script>
    alert('No Puede volver al inicio');
    location.href='/sistema';
</script>";
    
}else{
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

$sql = $con-> query ("SELECT * FROM usuarios WHERE usuario = '".$usuario."' and clave='".$contra."'");

$nr = mysqli_num_rows($sql);
if($nr == 1) {
        $data = mysqli_fetch_array($sql);

    $_SESSION['active'] = true;
    $_SESSION['idUser'] = $data['idusurio'];
    $_SESSION['nombre'] = $data['nombre'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['user'] = $data['usuario'];
    $_SESSION['rol'] = $data['rol'];
       // echo "Nuevo registro guardado";

	echo "<script>
                alert('Bienvenido');
                location.href='/sistema';
    </script>";
} else if ($nr == 0) {

    echo "<script>
                alert('Usuario o Contraseña incorrecta');
                location.href='index';
    </script>";
    //session_destroy();
}
}


