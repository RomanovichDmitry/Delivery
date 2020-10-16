
<?php
$result = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $name   = isset($_POST['name']) ? test_input($_POST['name']) : '';
  $phone  = isset($_POST['phone']) ? test_input($_POST['phone']) : '';
  $email = isset($_POST['email']) ? test_input($_POST['email']) : '';
  $message = isset($_POST['message']) ? test_input($_POST['email']) : '';

  if ($name && $phone) {
    $to  = "lineagecrem@mail.ru";
    $subject = "Заявка на обратный звонок";
    $message = "<p>Пользователь с именем <storng>$name</storng> <br> и телефоном <strong>$phone</strong> <br> попросил перезвонить.</p>";

    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: <mail@romanovichdmitriy.ru/>\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() ."\r\n";
    //$headers .= "Reply-To: reply-to@example.com\r\n";

    $mail_status = mail($to, $subject, $message, $headers);

    $result['success'] = true;
    $result['message'] = 'Ваша заявка успешно обработана!';
    $result['mailStatus'] = $mail_status;

  } else {
    $result['success'] = false;
    $result['message'] = 'Одно или несколько полей заполнено неправильно!';
  }

  response($result);

} else {
  $result['success'] = false;
  $result['message'] = 'Не корректный метод отправки формы';

  response($result);
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function response($result) {
  echo json_encode($result);
  exit();
}