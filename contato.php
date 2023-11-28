<?php




// Check if the form is submitted
if (isset($_POST['submit'])) {
	include_once('config.php');

  // Extract form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate form data (optional)
  // ...

  // Insert data into the database
  $sql = "INSERT INTO suporte (name, email, message) VALUES ('$name', '$email', '$message')";

  if ($conexao->query($sql) === TRUE) {
    // Redirect to thank-you page
    header('Location: index.php');
  } else {
    echo 'Error: ' . $conexao->error;
  }

  // Close database connection
  $conexao->close();
}
?>

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
							</ul>
						</nav>
					</div>
		 </header>
<body>

	<section class="contact">
		<div class="content">
			<h2>Contato</h2>
			<p>Seja Bem vindo (a) a nossa área de contato, aqui você terá a opção de nos descrever como prefere ser chamado (a), que a nossa equipe de suporte logo entrará em contato contigo, aqui nós temos a opção abaixo em que você poderá nos enviar as suas dúvidas ou até mesmo pedir para ficar por dentro das promoções da nossa loja, tudo isso bem abaixo da opção de email, lhe garanto que será bem simples e rápido! </p>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><ion-icon name="location-outline"></ion-icon></div>
					<div class="text">
						<h3>Localização da loja</h3>
						<p>119, Prezidentes Zacarias,<br>Cascavel,Paraná,<br>85817430</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><ion-icon name="call-outline"></ion-icon></div>
					<div class="text">
						<h3>Telefone contato</h3>
						<p>+55 (45) 9 9861-4799</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><ion-icon name="mail-outline"></ion-icon></div>
					<div class="text">
						<h3>Email suporte</h3>
						<p>Mercadinho_do_Bigode_suporte@gmail.com</p>
					</div>
				</div>
				<h2 class="txt">Siga-nos nas nossas redes sociais</h2>
				<ul class="sci">
					<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
					<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
					<li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
					<li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
				</ul>
			</div>

			<div class="contactForm">
			<form action="" method="POST">
          <h2>Suporte</h2>
          <div class="inputBox">
            <input type="text" name="name" required="required">
            <span>Como prefere ser chamado?</span>
          </div>
          <div class="inputBox">
            <input type="email" name="email" required="required">
            <span>Email</span>
          </div>
          <div class="inputBox">
            <textarea name="message" required="required"></textarea>
            <span>Descreva o que posso lhe ajudar...</span>
          </div>
          <div class="inputBox">
            <input type="submit" name="submit" value="Enviar">
          </div>
        </form>
			</div>
		</div>
	</section>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<footer class="r">
		<p>TCC - GUSTAVO BARCCI DA SILVA</p>
		<img src="logos e fundos/logo-branco.png">
			<p class="copyright">&copy; Copyright Shooping do Bigode- 2023</p>
			<a class="sobre_nos" href="sobres.html">Sobre nós</a>
	  </footer> 
		  </body>
		  </main>
			</html>
			<style>
		/*parte de baixo do site*/

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
	margin: auto;
}
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	
}
.contact 
{
	position: relative;
	min-height: 100vh;
	padding: 50px 100px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background: #222;
}
.contact .content 
{
	max-width: 800px;
	text-align: center;
}
.contact .content h2 
{
	font-size: 3em;
	color: #fff;
	font-weight: 500;
}
.contact .content p 
{
	color: #fff;
	font-size: 1.1em;
	font-weight: 300;
}
.container 
{
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	gap: 50px;
	margin-top: 30px;
}
.container .contactInfo 
{
	width: 50%;
	display: flex;
	flex-direction: column;
}
.container .contactInfo .box 
{
	position: relative;
	padding: 20px 0;
	display: flex;
	cursor: pointer;
}
.container .contactInfo .box .icon 
{
	min-width: 60px;
	height: 60px;
	background: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 1.75em;
	transition: 0.5s;
}
.container .contactInfo .box:hover .icon 
{
	background: #00bcd4;
	color: #fff;
}
.container .contactInfo .box .text 
{
	display: flex;
	flex-direction: column;
	margin-left: 20px;
	font-size: 1.1em;
	color: #fff;
	font-weight: 300;
}
.container .contactInfo .box .text h3 
{
	font-weight: 500;
	color: #00bcd4;
}
.container .contactInfo .txt
{
	color: #fff;
	margin-top: 50px;
	font-weight: 500;
	padding-left: 10px;
	border-left: 50px solid #e91e63;
	line-height: 1em;
}
.sci 
{
	position: relative;
	display: flex;
	gap: 30px;
	margin: 20px 0;
}
.sci li 
{
	list-style: none;
}
.sci li a 
{
	color: #fff;
	font-size: 2em;
	transition: 0.5s;
}
.sci li a:hover 
{
	color: #00bcd4;
}


.container .contactForm
{
	position: relative;
	width: 40%;
	background: #fff;
	min-height: 100px;
	padding: 60px;
} 
.container .contactForm h2 
{
	font-size: 2em;
	color: #333;
	font-weight: 500;
}
.container .contactForm .inputBox 
{
	position: relative;
	width: 100%;
	margin-top: 20px;
}
.container .contactForm .inputBox input, 
.container .contactForm .inputBox textarea 
{
	width: 100%;
	padding: 5px 0;
	font-size: 1.1em;
	margin: 10px 0;
	border: none;
	border-bottom: 2px solid #333;
	outline: none;
	resize: none;
}
.container .contactForm .inputBox span 
{
	position: absolute;
	left: 0;
	pointer-events: none;
	padding: 5px 0;
	margin: 10px 0;
	font-size: 1.1em;
	color: #666;
	transition: 0.5s;
}
.container .contactForm .inputBox input:focus ~ span, 
.container .contactForm .inputBox textarea:focus ~ span,
.container .contactForm .inputBox input:valid ~ span, 
.container .contactForm .inputBox textarea:valid ~ span 
{
	color: #e91e63;
	font-size: 0.9em;
	transform: translateY(-20px);
}
.container .contactForm .inputBox input[type="submit"]
{
	width: 100px;
	background: #00bcd4;
	color: #fff;
	border: none;
	cursor: pointer;
	padding: 10px;
	font-size: 1.1em;
	font-weight: 500;
}

/* lets make it responsive */
@media (max-width: 991px)
{
	.contact
	{
		padding: 50px;
	}
	.container
	{
		flex-direction: column;
	}
	.container .contactInfo,
	.container .contactForm
	{
		width: 100%;
	}
	.container .contactForm
	{
		padding: 50px 30px;
	}
}
	</style>