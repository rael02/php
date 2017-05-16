< Html >
< Head >
	< Meta  charset = ' utf-8 ' >

</ Head >
< Body >
	< Form  method = ' get '  action = '  ' >
	Login: < entrada  tipo = ' texto '  size = ' 20 '  name = ' logon ' > < br >
	Senha: < input  type = ' password '  size = ' 20 '  name = ' senha ' >
	< Entrada  tipo = ' enviar '  valor = ' Enviar ' > < br >
	<? Php
	 se ( isset ( $ _GET [ ' Login ' ])) {
	 	Echo  $ _GET [ ' login ' ] . ' <br> ' ;
	 	Echo  $ _GET [ ' senha ' ] . ' <br> ' ;
	 }
	? >
</ Body >
</ Html >
