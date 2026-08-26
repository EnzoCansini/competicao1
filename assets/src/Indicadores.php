<?php
// arquivo de conexao ao banco de dados
include_once("../../constante.php");
include_once("../../service/conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['txtPeso']) && !empty($_POST['txtAltura']) && !empty($_POST['txtPressao']) && !empty($_SESSION['idUser'])) {

        $id_paciente = $_SESSION['idUser'];
        $peso = filter_input(INPUT_POST, "txtPeso", FILTER_SANITIZE_SPECIAL_CHARS);
        $altura = filter_input(INPUT_POST, "txtAltura", FILTER_SANITIZE_SPECIAL_CHARS);
        $pressao = filter_input(INPUT_POST, "txtPressao", FILTER_SANITIZE_SPECIAL_CHARS);
        $batimentos = filter_input(INPUT_POST, "txtBatimentos", FILTER_SANITIZE_SPECIAL_CHARS);
        $Campo_Livre = filter_input(INPUT_POST, "txtObservacoes", FILTER_SANITIZE_SPECIAL_CHARS);



        try {
            $sql = "INSERT INTO indicadores (ID_Paciente, Data_Registro, Hora_Registro, Peso, Altura, Pressao, Batimentos, Campo_Livre)
                VALUES (:id_paciente, CURRENT_DATE(), CURRENT_TIME(), :peso, :altura, :pressao, :batimentos, :campo_livre)";
            $insert = $conexao->prepare($sql);
            $insert->bindParam(":id_paciente", $id_paciente);
            $insert->bindParam(":peso", $peso);
            $insert->bindParam(":altura", $altura);
            $insert->bindParam(":pressao", $pressao);
            $insert->bindParam(":batimentos", $batimentos);
            $insert->bindParam(":campo_livre", $Campo_Livre);

            if ($insert->execute() && $insert->rowCount() > 0){
                $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
                $_SESSION['cor'] = $verde;
                header("Location: " . ROOT_PATH . "pages/confirma-indicadores");
                exit;

            } else {
                throw new Exception("Ocorreu um erro ao cadastrar!");
            }

        } catch (Exception $e) {
            $_SESSION['mensagem'] = "Ocorreu um erro ao cadastrar / Usuario ja Cadastrado!";
            $_SESSION['cor'] = $vermelho;
            header("Location: " . ROOT_PATH . "pages/registrar-indicadores");
            exit;

        } finally {
            unset($conexao);
        }

    } else {
        $_SESSION['mensagem'] = "Obrigatório preencher todos os campos";
        $_SESSION['cor'] = $vermelho;
        header("Location: " . ROOT_PATH . "pages/registrar-indicadores");
        exit;
    }
}
