<?php


$to="hk0527075@gmail.com";
$subject="test mail";
$message="my name is hussain";
$from="hfaheem849@gmail.com";
$header="From : $from";

mail($to,$subject,$message,$header);
echo("mail send");










?>