<?php

$recepient = trim($_POST["email"]);;
$siteName = "BooksCatalog";
$date=NOW();

$name = trim($_POST["name"]);
$message = "Dear $name! \n Your order has been successfully completed at $date!";

$pagetitle = "Request on site \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: BooksCatalog");

?>