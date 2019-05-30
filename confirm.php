<?php
require_once(__DIR__ . '/functions.php');
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = "hachigasaki@asa-matsudo.com";
$from = "From:" . h($_POST["email"]);
$title =  "お問合せ";

$message = "名前：" . h($_POST["name"]) . '(' . h($_POST['kana']) . ')'. "\n本文：" . h($_POST["message"]);

if (!(mb_send_mail($to, $title, $message, $from))) {
  echo "メールの送信に失敗しました。";
  header('Location: http://www.asa-hachigasaki.com/');
  exit();
}

?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="5;URL=index.html">
  <title>ASA松戸八ヶ崎</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p|Passion+One" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>お問合せ</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"><span class="logo-head">ASA</span>松戸八ヶ崎</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav4">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" href="#">ホーム</a>
              </li>
          </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="container center-block mt-5">
      <div class="message">
        <div class="card card-default mx-auto text-center">
          <h5 class="card-heading">
            <p>お問い合わせ有難うございました。</p>
          </h5>
          <div class="card-body">
            <p>メールが送信されました。</p>
            <p>5秒後にジャンプします。<br>ジャンプしない場合は、以下のボタンをクリックしてください。</p>
            <button class="btn btn-success text-white" onclick="location.href='./index.html'">戻る</button>
          </div>
        </div>
      </div>
  </main>
</body>
</html>