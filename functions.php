<?php
session_start();
function pswGenerator()
{
    $alfabeto = 'abcdefghijklmnopqrstuvwxyz';
    $alfabetoUpper = strtoupper($alfabeto);
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()_+';
    $thePsw = $alfabeto . $alfabetoUpper . $numeri . $simboli;
    $passwordLength = $_SESSION['psw'];

    for ($i = 0; $i < $passwordLength; $i++) {
        $psw = substr($thePsw, rand(1, strlen($thePsw)), 1);
        echo $psw;
    }
}
?>