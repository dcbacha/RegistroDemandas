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
	<link rel="stylesheet" href="css/responsivel.css">

	<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

	<link rel="icon" href="psgicon.ico">
	<title>Registro de Demandas</title>

	

<script type="text/javascript">
	
	function reload(){
    	var r = confirm("Você irá perder seus dados. Deseja continuar?");
    	if (r == 1){
        	window.reload;
    	}
    	else{
        	return false;
    	}
	}
	
</script>
</head>


<body style="padding-top: 10px" id="target">
<div class="container" id="content">
<form method="post" id="demanda" enctype="multipart/form-data">
	
	<table class=" table table-bordered" id="name">
			<tr>
				<td>
					<center><img src="psg.jpg"></center>
				</td>
				<td class="text-center">
					<h1>Registro de Demandas</h1>
				</td>
				<td class="text-center">
					DEV-100
				</td>
			</tr>
			
	</table>
	<br/>

<!--******************************************************************************************************************************************-->
	<table class="table table-bordered">
			<tr>
				<td class="text-center" bgcolor="#CCC">
					<strong>Identificação do Cliente</strong>
				</td>
			</tr>
	</table>

	<table class="table table-body table-break">
			<tr>
				<td width="5%" class="titulo">
					<strong>Empresa:</strong>
				</td>
				<td width="45%">
					<input class="form-control input-sm" type="text" name="empresa" id="empresa">
				</td>
				<td width="5%" class="titulo">
					<strong>Contato:</strong>
				</td>
				<td width="45%">
					<input class="form-control input-sm" type="text" name="contato" id="contato">
				</td>
			</tr>

			<tr>
				<td class="titulo">
					<strong>Telefone:</strong>
				</td>
				<td>
					<input class="form-control input-sm" type="number" name="telefone" id="telefone" >
				</td>
				<td class="titulo">
					<strong>E-mail:</strong>
				</td>
				<td>
					<input class="form-control input-sm" type="email" name="email-cliente" id="email-cliente">
				</td>
			</tr>
			<tr>
				<td class="titulo">
					<strong>Área:</strong>
				</td>
				<td colspan="3">
					<input class="form-control input-sm" type="text" name="area" id="area">
				</td>
			</tr>
	</table>
