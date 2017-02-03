<?php
require_once("config.php");

header("Content-Type: application/json; charset=utf-8");

$dados = json_decode($_POST["dados"],true);


 
// inserir na tabela de condutores
$sql = "INSERT INTO `demandas` (`sistema`, `prioridade`, `descricao`, `observacao`, `dataAbertura`, `dataEntrega`, `responsavelAbertura`, `responsavelExecucao`, `statusDemanda`, `esforcoEstimado`, `esforcoTotal`, `aceiteAnalista`, `opiniaoCliente`) VALUES";


    	$sistema = $dados['sistema'];
		$prioridade = $dados['prioridade'];
		$descricao = $dados['descricao'];
		$observacao = $dados['observacao'];
		$dataAbertura = $dados['dataAbertura'];
		$dataEntrega = $dados['dataEntrega'];
		$responsavelAbertura = $dados['responsavelAbertura'];
		$responsavelExecucao = $dados['responsavelExecucao'];
		$statusDemanda = $dados['statusDemanda'];
		$esforcoEstimado = $dados['esforcoEstimado'];
		$esforcoTotal = $dados['esforcoTotal'];
		$aceiteAnalista = $dados['aceiteAnalista'];
		$opiniaoCliente =$dados['opiniaoCliente'];
		 
		$sql .= " ('{$sistema}', '{$prioridade}', '{$descricao}', '{$observacao}', '{$dataAbertura}', '{$dataEntrega}', '{$responsavelAbertura}', '{$responsavelExecucao}', '{$statusDemanda}', '{$esforcoEstimado}', '{$esforcoTotal}', '{$aceiteAnalista}', '{$opiniaoCliente}')";


// Tira o último caractere (vírgula extra)
//$sql = substr($sql, 0, -1);
echo $sql;

$stmt = $DBcon->prepare($sql);
$stmt->execute();


echo 'Usuários cadastrados: ' . $cadastrados;


?>


