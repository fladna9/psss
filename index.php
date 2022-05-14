<?php

$lc = ""; 

if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if($lc == "fr"){
    header("location: index.fr.php");
    exit();
} 
else { 
    header("location: index.en.php");
    exit();
}
?>
