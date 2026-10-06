<?php
require_once("models/Usuario.php");
require_once("models/Producto.php");
require_once("models/Orders.php");
require_once("models/OrderItems.php");

session_start();
$info = "";

//acciones
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: index.php");
    exit();
}



if(isset($_GET['login'])){

    if(isset($_POST['username']) && isset($_POST['password'])){
        $q="SELECT * from users where name='".$_POST['username']."'";

        $result=$db->query($q);
        if($row=$result->fetch_assoc()){
            if($row['password']==md5($_POST['password'])){
                $_SESSION['user']=
                new Usuario($row['id'],$row['nombre']);
            }
            else $info="contraseña incorrecta";
        }
        else $info="usuario no encontrado";
    }

}

// REGISTER
if (isset($_GET['register']) ) {
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password'])) {
        if ($_POST['contraseña'] == $_POST['contraseña2']) {
            $usuario = $_POST['nombre'];
            $contraseña = md5($_POST['contraseña']);

            $q = "INSERT INTO users (name, password) VALUES ('$usuario', '$contraseña')";

            if ($bd->query($q)) {
                $info = "¡Registro completado!";
            } else {
                $info = "Error al registrar usuario";
            }
        } else {
            $info = "Las contraseñas no coinciden";
        }
    }
}

?>