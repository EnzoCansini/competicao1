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
        <div class="titulo absolute pt-3 -z- w-90 md:w-150 justify-self-center">
            <h2>Detalhes da consulta:</h2>
        </div>
        <div class="botao w-90 md:w-150 justify-self-center justify-items-end py-3">
            <div class="botoes flex gap-2">
                <a href="../p-confirmar-agendamento" type="button" id="backBtn" class=" flex items-center z-10 gap-2 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 transition">
                    <span class="pajamas--go-back"></span>
                    <p class="text-base font-medium">Voltar</p>
                </a>
            </div>
        </div>
        <div class="card flex flex-col gap-2 px-2 justify-self-center">
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <div class="conteudo flex">
                    <img src="../../assets/img/paciente.png" alt="medico" class="w-30 h-30">
                    <div class="textos flex flex-col pl-2">
                        <p>Nome: Carlinho de Oliveira</p>
                        <p>Modalidade: Postura</p>
                        <p>Dia e horario desejado:</p>
                        <p>Segunda</p>
                        <p>Tarde</p>
                    </div>
                </div>
                <a href="../p-lista-indicadores/" type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 md:w-143 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <p class="text-base font-medium">Verificar indicadores</p>
                </a>
                <p class=" text-base mt-1">Motivo da consulta do paciente:</p>
                <p>Acompanhar um tratamento</p>
                <div class="card w-auto h-fit m-4 border border-gray-600 rounded-xl p-2">
                    <p>Quero acompanhar meu tratamento de coluna</p>
                </div>
                <div class="botoes flex w-auto gap-2 mt-5 justify-between">
                    <a href="../p-confirmar-agendamento" class=" flex bg-red-500 w-1/2 rounded-[10px] justify-center pt-2 pb-2">
                        <p class="text-base font-medium">Recusar atendimento</p>
                    </a>
                    <a href="../p-confirmar-agendamento" class=" flex bg-cyan-500 w-1/2 rounded-[10px] justify-center pt-2 pb-2">
                        <p class="text-base font-medium">Aceitar Atendimento</p>
                    </a>
                </div>
            </div>
        </div>

        </div>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>