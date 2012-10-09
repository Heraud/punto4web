<?php
// check form  
if (@$_POST['email'] != "") {

    // email de destino
    $email = "hesleither@gmail.com";
    
    // asunto del email
    $subject = "Contacto - publicidadpunto4.com";
    
    // Cuerpo del mensaje
    $mensaje = "--------------------------------------------- \n";
    $mensaje.= "         Contacto publicidadpunto4.com  \n";
    $mensaje.= "--------------------------------------------- \n";
    $mensaje.= "NOMBRE:   ".$_POST['nombre']."\n";
    $mensaje.= "EMAIL:    ".$_POST['email']."\n";
    $mensaje.= "TELEFONO: ".$_POST['telefono']."\n";
    $mensaje.= "FECHA:    ".date("d/m/Y")."\n";
    $mensaje.= "HORA:     ".date("h:i:s a")."\n";
    $mensaje.= "IP:       ".$_SERVER['REMOTE_ADDR']."\n\n";
    $mensaje.= "---------------------------------- \n\n";
    $mensaje.= $_POST['mensaje']."\n\n";
    $mensaje.= "--------------------------------------------- \n";
    $mensaje.= "Enviado desde http://wwww.publicidadpunto4.com \n";
    
    // headers del email
    $headers = "From: ".$_POST['email']."\r\n";
    
    // Enviamos el mensaje
    if($_POST['email']!="" && $_POST['mensaje']!="")
    {
        if (mail($email, $subject, $mensaje, $headers)) {
            echo "Su mensaje fue enviado correctamente";
        } else {
            echo "Error de envío";
        }
    }else{
        echo "el campo email y/o mensaje estan vacias";
    }
}
?>