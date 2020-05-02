<html>
   <HEAD>
	<title>Endere�amento IP - exerc�cios</title>
   </head>
   <body>

<form method=post action=index.php>

<h2 align = center> <font color = "0000ff"> Resolu��o do exerc�cio 5</font> </h2> <br>

&nbsp; &nbsp; &nbsp; Primeiro vamos verificar em que classe est� o endere�o. Convertendo o primeiro octeto para bin�rio, temos: <br>
<P align = center>221 <sub>(10) </sub> = <font color = 0000ff> 110</font> 11101 <sub>(2)</sub></p> <br>

&nbsp; &nbsp; &nbsp; Descobrimos ent�o que o endere�o pertence � classe C, ou seja, podemos utilizar apenas o �ltimo octeto para dividir em sub-redes. Para dividir o endere�o em 8 sub-redes  devmos pegar emprestado 3 bits do campo host, pois 2<sup><font color = 0000ff>3</font></sup> = 8. Veja que o exerc�cio informou que devemos calcular 8 sub-redes, independente de serem utiliz�veis. Sendo assim, n�o subtraimos 2 do resultado.<br>

&nbsp; &nbsp; &nbsp; Como pegamos 3 bits emprestados, o campo host est� menor. Antes ele possuia 8 bits, agora possui 5 (8 - 3 = 5). Temos que verificar se 5 bits atendem nossa necessidade para o n�mero de hosts, ent�o calculamos: <br>
<p align = center> 2<sup><font color = 0000ff>5</font></sup>-2=30 </p><br>

&nbsp; &nbsp; &nbsp; Lembrando que subtraimos 2 agora porque o primeiro endere�o de cada sub-rede representa a pr�pria sub-rede e o �ltimo � utilizado para broadcast dentro da sub-rede. Nossa necessidade � de 30 hosts por sub-rede, ent�o temos nossa necessidade satisfeita.<br>
&nbsp; &nbsp; &nbsp; Vamos ent�o calcular a m�scara de sub-rede. T�nhamos antes do c�lculo 24 bits para rede e 8 para host. Ap�s nosso c�lculo, temos 24 bits para rede, 3 para sub-rede e 5 para host. Como tanto os bits de rede e sub-rede s�o representados pelo algarismo "1" (em bin�rio) e na pr�tica representam a mesma coisa, poder�amos dizer tamb�m que temos 27 bits para rede/sub-rede e 5 para hosts. A m�scara fica ent�o assim: <br> <br>

<p align = center> <font color = ff0000> 11111111.1111111.11111111.111</font><font color = 009900>00000</font> <br> <br>

* <font color = ff0000> 1 = rede/sub-rede </font>,<font color = 009900> 0 = host </font> </p> <br>

&nbsp; &nbsp; &nbsp; Convertendo para decimal, temos:<br> <br>
<p align = center> 255.255.255.224 </p> <br> 

&nbsp; &nbsp; &nbsp; Lembrando que quando convertemos a m�scara de bin�rio para decimal, "esquecemos" a divis�o rede/sub-rede - host e analisamos apenas a divis�o por octetos. <br> <br><br>

&nbsp; &nbsp; &nbsp; Vamos agora classificar o endere�o 200.10.15.50. Vamos analisar o �ltimo octeto, come�ando convertendo o valor dele: <br> <br>

<p align = center> 50<sub>(10)</sub> = 00110010<sub>(2)</sub> </p><br>

&nbsp; &nbsp; &nbsp; Vamos analisar na estrutura sub-rede / host: <br> 
<p align = center> <font color = dd00dd> 001</font><font color = aaaa00>10010</font></p><br>
 
&nbsp; &nbsp; &nbsp; Analisando alguns detalhes muito importantes:

<ul>
   <li> O campo host n�o est� preenchido todo com o algarismo 0, ent�o este endere�o n�o representa uma sub-rede.</li>
   <li> O campo host n�o est� preenchido todo com o algarismo 1, ent�o este endere�o n�o representa um broadcast.</li>
   <li> N�o sendo uma sub-rede ou um broadcast, ele � um endere�o de host	
