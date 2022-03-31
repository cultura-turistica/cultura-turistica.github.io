<?php 

error_reporting(0); 

/* $nombre = $_POST['nombre']; 
$correo_electronico= $_POST['email']; 
$poblacion = $_POST['poblacion']; 
$sexo=$_POST['GrupoOpciones1']; 
$aficiones=$_POST['comentarios']; 
$radio= $_POST['GrupoOpciones2']; 
$opinion=$_POST['opinion']; 
$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
$mensaje .= "sexo" . $_POST['GrupoOpciones1'] . " \r\n"; 
$mensaje .= "aficiones " . $_POST['comentarios'] . " \r\n"; 
$mensaje .= "que opinas de nuestra pagina" . $_POST['GrupoOpciones2'] . " \r\n"; 
$mensaje .="danos tu opinion".$_POST['opinion'] . " \r\n"; 

$para = 'cultursas@gmail.com'; 
$asunto = 'Comunicacion desde la pagina web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente';  */
/* $name = 
$email =
$tel =
$company_name
$asunto =
$msg = */

if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['tel']) 
    && !empty($_POST['asunto']) && !empty($_POST['msg'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $company_name = $_POST['company_name'];
        $asunto = $_POST['asunto'];
        $msg =   $_POST['msg'];
        $header ="From: cultursas@gmail.com"."\r\n";
        $header.= "Reply-To: cultursas@gmail.com"."\r\n";
        $hader.="X-Mailer: PHP/".phpversion();
        $mail = @mail($email,$asunto,$msg,$header);
        if($mail){
            echo"<h4> ¡ Mensaje enviado exitosamente!</h4>";
        }
    }
}
?> 