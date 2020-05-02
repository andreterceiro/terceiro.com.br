<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://www.guiatrabalhista.com.br/guia/salario_minimo.htm');

$body = $response->getBody();

$parcial0 = substr($body, strpos($body, 'D.O.U'), 281);
$data0 = substr($parcial0, 131, 10);
$valor0 =  substr($parcial0, 272, 9);

$parcial1 = substr($body, strpos($body, '9661'), 399);
$data1 = substr($parcial1, 248, 10);
$valor1 = substr($parcial1, 389, 9);

$parcial2 = substr($body, strpos($body, '2017'), 430);
$data2 = substr($parcial2, 280, 10);
$valor2 = substr($parcial2, 421, 9);

$parcial3 = substr($body, strpos($body, '2016'), 431);
$data3 = substr($parcial3, 280, 10);
$valor3 = substr($parcial3, -10, -1);

$parcial4 = substr($body, strpos($body, '2015'), 572);
$data4 = substr($parcial4, 421, 10);
$valor4 = substr($parcial4, -10, 9);

$parcial5 = substr($body, strpos($body, '2014'), 452);
$data5 = substr($parcial5, 298, 10);
$valor5 = substr($parcial5, 443, 9);

$parcial6 = substr($body, strpos($body, '24.12.2013'), 405);
$data6 = substr($parcial6, 205, 10);
$valor6 = substr($parcial6, 350, 9);

$parcial7 = substr($body, strpos($body, '26.12.2012'), 359);
$data7 = substr($parcial7, 205, 10);
$valor7 = substr($parcial7, 350, 9);

$parcial8 = substr($body, strpos($body, '26.12.2011'), 359);
$data8 = substr($parcial8, 159, 10);
$valor8 = substr($parcial8, 300, 9);

$parcial9 = substr($body, strpos($body, '28.02.2011'), 305);
$data9 = substr($parcial9, 155, 10);
$valor9 = substr($parcial9, 296, 9);

$parcial10 = substr($body, strpos($body, '31.12.2010'), 305);
$data10 = substr($parcial10, 155, 10);
$valor10 = substr($parcial10, 296, 9);

$parcial11 = substr($body, strpos($body, '16.06.2010'), 305);
$data11 = substr($parcial11, 155, 10);
$valor11 = substr($parcial11, 296, 9);

$parcial12 = substr($body, strpos($body, '29.05.2009'), 305);
$data12 = substr($parcial12, 155, 10);
$valor12 = substr($parcial12, 296, 9);

$parcial13 = substr($body, strpos($body, '20.06.2008'), 305);
$data13 = substr($parcial13, 155, 10);
$valor13 = substr($parcial13, 296, 9);

$parcial14 = substr($body, strpos($body, '29.06.2007'), 305);
$data14 = substr($parcial14, 155, 10);
$valor14 = substr($parcial14, 296, 9);

$parcial15 = substr($body, strpos($body, '31.03.2006'), 305);
$data15 = substr($parcial15, 155, 10);
$valor15 = substr($parcial15, 296, 9);

$parcial16 = substr($body, strpos($body, '22.04.2005'), 305);
$data16 = substr($parcial16, 155, 10);
$valor16 = substr($parcial16, 296, 9);

$parcial17 = substr($body, strpos($body, '30.04.2004'), 305);
$data17 = substr($parcial17, 155, 10);
$valor17 = substr($parcial17, 296, 9);

$parcial18 = substr($body, strpos($body, '03.04.2003'), 305);
$data18 = substr($parcial18, 155, 10);
$valor18 = substr($parcial18, 296, 9);

$parcial19 = substr($body, strpos($body, '28.03.2002'), 305);
$data19 = substr($parcial19, 155, 10);
$valor19 = substr($parcial19, 296, 9);

$parcial20 = substr($body, strpos($body, '30.03.2001'), 305);
$data20 = substr($parcial20, 155, 10);
$valor20 = substr($parcial20, 296, 9);

var_dump([
	[
		'vigencia' => $data0,
		'valor_mensal' => $valor0
	],
	[
		'vigencia' => $data1,
		'valor_mensal' => $valor1
	],
	[
		'vigencia' => $data2,
		'valor_mensal' => $valor2
	],
	[
		'vigencia' => $data3,
		'valor_mensal' => $valor3
	],
	[
		'vigencia' => $data4,
		'valor_mensal' => $valor4
	],
	[
		'vigencia' => $data5,
		'valor_mensal' => $valor5
	],
	[
		'vigencia' => $data6,
		'valor_mensal' => $valor6
	],
	[
		'vigencia' => $data7,
		'valor_mensal' => $valor7
	],
	[
		'vigencia' => $data8,
		'valor_mensal' => $valor8
	],
	[
		'vigencia' => $data9,
		'valor_mensal' => $valor9
	],
	[
		'vigencia' => $data10,
		'valor_mensal' => $valor10
	],
	[
		'vigencia' => $data11,
		'valor_mensal' => $valor11
	],
	[
		'vigencia' => $data12,
		'valor_mensal' => $valor12
	],
	[
		'vigencia' => $data13,
		'valor_mensal' => $valor13
	],
	[
		'vigencia' => $data14,
		'valor_mensal' => $valor14
	],
	[
		'vigencia' => $data15,
		'valor_mensal' => $valor15
	],
	[
		'vigencia' => $data16,
		'valor_mensal' => $valor16
	],
	[
		'vigencia' => $data17,
		'valor_mensal' => $valor17
	],
	[
		'vigencia' => $data18,
		'valor_mensal' => $valor18
	],
	[
		'vigencia' => $data19,
		'valor_mensal' => $valor19
	],
	[
		'vigencia' => $data20,
		'valor_mensal' => $valor20
	]
]);
?>