</ul><br>

&nbsp; &nbsp; &nbsp; Para descobrirmos a qual sub-rede pertence este host, podemos utilizar dois m�todos:
<ol>
   <li> Colocar o valor 0 em todos os bits de host, sem alterar os bits de rede e sub-rede. </li>
   <li> Aplicar uma opera��o AND do endere�o com a m�scara de sub-rede </li>
</ol> <br> 

&nbsp; &nbsp; &nbsp;  Com os dois m�todos obtemos o mesmo resultado. Eu prefiro o 1� m�todo. Vamos analisar apenas o �ltimo octeto, pois neste caso n�o alteramos o 1�, o 2� nem o 3� octetos. O valor dele � 00110010 (50 em bin�rio). O valor dos bits de sub-rede � <font color = dd00dd> 001</font> e o valor dos bits do campo host � <font color = aaaa00>10010</font>. Conforme descrevemos anteriormente, vamos alterar o valor dos bits do campo host para 0 e obteremos assim a sub-rede a qual o host pertence. O octeto em bin�rio ficar� assim: <br>
<p align = center><font color = dd00dd> 001</font><font color = aaaa00>00000</font>.</p><br>
&nbsp; &nbsp; &nbsp; Convertendo o resultado obtido para decimal e anexando-o aos tr�s outros octetos, obteremos a resposta: <br>

<p align = center> <font color = dd00dd> 001</font><font color = aaaa00>00000</font><sub>(2)</sub> = 32<sub>(10)</sub> </p><br> 

&nbsp; &nbsp; &nbsp; Concluindo, o host 221.10.15.50, utilizando a m�scara 255.255.255.224, pertence a sub-rede 221.10.15.32.<br><BR><br>

&nbsp; &nbsp; &nbsp; Vamos demonstrar tamb�m como obter o mesmo resultado atrav�s de uma opera��o AND com a m�scara de sub-rede. Primeiro vamos passar o endere�o 221.10.15.50 e a m�scara 255.255.255.224 para bin�rio: <br><br>

<Table align = center cellspacing = 1 border = 1>
   <tbody align = center>
	<tr> 
	   <td> Decimal</td>
	   <td> Bin�rio</td>
	</tr>
	<tr> 
	   <td> 221.10.15.50 </td>
	   <td> 11011101.00001010.00001111.00110010</td>
	</tr>
	<tr> 
	   <td> 255.255.255.224 </td>
	   <td> 11111111.11111111.11111111.11100000</td>
	</tr>
   </tbody>
</table> <br> <br>

&nbsp; &nbsp; &nbsp; Vamos agora aplicar uma opera��o AND, algarimo por algarismo. Caso tenha d�vida em como efetuar esta opera��o, favor visite a se��o <a href=> opera��es l�gicas </a><br><br>

<table align = center>
   <tbody>
	<tr>
	   <td> 11011101.00001010.00001111.00110010</td>
	</tr>
	<tr>
	   <td> 11111111.11111111.11111111.11100000</td>
	</tr>
	<tr>
	   <td> --------------------------------------------- </td>
	</tr>
	<tr>
	   <td> 11011101.00001010.00001111.00100000</td>
  	</tr>
   </tbody>
</table> <br> <br>

&nbsp; &nbsp; &nbsp; Convertendo 11011101.00001010.00001111.00100000 para decimal, obtemos 221.10.15.32, o mesmo resultado obtido com o outro m�todo. <br> <br>
 
&nbsp; &nbsp; &nbsp; Vamos agora calcular o range de todas as sub-redes. Para isso, iremos olocar todos os valores poss�veis no campo sub-rede, que tem tr�s algarismos. Os valores poss�veis s�o:<br><br>


<p align = center> <font color = dd00dd> 000</font> <br> 
		   <font color = dd00dd> 001</font> <br> 
		   <font color = dd00dd> 010</font> <br> 
		   <font color = dd00dd> 011</font> <br> 
		   <font color = dd00dd> 100</font> <br> 
		   <font color = dd00dd> 101</font> <br> 
		   <font color = dd00dd> 110</font> <br> 
	   	   <font color = dd00dd> 111</font> </p><br> 

