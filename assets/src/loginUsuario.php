<?php

include_once("../../constante.php");
include_once("../../service/conexao.php");


if ($_SERVER['REQUEST_METHOD']==="POST"){
    if(!empty($_POST['txtEmail']) && !empty($_POST['txtSenha'])){
    try {
        $email = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_SPECIAL_CHARS);

            //CONSULTA AO BANCO DE DADOS VERIFICAR EMAIL
            $sql = "SELECT Email, Senha, Nome, ID_Usuario FROM usuario WHERE Email = :email";
            $select = $conexao->prepare($sql);
            $select->bindParam(':email', $email);
            if ($select->execute() && $select->rowCount()>0){
                $login = $select->fetch(PDO::FETCH_ASSOC);

                //verifica se a senha esta corre
                if ($login['Email'] && password_verify($senha, $login['Senha'])){
                    $_SESSION['logado'] = TRUE;
                    $_SESSION['idUser'] = $login['ID_Usuario'];
                    $_SESSION['nomeUser'] = $login['Nome'];

                        header("Location: " . ROOT_PATH . "pages/inicio-proficional");
                        exit;
                    
                }
            }
            $_SESSION['mensagem'] = "Usuario/Senha Invalidos!";
            $_SESSION['cor'] = 'alert-danger';
            header("Location: " . ROOT_PATH . "pages/login-proficional");
            exit;

    } catch (\Exception $e) {
            $_SESSION['mensagem'] = "Ocorreu um erro no Banco de Dados";
            $_SESSION['cor'] = 'alert-danger';
            header("Location: " . ROOT_PATH . "pages/login-proficional");
            exit;
    } finally {
        unset($conexao);
    }

    } else {
        $_SESSION['mensagem'] = "Obrigatório preencher todos os campos";
        $_SESSION['cor'] = 'alert-danger';
        header("Location: " . ROOT_PATH . "pages/login-proficional");
        exit;
    }
}

?>