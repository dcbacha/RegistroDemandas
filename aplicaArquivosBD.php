<?php
require_once("config.php");

header("Content-Type: application/json; charset=utf-8");

$dados = json_decode($_POST["dados"],true);


 
// inserir na tabela de condutores



/*	$fileName = $dados['userfile']['name'];
	$tmpName  = $dados['userfile']['tmp_name'];
//	$fileSize = $_FILES['userfile']['size'];
//	$fileType = $_FILES['userfile']['type'];

	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	
	fclose($fp);

	if(!get_magic_quotes_gpc())
	{
	    $fileName = addslashes($fileName);
	}

//$query = "INSERT INTO imagens (name, size, type, content ) ".
//"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

//mysqli_query($conexao, $query) or die('Error, query failed'); 

//echo "<br>File $fileName uploaded<br>"; */


return $dados;

?>


