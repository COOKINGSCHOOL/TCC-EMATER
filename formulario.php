<?php
if (isset($_POST['submit'])) {
    //print_r($_POST['nome']);
    //print_r('<br>');
    //print_r($_POST['telefone']);
    //print_r('<br>');
    //print_r($_POST['cpf']);
    //print_r('<br>');
    //print_r($_POST['senha']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,telefone,cpf,senha) VALUES ('$nome','$telefone','$cpf','$senha')");

    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: rgb(39, 138, 26);

        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
            padding: 15px;
            border-radius: 15px;
            width: 25%;

        }

        fieldset {
            border: 3px solid white;

        }

        legend {
            border: 1px solid white;
            padding: 10px;
            text-align: center;
            background-color: green;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: green;
        }

        #submit {
            background-color: green;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

        }

        a {

            color: white;
            background-color: black;
            border-radius: 10px;
            padding: 10px;
        }

        #aviso-senha {
        color: black;
        font-size: 18px;
        font-weight: 600;
        display: none;
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    </style>
</head>

<body>
    <a href="home.html">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>CADASTRO</b></legend><br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" oninput="mascaraTelefone(this)" maxlength="15" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" oninput="mascaraCPF(this)" maxlength="14" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br></br>
                <input type="submit" name="submit" id="submit" onclick="return validarFormulario();">

            </fieldset>
        </form>
    </div>
    <div id="aviso-senha">
    A senha deve conter no mínimo 4 caracteres.
</div>
    <script>
    function mascaraCPF(cpf) {
        cpf.value = cpf.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        cpf.value = cpf.value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');

        // Limita a entrada a 14 caracteres (incluindo pontos e traço)
        if (cpf.value.length > 14) {
            cpf.value = cpf.value.substring(0, 14);
        }
    }

    function mascaraTelefone(telefone) {
        telefone.value = telefone.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        telefone.value = telefone.value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');

        // Limita a entrada a 15 caracteres (incluindo parênteses, espaço e traço)
        if (telefone.value.length > 15) {
            telefone.value = telefone.value.substring(0, 15);
        }
    }

    
    function validarFormulario() {
    var nome = document.getElementById("nome").value;
    var telefone = document.getElementById("telefone").value;
    var cpf = document.getElementById("cpf").value;
    var senha = document.getElementById("senha").value;

    // Verifica se os campos obrigatórios estão preenchidos
    if (nome.trim() === '' || telefone.trim() === '' || cpf.trim() === '' || senha.trim() === '') {
        document.getElementById("aviso-senha").innerText = "Por favor, preencha todos os campos.";
        document.getElementById("aviso-senha").style.display = "block";
        return false;
    }

    // Verifica se a senha tem pelo menos 4 caracteres
    if (senha.length < 4) {
        document.getElementById("aviso-senha").innerText = "A senha deve conter no mínimo 4 caracteres.";
        document.getElementById("aviso-senha").style.display = "block";
        return false;
    } else {
        document.getElementById("aviso-senha").style.display = "none";
        return true;
    }
}
</script>
</body>

</html>