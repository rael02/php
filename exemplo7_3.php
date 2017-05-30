<HTML>
<HEAD>
<TITLE>New Document</TITLE>
</HEAD>
<BODY>
<h1>Estrutura condicional (if/else)</h1>
<h2>Cálculo IMC</h2>
<?php
$altura=1.58; //Altura do indivíduo
$peso=62; //Peso do indivíduo
$imc=$peso/($altura*$altura); //Cálculo do IMC
if($imc<18.5){
echo ($imc+" Classificação magreza");
}
else if(($imc>18.5)&&($imc<24.9)){
echo ($imc." Classificação saudável");
}
else if(($imc>24.9)&&($imc<29.9)){
echo ($imc." Classificação sobrepeso");
}
else if(($imc>29.9)&&($imc<34.9)){
echo ($imc." Classificação obesidade grau I");
}
else if(($imc>34.9)&&($imc<39.9)){
echo ($imc." Classificação obesidade grau II(severa)");
}
else if($imc>=40){
echo ($imc." Classificação obesidade grau III(mórbida)");
}
?>
</BODY>
</HTML>
