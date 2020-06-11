<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-widht, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Cadastrar</title>

		<link rel="stylesheet" href="css/style.css">

	</head>
	<body> 

		<from action = "from" action="">
			<div class="card2">
				<div class="card-top">
					<img class="imglogin" src="img/user2.png" alt="">
					<h2 class="title" >Cadastre-se</h2>
				</div>

				<div class="card-group">
					<label>Email</label>
					<input type="email" name="email" placeholder="Digite seu email" required>
				</div>

				<div class="card-group">
					<label>Senha</label>
					<input type="password" name="senha" placeholder="Digite sua senha" required>
                </div>
                
                <div class="card-group">
					<label>Confirmar Senha</label>
					<input type="password" name="confirmarsenha" placeholder="Digite sua senha" required>
				</div>

				<div class="card-group">
					<label>Data de nascimento</label>
					<input type="date" name="data" required>
                </div>
                
                <div class="card-group">
					<label>CPF</label>
					<input type="text" name="CPF" placeholder="Digite seu CPF" required>
                </div>
                
                <div class="card-group">
					<label>CEP</label>
					<input type="text" name="CEP" placeholder="Digite seu CEP" required>
				</div>

				<div class="card-group">
					<label> <input type="checkbox" name="" id=""> Aceito os termos de uso</label>
				</div>

				<div class="card-group2 btn">
					<button class="card-group btn">
						<a href="produtos.html">
							CADASTRAR
						</a>
					</button>   
				</div>

			</div>
		</from>

	</body>
</html>