<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];


    $to = "l_vayss@gmail.com";

  
    $subject = "Обратная связь от $name";

   
    $email_message = "Имя: $name\n";
    $email_message .= "Телефон: $phone\n";
    $email_message .= "Сообщение:\n$message";

    mail($to, $subject, $email_message);

}
?>