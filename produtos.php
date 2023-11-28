<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PRODUTOS - IMPORTADOS - DO - BIGODE</title>
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
					</ul>
				</nav>
			</div>
		</header>
		<style>
			*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
header{
	background-color: #000000;
	width: 100%;
    display: flex;
	justify-content: center;
	font-weight: bold;
    font-size: 26px;
}
.caixa{
	width: 100%;
	display: flex;
	justify-content: space-around;
}

body
{

	background-image: url(banner/banner8.png);
	text-align: center;
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
/* Produtos */

.produtos {
	display: inline;
	width: 1000px;
	margin: center;
	padding: 20px 10px;
	box-sizing: border-box;																																																																													

}
h1 {
	font-size: 20px;
}

.produtos li {
	display: inline-block;
	text-align: center;
	width: 450px;
	vertical-align: text-top;
	padding: 20px 20px;
	box-sizing: border-box;
	border: 4px solid #000000;
	border-radius: 20px;
}

.produtos li:hover {
	border-color: #000000;
}

.produtos li:active {
	border-color: #000000;	
}

.produtos li:hover h2 {
	font-size: 34px;
}

.produtos h2 {
	font-size: 40px;
	font-weight: bold;
}


/*parte de baixo do site*/

footer {
	color: #ffffff;
	text-align: column;
	background: url("logos e fundos/bg.jpg");
	padding: 40px ;
	margin-top: 20px;
}
footer .r{
	margin-top: 20px;

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
	color: #000000;
	text-align: left;
}
li {
	color: #000000;
	padding-left: 1em;
	text-indent: 1em;
  }
		</style>
		
		<main>
			<ul class="produtos">
				<li>
					<h2>Blusas</h2>
					<a href="blusas.html">
					<img src="blusa/blusa 1.jpg" height="210px"></a>
					<p class="produto-descricao">Blusas</p>
					<h1>Clique em saber mais para mais Produtos</h1>
					<button><a href="blusas.php">Mais Blusas</a></button>
				</li>
			    <li>
					<h2>Conjunto</h2>
					<a href="conjuntos.html">
					<img src="conjuntos/kit 10.jpg" height="210px"></a>
					<p class="produto-descricao">Conjuntos</p>
					<h1>Clique em saber mais para mais Produtos</h1>
					<button><a href="conjuntos.php">Mais Conjuntos</a></button>
				</li>
				<li>
					<h2>Shorts</h2>
					<a href="shorts.html">
					<img src="shorts/img4.jpeg"height="210px"></a>
					<p class="produto-descricao">Shorts Nike</p>
					<h1>Clique em saber mais para mais Produtos</h1>
					<button><a href="shorts.php">Mais Shorts</a></button></li>
				<li>
					<h2>Camisa</h2>
					<a href="camisa.html">
					<img src="camisas/img 17 tr.jfif" height="210px"></a>
					<p class="produto-descricao">Camisa </p>
					<h1>Clique em saber mais para mais Produtos</h1>
					<button><a href="camisa.php">Mais Camisas</a></button>
				</li>
				<li>
					<h2>Chuteiras</h2>
					<a href="chuteira.html">
					<img src="chuteiras/chuteira 14.jpg" height="210px";></a>
					<p class="produto-descricao">Chuteiras</p>
					<h1>Clique em saber mais para mais Produtos</h1>
					<button><a href="chuteira.php">Mais Chuteiras</a></button>
				</li>
				<li>
					<h2>Meias</h2>
				    <a href="meias.html">
					<img src="meias/img7.jpg" height="210px";></a>
					<p class="produto-descricao">Meias</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="meias.php">Mais meias</a></button>
				</li>
				<li>
					<h2>Calças</h2>
					<a href="calças.html">
					<img src="calças/img5.jpeg" height="210px";></a>
					<p class="produto-descricao">Calças Esportivas</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="calças.php">Mais Calças</a></button>
				</li>
				<li>
					<h2>Bolas</h2>
					<a href="bolas.html">
					<img src="bolas/bolas 1.jpg" height="210px";></a>
					<p class="produto-descricao">Bolas vários Esportes</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="bolas.php">Mais Bolas</a></button>
				</li>
				<li>
					<h2>Boné</h2>
					<a href="boné.html">
					<img src="boné/Boné 1.jpg" height="210px";></a>
					<p class="produto-descricao">bonés</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="boné.php">Mais Bonés</a></button>
				</li>
				<li>
					<h2>Bolsa</h2>
					<a href="bolsas.html">
					<img src="bolsas/Bolsa 1.jpg" height="210px";></a>
					<p class="produto-descricao">Bolsas</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="Bolsas.php">Mais Bolsas</a></button>
				</li>
				<li>
					<h2>Relógio</h2>
					<a href="relogios.html">
					<img src="relogio/relogio.jpg" height="210px";></a>
					<p class="produto-descricao">Relógio moderno</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="relogios.php">Mais Relógios</a></button>
				</li>
				<li>
					<h2>Luvas</h2>
					<a href="luva.html">
					<img src="luvas/luva.jpg" height="210px";></a>
					<p class="produto-descricao">Luva Goleiro</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="luva.php">Mais Luvas</a></button>
				</li>
				<li>
					<h2>Tenis</h2>
					<a href="tenis.html">
					<img src="tenis/tenis.jpg" height="210px";></a>
					<p class="produto-descricao">Tenis esportivo</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="tenis.php">Mais Tenis</a></button>
				</li>
				<li>
					<h2>Academia</h2>
					<a href="academia.html">
					<img src="Academia/Academia.jpeg" height="210px";></a>
					<p class="produto-descricao">Academia</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="academia.php">Mais Produtos</a></button>
				</li>
				<li>
					<h2>Garrafas</h2>
					<a href="garrafa.html">
					<img src="garrafa/garrafa1.jpg" height="210px";></a>
					<p class="produto-descricao">Garrafas</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="garrafa.php">Mais Produtos</a></button>
				</li>
				<li>
					<h2>Munhequeira</h2>
					<a href="munhequeira.html">
					<img src="munhequeira/munhequeira24.jpg" height="210px";></a>
					<p class="produto-descricao">Munhequeira</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="munhequeira.php">Mais Produtos</a></button>
				</li>
				<li>
					<h2>Bandana</h2>
					<a href="bandana.html">
					<img src="bandana/bandana22.jpg" height="210px";></a>
					<p class="produto-descricao">Bandana</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="bandana.php">Mais Produtos</a></button>
				</li>
				<li>
					<h2>Chinelo</h2>
					<a href="chinelo.html">
					<img src="chinelo/chinelo.jpg" height="210px";></a>
					<p class="produto-descricao">Chinelos</p>
					<h1>Clique em saber mais para mais Produtos</h1>
                    <button><a href="chinelo.php">Mais Produtos</a></button>
				</li>
			</ul>
		</main>

		<footer class="r">
			<p>TCC - GUSTAVO BARCCI DA SILVA</p>
			<img src="logos e fundos/logo-branco.png">
			<p class="copyright">&copy; Copyright Shooping Do Bigode - 2023</p>
		</footer>
	</body>
</html>