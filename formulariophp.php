<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Configuración del correo
    $destinatario = "isaac360.leal@gmail.com"; // Reemplaza con tu correo
    $asunto = "Nueva respuesta del formulario";

    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre completo']);
    $correo = htmlspecialchars($_POST['correo electronico']);
    $mensaje = htmlspecialchars($_POST['porque quieres ganar']);

    // Formatear el contenido del correo
    $contenido = "Has recibido una nueva respuesta del formulario:\n\n";
    $contenido .= "Nombre: $nombre\n";
    $contenido .= "Correo Electrónico: $correo\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Enviar el correo
    $cabeceras = "From: $correo\r\nReply-To: $correo\r\n";
    if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
        echo "¡Gracias! Tu mensaje se envió correctamente.";
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, intenta nuevamente.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