&nbsp; &nbsp; &nbsp; Para cada sub-rede, devemos calcular o endere�o de sub-rede, do 1� host, do �ltimo host e o endere�o de broadcast. Ent�o, mantendo o mesmo endere�o de sub-rede, iremos modificar o campo host para atender nossa necessidade: <br> <br><br> <br>

<table align = center border = 1 bgcolor = f8f8f8>
   <thead>
	<tr>
	   <th colspan = 5> C�lculo da sub-rede 000 <font color = ff0000> (sub-rede n�o                        utliz�vel)</font>
           </th>
        <tr>
   <tbody align = center >
	<tr>
	   <td> Campo sub-rede </td>
	   <td> Campo host </td>
	   <td> Objetivo </td>
	   <td> Valor final</td>
	   <td> Em decimal</td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 000 </font> </td>
	   <td> <font color = aaaa00>00000</font> </td>
	   <td> Endere�o de sub-rede </td>
	   <td> <font color = dd00dd>000</font><font color = aaaa00>00000</font></td>
	   <td> 0 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 000 </font> </td>
	   <td> <font color = aaaa00>00001</font> </td>
	   <td> Endere�o do 1� host</td>
	   <td> <font color = dd00dd>000</font><font color = aaaa00>00001</font></td>
	   <td> 1 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 000 </font> </td>
	   <td> <font color = aaaa00>11110</font> </td>
	   <td> Endere�o do �ltimo host </td>
	   <td> <font color = dd00dd>000</font><font color = aaaa00>11110</font></td>
	   <td> 30 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 000 </font> </td>
	   <td> <font color = aaaa00>11111</font> </td>
	   <td> Endere�o de broadcast </td>
	   <td> <font color = dd00dd>000</font><font color = aaaa00>11111</font></td>
	   <td> 31 </td>
	</tr>
   </tbody>
</table> <br><br>

<table align = center bgcolor = f8f8f8 border = 1>
   <thead>
	<tr>
	   <th colspan = 5> C�lculo da sub-rede 001 </th>
        <tr>
   <tbody align = center >
	<tr>
	   <td> Campo sub-rede </td>
	   <td> Campo host </td>
	   <td> Objetivo </td>
	   <td> Valor final</td>
	   <td> Em decimal</td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 001 </font> </td>
	   <td> <font color = aaaa00>00000</font> </td>
	   <td> Endere�o de sub-rede </td>
	   <td> <font color = dd00dd>001</font><font color = aaaa00>00000</font></td>
	   <td> 32 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 001 </font> </td>
	   <td> <font color = aaaa00>00001</font> </td>
	   <td> Endere�o do 1� host</td>
	   <td> <font color = dd00dd>001</font><font color = aaaa00>00001</font></td>
	   <td> 33 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 001 </font> </td>
	   <td> <font color = aaaa00>11110</font> </td>
	   <td> Endere�o do �ltimo host </td>
	   <td> <font color = dd00dd>001</font><font color = aaaa00>11110</font></td>
	   <td> 62 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 001 </font> </td>
	   <td> <font color = aaaa00>11111</font> </td>
	   <td> Endere�o de broadcast </td>
	   <td> <font color = dd00dd>001</font><font color = aaaa00>11111</font></td>
	   <td> 63 </td>
	</tr>
   </tbody>
</table> <br><br>

