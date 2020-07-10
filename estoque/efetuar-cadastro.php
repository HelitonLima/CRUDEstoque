<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>
    <?php

    include("./banco/banco-estoque.php");
    include("./conexao.php");

    $produto = $_POST['txtProduto'];
    $modelo = $_POST['txtModelo'];
    $fabricante = $_POST['txtFabricante'];
    $data = $_POST['txtData'];
    $quantidade = $_POST['txtQuantidade'];

    if(cadastraEstoque($conexao, $produto, $modelo, $fabricante, $data, $quantidade)){
        echo "Cadastrado com sucesso";
    }else{
        $erro = mysqli_error($conexao);
        echo "Aconteceu o erro : $erro";
    }
    ?>

<br>
    <a href="index.php">
        <input type="submit" value="Voltar" name="indexEfetuar" /><br><br>
    </a>
</center>
</body>
</html>