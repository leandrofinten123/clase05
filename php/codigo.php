<?php

//Guardado de los datos del formulario 

//$_POST -> Método por el que PHP espera recibir el dato
//$nombre = (armar la caja)
$nombre = $_POST['nombre']; //Crear una caja con la etiqueta $nombre y guardar el texto que el usuario escribió en el elemento de formulario con el atributo name="nombre"
$email = $_POST['email']; //Crear una caja con la etiqueta $email y guardar el texto que el usuario escribió en el elemento de formulario con el atributo name="email"
$comentarios = $_POST['comentarios'];
$servicio = $_POST['servicio'];
//$animales = $_POST['animales']; //[animales]
//$pais = $_POST['paises']; //[pais]



//Armado del mail

$to = 'sumail@gmail.com'; //Crear la caja con la etiqueta $to y guardar el texto sumail@gmail.com
$email_subject = "Nuevo mensaje: de la web"; 
$email_body = "Haz recibido un nuevo mensaje 
              \n Nombre: $nombre 
              \n Correo: $email
              \n Consulta por el siguiente servicio: $servicio 
              \n Mensaje o consulta: \n $comentarios \n"; 
$headers = "From: $email";




//Envió del mail

//$to (usar lo que contiene la caja)
mail($to, $email_subject, $email_body, $headers); 

/*
    Función === Acción
    mail() === Función === Acción === Mandar un mail
        => Datos necesarios para mandar un mail
            => mail de remitente (¿Quién manda el mail?)
                -> $headers
            => mail de destinatario (¿Quién recibe el mail?)
                -> $to
            => asunto (¿De qué va el mail?)
                -> $email_subject
            => texto (el mail)
                -> $email_body

*/

//Texto que aparece cuando se manda el mail
echo 'Pronto nos estaremos comunicando con usted!';
?>
<br>
<br>
<button><a href="../index.html">Volver</a></button>