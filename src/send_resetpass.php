<?php

mb_language('ja');
mb_internal_encoding('UTF-8');

$to = $_POST["email"];
$subject = "パスワード再設定";
$body = "パスワードを再設定するメールです。";
$headers = ["From"=>"system@posse-ap.com", "Content-Type"=>"text/plain; charset=UTF-8", "Content-Transfer-Encoding"=>"8bit"];
$pass =  uniqid(); 
$body = <<<EOT
こちらからパスワードを再設定してください。
http://localhost/auth/ressetpassword/?pass=${pass}
EOT;
include($_SERVER['DOCUMENT_ROOT'] . "/dbconnect.php");
$stmt = $db->query("UPDATE `users` SET `reset_pass`= \"$pass\" WHERE `email` = \"$to\"");
mb_send_mail($to, $subject, $body, $headers);
echo "メールを送信しました";