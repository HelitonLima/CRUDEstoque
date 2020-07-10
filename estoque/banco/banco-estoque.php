<?php
	function cadastraEstoque($conexao, $est_produto, $est_modelo, $est_fabricante, $est_data_fabricacao, $est_quantidade){
		$query = "insert into tb_estoque (est_produto, est_modelo, est_fabricante, est_data_fabricacao, est_quantidade)
				values('{$est_produto}','{$est_modelo}','{$est_fabricante}','{$est_data_fabricacao}',{$est_quantidade})";
				return mysqli_query($conexao, $query);
			}
	function listarEstoque($conexao){
		$listadeestoque = array();
		$resultado = mysqli_query($conexao,"select * from tb_estoque");
		while($estoque = mysqli_fetch_assoc($resultado)){
			array_push($listadeestoque, $estoque);
		}
		return $listadeestoque;
	}
	function alterarEstoque($conexao, $est_produto, $est_modelo, $est_fabricante, $est_data_fabricacao, $est_quantidade, $codigo){
		$query ="update tb_estoque set est_produto='{$est_produto}', est_modelo='{$est_modelo}', est_fabricante='{$est_fabricante}', 
		est_data_fabricacao='{$est_data_fabricacao}', est_quantidade = {$est_quantidade} where est_codigo = $codigo"; 
		return mysqli_query($conexao, $query);
	}
	function consultarEstoquePorId($conexao, $codigo){
		$query = "select * from tb_estoque where est_codigo = {$codigo}";
		$resultado = mysqli_query($conexao, $query);
		$estoque = mysqli_fetch_assoc($resultado);
		return $estoque;
	}
	function excluirEstoque($conexao, $codigo){
		$query = "delete from tb_estoque where est_codigo = $codigo";
		return mysqli_query($conexao, $query);
	}