<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: rgb(39, 138, 26);
            
        }

        div {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit {
            background-color: rgb(30, 255, 41);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: rgb(0, 0, 0);
            font-size: 15px;
            font-weight: 600;
            

        }

        .inputSubmit:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }

        a {

            color: white;
            background-color: black;
            border-radius: 10px;
            padding: 10px;
        }

        
    </style>
</head>


    <body>
        <a href="home.html">Voltar</a>
        <div>    
            <h1>Login</h1>
            <form action="testLogin.php" method="POST">
                <input type="text" name="cpf" placeholder="CPF">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
        </div>
    </body>

</html>