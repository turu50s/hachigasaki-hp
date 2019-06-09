<?php
require_once(__DIR__ . '/functions.php');
mb_language("Japanese");
mb_internal_encoding("UTF-8");

header('Content-type: text/plain; charset= UTF-8');
// $to = "hachigasaki@asa-matsudo.com";
$to = "sigeru0216@gmail.com";
$from = "From:" . h($_POST["email"]);
$title =  "お問合せ";

$message = "名  前         ：" . h($_POST["name"]) . '(' . h($_POST['kana']) . ')'. 
          "\n住  所         ：" . h($_POST["address"]) .
          "\nメールアドレス：" . h($_POST["email"]) .
          "\n本  文         ：" . h($_POST["message"]);

// echo $message;

if (!(mb_send_mail($to, $title, $message, $from))) {
  echo "メールの送信に失敗しました。";
  // header('Location: http://www.asa-hachigasaki.com/');
  // exit();
} else {
  echo $message;
}