<table align = center bgcolor = f8f8f8 border = 1>
   <thead>
	<tr>
	   <th colspan = 5> C�lculo da sub-rede 010 </th>
        <tr>
   <tbody align = center >
	<tr>
	   <td> Campo sub-rede </td>
	   <td> Campo host </td>
	   <td> Objetivo </td>
	   <td> Valor final</td>
	   <td> Em decimal</td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 010 </font> </td>
	   <td> <font color = aaaa00>00000</font> </td>
	   <td> Endere�o de sub-rede </td>
	   <td> <font color = dd00dd>010</font><font color = aaaa00>00000</font></td>
	   <td> 64 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 010 </font> </td>
	   <td> <font color = aaaa00>00001</font> </td>
	   <td> Endere�o do 1� host</td>
	   <td> <font color = dd00dd>010</font><font color = aaaa00>00001</font></td>
	   <td> 65 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 010 </font> </td>
	   <td> <font color = aaaa00>11110</font> </td>
	   <td> Endere�o do �ltimo host </td>
	   <td> <font color = dd00dd>010</font><font color = aaaa00>11110</font></td>
	   <td> 94 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 010 </font> </td>
	   <td> <font color = aaaa00>11111</font> </td>
	   <td> Endere�o de broadcast </td>
	   <td> <font color = dd00dd>010</font><font color = aaaa00>11111</font></td>
	   <td> 95 </td>
	</tr>
   </tbody>
</table> <br><br>

<table align = center bgcolor = f8f8f8 border = 1>
   <thead>
	<tr>
	   <th colspan = 5> C�lculo da sub-rede 011 </th>
        <tr>
   <tbody align = center >
	<tr>
	   <td> Campo sub-rede </td>
	   <td> Campo host </td>
	   <td> Objetivo </td>
	   <td> Valor final</td>
	   <td> Em decimal</td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 011 </font> </td>
	   <td> <font color = aaaa00>00000</font> </td>
	   <td> Endere�o de sub-rede </td>
	   <td> <font color = dd00dd>011</font><font color = aaaa00>00000</font></td>
	   <td> 96 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 011 </font> </td>
	   <td> <font color = aaaa00>00001</font> </td>
	   <td> Endere�o do 1� host</td>
	   <td> <font color = dd00dd>011</font><font color = aaaa00>00001</font></td>
	   <td> 97 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 011 </font> </td>
	   <td> <font color = aaaa00>11110</font> </td>
	   <td> Endere�o do �ltimo host </td>
	   <td> <font color = dd00dd>011</font><font color = aaaa00>11110</font></td>
	   <td> 126 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 011 </font> </td>
	   <td> <font color = aaaa00>11111</font> </td>
	   <td> Endere�o de broadcast </td>
	   <td> <font color = dd00dd>011</font><font color = aaaa00>11111</font></td>
	   <td> 127 </td>
	</tr>
   </tbody>
</table> <br><br>

<table align = center bgcolor = f8f8f8 border = 1>
   <thead>
	<tr>
	   <th colspan = 5> C�lculo da sub-rede 100 </th>
        <tr>
   <tbody align = center >
	<tr>
	   <td> Campo sub-rede </td>
	   <td> Campo host </td>
	   <td> Objetivo </td>
	   <td> Valor final</td>
	   <td> Em decimal</td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 100 </font> </td>
	   <td> <font color = aaaa00>00000</font> </td>
	   <td> Endere�o de sub-rede </td>
	   <td> <font color = dd00dd>100</font><font color = aaaa00>00000</font></td>
	   <td> 128 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 100 </font> </td>
	   <td> <font color = aaaa00>00001</font> </td>
	   <td> Endere�o do 1� host</td>
	   <td> <font color = dd00dd>100</font><font color = aaaa00>00001</font></td>
	   <td> 129 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 100 </font> </td>
	   <td> <font color = aaaa00>11110</font> </td>
	   <td> Endere�o do �ltimo host </td>
	   <td> <font color = dd00dd>100</font><font color = aaaa00>11110</font></td>
	   <td> 158 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 100 </font> </td>
	   <td> <font color = aaaa00>11111</font> </td>
	   <td> Endere�o de broadcast </td>
	   <td> <font color = dd00dd>100</font><font color = aaaa00>11111</font></td>
	   <td> 159 </td>
	</tr>
   </tbody>
</table> <br><br>

