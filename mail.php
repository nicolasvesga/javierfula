<?php
/** 
 * Author: Shadow Themes
 * Author URL: http://shadow-themes.com
 */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # Replace this email with your email address
        $mail_to = "javierricardofulaliz@gmail.com";

        # Message Subject. You can modify that string with your message.
        $subject = "Mensaje desde la web";
		
		# Collect Data
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $message = nl2br($_POST["message"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($subject) OR empty($message)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Por favor complete el formulario e intente nuevamente.";
            exit;
        }
        
        # Mail Content
        $content = "Name: $name<br>";
        $content .= "Email: $email<br>";
        $content .= "Phone: $phone<br><br>";
        $content .= "Message:<br>$message<br>";
		
        # email headers.
        $headers = 	"From: " . $email . "\r\n" .
					"MIME-Version: 1.0" . "\r\n" . 
					"Content-type: text/html; charset=utf-8" . "\r\n";

        # Send the email.
        if (mail($mail_to, $subject, $content, $headers)) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Tu mensaje ha sido enviado.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Algo salió mal, no pudimos enviar tu mensaje.";
        }
	} else {
		# Not a POST request, set a 403 (forbidden) response code.
		http_response_code(403);
		echo "Hubo un problema con su envío. Vuelva a intentarlo.";
	}
?>