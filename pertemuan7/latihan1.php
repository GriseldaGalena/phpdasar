<?php 
//Variabel Scope / lingkup variabel
$x = 10;

function tampilx() {
    global $x;
    echo $x;

}

tampilx();

?>