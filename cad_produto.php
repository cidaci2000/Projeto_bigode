<?php
    if (isset($_POST['submit'])) {
        include_once('config.php');

        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $cor = $_POST['cor'];
        $categoria = $_POST['categoria'];

        $result = mysqli_query($conexao, "INSERT INTO produtos(nome, preco, quantidade, cor, categoria) VALUES ('$nome', '$preco', '$quantidade', '$cor', '$categoria')");

        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    
</head>
<body>
    <a href="../adm.php"><img src="../imagem/logo.png" alt=""></a>
    <div class="box">
        <form action="cad_produto.php" method="POST">
            <fieldset>
                <legend><b>Cadastro produto</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">PRODUTO</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="number" step="0.01" name="preco" id="preco" class="inputUser" required>
                    <label for="preco" class="labelInput">PREÇO</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="number" min="1" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="quantidade" class="labelInput">QUANTIDADE</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cor" id="cor" class="inputUser" required>
                    <label for="cor" class="labelInput">COR</label>
                </div>
                <p>categoria:</p>
                <input type="radio" id="feminino" name="categoria" value="feminino" required>
                <label for="feminino">FEMININO</label>
                <br>
                <input type="radio" id="masculino" name="categoria" value="masculino" required>
                <label for="masculino">MASCULINO</label>
                <br>
                <input type="radio" id="outro" name="categoria" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
<style>
 body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-image: url("banner/banner8.png");
}

.box {
  width: 600px;
  margin: 50px auto;
  padding: 20px;
  background-image: url("banner/banner8.png");
  border: 1px solid #ccc;
}

legend {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

.inputBox {
  margin-bottom: 10px;
}

.inputUser {
  width: 100%;
  padding: 10px;
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
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

.inputBox:last-child {
  margin-bottom: 0;
}
    </style>
