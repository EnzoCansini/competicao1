<?php
require_once("../../service/conexao.php");

$categoria = trim((string) ($_POST['categoria'] ?? ''));
$escolha = trim((string) ($_POST['escolha'] ?? ''));
$motivo = trim((string) ($_POST['motivo'] ?? ''));
$medicos = [];

if ($categoria !== '') {
    $consulta = $conexao->prepare(
        "SELECT u.ID_Usuario, u.Nome, u.Email, u.Telefone, u.Categoria,
                d.dia_semana, d.horario
         FROM usuario u
         LEFT JOIN disponibilidade d ON d.ID_Usuario = u.ID_Usuario
         WHERE u.Categoria = :categoria
         ORDER BY u.Nome, d.dia_semana, d.horario"
    );
    $consulta->execute(['categoria' => $categoria]);

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $idMedico = (int) $linha['ID_Usuario'];

        if (!isset($medicos[$idMedico])) {
            $medicos[$idMedico] = [
                'id' => $idMedico,
                'nome' => $linha['Nome'],
                'email' => $linha['Email'],
                'telefone' => $linha['Telefone'],
                'categoria' => $linha['Categoria'],
                'horarios' => [],
                'dias' => []
            ];
        }

        if ($linha['dia_semana'] !== null && $linha['horario'] !== null) {
            $dia = strtolower(trim($linha['dia_semana']));
            $dia = strtr($dia, [
                'á' => 'a', 'ã' => 'a', 'â' => 'a',
                'é' => 'e', 'ê' => 'e',
                'í' => 'i', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
                'ú' => 'u'
            ]);

            if (in_array($dia, ['segunda', 'terca', 'quarta', 'quinta', 'sexta'], true)) {
                $tipoDia = 'Dias de semana';
            } elseif (in_array($dia, ['sabado', 'domingo'], true)) {
                $tipoDia = 'Fins de semana';
            } else {
                $tipoDia = null;
            }

            if ($tipoDia !== null && !in_array($tipoDia, $medicos[$idMedico]['dias'], true)) {
                $medicos[$idMedico]['dias'][] = $tipoDia;
            }

            $partesHora = explode(':', $linha['horario']);
            $minutos = ((int) $partesHora[0] * 60) + (int) ($partesHora[1] ?? 0);

            if ($minutos >= 360 && $minutos < 720) {
                $tipoHorario = 'Manha';
            } elseif ($minutos >= 720 && $minutos < 1080) {
                $tipoHorario = 'Tarde';
            } elseif ($minutos >= 1080 && $minutos <= 1380) {
                $tipoHorario = 'Noite';
            } else {
                $tipoHorario = null;
            }

            if ($tipoHorario !== null && !in_array($tipoHorario, $medicos[$idMedico]['horarios'], true)) {
                $medicos[$idMedico]['horarios'][] = $tipoHorario;
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/icons/icons.css">
    <link href="../../src/output.css" rel="stylesheet">
    <!--
    npx @tailwindcss/cli -i ./assets/src/css/input.css -o ./src/output.css --watch
    !-->
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Document</title>
</head>

<body>
    <?php include_once("../../assets/parts/headerIn.php") ?>
    <main>
        <div class="titulo pt-3 w-90 md:w-150 justify-self-center">
            <h2>Selecione o profional desejado que fara seu atendimento</h2>
        </div>
        <div class="botao w-90 md:w-150 justify-self-center justify-items-end py-2">
            <div class="botoes flex gap-2">
                <button type="button" id="backBtn" class=" flex items-center gap-2 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 transition">
                    <span class="mdi--filter medio"></span>
                    <p class="text-base font-medium">Filtrar</p>
                </button>
                <button type="button" id="backBtn" class=" flex items-center gap-2 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 transition">
                    <span class="pajamas--go-back"></span>
                    <p class="text-base font-medium">Voltar</p>
                </button>
            </div>
        </div>
        <div class="card flex flex-col gap-2 px-2 justify-self-center">
            <?php if ($categoria === ''): ?>
                <p class="bg-white rounded-[10px] w-90 md:w-150 p-3">Nenhuma categoria foi recebida.</p>
            <?php elseif (count($medicos) === 0): ?>
                <p class="bg-white rounded-[10px] w-90 md:w-150 p-3">Nenhum profissional encontrado para esta categoria.</p>
            <?php else: ?>
                <?php foreach ($medicos as $medico): ?>
                    <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                        <div class="conteudo flex">
                            <div class="textos flex flex-col">
                                <p class="text-xl font-medium"><?= htmlspecialchars($medico['nome'], ENT_QUOTES, 'UTF-8') ?></p>
                                <p>Categoria: <?= htmlspecialchars($medico['categoria'], ENT_QUOTES, 'UTF-8') ?></p>
                                <p>Email: <?= htmlspecialchars($medico['email'], ENT_QUOTES, 'UTF-8') ?></p>
                                <p>Telefone: <?= htmlspecialchars($medico['telefone'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
                                <?php if (count($medico['dias']) > 0 || count($medico['horarios']) > 0): ?>
                                    <p class="mt-2">Dias: <?= htmlspecialchars(implode(', ', $medico['dias']), ENT_QUOTES, 'UTF-8') ?></p>
                                    <p>Horario: <?= htmlspecialchars(implode(', ', $medico['horarios']), ENT_QUOTES, 'UTF-8') ?></p>
                                <?php else: ?>
                                    <p>Nenhuma disponibilidade cadastrada.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <form action="../atendimento-marcar/index.php" method="POST">
                            <input type="hidden" name="id_medico" value="<?= $medico['id'] ?>">
                            <input type="hidden" name="categoria" value="<?= htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8') ?>">
                            <input type="hidden" name="escolha" value="<?= htmlspecialchars($escolha, ENT_QUOTES, 'UTF-8') ?>">
                            <input type="hidden" name="motivo" value="<?= htmlspecialchars($motivo, ENT_QUOTES, 'UTF-8') ?>">
                            <button type="submit" class="flex bg-yellow-300 hover:bg-yellow-400 w-83 md:w-143 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                                <p class="text-base font-medium">Selecionar</p>
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>