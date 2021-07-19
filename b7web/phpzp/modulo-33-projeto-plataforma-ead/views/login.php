<html>
	<head>
		<title>LOGIN - EAD</title>
		<style type="text/css">
        body {
            font-family: "Calibri";
        }
		form {
			width:300px;
			height:auto;
			background-color: #F2F2F2;
            border: 1px solid #b8c0cd;
			margin:auto;
			margin-top:30px;
			padding:20px;
			border-radius:10px;
		}
		input {
			width:300px;
			padding:15px;
			font-size:14px;
			border:1px solid #b8c0cd;
		}
        .submit {
            background: #0B0B0D;
            color: #F2F2F2;
            margin-bottom: 10px;
        }
        .submit:hover {
            background: #202126;
        }
        .h1-center {
            text-align: center;
        }
		</style>
	</head>
	<body>
		<form method="POST">
			<h1 class="h1-center">Login</h1>

			<input type="email" name="email" placeholder="E-mail" /><br/><br/>

			<input type="password" name="senha" placeholder="******" /><br/><br/>

			<input type="submit" value="Entrar" class="submit" />
		</form>
	</body>
</html>