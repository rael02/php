< Html >
< Head >
< Título > Exemplo 8 </ title >
</ Head >
< Body >
<? Php
Echo  " <h1> Estrutura condicional (switch) </ h1> " ;
$ Dia =  getdate ();
Switch ( $ dia [ " wday " ]) {
Caso  5 :
Echo  " finalmente Sexta " ;
quebrar ;
Caso  6 :
Echo " super sábado " ;
quebrar ;
Caso  0 ;
Echo " domingo sonolento " ;
quebrar ;
Caso  2 ;
Echo " Aula de Programação " ;
quebrar ;
Padrão ;
Echo " Estou esperando Final de Semana " ;
}
? >
</ Body >
</ Html >
