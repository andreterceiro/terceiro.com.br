<?php
$current = (int) file_get_contents("number.txt");
file_put_contents("number.txt", $current + 1);