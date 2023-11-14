<?php

//Definiowanie stałej z danymi do logowania
define('USERS' , [
    'u1' => '7c6a180b36896a0a8c02787eeafb0e4c',
    'u2' => '6cb75f652a9b52798eb6cf2201057c73',
    'u3' => '819b0643d6b89dc9b579fdfc9094f28e'
]);

//Funkcja sprawdzająca poprawność przesłanych danych logowania
function checkLoginData($login, $password){
    if(array_key_exists($login, USERS) && USERS[$login] === md5($password)){
        return true; 
    }
    else{
        return false; 
    }
}

?>