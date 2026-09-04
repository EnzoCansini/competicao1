<?php
// arquivo de conexao ao banco de dados
include_once("../../constante.php");
include_once("../../service/conexao.php");



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dias = $_POST['dia'] ?? [];
    $horarios = $_POST['hora'] ?? [];

    if (!empty($_POST['txtNome']) && !empty($_POST['txtEmail']) && !empty($_POST['txtSenha']) && !empty($dias) && !empty($horarios)) {

        $nome = trim((string) filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_SPECIAL_CHARS));
        $cpf = trim((string) filter_input(INPUT_POST, "txtCPF", FILTER_SANITIZE_SPECIAL_CHARS));
        $email = strtolower(trim((string) filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_EMAIL)));
        $telefone = trim((string) filter_input(INPUT_POST, "txtTelefone", FILTER_SANITIZE_SPECIAL_CHARS));
        $estado = trim((string) filter_input(INPUT_POST, "txtEstado", FILTER_SANITIZE_SPECIAL_CHARS));
        $cidade = trim((string) filter_input(INPUT_POST, "txtCidade", FILTER_SANITIZE_SPECIAL_CHARS));
        $rua = trim((string) filter_input(INPUT_POST, "txtRua", FILTER_SANITIZE_SPECIAL_CHARS));
        $categoria = trim((string) filter_input(INPUT_POST, "txtEspecialidade", FILTER_SANITIZE_SPECIAL_CHARS));
        $registro = trim((string) filter_input(INPUT_POST, "txtRegistro", FILTER_SANITIZE_SPECIAL_CHARS));
        $senha = (string) $_POST['txtSenha'];

        if ($cpf === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['mensagem'] = "Informe um CPF e um e-mail validos.";
            $_SESSION['cor'] = 'alert-danger';
            header("Location: " . ROOT_PATH . "pages/cadastro-proficional");
            exit;
        }

        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        try {
            $check = $conexao->prepare(
                "SELECT CPF, Email FROM usuario WHERE CPF = :cpf OR LOWER(Email) = :email LIMIT 1"
            );
            $check->execute([
                ':cpf' => $cpf,
                ':email' => $email
            ]);
            $existingUser = $check->fetch(PDO::FETCH_ASSOC);

            if ($existingUser) {
                $duplicateField = $existingUser['CPF'] === $cpf ? 'CPF' : 'e-mail';
                $_SESSION['mensagem'] = "$duplicateField ja cadastrado.";
                $_SESSION['cor'] = 'alert-danger';
                header("Location: " . ROOT_PATH . "pages/cadastro-proficional");
                exit;
            }

            $conexao->beginTransaction();

            $sql = "INSERT INTO usuario (Nome, Email, CPF, Telefone, Estado, Cidade, Rua, Categoria, Registro_Profissional, Senha) 
                    VALUES (:nome, :email, :cpf, :telefone, :estado, :cidade, :rua, :categoria, :registro, :senha)";
            $insert = $conexao->prepare($sql);
            $insert->bindParam(":nome", $nome);
            $insert->bindParam(":email", $email);
            $insert->bindParam(":cpf", $cpf);
            $insert->bindParam(":telefone", $telefone);
            $insert->bindParam(":estado", $estado);
            $insert->bindParam(":cidade", $cidade);
            $insert->bindParam(":rua", $rua);
            $insert->bindParam(":categoria", $categoria);
            $insert->bindParam(":registro", $registro);
            $insert->bindParam(":senha", $senhaCriptografada);

            if (!$insert->execute()) {
                throw new RuntimeException("Nao foi possivel cadastrar o usuario.");
            }


            $ID_Usuario = $conexao->lastInsertId();
            if (!$ID_Usuario) {
                throw new RuntimeException("Nao foi possivel identificar o usuario cadastrado.");
            }

            // Remove a disponibilidade antiga
            $sqlDelete = "
        DELETE FROM disponibilidade
        WHERE ID_Usuario = :ID_Usuario
    ";

                $stmtDelete = $conexao->prepare($sqlDelete);

            if (!$stmtDelete->execute([
                    ':ID_Usuario' => $ID_Usuario
                ])) {
                throw new RuntimeException("Nao foi possivel atualizar a disponibilidade.");
            }


            // Insere a nova disponibilidade
            $sqlInsert = "
        INSERT INTO disponibilidade
        (ID_Usuario, dia_semana, horario, Data_Update)
        VALUES
        (:ID_Usuario, :dia_semana, :horario, CURRENT_TIMESTAMP)
    ";

            $stmtInsert = $conexao->prepare($sqlInsert);


            foreach ($dias as $dia) {

                foreach ($horarios as $horario) {

                    if (!$stmtInsert->execute([
                        ':ID_Usuario' => $ID_Usuario,
                        ':dia_semana' => $dia,
                        ':horario' => $horario
                    ])) {
                        throw new RuntimeException("Nao foi possivel salvar a disponibilidade.");
                    }
                }
            }


            // Confirma todas as alterações
            $conexao->commit();

            $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
            $_SESSION['cor'] = 'alert-success';
            header("Location: " . ROOT_PATH . "pages/cadastro-proficional");
            exit;
        } catch (PDOException $e) {
            if ($conexao->inTransaction()) {
                $conexao->rollBack();
            }
            $_SESSION['mensagem'] = "Nao foi possivel concluir o cadastro. Tente novamente.";
            $_SESSION['cor'] = 'alert-danger';
            header("Location: " . ROOT_PATH . "pages/cadastro-proficional");
            exit;
        } catch (Throwable $e) {
            if ($conexao->inTransaction()) {
                $conexao->rollBack();
            }
            $_SESSION['mensagem'] = "Ocorreu um erro ao cadastrar o usuario.";
            $_SESSION['cor'] = 'alert-danger';
            header("Location: " . ROOT_PATH . "pages/cadastro-proficional");
            exit;
        } finally {
            unset($conexao);
        }
    } else {
        $_SESSION['mensagem'] = "Obrigatório preencher todos os campos";
        $_SESSION['cor'] = 'alert-danger';
        header("Location: " . ROOT_PATH . "pages/cadastro-proficional");
        exit;
    }
}
