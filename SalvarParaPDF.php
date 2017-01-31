<?php

//POSTS
//*** infos Identificação Cliente
	$empresa = $_POST['empresa'];
	$contato = $_POST['contato'];
	$telefone = $_POST['telefone'];
	$email_cliente = $_POST['email-cliente'];
	$area = $_POST['area'];



	if($originalDate_inic_serv = $_POST['data-inicio-servico']){
		$data_inicio_servico = date("d/m/Y", strtotime($originalDate_inic_serv));
	} else{$data_inicio_servico = null; }



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
					<h1>Registro de Atividades</h1>
				</td>
				<td align="center">
					DEV-100
				</td>
			</tr>
	</table>
	<br/>
<!--******************************************************************************************************************************************-->
<table border="1" cellspacing="0" style="border-collapse:collapse;" >
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
				<td>
					<strong>Telefone:</strong>
				</td>
				<td>
					<?= $telefone ?>
				</td>
				<td>
					<strong>E-mail:</strong>
				</td>
				<td>
					<?= $email_cliente ?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Área:</strong>
				</td>
				<td colspan="3">
					<?= $area ?>
				</td>
			</tr>
	</table>

<!--*********************************************************************************************************************************************-->
	<table  border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td align="center" class='text-center' bgcolor='#CCC'>
					<strong>Identificação da Demanda</strong>
				</td>
			</tr>
	</table>

<div id="tab_logic">



<div id='addr0'>


<!-- aqui entra no loop -->

<?php
	$i=0;
	for($i; $i <= 20 ; $i++) {

		if(isset($_POST['descricao-demanda'.$i])){

			if($_POST['descricao-demanda'.$i]){
				$codigo_demanda = $_POST['codigo-demanda'.$i];
				$sistema = $_POST['sistema-demanda'.$i];
				$prioridade =$_POST['prioridade-demanda'.$i];
				$descricao = $_POST['descricao-demanda'.$i];

				$observacao = $_POST['obs-demanda'.$i];
				$responsavel_abertura = $_POST['responsavel-abertura'.$i];
				$responsavel_execucao = $_POST['responsavel-execucao'.$i];
				$status = $_POST['status-demanda'.$i];
				$esforco_estimado = $_POST['esforco-estimado-demanda'.$i];
				$esforco_total = $_POST['esforco-total-demanda'.$i];
				$aceite = $_POST['aceite-analista'.$i];
				$opiniao = $_POST['opiniao-cliente'.$i];


				if($originalDate_abertura = $_POST['data-abertura-demanda'.$i]){
					$data_abertura_demanda[$i]= date("d/m/Y", strtotime($originalDate_abertura));
				} else{$data_abertura_demanda[$i] = null; }

				if($originalDate_entrega = $_POST['data-entrega-demanda'.$i]){
					$data_entrega_demanda[$i]= date("d/m/Y", strtotime($originalDate_entrega));
				} else{$data_entrega_demanda[$i] = null; }				



			?>

	<table  border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td width='5%'>
					<strong>Código:</strong>
				</td>
				<td width='10%'>
					<?= $codigo_demanda ?>
				</td>
				<td width='5%'>
					<strong>Sistema:</strong>
				</td>
				<td>
					<?= $sistema ?>
				</td>
							
				<td width='5%'>
					<strong>Prioridade:</strong>
				</td>
				<td>
					<?= $prioridade ?>
				</td>
			</tr>
	
			<tr>
				<td width='5%'>
					<strong>Descrição:</strong>
				</td>
				<td colspan='5'>
					<?= $descricao ?>
				</td>
			</tr>
	</table>

	<table  border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td>
					<strong>Observação:</strong>
				</td>
				<td colspan="3">
					<?= $observacao ?>
				</td>
			</tr>
			<tr>
				<td width='20%'>
					<strong>Data de Abertura:</strong>
				</td>
				<td width='30%'>
					<?= $data_abertura_demanda[$i] ?>
				</td>
				<td width='20%'>
					<strong>Data de Entrega:</strong>
				</td>
				<td width='30%'>
					<?= $data_entrega_demanda[$i] ?>
				</td>
			</tr>
			
	</table>


	<table  border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td width='30%'>
					<strong>Responsável pela Abertura:</strong>
				</td>
				<td>
					<?= $responsavel_abertura ?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Responsável pela Execução:</strong>
				</td>
				<td>
					<?= $responsavel_execucao ?>
				</td>

			</tr>
	</table>

	<table  border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td width='5%'>
					<strong>Status:</strong>
				</td>
				<td width='15%'>
					<?= $status ?>
				</td>
				<td width='20%'>
					<strong>Esforço Estimado:</strong>
				</td>
				<td width='20%'>
					<?= $esforco_estimado ?>
				</td>
				<td width='20%'>
					<strong>Esforço Total:</strong>
				</td>
				<td>
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
	
	<table  border="1"  cellspacing="0" width="100%" style="border-collapse:collapse;  margin-top: -1px;">
			<tr>
				<td align="center" class='text-center' bgcolor='#000'>
				</td>
			</tr>
	</table>

<!-- aqui sai do loop -->

<?php
			}
		} 
	}
?>

<!--******************************************************************************************************************************************-->



</form>

</div>
</body>



<?php
$body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);

        include("mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','10','1' , 20, 20, 10, 10, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);
 
        //output pdf
      	$mpdf->Output('ResgistroDeDemandas.pdf','D');
        //$mpdf->Output();

        
?>