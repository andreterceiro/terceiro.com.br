<?php
error_reporting(E_ALL);
$contador = ((int) file_get_contents("counter.txt")) + 1;
file_put_contents(
   "counter.txt",
   $contador 
);
echo $contador;
