<?php

function emailSend($email, $name, $subject, $message)
{

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
            //$mail->SMTPDebug = 2;                 
            $mail->isSMTP();          
            $mail->Host       = settings('smtp_host');  
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = settings('smtp_email');                     
            $mail->Password   = settings('smtp_password');                                
            $mail->SMTPSecure = settings('smtp_secure');                                  
            $mail->Port       = settings('smtp_port'); 
            $mail->CharSet    = 'UTF8';                            

        //Recipients
            $mail->setFrom(settings('smtp_send_email'), settings('smtp_send_name'));
            $mail->addAddress($email, $name);
            //$mail->addAddress('ellen@example.com');
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

        // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');

        // Content
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $message;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
        //echo 'Mesajınız Gönderildi.';
    } catch (Exception $e) {
        return false;
        //echo "Mesajınız Gönderilmedi. {$mail->ErrorInfo}";
    }

}