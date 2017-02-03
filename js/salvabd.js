

$("#salvaBD").click(function(){
	
	console.log("entrou no salvar");
	console.log($("#codigo-demanda").val());

	//var dados = $("#demanda").serialize();
	var dados = [];
	
	var sistema = $("#sistema").val();
	var prioridade = $("#prioridade-demanda").val();
	var descricao = $("#descricao-demanda").val();
	var observacao = $("#obs-demanda").val();
	var dataAbertura = $("#data-abertura-demanda").val();
	var dataEntrega =$("#data-entrega-demanda").val();
	var responsavelAbertura = $("#responsavel-abertura").val();
	var responsavelExecucao = $("#responsavel-execucao").val();
	var statusDemanda = $("#status-demanda").val();
	var esforcoEstimado = $("#esforco-estimado").val();
	var esforcoTotal = $("#esforco-total").val();
	var aceiteAnalista = $("#aceite-analista").val();
	var opiniaoCliente = $("#opiniao-cliente").val();

	var demanda = {
		sistema: sistema,
		prioridade: prioridade,
		descricao: descricao,
		observacao: observacao,
		dataAbertura: dataAbertura,
		dataEntrega: dataEntrega,
		responsavelAbertura: responsavelAbertura,
		responsavelExecucao: responsavelExecucao,
		statusDemanda: statusDemanda,
		esforcoEstimado: esforcoEstimado,
		esforcoTotal: esforcoTotal,
		aceiteAnalista: aceiteAnalista,
		opiniaoCliente: opiniaoCliente,
	};

	dados.push(demanda);

	console.log(dados);


	var table = JSON.stringify(demanda);


	var tablejson = {"dados" : table }; 

	console.log(tablejson);

	$.ajax({
        type: 'POST',
        dataType: 'html',
        url: 'aplicaBD.php',
        data:  tablejson,
		error: function() {
			console.log("erro, nao transmitiu")
			},
        success: function(data) {
        	console.log("transmitidos com sucesso!");
			//	console.log(data);
        	}
		})
		.done(function(data){
			console.log("finalizado!");
			});






});