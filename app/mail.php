<?php
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);


        // Сюда введите Ваш email
        $emailTo = 'lineagecrem@mail.ru';
        $subject = 'Получено письмо с сайта Finger-food';
        $subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
        $headers = "From: ". $fromName ." <". $fromMail ."> \r\n";

        // тело письма
        $body = "Данные клиента:\nИмя: $name \nТелефон: $phone \nE-mail: $email \nСообщение: $message";

        // сообщение будет отправлено в случае, если поле с номером телефона не пустое
        if (mail($emailTo, $subject, $body, $headers, $fromMail )) {
            
            echo("Отправленно");

        };

        ?>