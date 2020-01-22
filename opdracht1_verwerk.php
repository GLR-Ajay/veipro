<?php
session_start();
$fouten = 0;

$afkomst = $_SERVER['http_referer'];
if ($afkomst = "https://82740.ict-lab.nl/veipro/veiprophp/opdracht1.php"){
    echo "You is from right place <br/>";
}
else{
    echo "Begone, You do not belong here <br/>";
    $fouten++;
}

if (isset($_POST['verstuurknop']) && 
    isset($_POST['naamVeld']) &&
    isset($_POST['postcode']) &&
    isset($_POST['number']) &&
    isset($_POST['checkbox']) &&
    isset($_POST['color'])){
    echo "De juiste velden zijn verstuurd <br/>";
}else{
    echo "Niet alle velden zijn verstuurd <br/>";
    $fouten++;
}

$tokenSession = $_SESSION['token'];
$tokenForm = $_POST['tokenVeld'];
if (isset($_SESSION['token']) && $tokenSession == $tokenForm){
    echo 'Token is hellemaal mooi <br/>';
    unset($_SESSION['token']);
}else{
    echo "Token is helemaal verkeerd <br/>";
    $fouten++;
}

if($fouten == 0){
    $query = "";
}