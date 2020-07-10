<?php 
    include("./conexao.php");
    include("./banco/banco-estoque.php");

    $listadeestoque = listarEstoque($conexao);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estoque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>
    <h1>Estoque</h1>

    <table border="1">
        <th>Código</th>
        <th>Produto</th>
        <th>Modelo</th>
        <th>Fabricante</th>
        <th>Data de fabricação</th>
        <th>Quantidade</th>
        <th>Excluir</th>
        <th>Editar</th>

    <?php foreach ($listadeestoque as $estoque) { ?>
        <tr>
            <td><?php echo $estoque['est_codigo']; ?></td>
            <td><?php echo $estoque['est_produto']?></td>
            <td><?php echo $estoque['est_modelo']?></td>
            <td><?php echo $estoque['est_fabricante']?></td>
            <td><?php echo $estoque['est_data_fabricacao']?></td>
            <td><?php echo $estoque['est_quantidade']?></td>
            <td> 
                <a href="excluir-estoque.php?codigo=<?php echo $estoque['est_codigo']; ?>">Excluir</a>
            </td>
            <td> 
                <form method="post" action="form-estoque.php">
                    <input type="hidden" name="idestoque" value="<?php echo $estoque['est_codigo'];?>">
                    <input type="submit" value="Alterar" name="btnAlterar">
                </form>
            </td>
        </tr>
    <?php } ?>
    </table>
</center>
</body>
</html>