<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<meta charset="UTF-8">
	<title>Mercadinho Do Bigode</title>

	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style.css">
  </head>
<body>
	<header>
		<div class="produtos1">
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
</body>
<body> 
	<style>
	body{
	background-color:rgb(46, 45, 45);
		}
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
/*Banner*/
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
	</style>
	<div class="carrossel">
	<ul>
		<li>
			<img src="bolsa feminino/bolsa feminina.jpg" alt="">
			</li>
		<li>
			<img src="bandana/bandana30.jpg" alt="">
		</li>

		<li>
			<img src="blusa/blusa12.jpg" alt="">
		</li>
		<li>
			<img src="garrafa/garrafa1.jpg" alt="">
		</li>
	  <li>
		<img src="Academia/Academia.jpeg" alt="">
		</li>
		<li>
		  <img src="tenis/tenis10.jpg" alt="">
	  </li>
	  <li>
		<img src="camisas/img 14 tr.jfif" alt="">
		</li>
	</ul>
	<h1>
	</div>
 <main class="card">
	<div class="borda">
	<ul class="PG1">
		<li class="li">
			<h2>Masculino</h2>
			<a href="produtos.php">
			<img src="logos e fundos/logo masculino.jpeg" height="300px" width="200px";></a>
			<h5>Conheça nossos produtos</h5>
			<button>
				<a class="a" href="produtos.php">Produtos Masculinos</a>
			</button>
		</li>
		<li class="li">
			<h2>Feminino</h2>
			<a href="produtos femininos.php">
			<img src="logos e fundos/logo Feminina.jpeg" height="300px" width="200px";></a>
			<h5>Conheça nossos produtos</h5>
			<button>
				<a class="a" href="produtos femininos.php">Produtos Masculinos</a>
			</button>
		</li>
		</ul>
 </main>
	</div>
	<footer class="r">
	 <p>TCC - GUSTAVO BARCCI DA SILVA</p>
	  <img src="logos e fundos/logo-branco.png">
	   <p class="copyright">&copy; Copyright Shooping Do Bigode - 2023</p>
	</footer>
</body>
</html>