<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
        $secretKey = "6LfGxBwTAAAAAFycodYmMbqdZXZSnZyvQ2_CGCqd";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if($responseKeys['success'] === true ) {

            $name = strip_tags(trim($_POST["name"]));
            $name = str_replace(array("\r","\n"),array(" "," "),$name);
            $contact = strip_tags(trim($_POST["contact"]));
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
            $tel = strip_tags(trim($_POST["telefon"]));
            $message = trim($_POST["message"]);

            if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Set a 400 (bad request) response code and exit.
                http_response_code(400);
                echo "Oops! Problem z przesłaniem danych, sprawdz wszystkie pola i spróbuj ponownie.";
                exit;
            }


            require 'phpmailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPOptions = array( // DO SPRAWDZENIA
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );// Set mailer to use SMTP
            $mail->Host = 'www.poczta.fm;poczta.interia.pl';
            $mail->SMTPAuth = true;
            $mail->Username = 'blogasek.blogasek@interia.pl';
            $mail->Password = 'blogasek13';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //DO ZAMIANY
            $mail->From = 'blogasek.blogasek@interia.pl';
//            $mail->FromName = 'blogasek.blogasek@interia.pl';

            $mail->addAddress('blogasek.blogasek@interia.pl');
            if($contact === 'aktyn'){
                $mail->addAddress('markul2@o2.pl');
            }else if($contact === 'kasy'){
                $mail->addAddress('kulamarcin2@gmail.com');
            }else if($contact === 'komputery'){
                $mail->addAddress('qulapgo@gmail.com');
            }

            $mail->isHTML(false);
            $mail->setLanguage('pl');
            $mail->CharSet = 'UTF-8';

            $mail->Subject = "Nowa wiadomość od ".$name;
            $mail->Body = "Formularz strony.\r\nW sprawie:".$contact."\r\nNazwa: ".$name."\r\nE-mail: ".$email."\r\nTelefon: ".$tel."\r\nTreść:\r\n".$message;

            if(!$mail->send())
            {
                http_response_code(500);
                echo "Niestety, Twoja wiadomość nie została wysłana.";
            }
            else
            {
                http_response_code(200);
                echo "Dziękujemy! Twoja wiadomość została przesłana.";
            }



        }else{
            //BLAD captchy
            http_response_code(500);
            echo "Bład reCAPTCHA, zaznacz ponownie!";
        }
    }
    else{
        //blad
        http_response_code(500);
        echo "Bład reCAPTCHA, zaznacz ponownie!";
    }




} else {
    http_response_code(403);
    echo "Wiadomość nie została wysłana, spróbuj poonownie później.";
}

?>