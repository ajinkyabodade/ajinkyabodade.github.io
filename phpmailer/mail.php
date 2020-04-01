<?php

require'vendor/autoload.php';

$mail= new PHPMailer();

$maile-> Host='smtp.gmaile.com';

$mail-> SMTPAuth='true';

$mail-> Username='pnbodade@gmail.com';

$mail-> Password='28041965';

$mail->SMTPSecure='tls';

$mail-> Port=587;

$mail->SetForm('emns@emns.tk','EMNS');

$mail->addAddress('bodadeajinkya@gmail.com');

$mail->addReplyTo('emns@emns.tk','emns');

$mail->Subject'Emergency Notification';

$mail->Body='Sample mail content';

if($mail->send())
}
echo'Mail sent';
}
else
{
echo'Failed';

?>