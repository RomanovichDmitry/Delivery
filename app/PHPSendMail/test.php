<?php
#  ��� �������� ���� ��� �������� ����������������� ���� ����������� �������. �������� ��������
#  ���������� $mail ���� �� ���� ����������� �����, � ����� ��������� ���� ���� � ���� �� ������
#  � ����� �����, ��� �������� ������ �������� PHP. ���������� ����� �� ���� 644. ����� ����� �����
#  ������ ��������� ������ �������� (������ 711). ��������� ������ � ��������� ��������� ���� e-mail.
#  ���� ��������� �� ��������, �� �� �����-�� �������� �� �� ������ ���������� �����, � �� �����
#  ������ ������������� �������� ������. ���� �� ��� ������� �� ������ ������, ���������� �� ���-
#  ������������� � (���) �������� ������ ��������� �������� � ���, ��� ��� ��������. � ������,
#  ���� ��� �������� �� ������ � �������, ����� ��������� �� ���� �������� �������� ������.

# �������������� �������� ���������� $mail:
$mail = "lineagecrem@mail.ru";

# ���� ������ ������ �� �����
error_reporting (E_ALL);
  function go_exit ($message,$color) {
  echo "<html><head><meta http-equiv=\"content-language\" content=\"ru\">\r\n";
  echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1251\">\r\n";
  echo "<title>�������� ������������������ ������� PHP SendMail</title>\r\n";
  echo "<style type=\"text/css\">{ }<!-- p { font-family: Verdana, Arial } --></style></head><body>\r\n";
  echo "<center><p><b><font color=\"#".$color."\">".$message."!</font></b></p></center></body></head></html>\r\n";
  exit();
  }
  if (function_exists("imap_binary")) {
  # ����������� � ������ base64, � ����� ��������� ����� ����� ��������� " \ ( )
    function mail_convert($str) {
    $str = trim(imap_binary(addcslashes($str, "\"!@\\!@(!@)")));
    return $str;
    }
  $subject = "=?Windows-1251?B?".trim(imap_binary("�����������!"))."?=";
  $headers  = "From: =?Windows-1251?B?".mail_convert("������")."?= <postmaster@adultsingles.com>\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Transfer-Encoding: 8bit\r\n";
  $headers .= "Content-Type: text/plain; charset=\"Windows-1251\"\r\n";
  $headers .= "X-Mailer: PHP v.".phpversion();
  $message  = "�����������!\n\n���� �� ������ ������ ��� ���������, ��� ������ � ���������� �������� � ���� ������ �";
  $message .= " ����������, �� ������ ���������� � ��������� ��������� �������.";
    if (mail("=?Windows-1251?B?".mail_convert("����������")."?= <".$mail.">",$subject,$message,$headers)) {
    go_exit ("�������� ��������� ������� ���������� - ��������� e-mail ".$mail,"009900");
    }
    else {
    go_exit ("����� ������� &quot;mail&quot; - �������� � �������������� �������� �� ������������ �� ������","CC0000");
    }
  }
  else {
  go_exit ("���������� ������� &quot;imap_binary&quot; - ���������� � �������������� ��������","CC0000");
  }
?>
