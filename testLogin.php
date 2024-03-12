<?php
// Inicie a sessão
session_start();

// Verifique se a submissão ocorreu e se os campos não estão vazios
if (isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])) {
    // Inclua o arquivo de configuração do banco de dados
    include_once('config.php');
    
    // Obtenha os valores dos campos do formulário
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    // Construa a consulta SQL para autenticação do usuário normal
    $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";

    // Execute a consulta
    $result = $conexao->query($sql);

    // Verifique se há um único usuário correspondente
    if(mysqli_num_rows($result) === 1) {
        // O usuário foi autenticado com sucesso

        // Obtenha o ID do usuário
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];

        // Armazene o ID do usuário na sessão
        $_SESSION['user_id'] = $user_id;

        // Redirecione para a página de receitas
        header('Location: emater.html');
        exit();
    } else {
        // Autenticação falhou, redirecione para a página de login
        header('Location: login.php');
        exit();
    }
} else {
    // Submissão inválida, redirecione para a página de login
    header('Location: login.php');
    exit();
}

