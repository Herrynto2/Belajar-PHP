<?php

function validasi_user($username)
{
    $min = 5;
    $max = 9;
    //Cek apakah panjanag username = 5-9 
    if (strlen($username) > $max || strlen($username) < $min) {
        echo "Harus 5-9 karakter";
    } elseif(preg_match('@[A-Z]@', $username)) {
        echo "Terdapat huruf besar";
    } elseif (preg_match('@[0-9]@', $username)) {
        echo "Terdapat angka";
    } elseif (preg_match('@[!,~,`,#,$,%,&,^,*,(,),-,?,<,>]@', $username)) {
        echo "Terdapat simbols";
    } else {
        echo "Username valid";
    }
    echo "<br><br>";
}

function validasi_pass($password)
{
    $min = 8; 
    if (strlen($password) < $min) {
        echo "Panjang karakter harus min 8";
     } elseif (preg_match('@[A-Z]@', $password) < 1) {
         echo "Huruf besar harus min 1 karakter";
     }  elseif (preg_match('@[0-9]@', $password) < 1) {
        echo "Angka harus min 1 karakter";
     } elseif (preg_match('@[!,~,`,#,$,%,&,^,*,(,),-,?,<,>]@', $password) < 1) {
        echo "Simbol harus min 1 karakter";
     } else {
         echo "Password valid";
     }
}
validasi_user("herryy");
validasi_pass("putriiuiI9$");
?>