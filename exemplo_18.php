< Html >
< Head >
< Título > Exemplo 18 </ title >
</ Head >
< Body >
<? PHP
$ Carros [ " Palio " ] [ " cor " ] = " azul " ;
$ Carros [ " Palio " ] [ " Potência " ] = " 1.0 " ;
$ Carros [ " Palio " ] [ " opcionais " ] = " Ar condicionado " ;
$ Carros [ " corsa " ] [ " cor " ] = " cinza " ;
$ Carros [ " corsa " ] [ " Potência " ] = " 1.3 " ;
$ Carrod [ " corsa " ] [ " opcionais " ] = " MP3 " ;
$ Carros [ " Gol " ] [ " cor " ] = " Branco " ;
$ Carros [ " Gol " ] [ " Potência " ] = " 1.0 " ;
$ Carros [ " Gol " ] [ " opcionais " ] = " Metálica " ;
Foreach ( $ carros  como  $ modelos  =>  $ caracteristicas ) {
 Echo " <b> Modelo " .  $ Modelos . " </ B> " ;
 Echo " </ br> " ;
 foreach ( $ caracteristicas  como  $ caracteristicas  =>  $ valor ) {
  Echo " $ caracteristicas : $ valor " ;
  Echo " </ br> </ br> " ;
  }
  }
  ? >
  

</ Body >
</ Html >
