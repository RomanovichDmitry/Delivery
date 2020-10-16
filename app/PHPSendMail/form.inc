<table border="1" cellpadding="6" cellspacing="0" bordercolor="#999999" bgcolor="#F5F5F5">
  <tr>
    <td>
      <table border="0" cellpadding="3" cellspacing="0">
        <tr>
          <td align="right">
            <p class="T">Ваше имя:</td>
          <td nowrap><input style="width: 160px" class="F2" maxlength="35" name="name" <?php if (!empty($_POST['name'])) echo " value=\"".$_POST['name']."\""; ?>size="14"></td>
        </tr>
        <tr>
          <td align="right">
            <p class="T">E-Mail:</td>
          <td><input style="width: 160px" class="F2" maxlength="35" name="email" <?php if (!empty($_POST['email'])) echo " value=\"".$_POST['email']."\""; ?>size="14"></td>
        </tr>
        <tr>
          <td align="right">
            <p class="T">Заголовок:</td>
          <td><input style="width: 200px" class="F2" maxlength="45" name="subject" <?php if (!empty($_POST['subject'])) echo " value=\"".$_POST['subject']."\""; ?>size="14"><a style="color: #F5F5F5; text-decoration: none" target="_blank" href="http://www.jpcars.com">.</a><a style="color: #F5F5F5; text-decoration: none" target="_blank" href="http://www.jpcars.ru">.</a></td>
        </tr>
<?php
$t['c'] = file($config['recip_f']);
$t['n'] = sizeof($t['c']);
  if ($t['n'] > 1) {
  echo "        <tr>\r\n";
  echo "          <td align=\"right\">\r\n";
  echo "            <p class=\"T\">Получатель:</td>\r\n";
  echo "          <td><select style=\"width: 200px\" class=\"F2\" size=\"1\" name=\"recip\">\r\n";
  if (!empty($_POST['recip'])) $config['recip_n'] = intval($_POST['recip']);
  $config['recip_n']--;
    for ($i=0;$i<$t['n'];$i++) {
    $t['c'][$i] = explode("|",trim($t['c'][$i]));
    echo "          <option "; if ($i == $config['recip_n']) echo "selected "; echo "value=\"".($i+1)."\">".$t['c'][$i][1]."</option>\r\n";
    }
  echo "          </select></td>\r\n";
  echo "        </tr>\r\n";
  }
  else {
  echo "        <input type=\"hidden\" value=\"1\" name=\"recip\">\r\n";
  }
?>
        <tr>
          <td align="right" valign="top">
            <p class="T">Сообщение:</td>
          <td><textarea class="F3" name="message" rows="6" cols="45"><?php if (!empty($_POST['message'])) echo htmltoform($_POST['message']); ?></textarea></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
