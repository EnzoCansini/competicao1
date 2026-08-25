<?php
// arquivo de conexao ao banco de dados
include_once("../../constante.php");
include_once("../../service/conexao.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['txtNome']) && !empty($_POST['txtEmail']) && !empty($_POST['txtSenha'])) {

        $nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = filter_input(INPUT_POST, "txtCPF", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_EMAIL);
        $telefone = filter_input(INPUT_POST, "txtTelefone", FILTER_SANITIZE_SPECIAL_CHARS);
        $estado = filter_input(INPUT_POST, "txtEstado", FILTER_SANITIZE_SPECIAL_CHARS);
        $cidade = filter_input(INPUT_POST, "txtCidade", FILTER_SANITIZE_SPECIAL_CHARS);
        $rua = filter_input(INPUT_POST, "txtRua", FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, "txtSenha", FILTER_SANITIZE_SPECIAL_CHARS);

        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO paciente (Nome, Email, CPF, Telefone, Estado, Cidade, Rua, Senha) 
                    VALUES (:nome, :email, :cpf, :telefone, :estado, :cidade, :rua, :senha)";
            $insert = $conexao->prepare($sql);
            $insert->bindParam(":nome", $nome);
            $insert->bindParam(":email", $email);
            $insert->bindParam(":cpf", $cpf);
            $insert->bindParam(":telefone", $telefone);
            $insert->bindParam(":estado", $estado);
            $insert->bindParam(":cidade", $cidade);
            $insert->bindParam(":rua", $rua);
            $insert->bindParam(":senha", $senhaCriptografada);

            if ($insert->execute() && $insert->rowCount() > 0){
                $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
                $_SESSION['cor'] = 'alert-success';
                header("Location: " . ROOT_PATH . "pages/login");
                exit;

            } else {
                throw new Exception("Ocorreu um erro ao cadastrar!");
            }

        } catch (Exception $e) {
            $_SESSION['mensagem'] = "Ocorreu um erro ao cadastrar / Usuario ja Cadastrado!";
            $_SESSION['cor'] = 'alert-danger';
            header("Location: " . ROOT_PATH . "pages/cadastro");
            exit;

        } finally {
            unset($conexao);
        }

    } else {
        $_SESSION['mensagem'] = "Obrigatório preencher todos os campos";
        $_SESSION['cor'] = 'alert-danger';
        header("Location: " . ROOT_PATH . "pages/cadastro");
        exit;
    }
}
