<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Mercadinho Do Bigode</title>
  </head>
<body> 
		<header>
					<div class="caixa">
						<h1><img src="logos e fundos/logo 1.jpg"></h1>
						<nav>
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li><a href="produtos 2.php">Produtos</a></li>
								<li><a href="contato.php">Contato</a></li>
								<li><a href="formulario.php">Login</a></li>
                <li><a href="carrinho.php"><img class="car" src="redes sociais/car.jpg" alt=""></a></li>
							</ul>
						</nav>
					</div>
		 </header>
	<style>
    /*/ Corpo da Página*/
  body{
    display: block;
  }

  *
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'didot';
}

  /*parte do rodapé*/

footer {
	color: #ffffff;
	text-align: center;
	background: url("logos e fundos/bg.jpg");
	padding: 40px ;
	margin-top: 20px;
}
footer .r{
	margin-top: 20px;

}
.car{
  width: 70%;
}

.copyright {
	color: #ffffff;
	font-size: 20px;
	margin: 30px;
}

main {
	width: 940px;
	margin: 0 auto;
}
 a{
	display:inline-table;
	color: #d7d9d6;
	text-align: left;
}

/*Menu de cima*/

.caixa{
	width: 100%;
	display: flex;
	justify-content: space-around;

}
nav{
	display: flex;
	align-items: center;
}

nav ul{
	display: flex;
}
nav ul li a{
	text-transform: arial;
	width: 100px;
	color: #ffffff;
	font-weight: bold;
	font-size: 26px;
	text-decoration: none;
}
nav a:hover {
	color: #25b9f3;
	text-decoration: underline;
}
li {
	color: #000000;
	padding-left: 1em;
	text-indent: 1em;
  }
  header{
	background-color: #000000;
	width: 100%;
  display: flex;
	justify-content: center;
	font-weight: bold;
  font-size: 26px;
  margin: 0;
}

/* css da página home */

.banner {
	display: flex;
    list-style:georgian;
    width: 99%;
    height: 100%;
    gap: 600px;
	background-color: blue;
	position:relative;
	margin:  auto;
	justify-content: center;
	background: url("banner/banner8.png");
	border-radius: 10px;
    box-shadow: 0 2px 4px rgb(6, 255, 243);
  }
  .banner p{
	font-size: 20px;
    width: 100%;
	position: relative;
	margin: 22px auto;
	display: flex;
	justify-content: center;
  }
.titulo-principal{
	position: relative;
	text-align: center;
	font-size: 2em;
	margin:  -1em;
	clear: left;
	display: flex;
	justify-content: space-around;
}
.texto-centralizado{
	text-align: center;
	color: #000000;
	font-size: 10px;
}
.titulo-principal h3{
	font-size: 50px;
}
h3{
  margin: 30px;
}

h4{
    font-size: 45px;
	
}
  
  li {
	color: #000000;
	
	padding-left: 1em;
	text-indent: 1em;
  }

.principal p {
	margin: 1em;
}

.principal strong {
	font-weight: bold;
}

.principal em {
	font-style: arial;
}
.mapa{
	padding: 3em 0;
}

.mapa {
	margin:2em;
	text-align: center;
}

/*Parte do carrossel*/

.carrossel{
    width: 70px;
    
    margin: 20px;
  
}

.carrossel ul{
    display: flex;
    list-style: none;
    width: 100px;
    height: 200px;
    gap: 10px;
    
}
.carrossel li{
    position: relative;
    animation: slide 12s infinite ease-in  ;
}
.carrossel img{
    width: 250px;
    height: 220px;
}

@keyframes slide{
    0%{left: -20px;}
    10%{left: -300px;}
    30%{left: -400px;}
    40%{left: -500px;}
    50%{left: -600px;}
    60% {left: -900px;}
    100%{left: -0px;}
   
}

/*Quadrados das carcterísticas*/

.caracteristicas{
	width: 100%;
	display: flex;
	justify-content: center;
  margin-top: 30px;
}
.texto-centralizado1{
	display: center;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	border-width: center;
	color: #000000;
	padding: 30px; 
	border: 8px dotted rgb(0, 0, 0); 
	width: 70%;
	margin-bottom: 15px;
}
.texto-centralizado1 ul{
	display: flex;
	flex-direction: column;
}
.texto-centralizado1 ul li{
	font-size: 30px;
	list-style-type: disc;
}
h4{
    text-align: center;
    font-size: 45px;
}
li {
color: #000000;
padding-left: 1em;
text-indent: 1em;
list-style: none;
}
.principal p {
	margin: 1em;
}
.principal strong {
	font-weight: bold;
}
.principal em {
	font-style: arial;
}
.mapa{
	padding: 3em 0;
}
.mapa {
	margin:2em;
	text-align: center;
}

