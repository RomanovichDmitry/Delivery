<?php
    $to = "lineagecrem@mail.ru";

    $name = $_POST['first-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $phone = htmlspecialchars($phone);
    $message = htmlspecialchars($message);

    $name = urldecode($name);
    $email = urldecode($email);
    $phone = urldecode($phone);
    $message = urldecode($message);

    $name = trim($name);
    $email = trim($email);
    $phone = trim($phone);
    $message = trim($message);

    if (mail("lineagecrem@mail.ru",
        "Заявка с сайта",
        "Имя отправителя:" .$name. "\n",
        "Почта:" .$email. "\n",
        "Телефон:" .$phone. "\n",
        "Комментарий:" .$message. "\n")
        ) {
            echo ("Заявка успешно отправлена!");
        } else {
            echo ("Заполните обязательные поля");
        };
        ?>