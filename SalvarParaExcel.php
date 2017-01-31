<?php
//POSTS
//*** infos Identificação Cliente
	$empresa = $_POST['empresa'];
	$contato = $_POST['contato'];
	$telefone = $_POST['telefone'];
	$email_cliente = $_POST['email-cliente'];
	$area = $_POST['area'];


//************************************************************************************************************



// Incluimos a classe PHPExcel
include('Classes/PHPExcel.php');

// Instanciamos a classe
$objPHPExcel = new PHPExcel();
$setSheet = $objPHPExcel->setActiveSheetIndex(0);
$getSheet = $objPHPExcel->getActiveSheet();

// Set Orientation, size and scaling
$getSheet->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$getSheet->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
$getSheet->getPageSetup()->setFitToPage(true);
$getSheet->getPageSetup()->setFitToWidth(1);
$getSheet->getPageSetup()->setFitToHeight(0);



//Estilos e definições
$style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        )
    );

$canto = array(
        'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_TOP,
        )
    );

$esquerda = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        )
    );


$border = array(
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array('rgb' => '000000')
            )
        )
    );

$color = array(
         'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'DDDDDD')
        )
    );

$desprotegido = PHPExcel_Style_Protection::PROTECTION_UNPROTECTED;


//*********************************CABECALHO**************************


//Imagem
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo = 'psg.jpg'; // Provide path to your logo file
$objDrawing->setPath($logo);  //setOffsetY has no effect
$objDrawing->setCoordinates('A2');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet()); 
$objDrawing->setOffsetX(35);

//tamanho da linha
$objPHPExcel->getActiveSheet()->getRowDimension(2)->setRowHeight(60); 

$setSheet->mergeCells('A2:B2');
$setSheet->mergeCells('C2:L2');
$setSheet->mergeCells('M2:N2');

$getSheet->setCellValue("C2", "REGISTRO DE DEMANDAS");
$getSheet->setCellValue("M2", "DEV-100");

//Estilos
$getSheet->getStyle('A2:N2')->applyFromArray($style);
$getSheet->getStyle('A2:N2')->getFont()->setSize(16);
$getSheet->getStyle('A2:N2')->getFont()->setBold(true);


//***********************Identifição do Cliente******************************

$setSheet->mergeCells('A4:N4');//titulo
$setSheet->mergeCells('A5:B5');//empresa
$setSheet->mergeCells('C5:G5');//area empresa
$setSheet->mergeCells('H5:I5');//contato
$setSheet->mergeCells('J5:N5');//area contato
$setSheet->mergeCells('A6:B6');//telefone
$setSheet->mergeCells('C6:G6');//area telefone
$setSheet->mergeCells('H6:I6');//email
$setSheet->mergeCells('J6:N6');//area email
$setSheet->mergeCells('A7:B7');//area
$setSheet->mergeCells('C7:N7');//area area

$getSheet->setCellValue("A4", "Identificação do Cliente");
$getSheet->setCellValue("A5", "Empresa:");
$getSheet->setCellValue("H5", "Contato:");
$getSheet->setCellValue("A6", "Telefone:");
$getSheet->setCellValue("H6", "E-Mail:");
$getSheet->setCellValue("A7", "Área:");

//Estilos
$getSheet->getStyle('A4')->applyFromArray($color);
$getSheet->getStyle('A4')->applyFromArray($style);
$getSheet->getStyle('A4')->getFont()->setBold(true);
$getSheet->getStyle('A5')->getFont()->setBold(true);
$getSheet->getStyle('H5')->getFont()->setBold(true);
$getSheet->getStyle('A6')->getFont()->setBold(true);
$getSheet->getStyle('H6')->getFont()->setBold(true);
$getSheet->getStyle('A7')->getFont()->setBold(true);
$getSheet->getStyle('C6')->applyFromArray($esquerda);

//Variáveis
$getSheet->setCellValue("C5", "$empresa");
$getSheet->setCellValue("J5", "$contato");
$getSheet->setCellValue("C6", "$telefone");
$getSheet->setCellValue("J6", "$email_cliente");
$getSheet->setCellValue("C7", "$area");

//Deixar desprotegido
$getSheet->getStyle('C5')->getProtection()->setLocked($desprotegido);
$getSheet->getStyle('J5')->getProtection()->setLocked($desprotegido);
$getSheet->getStyle('C6')->getProtection()->setLocked($desprotegido);
$getSheet->getStyle('J6')->getProtection()->setLocked($desprotegido);
$getSheet->getStyle('C7')->getProtection()->setLocked($desprotegido);


//***********************Identificação das Demandas******************************
$setSheet->mergeCells('A8:N8');//titulo
$getSheet->setCellValue("A8", "Identificação da Demanda");
$getSheet->getStyle('A8')->applyFromArray($color);
$getSheet->getStyle('A8')->getFont()->setBold(true);
$getSheet->getStyle('A8')->applyFromArray($style);

