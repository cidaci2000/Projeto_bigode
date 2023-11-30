<?php 

class CarrinhoCompras
{
    private $produtos = [];

    public function adicionarItem($id, $nome, $preco, $quantidade)
    {
        $this->produtos[$id] = [
            "id" => $id,
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade,
        ];
    }

    public function removerItem($id)
    {
        unset($this->produtos[$id]);
    }

    public function atualizarQuantidade($id, $quantidade)
    {
        $this->produtos[$id]["quantidade"] = $quantidade;
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto["preco"] * $produto["quantidade"];
        }
        return $total;
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>CARRINHO DE COMPRAS</h1>
    <div class="cart">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>PRODUTO</th>
                    <th>QUANTIDADE</th>
                    <th>PRECO</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NOME DO PRODUTO</td>
                    <td>1</td>
                    <td>R$10.00</td>
                    <td>R$10.00</td>
                </tr>
                </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Subtotal</td>
                    <td>R$10.00</td>
                </tr>
                <tr>
                    <td colspan="3">ENVIO</td>
                    <td>R$5.00</td>
                </tr>
                <tr>
                    <td colspan="3">Total</td>
                    <td>R$15.00</td>
                </tr>
            </tfoot>
        </table>
        <a href="index.php"><button class="checkout-button">SAIR</button></a>
    </div>
</body>
</html>

<style>
body {
    font-family: sans-serif;
    background-image: url("banner/banner8.png");
}

.cart {
    width: 80%;
    margin: 0 auto;
}

.cart-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #696969;
}

.cart-table th, .cart-table td {
    padding: 10px;
    border: 1px solid #ccc;
}

.checkout-button {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}


</style>