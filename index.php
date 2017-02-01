<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="icon" href="psgicon.ico">
	<title>Registro de Demandas</title>

	<script src="js/jquery-3.1.1.js" type="text/javascript"></script>
	<script src="js/add-row.js" type="text/javascript"></script>

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
<form method="post">
	
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
					<input class="form-control input-sm" type="text" name="empresa">
				</td>
				<td width="5%" class="titulo">
					<strong>Contato:</strong>
				</td>
				<td width="45%">
					<input class="form-control input-sm" type="text" name="contato">
				</td>
			</tr>

			<tr>
				<td class="titulo">
					<strong>Telefone:</strong>
				</td>
				<td>
					<input class="form-control input-sm" type="number" name="telefone" >
				</td>
				<td class="titulo">
					<strong>E-mail:</strong>
				</td>
				<td>
					<input class="form-control input-sm" type="email" name="email-cliente">
				</td>
			</tr>
			<tr>
				<td class="titulo">
					<strong>Área:</strong>
				</td>
				<td colspan="3">
					<input class="form-control input-sm" type="text" name="area">
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
					<input class='form-control input-sm' type='number' name='codigo-demanda0'>
				</td>
				<td width='5%' class="titulo">
					<strong>Sistema:</strong>
				</td>
				<td>
					<select class='form-control input-sm' name='sistema-demanda0'>
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
					<select class='form-control input-sm' name='prioridade-demanda0'>
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
					<input class='form-control input-sm' type='text' name='descricao-demanda0'>
				</td>
			</tr>
	</table>

	<table class='table table-body table-break'>
			<tr>
				<td class="titulo">
					<strong>Observação:</strong>
				</td>
				<td colspan="3">
					<input class='form-control input-sm' type='text' name='obs-demanda0'>
				</td>
			</tr>
			<tr>
				<td width='15%' class="titulo">
					<strong>Data de Abertura:</strong>
				</td>
				<td width='35%'>
					<input class='form-control input-sm' type='date' name='data-abertura-demanda0'>
				</td>
				<td width='15%' class="titulo">
					<strong>Data de Entrega:</strong>
				</td>
				<td width='35%'>
					<input class='form-control input-sm' type='date' name='data-entrega-demanda0'>
				</td>
			</tr>
			
	</table>


	<table class='table table-body table-break'>
			<tr>
				<td width='20%' class="titulo">
					<strong>Responsável pela Abertura:</strong>
				</td>
				<td width='30%'>
					<input class='form-control input-sm' type='text' name='responsavel-abertura0'>
				</td>
				<td width='20%' class="titulo">
					<strong>Responsável pela Execução:</strong>
				</td>
				<td width='30%'>
					<input class='form-control input-sm' type='text' name='responsavel-execucao0'>
				</td>
			</tr>
	</table>

	<table class='table table-body table-break'>
			<tr>
				<td width='5%' class="titulo">
					<strong>Status:</strong>
				</td>
				<td width='30%'>
					<select class='form-control input-sm' name='status-demanda0'>
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
					<input class='form-control input-sm' type='time' name='esforco-estimado-demanda0'>
				</td>
				<td width='10%' class="titulo">
					<strong>Esforço Total:</strong>
				</td>
				<td width='20%'>
					<input class='form-control input-sm' type='time' name='esforco-total-demanda0'>
				</td>
			</tr>
	</table>

	<table class='table table-body table-break'>
			<tr>
				<td width='15%' class="titulo">
					<strong>Aceite Analista:</strong>
				</td>
				<td>
					<input class='form-control input-sm' type='text' name='aceite-analista0'>
				</td>
				<td width='20%' class="titulo">
					<strong>Opinião do Cliente:</strong>
				</td>
				<td width='20%'>
					<select class='form-control input-sm' name='opiniao-cliente0'>
					<option value=''>(selecione)</option>
    				<option value='Atendeu totalmente'>Atendeu totalmente</option>
    				<option value='Satisfez'>Satisfez</option>
    				<option value='Não atendeu'>Não atendeu</option>
  				</select>
			
				</td>

				</tr>
	</table>




<!--******************************************************************************************************************************************-->
<table class="table">
<tr>
	<button style="margin-top: 3px; margin-bottom: 3px;" type="submit" name="pdf" formaction="SalvarParaPDF.php" class="btn btn-success pull-left">
		Salvar
	</button>
	
	<button style="margin-top: 3px; margin-bottom: 3px;" onclick="return reload();" formnovalidate class="btn btn-primary pull-right" >
		Novo
	</button>
	</tr>
</table>

</form>
</div>
</body>

</html>
