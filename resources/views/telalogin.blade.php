<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-widht, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login</title>

		<link rel="stylesheet" href="{{asset('css/style.css')}}">

	</head>
	<body> 

	<form method="post" action="{{route('logar')}}">
		@csrf
			<div class="card">
				<div class="card-top">
					<img class="imglogin" src="{{asset('img/user2.png')}}" alt="">
					<h2 class="title" >Login</h2>
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
					<label> <input type="checkbox" name="" id=""> Lembre-me</label>
				</div>

				<div class="card-group2 btn">
					<button class="card-group btn">
							LOGIN
					</button>   
				</div>


			<a href="{{route('esqueceu.senha')}}">Esqueceu a senha</a>

			</div>
		</form>

	</body>
</html>