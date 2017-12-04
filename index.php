<?php 
include "verifica.php";
?>





<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Controle</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"></link>
        <script src="scripts/jquery-3.2.1.min.js"></script>
        <script src="scripts.js"></script>
	</head>

	<body>
		<div class="esquerda"><h3>Painel de Informações</h3>
              
            <h5>Seja bem vindo, <?php echo($_SESSION["login"]) ?></h5>
            <a href="logout.php">Logout</a></ br>
	</div>
			
			<div class="geral">
				<table width="498" border="0" height="399" class="tabela-controle">
  <tbody>
    <tr>
      <td><center><button type="button" id="Apple"><img src="style/images/apples.png" alt="Maçã"/></button></center></td>
      <td><center><button type="button" id="Beer"><img src="style/images/cerveja.png" alt="Cerveja"/></button></center></td>
      <td>
      <center><button type="button" id="Carrot"><img src="style/images/carrots.png" alt="Cenoura"/></button></center></td>
    </tr>
    <tr>
      <td><center><button type="button" id="Recharge"><img src="style/images/recharge.png" alt="Recarregar"/></button></center></td>
      <td><center><button type="button" id="Stop"><img src="style/images/stop.png" alt="Parar"/></button></center></td>
      <td><center><button type="button" id="Back"><img src="style/images/base.png" alt="Base"/></button></center></td>
    </tr>
  </tbody>
</table>
		</div>


	</body>
</html>
