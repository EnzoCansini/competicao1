<?php
// arquivo de conexao ao banco de dados
include_once("../../constante.php");
include_once("../../service/conexao.php");

var_dump($_POST);
var_dump($_SESSION);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['txtPeso']) && !empty($_POST['txtAltura']) && !empty($_POST['txtPressao'])) {

        $id_paciente = $_SESSION['id_paciente'];
        $peso = filter_input(INPUT_POST, "txtPeso", FILTER_SANITIZE_SPECIAL_CHARS);
        $altura = filter_input(INPUT_POST, "txtAltura", FILTER_SANITIZE_SPECIAL_CHARS);
        $pressao = filter_input(INPUT_POST, "txtPressao", FILTER_SANITIZE_SPECIAL_CHARS);
        $batimentos = filter_input(INPUT_POST, "txtBatimentos", FILTER_SANITIZE_SPECIAL_CHARS);
        $Campo_Livre = filter_input(INPUT_POST, "txtObservacoes", FILTER_SANITIZE_SPECIAL_CHARS);



        try {
            $sql = "INSERT INTO indicadores (Peso, Altura, Pressao, Batimentos, Campo_Livre, ID_Paciente) 
                    VALUES (:peso, :altura, :pressao, :batimentos, :campo_livre, :id_paciente)";
            $insert = $conexao->prepare($sql);
            $insert->bindParam(":id_paciente", $id_paciente);
            $insert->bindParam(":peso", $peso);
            $insert->bindParam(":altura", $altura);
            $insert->bindParam(":pressao", $pressao);
            $insert->bindParam(":batimentos", $batimentos);
            $insert->bindParam(":campo_livre", $Campo_Livre);

            if ($insert->execute() && $insert->rowCount() > 0){
                $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
                $_SESSION['cor'] = 'alert-success';
                header("Location: " . ROOT_PATH . "pages/confirma-indicadores");
                exit;

            } else {
                throw new Exception("Ocorreu um erro ao cadastrar!");
            }

        } catch (Exception $e) {
            $_SESSION['mensagem'] = "Ocorreu um erro ao cadastrar / Usuario ja Cadastrado!";
            $_SESSION['cor'] = 'alert-danger';
            header("Location: " . ROOT_PATH . "pages/registrar-indicadores");
            exit;

        } finally {
            unset($conexao);
        }

    } else {
        $_SESSION['mensagem'] = "Obrigatório preencher todos os campos";
        $_SESSION['cor'] = 'alert-danger';
        header("Location: " . ROOT_PATH . "pages/registrar-indicadores");
        exit;
    }
}
