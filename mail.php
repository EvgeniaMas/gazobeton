<?php

{
   // $mail="zayavka.biga@ya.ru";
    $mail="komradshapov@yandex.ru";
  // e-mail куда уйдет письмо

  $title="Заявка с сайта строительство-дома.site"; // заголовок(тема) письма

  $name = $_POST["name"];  
  $phone = $_POST["phone"];
  $action = $_POST["action"];

  $mess="<b>Новая заявка - </b>" .$action ."<br><b> Имя</b> <br>" .$name. "   <br> <b>телефон</b><br>" .$phone;


  $headers="MIME-Version: 1.0\r\n";

  $headers.="Content-type: text/html; charset=utf-8\r\n"; //кодировка

  $headers.="From: admin@".$_SERVER["SERVER_NAME"]; // откуда письмо (необязательнакя строка)

  mail($mail, $title, $mess, $headers); // отправляем


print"1";

}

?>