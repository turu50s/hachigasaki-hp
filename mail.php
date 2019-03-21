<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$message = "名前：" . "test" . '(' . "test" . ')'. "\n本文：" . "テスト";

// mb_send_mail("test@asa-matsudo.com", "お問合せ", $message , "From:test@gmail.com");
if (!(mb_send_mail("test@asa-matsudo.com", "お問合せ", $message , "From:test@gmail.com")))
{
echo "メールの送信に失敗しました。";
header('Location: http://www.asa-hachigasaki.com/');
exit();
}
?>