//Variáveis
$i=0;
$linha=0;
$total = 1;
for($i; $i <= 20 ; $i++) {

	if(isset($_POST['descricao-demanda'.$i])){

		if($_POST['descricao-demanda'.$i]){
			//$data_atividade[$i] = $_POST['data-atividade'.$i];

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

			//tem q ta aqui o rolee
			$linha = $linha + 9*$total;


			
			$setSheet->mergeCells('A'.$linha.':'.'B'.$linha);//Codigo
			$getSheet->setCellValue('A'.($linha), "Código:");
			$getSheet->getStyle('A'.$linha)->getFont()->setBold(true);

			$setSheet->mergeCells('C'.$linha.':'.'D'.$linha);//area Codigo
			$getSheet->setCellValue('C'.($linha), $codigo_demanda);
			$getSheet->getStyle('C'.$linha)->applyFromArray($esquerda);
			$getSheet->getStyle('C'.($linha))->getProtection()->setLocked($desprotegido); 
			

			$setSheet->mergeCells('E'.$linha.':'.'F'.$linha);//Sistema
			$getSheet->setCellValue('E'.($linha), "Sistema:");
			$getSheet->getStyle('E'.$linha)->getFont()->setBold(true);

			$setSheet->mergeCells('G'.$linha.':'.'J'.$linha);//area Sistema
			$getSheet->setCellValue('G'.($linha), $sistema);
			$getSheet->getStyle('G'.($linha))->getProtection()->setLocked($desprotegido); 
	

			$setSheet->mergeCells('K'.$linha.':'.'L'.$linha);//Prioridade
			$getSheet->setCellValue('K'.($linha), "Prioridade:");
			$getSheet->getStyle('K'.$linha)->getFont()->setBold(true);

			$setSheet->mergeCells('M'.$linha.':'.'N'.$linha);//area Prioridade
			$getSheet->setCellValue('M'.($linha), $prioridade);
			$getSheet->getStyle('M'.($linha))->getProtection()->setLocked($desprotegido); 
	
			$setSheet->mergeCells('A'.($linha+1).':'.'B'.($linha+1));//Descrição
			$getSheet->setCellValue('A'.($linha+1), "Descrição:");
			$getSheet->getStyle('A'.($linha+1))->getFont()->setBold(true);

			$setSheet->mergeCells('C'.($linha+1).':'.'N'.($linha+1));//area Descrição
			$getSheet->setCellValue('C'.($linha+1), $descricao);
			$getSheet->getStyle('C'.($linha+1))->getProtection()->setLocked($desprotegido); 

			$setSheet->mergeCells('A'.($linha+2).':'.'B'.($linha+2));//Observação
			$getSheet->setCellValue('A'.($linha+2), "Observação:");
			$getSheet->getStyle('A'.($linha+2))->getFont()->setBold(true);

			$setSheet->mergeCells('C'.($linha+2).':'.'N'.($linha+2));//area Observação
			$getSheet->setCellValue('C'.($linha+2), $observacao);
			$getSheet->getStyle('C'.($linha+2))->getProtection()->setLocked($desprotegido); 

			$setSheet->mergeCells('A'.($linha+3).':'.'B'.($linha+3));//Data de Abertura
			$getSheet->setCellValue('A'.($linha+3), "Data de Abertura:");
			$getSheet->getStyle('A'.($linha+3))->getFont()->setBold(true);

			$setSheet->mergeCells('C'.($linha+3).':'.'G'.($linha+3));//area data Abertura
			$getSheet->setCellValue('C'.($linha+3), $data_abertura_demanda[$i]);
			$getSheet->getStyle('C'.($linha+3))->getProtection()->setLocked($desprotegido); 

			$setSheet->mergeCells('H'.($linha+3).':'.'I'.($linha+3));//Data de Entrega
			$getSheet->setCellValue('H'.($linha+3), "Data de Entrega:");
			$getSheet->getStyle('H'.($linha+3))->getFont()->setBold(true);

			$setSheet->mergeCells('J'.($linha+3).':'.'N'.($linha+3));//area Data Entrega
			$getSheet->setCellValue('J'.($linha+3), $data_entrega_demanda[$i]);
			$getSheet->getStyle('J'.($linha+3))->getProtection()->setLocked($desprotegido); 

			$setSheet->mergeCells('A'.($linha+4).':'.'C'.($linha+4));//Responsável Abertura
			$getSheet->setCellValue('A'.($linha+4), "Responsável pela Abertura:");
			$getSheet->getStyle('A'.($linha+4))->getFont()->setBold(true);

			$setSheet->mergeCells('D'.($linha+4).':'.'N'.($linha+4));//area Respon Abertura
			$getSheet->setCellValue('D'.($linha+4), $responsavel_abertura);
			$getSheet->getStyle('D'.($linha+4))->getProtection()->setLocked($desprotegido); 

			$setSheet->mergeCells('A'.($linha+5).':'.'C'.($linha+5));//Responsável Execução
			$getSheet->setCellValue('A'.($linha+5), "Responsável pela Execução:");
			$getSheet->getStyle('A'.($linha+5))->getFont()->setBold(true);

			$setSheet->mergeCells('D'.($linha+5).':'.'N'.($linha+5));//area Respon Execucao
			$getSheet->setCellValue('D'.($linha+5), $responsavel_execucao);
			$getSheet->getStyle('D'.($linha+5))->getProtection()->setLocked($desprotegido); 

			//$setSheet->mergeCells('B'.($linha+6).':'.'C'.($linha+6));//Status
			$getSheet->setCellValue('A'.($linha+6), "Status:");
			$getSheet->getStyle('A'.($linha+6))->getFont()->setBold(true);

			$setSheet->mergeCells('B'.($linha+6).':'.'D'.($linha+6));//area Status
			$getSheet->setCellValue('B'.($linha+6), $status);
			$getSheet->getStyle('B'.($linha+6))->getProtection()->setLocked($desprotegido); 

			$setSheet->mergeCells('E'.($linha+6).':'.'F'.($linha+6));//Esforço Estimado
			$getSheet->setCellValue('E'.($linha+6), "Esforço Estimado:");
			$getSheet->getStyle('E'.($linha+6))->getFont()->setBold(true);

			$setSheet->mergeCells('G'.($linha+6).':'.'I'.($linha+6));//area Esforço Estimado
			$getSheet->setCellValue('G'.($linha+6), $esforco_estimado);
			$getSheet->getStyle('G'.($linha+6))->getProtection()->setLocked($desprotegido); 

			$setSheet->mergeCells('J'.($linha+6).':'.'K'.($linha+6));//Esforço Total
			$getSheet->setCellValue('J'.($linha+6), "Esforço Total:");
			$getSheet->getStyle('J'.($linha+6))->getFont()->setBold(true);

			$setSheet->mergeCells('L'.($linha+6).':'.'N'.($linha+6));//area Esforço Total
			$getSheet->setCellValue('L'.($linha+6), $esforco_total);
			$getSheet->getStyle('L'.($linha+6))->getProtection()->setLocked($desprotegido); 

			$setSheet->mergeCells('A'.($linha+7).':'.'B'.($linha+8));//Aceite Analista
			$getSheet->setCellValue('A'.($linha+7), "Aceite Analista:");
			$getSheet->getStyle('A'.($linha+7))->getFont()->setBold(true);
			$getSheet->getStyle('A'.($linha+7))->applyFromArray($canto);

			$setSheet->mergeCells('C'.($linha+7).':'.'G'.($linha+8));//area Aceite Analista
			$getSheet->setCellValue('C'.($linha+7), $aceite);
			$getSheet->getStyle('C'.($linha+7))->getProtection()->setLocked($desprotegido);
			$getSheet->getStyle('C'.($linha+7))->applyFromArray($canto);

			$setSheet->mergeCells('H'.($linha+7).':'.'I'.($linha+8));//Opinião do Cliente
			$getSheet->setCellValue('H'.($linha+7), "Opinião Cliente:");
			$getSheet->getStyle('H'.($linha+7))->getFont()->setBold(true);
			$getSheet->getStyle('H'.($linha+7))->applyFromArray($canto);

			$setSheet->mergeCells('J'.($linha+7).':'.'N'.($linha+8));//area Opinião Cliente
			$getSheet->setCellValue('J'.($linha+7), $opiniao);
			$getSheet->getStyle('J'.($linha+7))->getProtection()->setLocked($desprotegido);
			$getSheet->getStyle('J'.($linha+7))->applyFromArray($canto);   

			if($total >= 2){
			$setSheet->mergeCells('A'.($linha-1).':'.'N'.($linha-1));//divisão
			$getSheet->getStyle('A'.($linha-1))->applyFromArray($color);
			}

			$linha++;
			$linha = $linha-9*$total;
			$total ++;
		}	
	}
}


////////////////////////////////BORDAS/////////////////////////////
$getSheet->getStyle('A2:N2')->applyFromArray($border);

$tableBorder = 'A4:N'.($linha+9*$total-2);
$getSheet->getStyle($tableBorder)->applyFromArray($border);

/////////////////////////////PROTEÇÃO DE CELULA////////////////////
$objPHPExcel->getActiveSheet()->getProtection()->setSheet(true);
$objPHPExcel->getActiveSheet()->getProtection()->setObjects(true);


//****************outras definições************************
$getSheet->setTitle('Registro de Demandas');

// Cabeçalho do arquivo para ele baixar
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="RegistroDeDemanda.xls"');
header('Cache-Control: max-age=0');
// Se for o IE9, isso talvez seja necessário
header('Cache-Control: max-age=1');

// Acessamos o 'Writer' para poder salvar o arquivo
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

// Salva diretamente no output, poderíamos mudar arqui para um nome de arquivo em um diretório ,caso não quisessemos jogar na tela
$objWriter->save('php://output'); 

exit;

?>