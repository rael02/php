< HTML >
< HEAD >
< TITLE > Novo Documento </ TITLE >
</ HEAD >
< BODY >
< H1 > Estrutura condicional (se / else) </ h1 >
< H2 > Cálculo IMC </ h2 >
<? Php
$ Altura = 1,58 ; // Altura do indivíduo
$ Peso = 62 ; // Peso do indivíduo
$ Imc = $ peso / ( $ altura * $ altura ); // Cálculo do IMC
se ( $ IMC < 18,5 ) {
Echo ( $ imc + " Classificação magreza " );
}
Else  if (( $ imc > 18.5 ) && ( $ imc < 24.9 )) {
Eco ( $ imc . " Classificação saudável " );
}
Else  if (( $ imc > 24.9 ) && ( $ imc < 29.9 )) {
Echo ( $ imc . " Classificação sobrepeso " );
}
Else  if (( $ imc > 29.9 ) && ( $ imc < 34.9 )) {
Echo ( $ imc . " Classificação obesidade grau I " );
}
Else  if (( $ imc > 34.9 ) && ( $ imc < 39.9 )) {
Echo ( $ imc . " Classificação obesidade grau II (severa) " );
}
Else  if ( $ imc > = 40 ) {
Echo ( $ imc . " Classificação obesidade grau III (mórbida) " );
}
? >
</ BODY >
</ HTML >
