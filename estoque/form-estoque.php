<?php 
    include("./conexao.php");
    include("./banco/banco-estoque.php");

    $codigo = $_POST['idestoque'];

    echo $codigo;

    $estoque = consultarEstoquePorId($conexao, $codigo);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alterar Dados do Estoque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>
    <h2> Alterar dados do Estoque </h2>
    <form method="post" action="alterar-estoque.php">
    <pre>
            Codigo: <input type="text" name="txtcodigo" value="<?php echo $estoque['est_codigo']; ?>">
           Produto: <input type="text" name="txtproduto" value="<?php echo $estoque['est_produto']; ?>">
            Modelo: <input type="text" name="txtmodelo" value="<?php echo $estoque['est_modelo']; ?>">
        Fabricante: <input type="text" name="txtfabricante" value="<?php echo $estoque['est_fabricante']; ?>">
Data de fabricação: <input type="text" name="txtdata" value="<?php echo $estoque['est_data_fabricacao']; ?>">
        Quantidade: <input type="text" name="txtquantidade" value="<?php echo $estoque['est_quantidade'];?>">

<input type="submit" name="btncal" value="Alterar dados">
    </pre>
    <form>
</center>
</body>
</html>