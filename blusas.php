<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PRODUTOS - IMPORTADOS - DO - BIGODE</title>

		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="script.js">
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
			.botao{
				display: flex;
				justify-content: center;
				place-items:center;
				height: 8px;
				background:none;
			}
			
			.btn{
				width: 2*0px;
				height: 50px;
				font-weight: bold;
				font-size: 30px;
				border: none;
				border-radius: 1000px;
				color:#000000;
				transition: all 0.6s ease-in-out 0s;
				box-shadow: inset 0 0 10px #6e6e6e;
			}
			.btn:hover{
				background: transparent;
				color: rgb(0, 255, 13);
				transform: scale(1.0) rotate(360deg);
				box-shadow: 0 0 60px #000000;
				cursor: grab;
				border:#602dbe
			}

			/*Novo card*/

  @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
body
{

	background-image: url(banner/banner16.jpg);
	background-size: 95%;
	background-position: center;

}
.card 
{
	position: relative;
	width: 350px;
	height: 380px;
	background: #0000;
	display:inline-flex;
	box-shadow: 0 15px 45px rgba(0,0,0,0.1);
	overflow: hidden;
	transition: 0.5s ease-in-out;
}
.card:hover 
{
	width: 600px;
}
.card .imgBx 
{
	position: relative;
	min-width: 300px;
	height: 100%;
	background: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	z-index: 10;
}
.card .imgBx  img 
{
	max-width: 230px;
	transition: 0.5s ease-in-out;
}
.card:hover .imgBx  img 
{
	transform: rotate(-35deg) translateX(-20px);
}
.card .details 
{
	position: absolute;
	left: 0;
	width: 300px;
	height: 100%;
	background: #4e4e4e;
	display: flex;
	justify-content: center;
	padding: 20px;
	flex-direction: column;
	transition: 0.5s ease-in-out;
}
.card:hover .details 
{
	left: 300px;
}
.card .details::before 
{
	content: '';
	position: absolute;
	left: 0px;
	width: 0; 
  height: 0; 
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 10px solid #fff;
	z-index: 1;
}
.card .details h3 
{
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 1.5em;
	line-height: 1em;
}
.card .details h3 span 
{
	font-size: 0.65em;
	font-weight: 300;
	opacity: 0.85;
	text-transform: none;
}
.card .details h4 
{
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 0.9em;
	line-height: 1em;
	margin-top: 20px;
	margin-bottom: 10px;
}
p 
{
	color: #fff;
	font-size: 0.8em;
	opacity: 0.85;
}
.size 
{
	display: flex;
	gap: 10px;
}
.size li 
{
	list-style: none;
	color: #fff;
	font-size: 0.9em;
	width: 40px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	border: 2px solid #fff;
	cursor: pointer;
	font-weight: 5px;
	opacity: 0.5;
}
.size li:hover 
{
	background: #fff;
	color: #4ba9e9;
	opacity: 1;
}
.group 
{
	position: relative;
	display: flex;
	justify-content: space-between;
	margin-top: 20px;
	align-items: center;
}
.card .details h2 
{
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 2em;
}
.card .details h2 sup 
{
	font-weight: 300;
}
.card .details h2 small 
{
	font-size: 0.75em;
}
.card .details a 
{
	display: inline-flex;
	padding: 10px 25px;
	background: #fff;
	font-weight: 500;
	text-decoration: none;
	text-transform: uppercase;
	font-weight: 600;
	color: #4ba9e9;
}
		</style>

		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa 1.jpg">
			</div>
			<div class="details">
				<h3>Nike moletom inverno<br><span>Masculino</span></h3>
				<h4>Detalhes do produto</h4>
				<p>Composição de: 70% algodão 30% poliéster, essa composição garante o aquecimento para o usuário nos dias mais frios de inverno.</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>129<small>.99</small></h2>
					<a class="botao" href="#">comprar</a>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa2.jpg">
			</div>
			<div class="details">
				<h3>Blusa Corta vento Adidas<br><span>Masculino</span></h3>
				<h4>Detalhes do produto</h4>
				<p>Possui um capuz ajustável, bolsos funcionais e mangas elásticas para maior conforto. Seu ajuste é relaxado para uma ampla gama de movimentos e é fácil de vestir com um fecho de zíper completo. </p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>79<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa3.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta casual Adidas<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Material Poliéster Composição 100% Poliéster Modelagem Reta Cor Preto Ocasião de uso Casual País de origem Indonesia</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>60<small>.00</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>


		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa4.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta casual Adidas<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Material Poliéster Composição 100% Poliéster Modelagem Reta Cor Preto Ocasião de uso Casual País de origem Indonesia</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>65<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		
		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa5.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta esportiva Lakers<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Jaqueta esportiva de um dos times mais populares da NBA, cor branca com detalhes em roxo e amarelo</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>149<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		
		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa6.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta esportiva City<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Jaqueta magnífica, licensiada pela instituição Manchester City e pela maior competição futebolistica do mundo.</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>199<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			  </div>
			</div>

			<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa7.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta Real Madrid / Adidas<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Jaqueta licensiada pelo maior clube do mundo (Real Madrid) e por uma das maiores empresas esportivavas do mundo (Adidas).</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>145<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>


		]<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa8.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta esportiva Corinthians<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Jaqueta licensiada pela instituição Sport Club Corinthians Paulista </p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>129<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		
		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa9.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta esportiva Adidas<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Jaqueta esportiva original Adidas, Material Poliéster Composição 70% Poliéster Modelagem Reta Cor verde, País de origem Australia</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>99<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		
		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa10.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta esportiva Flamengo<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Jaqueta esportiva licenciada pela instituição regatas do Flamengo, fabricada no Brasil</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>99<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		
		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa11.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta esportiva Santos FC<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Jaqueta esportiva licenciada pelo Santos Futebol clube fabricada no Brasil.</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>99<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		
		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa12.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta esportiva Chelsea<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Jaqueta corta vento chelsea, fabricada na inglaterra</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>99<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		
		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa 13.jpg">
			</div>
			<div class="details">
				<h3>Blusa esportiva<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Material Poliéster Composição 50% Poliéster 40% Algodão Modelagem Reta Cores Preto e cinza camuflado País de origem Indonesia</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>59<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		
		<div class="card">
			<div class="imgBx">
				<img src="blusa/blusa 14.jpg">
			</div>
			<div class="details">
				<h3>Jaqueta PSG<br><span>Masculino</span></h3>
				<h4>Detalhes do Produto</h4>
				<p>Jaqueta esportiva PSG Composição 50% Poliéster 40% Algodão país de origem França</p>
				<h4>Escolha o seu tamanho</h4>
				<ul class="size">
					<li>P</li>
					<li>M</li>
					<li>G</li>
					<li>GG</li>
					<li>XGG</li>
				</ul>
				<div class="group">
					<h2><sup>$</sup>149<small>.99</small></h2>
					<a href="#">comprar</a>
				</div>
			</div>
		</div>

		<footer class="r">
			<p>TCC - GUSTAVO BARCCI DA SILVA</p>
			<img src="logos e fundos/logo-branco.png">
			<p class="copyright">&copy; Copyright Shooping Do Bigode - 2023</p>
		</footer>
	</body>
	</body>
</html>