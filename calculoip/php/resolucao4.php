<html>
   <HEAD>
	<title>Endereçamento IP - exercícios</title>
   </head>
   <body>

<form method=post action=index.php>


<h2 align = center> <font color = "0000ff"> Resolução do exercício 4</font> </h2> <br>

&nbsp; &nbsp; &nbsp; Primeiro vamos verificar em que classe está o endereço. Convertendo o primeiro octeto para binário, temos: <br>
<p align = center> 178 <sub>(10) </sub> = <font color = 0000ff> 10</font> 110010 <sub>(2)</sub> </p> <br>

&nbsp; &nbsp; &nbsp; Descobrimos então que o endereço pertence à classe B, ou seja, podemos utilizar apenas os dois últimos octetos para dividir em sub-redes. Para dividir o endereço em 2000 sub-redes utilizáveis devmos pegar emprestado 11 bits do campo host, pois 2<sup><font color = 0000ff>11</font></sup>-2 = 2046. Lembrando que subtraimos 2 porque não utilizamos a primeira nem a última sub-rede. Como pegamos 11 bits, o campo host está menor. Antes ele possuia 16 bits (somando os dois octetos), agora possui 5 (16 - 11 = 5). Temos que verificar se 5 bits atendem nossa necessidade para o número de hosts, então calculamos: <br>
<p align = center> 2<sup><font color = 0000ff>5</font></sup>-2=30 </p> <br>

&nbsp; &nbsp; &nbsp; Lembrando que subtraimos 2 agora porque o primeiro endereço de cada sub-rede representa a própria sub-rede e o último é utilizado para broadcast dentro da sub-rede. Nossa necessidade é de 28 hosts por sub-rede, então temos nossa necessidade satisfeita.<br>
&nbsp; &nbsp; &nbsp; Vamos então calcular a máscara de sub-rede. Tínhamos antes do cálculo 16 bits para rede e 16 para host. Após nosso cálculo, temos 16 bits para rede, 11 para sub-rede e 5 para host. Como tanto os bits de rede e sub-rede são representados pelo algarismo "1" (em binário) e na prática representam a mesma coisa, poderíamos dizer também que temos 27 bits para rede/sub-rede e 5 para hosts. A máscara fica então assim: <br> <br>

<p align = center><font color = ff0000> 11111111.1111111.11111111.111</font><font color = 009900>00000</font> <br><br>
* <font color = ff0000> 1 = rede/sub-rede </font>,<font color = 009900> 0 = host </font> </p> <br> 

&nbsp; &nbsp; &nbsp; Convertendo para decimal, temos: <br>
<p align = center> 255.255.255.224 </p><br> 

&nbsp; &nbsp; &nbsp; Lembrando que quando convertemos a máscara de binário para decimal, "esquecemos" a divisão rede/sub-rede - host e analisamos apenas a divisão por octetos. <br> <br>

&nbsp; &nbsp; &nbsp; Agora vamos definir qual é o endereço da última sub-rede utilizável. Como não alteramos os dois primeiros octetos, que representam a rede, não precisamos analisá-lo. Vamos analisar apenas os dois últimos octetos. Para descobrirmos qual é a nonagésima sub-rede, vamos colocar o equivalente em binário ao valor 90 em decimal: <br><br>

<p align = center>90<sub>(10)</sub> = 00001011010<sub>(2)</sub></p><br>
&nbsp; &nbsp; &nbsp;Para facilitar, como o campo host possui 11 bits, acrescentamos quatro algarismos binários 0 à esquerda (<b>0000</b>1011010). Lembrando que acrescentando zeros à esquerda, não alteramos o valor, ou seja, 00001011010 = 1011010. Agora vamos aplicar o valor descoberto, preenchendo todo o campo host com o algarismo 0:<br><br>  

<p align = center> <font color = dd00dd> 00001011.010</font><font color = aaaa00>00000</font><br><br>
&nbsp; &nbsp; &nbsp; <font color = dd00dd> 11 bits de sub-rede</font>, <font color = aaaa00>5 bits de host</font><br> <br> </p><br>

&nbsp; &nbsp; &nbsp; Dois detalhes muito importantes:

<ul>
   <li> O campo host está preenchido todo com o algarismo 0. É assim que ele deve estar quando calculamos um endereço de sub-rede </li>
   <li> A nonagésima sub-rede tem o valor 00001011010 em binário, que é igual a 90 em decimal; </li>
</ul> <br> 


&nbsp; &nbsp; &nbsp; Agora que descobrimos o valor em binário, vamos converter para decimal. Um detalhe muito importante é que devemos montá-lo agrupando em octetos, independente do bit representar sub-rede ou host. Veja: <br>
<p align = center> 3º octeto: <font color = dd00dd> 00001011</font><sub>(2)</sub> = <font color = ffaa55>11</font><sub>(10)</sub> <br> 
4º octeto: <font color = dd00dd> 010</font><font color = aaaa00>00000</font><sub>(2)</sub> = <font color = ffaa55>64</font><sub>(10)</sub> </p><br> 



&nbsp; &nbsp; &nbsp; Então vamos escrever o endereço completo, "anexando" os dois octetos que calculamos aos dois primeiros octetos: <br><br>
<p align = center> 178.10.<font color = ffaa55>11.64</font> </p> <br>

