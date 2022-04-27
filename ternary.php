<?php

/* condition ? value_if_true : value_if_false ; */

// EXEMPLE BEGIN
$age = 24;
$is_adult = ($age >= 18) ? true : false;    // $is_adult is true
// EXEMPLE END



$gender = 'M';
$hello = ($gender == 'F') ? "Welcome back Ma'am !" : "Welcome back Sir !";

echo $hello;

?>