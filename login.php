<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style/style.css"></link>
</head>

<body>
<div class="geral">
	<img src="style/images/robo.png">
	<form id="logar" name="logar" method="post" action="logar.php"/>
    	
    	<div class="entrada-dados">
        	<input name="login" id="login" type="text" maxlength="20" placeholder="Nome de Usuário" />
        </div>
        <div class="entrada-dados">
        	<input name="senha" id="senha" type="password" maxlength="20" placeholder="Senha" />
        </div>
   	  <input type="submit" value="Entrar" name="button" id="button" class="botao" />
    </form>
</div>


</body>
</html>
