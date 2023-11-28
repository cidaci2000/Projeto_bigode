<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Mercadinho Do Bigode</title>

		<link rel="stylesheet" href="style.css">
  </head>
<body> 
		<header>
					<div class="caixa">
						<h1><img src="logos e fundos/logo 1.jpg"></h1>
						<nav>
							<ul>
								<li><a href="index.php">Inicio</a></li>
								
							</ul>
						</nav>
					</div>
		 </header>
<style>/*Página Sobre com a foto e a borda colorida em volta*/

	.sobre{
	  position: column;
	  width:300px;
	  height:400px;
	  background-image: url(sobre/EU\ De\ beca.jpg);
	  background-size:cover;
	  margin-top: 20px;
	  margin-left: 30px;
	  display:inline-flex;
	  justify-content:center;
	  align-items:center;
	  border-radius: 3px;
	  font: bold 2em 'Century Gothic';
  }
  .texto_sobre a{
	  display: column;
	  color: #474343;
	  text-align: left;
	  text-size-adjust: 5px;
	  font-size: 30px;
  
  }
  .texto_sobre h1{
	  font-size: 50px;
	  color: #000000;
  }
  .texto_sobre h2{
	  font-size: 20px;
	  color: #474343;
	  display: column;
  }
  .h3{
	  font-size: 50px;
	  color: #474343;
	  display: column;
  
  }
  
  .sobre::before, .sobre::after {
	  content: '';
	  position:absolute;
	  z-index: -1;
	  width: calc(305px + 30px);
	  height:calc(405px + 30px);
	  background: linear-gradient(45deg, #000000, #000000, #000000, #000000, #000000, #ffffff,
	  #000000, #000000, #000000, #000000, #000000, #ffffff);
	  background-size: 300%;
	  border-radius: 8px;
	  animation: AnimarBorda 8s linear alternate infinite;
  
  }
  
  
  @keyframes AnimarBorda{
  
  0%{
	  background-position: 0;
  }
  100%{
	  background-position:300%;
  }
  
  }
  
  
  .sobre::after{
	  filter: blur(50px);
  }
  /* Parte da Professora aparecida*/
  .aparecida{
	  position: column;
	  width:300px;
	  height:400px;
	  background-image: url(sobre/aparecida.jpg);
	  background-size:cover;
	  margin-top: 20px;
	  margin-left: 30px;
	  display:inline-flex;
	  justify-content:center;
	  align-items:center;
	  border-radius: 3px;
	  font: bold 2em 'Century Gothic';
  }
  .texto_aparecida a{
	  color: #000000;
	  text-align: center;
	  text-size-adjust: 10px;
  
  }
  .aparecida::before, .aparecida::after {
	  content: '';
	  position:absolute;
	  z-index: -1;
	  width: calc(305px + 30px);
	  height:calc(405px + 30px);
	  background: linear-gradient(45deg, #000000, #3b3b3b, #40383f, #837f7f, #d7d9d6, #ffffff,
	  #000000, #3b3b3b, #40383f, #837f7f, #d7d9d6, #ffffff);
	  background-size: 300%;
	  border-radius: 8px;
	  animation: AnimarBorda 8s linear alternate infinite;
  
  }
  
  
  @keyframes AnimarBorda{
  
  0%{
	  background-position: 0;
  }
  100%{
	  background-position:300%;
  }
  
  }
  
  
  .aparecida::after{
	  filter: blur(50px);
  }
	/* Parte da Professora Alessandra*/
  
  .alessandra{
	  position: column;
	  width:300px;
	  height:400px;
	  background-image: url(sobre/alessandra.jpeg);
	  background-size:cover;
	  margin-top: 20px;
	  margin-left: 30px;
	  display:inline-flex;
	  justify-content:center;
	  align-items:center;
	  border-radius: 3px;
	  font: bold 2em 'Century Gothic';
  }
  .texto_alessandra a{
	  color: #000000;
	  text-align: center;
	  text-size-adjust: 10px;
  
  }
  .alesandra::before, .alessandra::after {
	  content: '';
	  position:absolute;
	  z-index: -1;
	  width: calc(305px + 30px);
	  height:calc(405px + 30px);
	  background: linear-gradient(45deg, #000000, #3b3b3b, #40383f, #837f7f, #d7d9d6, #ffffff,
	  #000000, #3b3b3b, #40383f, #837f7f, #d7d9d6, #ffffff);
	  background-size: 300%;
	  border-radius: 8px;
	  animation: AnimarBorda 8s linear alternate infinite;
  
  }
  
  
  @keyframes AnimarBorda{
  
  0%{
	  background-position: 0;
  }
  100%{
	  background-position:300%;
  }
  
  }
  
  
  .aparecida::after{
	  filter: blur(50px);
  }
  
  body{
		text-align: center;
	  background-image: linear-gradient(to right, rgb(255, 248, 248), rgba(175, 175, 175, 0.918));
	}
  
  </style>
<div>
 <div>
  <h1>Projeto de conclusão de curso</h1>
 </div>
    <div class="sobre">
    </div>
	<h2 class="texto_sobre">
  <h2>Olá me chamo Gustavo Barcci da silva</h2>
  <h2>Estudo na instituição de ensino Colégio etadual Padre Carmelo Perrone</h2>
  <h2>E este site foi desenolvido por mim, com o pensamento inspirado em uma loja de esportes.</h2>
  <h2>com o pensamento e o objetivo de que todos nós devemos buscar uma vida saudável,</h2>
  <h2>mais para isto precisamos de recursos certos, como vestimentas adequadas, aparelhos de musculação,</h2>
  <h2>e vários outros utensilios para que você tenha uma vida muito mais saudável...</h2>
</h2>
<h1> Professora Aparecida</h1>
<div class="aparecida"></div>
<h2>Esta é a querida da Professora Aparecida</h2>
<h2>Uma Profesora muito doce e que me ajudou muito durante estes quatro anos,</h2>
<h2>sou muito grato por ela, pois se não fose ela eu não teria chegado aqui hj, foi uma das unicas pessoas que acreditou em mim,</h2>
<h2>quando eu decidi fazer meu TCC sozinho, em todas aulas nós dois quebrava a cabeça para resolver os problemas do meu código, lembra Profe?</h2>
<h2>e hoje posso dizer que sei muita coisa sobre programação graças a você Profe,</h2>
<h2>uma mulher muito meiga e muito atensiosa com toda turma, suas aulas eram as que eu mais gostava, Obs:(Eu amo programar)...</h2>
<h2>você foi uma maẽzona para mim nesses anos, e vou te levar para sempre em meu coração</h2>
<h2>Obrigado por tudo Professora Aparecida</h2>

</div>
<h1> Professora Alessandra</h1>
<div class="alessandra"></div>
<h2>Esta é a querida da Professora Alessandra</h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h3>Obrigado por tudo Professora Alesandra</h3>
</body>
<footer class="r">
		<p>TCC - GUSTAVO BARCCI DA SILVA</p>
		<img src="logos e fundos/logo-branco.png">
			<p class="copyright">&copy; Copyright Shooping do Bigode- 2023</p>
</footer> 
     
</html>