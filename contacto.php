 <!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

formulario 
<form action="send.php" method="post" name="contacto" id ="contacto" > 

Nombre completo <input name="nombre" type="text" id="nombre completo"size="30" maxlength="100"> 
<br> 
<br> 
Correo electronico <input name="email" type="text" onBlur="MM_validateForm('email','','gmail');return document.MM_returnValue" size="25" maxlength="100" > 
<br> 
<br> 
Población <input name="poblacion" type="text" onBlur="MM_validateForm('poblacion','','R');return document.MM_returnValue" size="20" maxlength="60"> 
<br> 
<br> 
Sexo 
<br> 
<br> 
<input type="radio" name="GrupoOpciones1" value="1"id="GrupoOpciones1_0" /> 
Hombre 
<br> 
<input type="radio" name="GrupoOpciones1" value="2"id="GrupoOpciones1_1"/> Mujer 
<br> 
<br> 
Aficiones 
<br> 

<textarea cols="50" rows="5" name="comentarios"></textarea> 
<br> 
<br> 
Que opina de nuestra pagina 
<br> 
<br> 
<input type="radio" name="GrupoOpciones2" value="mucho" >me ha gustado mucho 
<br> 
<input type="radio" name="GrupoOpciones2" value="regular" >no esta mal
<br> 
<input type="radio" name="GrupoOpciones2" value="mal" >no me ha gustado nada 
<br> 
<br> 
Danos tu opinion 
<br> 
<textarea cols="50" rows="5" name="opinion"></textarea> 
<br> 
<br> 
<input type="submit" value="Enviar formulario"> 
<input type="Reset" value="Borrar datos"> 

</form>   -->
<!-- 
$destino =$_POST['cultursas@gmail.com'];
$asunto = "suscripcion a nocias";

$comentario="
	Email:$_POST[email]
	Comentar:$_POST[com]
";

$headers='FROM: '.$_POST['email']."\r\n".
'Reply-To:'.$_POST['email']."\r\n".
'X-Mailer:PHP/'.phpversion();

mail($destino,$asunto,$comentario,$headers);

echo"mensaje enviado"
 -->

 
</body>
</html>