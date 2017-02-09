<?php

//POSTS
//*** infos Identificação Cliente
	$empresa = $_POST['empresa'];
	$contato = $_POST['contato'];
	$telefone = $_POST['telefone'];
	$email_cliente = $_POST['email-cliente'];
	$area = $_POST['area'];

	$codigo_demanda = $_POST['codigo-demanda'];
	$sistema = $_POST['sistema'];
	$prioridade =$_POST['prioridade-demanda'];
	$descricao = $_POST['descricao-demanda'];

	$observacao = $_POST['obs-demanda'];
	$responsavel_abertura = $_POST['responsavel-abertura'];
	$responsavel_execucao = $_POST['responsavel-execucao'];
	$status = $_POST['status-demanda'];
	$esforco_estimado = $_POST['esforco-estimado'];
	$esforco_total = $_POST['esforco-total'];
	$aceite = $_POST['aceite-analista'];
	$opiniao = $_POST['opiniao-cliente'];


	if($originalDate_abertura = $_POST['data-abertura-demanda']){
		$data_abertura_demanda= date("d/m/Y", strtotime($originalDate_abertura));
	} else{$data_abertura_demanda = null; }

	if($originalDate_entrega = $_POST['data-entrega-demanda']){
		$data_entrega_demanda= date("d/m/Y", strtotime($originalDate_entrega));
	} else{$data_entrega_demanda = null; }				

			
	



ob_start();
?>




<body>
<div align="center">
	
	<table border="1" cellspacing="0" width="100%" style="border-collapse:collapse;">
			<tr>
				<td align="center">
					<img src="psg.jpg">
				</td>
				<td align="center">
					<h1>Registro de Demandas</h1>
				</td>
				<td align="center">
					DEV-100
				</td>
			</tr>
	</table>
	<br/>
<!--******************************************************************************************************************************************-->
<table border="1" cellspacing="0" width="100%" style="border-collapse:collapse;" >
			<tr>
				<td align="center" colspan="4" bgcolor="#CCC" >
					<strong>Identificação do Cliente</strong>
				</td>
			</tr>

			<tr>
				<td width="5%">
					<strong>Empresa:</strong>
				</td>
				<td width="45%">
					<?= $empresa ?>
				</td>
				<td width="5%">
					<strong>Contato:</strong>
				</td>
				<td width="45%">
					<?= $contato ?>
				</td>
			</tr>

			<tr>
				<td width="5%">
					<strong>Telefone:</strong>
				</td>
				<td width="45%">
					<?= $telefone ?>
				</td>
				<td width="5%">
					<strong>E-mail:</strong>
				</td>
				<td width="45%">
					<?= $email_cliente ?>
				</td>
			</tr>
			<tr>
				<td width="5%">
					<strong>Área:</strong>
				</td>
				<td colspan="3">
					<?= $area ?>
				</td>
			</tr>
	</table>

<!--*********************************************************************************************************************************************-->
	<table  border="1" cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td align="center" bgcolor='#CCC' width="100%" colspan="6">
					<strong>Identificação da Demanda</strong>
				</td>
			</tr>
			<tr>
				<td width="10%">
					<strong>Código:</strong>
				</td>
				<td width="20%">
					<?= $codigo_demanda ?>
				</td>
				<td width="10%">
					<strong>Sistema:</strong>
				</td>
				<td width="20%">
					<?= $sistema ?>
				</td>
							
				<td width="15%">
					<strong>Prioridade:</strong>
				</td>
				<td width="25%">
					<?= $prioridade ?>
				</td>
			</tr>
	
			<tr>
				<td width="5%">
					<strong>Descrição:</strong>
				</td>
				<td colspan="5" width="95%">
					<?= $descricao ?>
				</td>
			</tr>
	</table>

	<table  border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td width="20%">
					<strong>Observação:</strong>
				</td>
				<td width="80%" colspan="3">
					<?= $observacao ?>
				</td>
			</tr>
			<tr>
				<td width="20%">
					<strong>Data de Abertura:</strong>
				</td>
				<td width="30%">
					<?= $data_abertura_demanda ?>
				</td>
				<td width="20%">
					<strong>Data de Entrega:</strong>
				</td>
				<td width="30%">
					<?= $data_entrega_demanda ?>
				</td>
			</tr>
	</table>

	<table  border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td width="30%">
					<strong>Responsável pela Abertura:</strong>
				</td>
				<td width="70%">
					<?= $responsavel_abertura ?>
				</td>
			</tr>
			<tr>
				<td width="30%">
					<strong>Responsável pela Execução:</strong>
				</td>
				<td width="70%">
					<?= $responsavel_execucao ?>
				</td>
			</tr>
	</table>

	<table  border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td width="10%">
					<strong>Status:</strong>
				</td>
				<td width="20%">
					<?= $status ?>
				</td>
				<td width="20%">
					<strong>Esforço Estimado:</strong>
				</td>
				<td width="15%">
					<?= $esforco_estimado ?>
				</td>
				<td width="20%">
					<strong>Esforço Total:</strong>
				</td>
				<td width="15%">
					<?= $esforco_total ?>
				</td>
			</tr>
	</table>
	
	<table border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td width='20%'>
					<strong>Aceite Analista:<br/></strong>
				</td>
				<td valign="top">
					<?= $aceite ?><br/>
				</td>
				<td width='20%'>
					<strong>Opinião do Cliente:<br/></strong>
				</td>
				<td width='20%' valign="top">
  					<?= $opiniao?>
				</td>
			</tr>
	</table>

<!--******************************************************************************************************************************************-->

</div>
</body>



<?php
$body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);

       // include("mpdf/mpdf.php");
        require 'mpdf/vendor/autoload.php';
        $mpdf=new \mPDF('c','A4','10','1' , 20, 20, 10, 10, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);
 
        //output pdf
      	$mpdf->Output('ResgistroDeDemandas.pdf','D');
        //$mpdf->Output();

        
?>