<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            text-align: center;
            margin: 200px;
            background-color:white;



        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
            background-color: black;
            color: white;
            padding: 30px;
            border-radius: 10px;

        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid green;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover {
            background-color: green;
        }


        .logo img {
            width: 35%;
            border-radius:3px;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="logo">
        <img src="imagens/logo.png" alt="">
    </div>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>

</html>