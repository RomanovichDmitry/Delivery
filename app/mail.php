<?php
        $name = trim($_POST['first-name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);

        // указываем адрес отправителя, можно указать адрес на домене Вашего сайта
        $fromMail = 'info@romanovichdmitry.ru';
        $fromName = 'Форма в футере Форма';

        // Сюда введите Ваш email
        $emailTo = 'lineagecrem@mail.ru';
        $subject = 'Форма обратной связи на php';
        $subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
        $headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
        $headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

        // тело письма
        $body = "Получено письмо с сайта testsite.ru \n Имя: $name\nТелефон: $phone \n E-mail: $email\nСообщение: $message";

        // сообщение будет отправлено в случае, если поле с номером телефона не пустое
        if (strlen($phone) > 0) {
            $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
            echo ("ПИСЬМО ОТПРАВЛЕНО!!");
        }

        ?>