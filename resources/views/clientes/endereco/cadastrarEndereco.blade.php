<form class="form-horizontal" id="form" role="form" action="{{ url('page/clientes/endereco/save') }}" method="POST" enctype="multipart/form-data" >
	@csrf
	<div class="conteudo-login">
		<div class="bloco4">
			<div class="group-endereco">
				<label for="usuario">Numero:</label>
				<input type="text" name="usuario" id="usuario" class="usuario input" placeholder="Insira seu usuário aqui...">
			</div>
			<div class="group-endereco">
				<label for="password">Senha:</label>
			<input type="password" name="password" id="password" class="password input" placeholder="Insira seu usuário aqui...">
			</div>
		</div>
		<div class="bloco4">
			<div class="group-endereco">
				<label for="usuario">Usuario:</label>
				<input type="text" name="usuario" id="usuario" class="usuario input" placeholder="Insira seu usuário aqui...">
			</div>
			<div class="group-endereco">
				<label for="password">Senha:</label>
			<input type="password" name="password" id="password" class="password input" placeholder="Insira seu usuário aqui...">
			</div>
		</div>
	</div>

	<button type="submit" class="btn-cadastrar"><i class="icon ion-checkmark-circled"></i>Atualizar</button>
</form>
<script>

	$('form#form').validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true
			},
			password: {
				required: true
			},
			telefone: {
				required: true
			}
		}
	})

	var configuracoes = {}

	$("#avatar").base64({
		"onSuccess": function(inst, base64Str) {
			console.log(base64Str)
			configuracoes['base64'] = base64Str;
			console.log(configuracoes)
		}
	});

	function preview(){
		console.log(configuracoes);

		var imagem = document.querySelector('input[name=avatar]').files[0];
		var preview = document.querySelector('img[name=avatar]');

		var reader = new FileReader();

		reader.onloadend = function () {
			preview.src = reader.result;
		}

		if(imagem){
			reader.readAsDataURL(imagem);
		}else{
			preview.src = "";
		}
    }

</script>