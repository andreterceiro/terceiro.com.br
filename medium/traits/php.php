<?php

trait T1 {
    function digaOi() {
        echo "oi\n";
    }
}

trait T2 {
    function digaOi2() {
        echo "oi 2\n";
    }
}

class Teste {
    use T1 ;
    use T2 ;

    function digaOi3() {
        echo "oi 3\n";
    }
}

$t = new Teste();

$t->digaOi();
$t->digaOi2();
$t->digaOi3();