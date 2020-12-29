<?php
if (!isset($_GET['a']) || (! isset($_GET['b']))) {
    exit("Os parâmetros GET tem que ser passados na URL, como ?a=1&b=2");
}
echo $_GET['a'] + $_GET['b'];