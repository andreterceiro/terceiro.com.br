<?php
$porta = $_GET['porta'];

if(empty($porta)) {
    $porta = '27432';
}

header('location: http://127.0.0.1:' . $porta);
exit;