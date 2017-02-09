<!DOCTYPE html>
<html>
<?php include("config.php");?>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="icon" href="psgicon.ico">
	<title>Registro de Demandas</title>

</head>


<?php


if(isset($_POST['salvaBD']) && $_FILES['arquivo']['size'] > 0 && $_SESSION['safe']=="open"){
	$total = count($_FILES['arquivo']['name']);

	$id = $_SESSION['id'] ;

	

	for($i=0; $i<$total; $i++) {

		$allowed =  array('pdf', 'PDF', 'txt' , 'png' ,'jpg', 'doc', 'docx', 'csv', 'xls' , 'xlsx');
		$filename = $_FILES['arquivo']['name'][$i];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed) ) {
    		//echo 'extensão inválida de arquivo';
		}else{

		$fileName = $_FILES['arquivo']['name'][$i];
		$tmpName  = $_FILES['arquivo']['tmp_name'][$i];
		$fileSize = $_FILES['arquivo']['size'][$i];
		$fileType = $_FILES['arquivo']['type'][$i];

		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
	
		fclose($fp);

		if(!get_magic_quotes_gpc())
		{
	   		$fileName = addslashes($fileName);
		}

		

		$query = "INSERT INTO documentos (demanda_id, name, size, type, content ) ".
		"VALUES ('$id', '$fileName', '$fileSize', '$fileType', '$content')";

		mysqli_query($conexao, $query) or ($_SESSION['erro'] = 'Upload de arquivos falhou');
	}
		
	}

	$_SESSION['safe'] = "close";

//	mysqli_close($conexao);

	
}  

?>


<body style="padding-top: 10px" id="target">
<div class="container" id="content">

<?php

if(isset($_SESSION['erro'])){
	//echo $_SESSION['erro'];
?>	
	<div class="jumbotron">
 	 <h1>Algo deu errado :(</h1>
 	 <p>Erro: <?= $_SESSION['erro'];?>.</p>
 	 <p><center><a class="btn btn-primary btn-lg" href="index.php" role="button">Voltar</a></center></p>
	</div>

<?php
	$_SESSION['erro'] = null;
	//echo $_SESSION['erro'];
}
else{
?>

<div class="jumbotron">
 	 <h1>Concluído!</h1>
 	 <p>Seu Registro de Demanda foi adicionado com sucesso.</p>
 	 <p><center><a class="btn btn-primary btn-lg" href="index.php" role="button">Voltar</a></center></p>
</div>
<?php
}


?>


</div>
</body>

