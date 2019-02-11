<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$message = "名前：" . $_POST["name"] . "\n本文：" . $_POST["message"];

if (mb_send_mail("hachigasaki@asa-hachigasaki.com", "お問合せ", $message, "From:" . $_POST["mail"]))
{
echo "メールが送信されました。";
} else {
echo "メールの送信に失敗しました。";
}
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>お問合せ</title>
</head>
<body>
  <p>メールが送信されました。</p>
</body>
</html>