<!--******************************************************************************************************************************************-->
	<table class='table table-body'>
			<tr>
				<td class='text-center' bgcolor='#CCC'>
					<strong>Identificação da Demanda</strong>
				</td>
			</tr>
	</table>


	<table class='table table-body table-break'>
			<tr>
				<td width='5%' class="titulo">
					<strong>Código:</strong>
				</td>
				<td width='10%'>
					<input class='form-control input-sm' type='number' name='codigo-demanda' id="codigo-demanda">
				</td>
				<td width='5%' class="titulo">
					<strong>Sistema:</strong>
				</td>
				<td>
					<select class='form-control input-sm' name='sistema' id="sistema">
						<option value=''>(selecione)</option>
    					<option value='CERBERUS'>CERBERUS</option>
    					<option value='CONTATOS'>CONTATOS</option>
    					<option value='CRVWEB'>CRVWEB</option>
    					<option value='DETRAN'>DETRAN</option>
    					<option value='GAT'>GAT</option>
    					<option value='HOLERITE'>HOLERITE</option>
    					<option value='LECOM BPM'>LECOM BPM</option>
    					<option value='OUTRO'>OUTRO</option>
    					<option value='PROX'>PROX</option>
    					<option value='PSG PSG_SITE'>PSG PSG_SITE</option>
    					<option value='SAAT'>SAAT</option>
    					<option value='SDDI'>SDDI</option>
    					<option value='SGAT'>SGAT</option>
    					<option value='SGDA'>SGDA</option>
    					<option value='SGDD'>SGDD</option>
    					<option value='SGDV'>SGDV</option>
    					<option value='SGGF'>SGGF</option>
    					<option value='SGPF'>SGPF</option>
    					<option value='SGPI'>SGPI</option>
    					<option value='SIEX'>SIEX</option>
    					<option value='SPB'>SPB</option>
    					<option value='SPDD'>SPDD</option>
    					<option value='SPDI'>SPDI</option>
    					<option value='SPDS'>SPDS</option>
    					<option value='SPF'>SPF</option>
    					<option value='TADM'>TADM</option>
    					<option value='TRIBUTARIO'>TRIBUTARIO</option>
    					<option value='UGDM'>UGDM</option>
    					<option value='UGDM_WEB'>UGDM_WEB</option>
    				</select>
				</td>
							
				<td width='5%' class="titulo">
					<strong>Prioridade:</strong>
				</td>
				<td>
					<select class='form-control input-sm' name='prioridade-demanda' id="prioridade-demanda">
							<option value=''>(selecione)</option>
							<option value='Alta'>1-Alta</option>
							<option value='Média'>2-Média</option>
							<option value='Baixa'>3-Baixa</option>
    				</select>
				</td>
			</tr>
	
			<tr>
				<td width='5%' class="titulo">
					<strong>Descrição:</strong>
				</td>
				<td colspan='5'>
					<input class='form-control input-sm' type='text' name='descricao-demanda' id='descricao-demanda'>
				</td>
			</tr>
	</table>

	<table class='table table-body table-break'>
			<tr>
				<td class="titulo">
					<strong>Observação:</strong>
				</td>
				<td colspan="3">
					<input class='form-control input-sm' type='text' name='obs-demanda' id='obs-demanda'>
				</td>
			</tr>
			<tr>
				<td width='15%' class="titulo">
					<strong>Data de Abertura:</strong>
				</td>
				<td width='35%'>
					<input class='form-control input-sm' type='date' name='data-abertura-demanda' id='data-abertura-demanda'>
				</td>
				<td width='15%' class="titulo">
					<strong>Data de Entrega:</strong>
				</td>
				<td width='35%'>
					<input class='form-control input-sm' type='date' name='data-entrega-demanda' id='data-entrega-demanda'>
				</td>
			</tr>
			
	</table>


	<table class='table table-body table-break'>
			<tr>
				<td width='20%' class="titulo">
					<strong>Responsável pela Abertura:</strong>
				</td>
				<td width='30%'>
					<input class='form-control input-sm' type='text' name='responsavel-abertura' id='responsavel-abertura'>
				</td>
				<td width='20%' class="titulo">
					<strong>Responsável pela Execução:</strong>
				</td>
				<td width='30%'>
					<input class='form-control input-sm' type='text' name='responsavel-execucao' id='responsavel-execucao'>
				</td>
			</tr>
	</table>

	<table class='table table-body table-break'>
			<tr>
				<td width='5%' class="titulo">
					<strong>Status:</strong>
				</td>
				<td width='30%'>
					<select class='form-control input-sm' name='status-demanda' id='status-demanda'>
							<option value=''>(selecione)</option>
							<option value='Resgistrada'>1-Resgistrada</option>
							<option value='Em andamento'>2-Em Andamento</option>
							<option value='Pendente'>3-Pendente</option>
							<option value='Cancelada'>4-Cancelada</option>
							<option value='Em atraso'>5-Em Atraso</option>
							<option value='Concluída'>6-Concluída</option>
    				</select>
				</td>
				<td width='15%' class="titulo">
					<strong>Esforço Estimado:</strong>
				</td>
				<td width='20%'>
					<input class='form-control input-sm' type='time' name='esforco-estimado' id='esforco-estimado'>
				</td>
				<td width='10%' class="titulo">
					<strong>Esforço Total:</strong>
				</td>
				<td width='20%'>
					<input class='form-control input-sm' type='time' name='esforco-total' id='esforco-total'>
				</td>
			</tr>
	</table>

	<table class='table table-body table-break'>
			<tr>
				<td width='15%' class="titulo">
					<strong>Aceite Analista:</strong>
				</td>
				<td>
					<input class='form-control input-sm' type='text' name='aceite-analista' id='aceite-analista'>
				</td>
				<td width='20%' class="titulo">
					<strong>Opinião do Cliente:</strong>
				</td>
				<td width='20%'>
					<select class='form-control input-sm' name='opiniao-cliente' id='opiniao-cliente'>
					<option value=''>(selecione)</option>
    				<option value='Atendeu totalmente'>Atendeu totalmente</option>
    				<option value='Satisfez'>Satisfez</option>
    				<option value='Não atendeu'>Não atendeu</option>
  				</select>
			
				</td>

				</tr>
	</table>
	<table>
		<label class="control-label">Anexar arquivos(.pdf, .txt, .png, .jpg, .doc, .docx, .xls, .xlsx, .csv)</label>
	<!--	<input type="file" class="filestyle"  name="arquivo[]" multiple id="arquivo" data-buttonBefore="true" data-buttonText="Procurar"> -->
		
		<input type="file" class="file"  name="arquivo[]" multiple id="arquivo" data-show-upload="false"  data-allowed-file-extensions='["pdf", "txt", "jgp", "png","doc", "xls", "docx", "xlsx", "csv"]' data-browse-label="Procurar" data-show-remove="false" data-browse-class="btn btn-default">



		
	</table>




<!--******************************************************************************************************************************************-->

<table>
	<img src="img/spinner.gif" alt="Spinner" id="spinner" hidden>
</table>
<table class="table">


<tr>
	<button style="margin-top: 3px; margin-bottom: 3px;"  id="salvaBD" class="btn btn-success pull-left" type="submit" name="salvaBD">
<!--	<button style="margin-top: 3px; margin-bottom: 3px;" type="submit" name="pdf" formaction="SalvarParaPDF.php" class="btn btn-success pull-left"> -->
		Salvar
	</button>
	
	<button style="margin-top: 3px; margin-bottom: 3px;" onclick="return reload();" formnovalidate class="btn btn-danger pull-right" >
		Cancelar
	</button>
	</tr>
</table>

</form>


<?php


if(isset($_POST['salvaBD']) && $_FILES['arquivo']['size'] > 0 && $_SESSION['safe']=="open"){
	$total = count($_FILES['arquivo']['name']);

	$id = $_SESSION['id'] ;

	

	for($i=0; $i<$total; $i++) {

		$allowed =  array('pdf', 'PDF', 'txt' , 'png' ,'jpg', 'doc', 'docx', 'csv', 'xls' , 'xlsx');
		$filename = $_FILES['arquivo']['name'][$i];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed) ) {
    		echo 'error';
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

		mysqli_query($conexao, $query) or die('Error, query failed');
	}
		
	}

	$_SESSION['safe'] = "close";

//	mysqli_close($conexao);

	
}  

?>

	<script src="js/jquery-3.1.1.js" type="text/javascript"></script>
	<script src="js/salvabd.js" type="text/javascript"></script> 

	<script src="js/fileinput.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	
</div>
</body>

</html>