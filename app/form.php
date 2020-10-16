<?php 
if(isset($_POST['submit-form'])){
    $to = "lineagecrem@mail.ru";
    $name = $_POST['name'];
    $email = $_POST['e-mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    mail($to, $name, $email, $phone, $message )
}
?>