<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Excluir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
        include("./conexao.php");
        include("./banco/banco-estoque.php");
        $codigo = $estoque['est_codigo'];
        echo $codigo;

        //if(excluirEstoque($conexao, $codigo)){
        //    echo "Exluido com sucesso";
        //}else{
        //    echo "Não  foi possivel excluir";
        //}
    ?>
</body>
</html>