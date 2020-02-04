<?php
$to      = 'shivkr1357@gmail.com';
$subject = 'Test mail sent by php mail function';
$message = 'hello';
$headers = implode(array(
    'From' => 'shivshankarkumar.pusa@gmail.com',
    'Reply-To' => 'shivshankarkumar.pusa@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
));

$result = mail($to, $subject, $message, $headers);

    if($result ==1){
        echo "<br> The mail has been sent ";
    }
?>