<table align = center bgcolor = f8f8f8 border = 1>
   <thead>
	<tr>
	   <th colspan = 5> C�lculo da sub-rede 101 </th>
        <tr>
   <tbody align = center >
	<tr>
	   <td> Campo sub-rede </td>
	   <td> Campo host </td>
	   <td> Objetivo </td>
	   <td> Valor final</td>
	   <td> Em decimal</td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 101 </font> </td>
	   <td> <font color = aaaa00>00000</font> </td>
	   <td> Endere�o de sub-rede </td>
	   <td> <font color = dd00dd>101</font><font color = aaaa00>00000</font></td>
	   <td> 160 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 101 </font> </td>
	   <td> <font color = aaaa00>00001</font> </td>
	   <td> Endere�o do 1� host</td>
	   <td> <font color = dd00dd>000</font><font color = aaaa00>00001</font></td>
	   <td> 161 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 101 </font> </td>
	   <td> <font color = aaaa00>11110</font> </td>
	   <td> Endere�o do �ltimo host </td>
	   <td> <font color = dd00dd>101</font><font color = aaaa00>11110</font></td>
	   <td> 190 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 101 </font> </td>
	   <td> <font color = aaaa00>11111</font> </td>
	   <td> Endere�o de broadcast </td>
	   <td> <font color = dd00dd>101</font><font color = aaaa00>11111</font></td>
	   <td> 191 </td>
	</tr>
   </tbody>
</table> <br><br>

<table align = center bgcolor = f8f8f8 border = 1>
   <thead>
	<tr>
	   <th colspan = 5> C�lculo da sub-rede 110 </th>
        <tr>
   <tbody align = center >
	<tr>
	   <td> Campo sub-rede </td>
	   <td> Campo host </td>
	   <td> Objetivo </td>
	   <td> Valor final</td>
	   <td> Em decimal</td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 110 </font> </td>
	   <td> <font color = aaaa00>00000</font> </td>
	   <td> Endere�o de sub-rede </td>
	   <td> <font color = dd00dd>110</font><font color = aaaa00>00000</font></td>
	   <td> 192 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 110 </font> </td>
	   <td> <font color = aaaa00>00001</font> </td>
	   <td> Endere�o do 1� host</td>
	   <td> <font color = dd00dd>110</font><font color = aaaa00>00001</font></td>
	   <td> 193 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 110 </font> </td>
	   <td> <font color = aaaa00>11110</font> </td>
	   <td> Endere�o do �ltimo host </td>
	   <td> <font color = dd00dd>110</font><font color = aaaa00>11110</font></td>
	   <td> 222 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 110 </font> </td>
	   <td> <font color = aaaa00>11111</font> </td>
	   <td> Endere�o de broadcast </td>
	   <td> <font color = dd00dd>110</font><font color = aaaa00>11111</font></td>
	   <td> 223 </td>
	</tr>
   </tbody>
</table> <br><br>

<table align = center bgcolor = f8f8f8 border = 1>
   <thead>
	<tr>
	   <th colspan = 5> C�lculo da sub-rede 111 <font color = ff0000> (sub-rede n�o                        utliz�vel)</font>
           </th>
        <tr>
   <tbody align = center>
	<tr>
	   <td> Campo sub-rede </td>
	   <td> Campo host </td>
	   <td> Objetivo </td>
	   <td> Valor final</td>
	   <td> Em decimal</td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 111 </font> </td>
	   <td> <font color = aaaa00>00000</font> </td>
	   <td> Endere�o de sub-rede </td>
	   <td> <font color = dd00dd>111</font><font color = aaaa00>00000</font></td>
	   <td> 224 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 111 </font> </td>
	   <td> <font color = aaaa00>00001</font> </td>
	   <td> Endere�o do 1� host</td>
	   <td> <font color = dd00dd>111</font><font color = aaaa00>00001</font></td>
	   <td> 225 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 111 </font> </td>
	   <td> <font color = aaaa00>11110</font> </td>
	   <td> Endere�o do �ltimo host </td>
	   <td> <font color = dd00dd>111</font><font color = aaaa00>11110</font></td>
	   <td> 254 </td>
	</tr>
	<tr>
	   <td> <font color = dd00dd> 111 </font> </td>
	   <td> <font color = aaaa00>11111</font> </td>
	   <td> Endere�o de broadcast </td>
	   <td> <font color = dd00dd>111</font><font color = aaaa00>11111</font></td>
	   <td> 255 </td>
	</tr>
   </tbody>
