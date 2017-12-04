// JavaScript Document

                

//Comandos do carrinho
//Funções de ativação dos botões
		$(document).ready(function() {
					
				//Vai rumo a caixa de cerveja
                $('#Beer').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/beer.php");
						a.send();
					});
				
				//Vai rumo às maças
				$('#Apple').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/apple.cgi", true);
						a.send();
					});
				
				//Vai rumo às cenouras
                $('#Carrot').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/carrot.php");
						a.send();
					});
					
				//Voltar para a base
                $('#Back').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/back.php");
						a.send();
					});					
					
				//Botão de parada
                $('#Stop').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/stop.php");
						a.send();
					});
					
				//Botão de recarregar
                $('#Recharge').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/recharge.php");
						a.send();
					});

				//Controle de velocidade
				//Direita
				//Vai para direita quando o mouse é clicado
                $('#baixa').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/baixa.php");
						a.send();
					});
				$('#media').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/media.php");
						a.send();
					});
				$('#alta').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/alta.php");
						a.send();
					});
            });
