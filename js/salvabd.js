

$("#salvaBD").click(function(){
	
	$("#spinner").toggle();

	var r = confirm("Enviar registro de demanda?");
    if (r == 1){
        	//window.reload;
    	
		console.log("entrou no salvar");

		var file = $("#arquivo");
		

		var total = $("#arquivo")[0].files.length;
		console.log(total); //da a quantidade de objetos
		//formData.append()
		
		//console.log($("#arquivo")[0].files[0]); //pega tudo menos o content :(

		//console.log($("#arquivo").prop("files")[0]); //mesma coisa que em cima



		//setTimeout(function(){ console.log(ext) }, 1000);
		//var dados = $("#demanda").serialize();
		var dados = [];
		
		var empresa = $("#empresa").val();
		var contato = $("#contato").val();
		var telefone = $("#telefone").val();
		var email = $("#email-cliente").val();
		var area = $("#area").val();

		var codigo = $("#codigo-demanda").val();
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
			empresa: empresa,
			contato: contato,
			telefone: telefone,
			email: email,
			area: area,
			codigo: codigo,
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
					console.log(data);
	        	}
			})
			.done(function(data){
				console.log("finalizado!");
				$("#spinner").toggle();
				});
		

	}
    else{
        return false;
    }



}); 