</table> <br><br>

&nbsp; &nbsp; &nbsp; Atrav�s das tabelas acima descrevemos as 6 sub-redes utiliz�veis e as 2 n�o utiliz�veis, totalizando as 8 solicitadas. Mostramos tamb�m o 1� e o �ltimo endere�o de host de cada sub-rede, que tem no total 30 hosts. <br> <br>


<ul> Finalizando, vamos escrever todos resultados obtidos:
   <li> M�scara = 255.255.255.224 </li>
   <li> Classifica��o do endere�o 221.10.15.50 = host </li>
   <li> A sub-rede a qual pertence o host 221.10.15.50 � 221.10.15.32 </li>
</ul> <br>

   <table border = 1 bgcolor = f5f5f5 align = center>
	<thead>
	   <Tr>
	      <th colspan = 6 align = center> Ranges </th>
	   </tr>
	</thead>
	<tbody>
           <tr>
	      <td rowspan = 2 align = center > N� </td>
	      <td colspan = 4 align = center> Endere�os </td>
	      <td rowspan = 2 align = center > Coment�rio </td>
           </tr>
           <tr align = center>
	      <td> Sub-rede </td>
	      <td> 1� host </td>
	      <td> �limo host </td>
	      <td> Broadcast </td>
           </tr>
	   <tr align = center>
	      <td> 0 </td>
	      <td> 221.10.15.0  </td>	   
	      <td> 221.10.15.1 </td>
	      <td> 221.10.15.30 </td>
	      <td> 221.10.15.31 </td>
	      <td> <font color = ff0000> N�o utiliz�vel </td>
	   </tr>
	   <tr align = center>
	      <td> 1 </td>
	      <td> 221.10.15.32 </td>
	      <td> 221.10.15.33 </td>
	      <td> 221.10.15.62 </td>	   
	      <td> 221.10.15.63 </td>
	      <td> 1� utiliz�vel</td>
	   </tr>	   
	   <tr align = center>
	      <td>2</td>
	      <td> 221.10.15.64 </td>	   
	      <td> 221.10.15.65 </td>
	      <td> 221.10.15.94 </td>
	      <td> 221.10.15.95 </td>
	      <td> 2� utiliz�vel</td>
	   </tr>
           <tr align = center>
	      <td> 3 </td>
	      <td> 221.10.15.96 </td>
	      <td> 221.10.15.97 </td>	   
	      <td> 221.10.15.126 </td>
	      <td> 221.10.15.127 </td>
	      <td> 3� utiliz�vel</td>
	   </tr>
           <tr align = center>
	      <td> 4 </td>
	      <td> 221.10.15.128 </td>
	      <td> 221.10.15.129 </td>	   
	      <td> 221.10.15.158 </td>
	      <td> 221.10.15.159 </td>
	      <td> 4� utiliz�vel</td>
	   </tr>
           <tr align = center>
	      <td> 5 </td>
	      <td> 221.10.15.160 </td>
	      <td> 221.10.15.161 </td>
	      <td> 221.10.15.190 </td>	   
	      <td> 221.10.15.191 </td>	   
	      <td> 5� utiliz�vel</td>
	   </tr>
           <tr align = center>
	      <td> 6 </td>
              <td> 221.10.15.192 </td>
	      <td> 221.10.15.193 </td>
	      <td> 221.10.15.222 </td>	   
	      <td> 221.10.15.223 </td>	   
	      <td> 6� utiliz�vel</td>
           </tr>
           <tr align = center>
	      <td> 7 </td>
              <td> 221.10.15.224 </td>
	      <td> 221.10.15.225 </td>
	      <td> 221.10.15.254 </td>	   
	      <td> 221.10.15.255 </td>
	      <td> <font color = ff0000> N�o utiliz�vel </td>
	   </tr>
	</tbody>
   </table>
<p Align = center> <input type= submit value = voltar></p>
</form>

   </body>
</html>