</style>
     <body>
      <div class="carrossel">
      <ul>
          <li>
              <img src="chuteiras/chuteira 15.jpg" alt="">
          </li>
  
          <li>
              <img src="carrossel/img2.jfif" alt="">
          </li>
          <li>
              <img src="conjuntos/kit 10.jpg" alt="">
          </li>
        <li>
          <img src="bolas/bolas 1.jpg" alt="">
          </li>
          <li>
            <img src="Boné/Boné 1.jpg" alt="">
        </li>
        <li>
          <img src="Bolsas/Bolsa 1.jpg" alt="">
          </li>
      </ul>
      <h1>
      </div>
            <div class="titulo-principal">
            <h3>  Bem Vindo a nossa loja!  </h3>
            </h1> 
            </div>
            <div class="banner">
            <div class="texto-centralizado">
            <p> Bem-vindo à nossa loja de esportes online! Somos uma empresa dedicada a fornecer aos nossos clientes os melhores produtos de esportes</p>
  
            <p> para atender às suas necessidades e objetivos de fitness. Ao visitar nosso site, você encontrará uma ampla variedade de itens esportivos,</p>
             
            <p> incluindo roupas, calçados, equipamentos de treinamento, acessórios e suplementos nutricionais. Nós oferecemos uma seleção de marcas renomadas,</p>
              
            <p>bem como nossas próprias marcas exclusivas, projetadas com o atleta em mente. Nossa seleção de roupas de esportes é extensa e inclui tudo o que</p>
            
            <p>você precisa para treinar com conforto e estilo. Temos camisetas, shorts, calças, leggings, jaquetas e mais, tudo projetado para se ajustar</p> 
             
            <p>perfeitamente e durar muito tempo. calçados esportivos são escolhidos a dedo e projetados para ajudar você a atingir suas metas de fitness.</p>
            
            <p>Temos opções para corrida, treinamento de força, crossfit e muito mais.</p>
              
            <p> Nós sabemos que cada atleta é único, por isso oferecemos uma variedade de equipamentos de treinamento para atender às necessidades de todos.</p>
            
            <p>Temos pesos livres, kettlebells, equipamentos de treinamento funcional, esteiras de ioga e muito mais.</p>
             
            <p> os nossos equipamentos são projetados com alta qualidade para garantir a segurança e durabilidade durante o uso.</p>
              
            <p>Os acessórios esportivos são tão importantes quanto o equipamento e a roupa de treino, e temos uma ampla seleção deles.</p>
            
            <p>De garrafas de água e mochilas para transportar seus equipamentos para o ginásio, a monitores de frequência cardíaca e fones de ouvido sem fio,</p>
              
            <p>temos tudo o que você precisa para levar seu treino para o próximo nível. Em disso, sabemos que a nutrição é fundamental para o desempenho esportivo</p>
              
            <p>e para a saúde geral, por isso oferecemos uma seleção de suplementos nutricionais. Temos proteínas em pó, pré-treinos, multivitaminas,</p>
             
            <p>produtos para perda de peso e muito mais. Todos os nossos suplementos são de alta qualidade e escolhidos com o objetivo de ajudar você a alcançar seus objetivos.</p>
              
            <p>Oferecemos entrega rápida e fácil em todo o país, e temos uma equipe de atendimento ao cliente dedicada que está sempre pronta para ajudar</p>
              
            <p>em qualquer dúvida ou problema que possa surgir. objetivo é fornecer a todos os atletas, de todos os níveis, a melhor experiência de compra possível.</p>
            
            <p> Navegue em nosso site hoje e comece sua jornada para um estilo de vida mais saudável e ativo!</p>
          </div>
        </div>
          </div>
        <div class="caracteristicas">
          <div class="texto-centralizado1">
            <h4>Características Da Loja:</h4>
            <ul class="ponto">
              <li class="lista">Vender pelo melhor preço para você</li>
              <li class="lista">Temos os melhores produtos do mercado</li>
              <li class="lista">Aqui vc encontra tudo oq você precisar do ramo de esporte</li>
            </ul>
          </div>
        </div>
  <footer class="r">
    <p>TCC - GUSTAVO BARCCI DA SILVA</p>
    <a href="adm.php"><img src="logos e fundos/logo-branco.png"></a>
        <p class="copyright">&copy; Copyright Shooping do Bigode- 2023</p>
        <a class="sobre_nos" href="sobres.php">Sobre nós</a>
        
  </footer> 
      </body>
      </main>
        </html>