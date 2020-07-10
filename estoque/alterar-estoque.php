<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>
<?php   
    include("./conexao.php");
    include("./banco/banco-estoque.php");

    $produto = $_POST['txtproduto'];
    $modelo = $_POST['txtmodelo'];
    $fabricante = $_POST['txtfabricante'];
    $data = $_POST['txtdata'];
    $quantidade = $_POST['txtquantidade'];
    $codigo = $_POST['txtcodigo'];

    if(alterarEstoque($conexao,$produto,$modelo,$fabricante,$data,$quantidade,$codigo)){
        echo("Dados alterados com sucesso");
    }else{
        $erro = mysqli_error($conexao);
        echo "Aconteceu o erro : $erro";
    }
?>
<br>
<br>
    <a href="index.php">
        <input type="submit" value="Voltar" name="indexAlterar" /><br><br>
    </a>
</center>
</body>
</html>