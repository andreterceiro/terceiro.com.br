<html>
   <HEAD>
	<title>Endere�amento IP - exerc�cios</title>
   </head>
   <body>

<form method=post action=index.php>


<h2 align = center> <font color = "0000ff"> Resolu��o do exerc�cio 4</font> </h2> <br>

&nbsp; &nbsp; &nbsp; Primeiro vamos verificar em que classe est� o endere�o. Convertendo o primeiro octeto para bin�rio, temos: <br>
<p align = center> 178 <sub>(10) </sub> = <font color = 0000ff> 10</font> 110010 <sub>(2)</sub> </p> <br>

&nbsp; &nbsp; &nbsp; Descobrimos ent�o que o endere�o pertence � classe B, ou seja, podemos utilizar apenas os dois �ltimos octetos para dividir em sub-redes. Para dividir o endere�o em 2000 sub-redes utiliz�veis devmos pegar emprestado 11 bits do campo host, pois 2<sup><font color = 0000ff>11</font></sup>-2 = 2046. Lembrando que subtraimos 2 porque n�o utilizamos a primeira nem a �ltima sub-rede. Como pegamos 11 bits, o campo host est� menor. Antes ele possuia 16 bits (somando os dois octetos), agora possui 5 (16 - 11 = 5). Temos que verificar se 5 bits atendem nossa necessidade para o n�mero de hosts, ent�o calculamos: <br>
<p align = center> 2<sup><font color = 0000ff>5</font></sup>-2=30 </p> <br>

&nbsp; &nbsp; &nbsp; Lembrando que subtraimos 2 agora porque o primeiro endere�o de cada sub-rede representa a pr�pria sub-rede e o �ltimo � utilizado para broadcast dentro da sub-rede. Nossa necessidade � de 28 hosts por sub-rede, ent�o temos nossa necessidade satisfeita.<br>
&nbsp; &nbsp; &nbsp; Vamos ent�o calcular a m�scara de sub-rede. T�nhamos antes do c�lculo 16 bits para rede e 16 para host. Ap�s nosso c�lculo, temos 16 bits para rede, 11 para sub-rede e 5 para host. Como tanto os bits de rede e sub-rede s�o representados pelo algarismo "1" (em bin�rio) e na pr�tica representam a mesma coisa, poder�amos dizer tamb�m que temos 27 bits para rede/sub-rede e 5 para hosts. A m�scara fica ent�o assim: <br> <br>

<p align = center><font color = ff0000> 11111111.1111111.11111111.111</font><font color = 009900>00000</font> <br><br>
* <font color = ff0000> 1 = rede/sub-rede </font>,<font color = 009900> 0 = host </font> </p> <br> 

&nbsp; &nbsp; &nbsp; Convertendo para decimal, temos: <br>
<p align = center> 255.255.255.224 </p><br> 

&nbsp; &nbsp; &nbsp; Lembrando que quando convertemos a m�scara de bin�rio para decimal, "esquecemos" a divis�o rede/sub-rede - host e analisamos apenas a divis�o por octetos. <br> <br>

&nbsp; &nbsp; &nbsp; Agora vamos definir qual � o endere�o da �ltima sub-rede utiliz�vel. Como n�o alteramos os dois primeiros octetos, que representam a rede, n�o precisamos analis�-lo. Vamos analisar apenas os dois �ltimos octetos. Para descobrirmos qual � a nonag�sima sub-rede, vamos colocar o equivalente em bin�rio ao valor 90 em decimal: <br><br>

<p align = center>90<sub>(10)</sub> = 00001011010<sub>(2)</sub></p><br>
&nbsp; &nbsp; &nbsp;Para facilitar, como o campo host possui 11 bits, acrescentamos quatro algarismos bin�rios 0 � esquerda (<b>0000</b>1011010). Lembrando que acrescentando zeros � esquerda, n�o alteramos o valor, ou seja, 00001011010 = 1011010. Agora vamos aplicar o valor descoberto, preenchendo todo o campo host com o algarismo 0:<br><br>  

<p align = center> <font color = dd00dd> 00001011.010</font><font color = aaaa00>00000</font><br><br>
&nbsp; &nbsp; &nbsp; <font color = dd00dd> 11 bits de sub-rede</font>, <font color = aaaa00>5 bits de host</font><br> <br> </p><br>

&nbsp; &nbsp; &nbsp; Dois detalhes muito importantes:

<ul>
   <li> O campo host est� preenchido todo com o algarismo 0. � assim que ele deve estar quando calculamos um endere�o de sub-rede </li>
   <li> A nonag�sima sub-rede tem o valor 00001011010 em bin�rio, que � igual a 90 em decimal; </li>
</ul> <br> 


&nbsp; &nbsp; &nbsp; Agora que descobrimos o valor em bin�rio, vamos converter para decimal. Um detalhe muito importante � que devemos mont�-lo agrupando em octetos, independente do bit representar sub-rede ou host. Veja: <br>
<p align = center> 3� octeto: <font color = dd00dd> 00001011</font><sub>(2)</sub> = <font color = ffaa55>11</font><sub>(10)</sub> <br> 
4� octeto: <font color = dd00dd> 010</font><font color = aaaa00>00000</font><sub>(2)</sub> = <font color = ffaa55>64</font><sub>(10)</sub> </p><br> 



