<?php 
    // funzione crea pw
    function create_pw($lunghezza){
        $caratteri='ABCDEFGHIJKLMNOPQRSTUWXYZabcdefghijklmnopqrstuvwxyz1234567890\!"£$%&/()=?^';
        // la pw dovrà essere lunga tot caratteri quanto vengono indicati nell'input
        $password = substr(str_shuffle($caratteri), 0, $lunghezza); 
    return $password;
    }
    // /funzione
?>