&nbsp; &nbsp; &nbsp; Agora devemos calcular o endereço de broadcast da nonagésima sub-rede utilizável. Voltaremos para o número em binário e iremos manter o valor dos bits que representam a sub-rede, trocando apenas o valor dos bits do campo host de 0 para 1, pois para termos um broadcast dentro da sub-rede, todos os bits do campo host devem ser preenchidos com o valor 1. Veja: <br>

<p align = center><font color = dd00dd> 00001011010</font><font color = aaaa00>11111</font><br><br>
&nbsp; &nbsp; &nbsp; <font color = dd00dd> 11 bits de sub-rede</font>, <font color = aaaa00>5 bits de host - todos preenchidos com 1 (broadcast) </font> </p><br> <br>

&nbsp; &nbsp; &nbsp; Descobrimos o valor em binário, convertendo para decimal, temos: <br>
<p align = center> 3º octeto: <font color = dd00dd> 00001011</font><sub>(2)</sub> = <font color = ffaa55>19</font><sub>(10)</sub> <br> 
4º octeto: <font color = dd00dd> 010</font><font color = aaaa00>11111</font><sub>(2)</sub> = <font color = ffaa55>95</font><sub>(10)</sub> </p><br> 

&nbsp; &nbsp; &nbsp; Então vamos escrever o endereço completo, "anexando" o octeto que calculamos aos três primeiros octetos: <br>
<p align = center> 178.10.<font color = ffaa55>19.95</font> </p> <br>

&nbsp; &nbsp; &nbsp;  Ok..., agora falta apenas classificar o endereço 178.10.155.0  Vamos analisar os dois últimos octeto, começando convertendo os valores deles: <br> <br>

<p align = center> 3º octeto: <font color = ffaa55>155</font><sub>(10)</sub>=<font color = dd00dd> 10011011</font><sub>(2)</sub> <br>
4º octeto: <font color = ffaa55>0</font><sub>(10)</sub>=<font color = dd00dd> 000</font><font color = aaaa00>00000</font><sub>(2)</sub></p><br>  

&nbsp; &nbsp; &nbsp; Vamos analisar na estrutura sub-rede / host: <br> 
<p align = center> <font color = dd00dd> 10011011.000</font><font color = aaaa00>00000</font></p><br> 
 
&nbsp; &nbsp; &nbsp; Analisando alguns detalhes muito importantes:
<ul> 
   <li> O campo host não está preenchido todo com o algarismo 1, então este endereço não representa um broadcast;</li>
   <li> O campo host está preenchido todo com o algarismo 0, então este endereço representa uma sub-rede;</li>
</ul><br>

&nbsp; &nbsp; &nbsp; Vamos descobrir o endereço de broadcast desta sub-rede. Esta parte não era necessária, mas vamos fazer para praticarmos. Colocaremos o valor 1 (binário) em todos os bits do campo host. 

&nbsp; &nbsp; &nbsp; Vamos analisar apenas os dois últimos octetos, pois neste caso não alteramos o 1º nem o 2º octetos. Os valores deles são <font color = ffaa55>155</font> (<font color = dd00dd> 10011011</font>) e <font color = ffaa55>0 </font>(<font color = dd00dd> 000</font><font color = aaaa00>00000</font> em binário). O valor dos bits de sub-rede é <font color = dd00dd> 10011011000</font> e o valor dos bits do campo host é <font color = aaaa00>00000</font>. Conforme descrevemos anteriormente, vamos alterar o valor dos bits do campo host para 1 e obteremos assim o endereço de broadcast da sub-rede. Os octetos em binário ficarão assim: <br>

<p align = center><font color = dd00dd> 10011011.000</font><font color = aaaa00>11111</font></p><br>

&nbsp; &nbsp; &nbsp; Agora que descobrimos o valor em binário, vamos converter para decimal. Um detalhe muito importante é que devemos montá-lo agrupando em octetos, independente do bit representar sub-rede ou host. Veja: <br>
<p align = center> 3º octeto: <font color = dd00dd> 10011011</font><sub>(2)</sub> = <font color = ffaa55>155</font><sub>(10)</sub> <br> 
4º octeto: <font color = dd00dd> 000</font><font color = aaaa00>11111</font><sub>(2)</sub> = <font color = ffaa55>31</font><sub>(10)</sub> </p> <br> 

&nbsp; &nbsp; &nbsp; Concluindo, o endereço de broadcast da sub-rede 178.10.155.0, utilizando a máscara 255.255.255.224, é 178.10.155.31 <br><BR>

<ul> Finalizando, vamos escrever os resultados obtidos:<br><br>
   <li> Máscara = 255.255.255.224</li>
   <li> Endereço da nonagésima sub-rede utilizável = 178.10.11.64 </li>
   <li> Endereço de broadcast da décima sub-rede utilizável = 178.10.11.95</li>
   <li> Classificação do endereço 178.10.155.0 = sub-rede </li>
<ul> <BR> <BR>

<p Align = center> <input type= submit value = voltar></p>
</form>

</form>
   </body>
</html>