&nbsp; &nbsp; &nbsp; Ent�o vamos escrever o endere�o completo, "anexando" os dois octetos que calculamos aos dois primeiros octetos: <br><br>
<p align = center> 178.10.<font color = ffaa55>11.64</font> </p> <br>

&nbsp; &nbsp; &nbsp; Agora devemos calcular o endere�o de broadcast da nonag�sima sub-rede utiliz�vel. Voltaremos para o n�mero em bin�rio e iremos manter o valor dos bits que representam a sub-rede, trocando apenas o valor dos bits do campo host de 0 para 1, pois para termos um broadcast dentro da sub-rede, todos os bits do campo host devem ser preenchidos com o valor 1. Veja: <br>

<p align = center><font color = dd00dd> 00001011010</font><font color = aaaa00>11111</font><br><br>
&nbsp; &nbsp; &nbsp; <font color = dd00dd> 11 bits de sub-rede</font>, <font color = aaaa00>5 bits de host - todos preenchidos com 1 (broadcast) </font> </p><br> <br>

&nbsp; &nbsp; &nbsp; Descobrimos o valor em bin�rio, convertendo para decimal, temos: <br>
<p align = center> 3� octeto: <font color = dd00dd> 00001011</font><sub>(2)</sub> = <font color = ffaa55>19</font><sub>(10)</sub> <br> 
4� octeto: <font color = dd00dd> 010</font><font color = aaaa00>11111</font><sub>(2)</sub> = <font color = ffaa55>95</font><sub>(10)</sub> </p><br> 

&nbsp; &nbsp; &nbsp; Ent�o vamos escrever o endere�o completo, "anexando" o octeto que calculamos aos tr�s primeiros octetos: <br>
<p align = center> 178.10.<font color = ffaa55>19.95</font> </p> <br>

&nbsp; &nbsp; &nbsp;  Ok..., agora falta apenas classificar o endere�o 178.10.155.0  Vamos analisar os dois �ltimos octeto, come�ando convertendo os valores deles: <br> <br>

<p align = center> 3� octeto: <font color = ffaa55>155</font><sub>(10)</sub>=<font color = dd00dd> 10011011</font><sub>(2)</sub> <br>
4� octeto: <font color = ffaa55>0</font><sub>(10)</sub>=<font color = dd00dd> 000</font><font color = aaaa00>00000</font><sub>(2)</sub></p><br>  

&nbsp; &nbsp; &nbsp; Vamos analisar na estrutura sub-rede / host: <br> 
<p align = center> <font color = dd00dd> 10011011.000</font><font color = aaaa00>00000</font></p><br> 
 
&nbsp; &nbsp; &nbsp; Analisando alguns detalhes muito importantes:
<ul> 
   <li> O campo host n�o est� preenchido todo com o algarismo 1, ent�o este endere�o n�o representa um broadcast;</li>
   <li> O campo host est� preenchido todo com o algarismo 0, ent�o este endere�o representa uma sub-rede;</li>
</ul><br>

&nbsp; &nbsp; &nbsp; Vamos descobrir o endere�o de broadcast desta sub-rede. Esta parte n�o era necess�ria, mas vamos fazer para praticarmos. Colocaremos o valor 1 (bin�rio) em todos os bits do campo host. 

&nbsp; &nbsp; &nbsp; Vamos analisar apenas os dois �ltimos octetos, pois neste caso n�o alteramos o 1� nem o 2� octetos. Os valores deles s�o <font color = ffaa55>155</font> (<font color = dd00dd> 10011011</font>) e <font color = ffaa55>0 </font>(<font color = dd00dd> 000</font><font color = aaaa00>00000</font> em bin�rio). O valor dos bits de sub-rede � <font color = dd00dd> 10011011000</font> e o valor dos bits do campo host � <font color = aaaa00>00000</font>. Conforme descrevemos anteriormente, vamos alterar o valor dos bits do campo host para 1 e obteremos assim o endere�o de broadcast da sub-rede. Os octetos em bin�rio ficar�o assim: <br>

<p align = center><font color = dd00dd> 10011011.000</font><font color = aaaa00>11111</font></p><br>

&nbsp; &nbsp; &nbsp; Agora que descobrimos o valor em bin�rio, vamos converter para decimal. Um detalhe muito importante � que devemos mont�-lo agrupando em octetos, independente do bit representar sub-rede ou host. Veja: <br>
<p align = center> 3� octeto: <font color = dd00dd> 10011011</font><sub>(2)</sub> = <font color = ffaa55>155</font><sub>(10)</sub> <br> 
4� octeto: <font color = dd00dd> 000</font><font color = aaaa00>11111</font><sub>(2)</sub> = <font color = ffaa55>31</font><sub>(10)</sub> </p> <br> 

&nbsp; &nbsp; &nbsp; Concluindo, o endere�o de broadcast da sub-rede 178.10.155.0, utilizando a m�scara 255.255.255.224, � 178.10.155.31 <br><BR>

<ul> Finalizando, vamos escrever os resultados obtidos:<br><br>
   <li> M�scara = 255.255.255.224</li>
   <li> Endere�o da nonag�sima sub-rede utiliz�vel = 178.10.11.64 </li>
   <li> Endere�o de broadcast da d�cima sub-rede utiliz�vel = 178.10.11.95</li>
   <li> Classifica��o do endere�o 178.10.155.0 = sub-rede </li>
<ul> <BR> <BR>

<p Align = center> <input type= submit value = voltar></p>
</form>

</form>
   </body>
</html>