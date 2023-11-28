<?php

    if(isset($_POST['submit']))
    {
     

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO funcionario(nome,senha,email,telefone,genero,data_nascimento,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$genero','$data_nascimento','$cidade','$estado','$endereco')");

        header('Location: cadastro_func.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
   
</head>
<body>
    <a href="index.php"><img src="../imagem/logo.png" alt=""></a>
	<div class="mer">
		<div class="box1">
		<fieldset>
			<legend><b>Login</b></legend>
			<form action="testLogin.php" method="POST">
				<input type="text" name="email" placeholder="Email">
				<br><br>
				<input type="password" name="senha" placeholder="Senha">
				<br><br>
				<input class="inputSubmit" type="submit" name="submit" value="Enviar">
			</form>
			</div>
		</fieldset>
		<div class="box">
			<form action="cadastro_func.php" method="POST">
				<fieldset>
					<legend><b>Cadastro funcionário</b></legend>
					<br>
					<div class="inputBox">
						<input type="text" name="nome" id="nome" class="inputUser" required>
						<label for="nome" class="labelInput">Nome completo</label>
					</div>
					<br>
					<div class="inputBox">
						<input type="password" name="senha" id="senha" class="inputUser" required>
						<label for="senha" class="labelInput">Senha</label>
					</div>
					<br>
					<div class="inputBox">
						<input type="text" name="email" id="email" class="inputUser" required>
						<label for="email" class="labelInput">Email</label>
					</div>
					<br>
					<div class="inputBox">
						<input type="tel" name="telefone" id="telefone" class="inputUser" required>
						<label for="telefone" class="labelInput">Telefone</label>
					</div>
					<p>Sexo:</p>
					<input type="radio" id="feminino" name="genero" value="feminino" required>
					<label for="feminino">Atendente</label>
					<br>
					<input type="radio" id="masculino" name="genero" value="masculino" required>
					<label for="masculino">Gerente</label>
					<br>
					<input type="radio" id="outro" name="genero" value="outro" required>
					<label for="outro">Outro</label>
					<br>
					<label for="data_nascimento"><b>Data de Nascimento:</b></label>
					<input type="date" name="data_nascimento" id="data_nascimento" required>
					<br><br>
					<div class="inputBox">
						<input type="text" name="cidade" id="cidade" class="inputUser" required>
						<label for="cidade" class="labelInput">Cidade</label>
					</div>
					<br>
					<div class="inputBox">
						<input type="text" name="estado" id="estado" class="inputUser" required>
						<label for="estado" class="labelInput">Estado</label>
					</div>
					<br>
					<div class="inputBox">
						<input type="text" name="endereco" id="endereco" class="inputUser" required>
						<label for="endereco" class="labelInput">Endereço</label>
					</div>
					<br>
					<input type="submit" name="submit" id="submit">
				</fieldset>
			</form>
		</div>

		

	</div>
		
		
</body>
</html>
</body>
</html>
<style>
		
.mer{
	display: flex;
	flex-direction: row
}		
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');


body {
  font-family: sans-serif;
  
  margin-top: auto;
  padding: 0;
  background-image: url("banner/banner8.png");
}

.box {
  width: 400px;
  margin: 10px auto;
  padding: 10px;
  background-color: #A9A9A9;
  border: 1px solid #ccc;
}
.box1 {
  width: 300px;
  height: 200px;
  margin: 10px auto;
  padding: 10px;
  background-color: #A9A9A9;
  border: 1px solid #ccc;
}

legend {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

.inputBox {
  margin-bottom: 5px;
}

.inputUser {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  outline: none;
}

.labelInput {
  display: block;
  margin-bottom: 5px;
}

p {
  margin-bottom: 10px;
}

input[type="radio"] {
  margin-right: 5px;
}

input[type="submit"] {
  padding: 5px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}





	
</style>