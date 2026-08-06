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
    <?php include_once("../../assets/parts/headerpro.php") ?>
    <main>
        <div class="titulo mb-3 w-90 md:w-150 justify-self-center">
            <h1>inicio</h1>
        </div>
        <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
            <p>Nenhuma consulta para ser confirmada</p>
            <a href="../categoria-atendimento" class=" flex items-center gap-2 bg-yellow-300 hover:bg-yellow-400 rounded-[10px] justify-center justify-self-end p-2 mt-3">
                <p class="text-base font-medium">Confrmar agendamentos</p>
            </a>
        </div>
        <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2 mt-4">
            <p>Voce tem 3 consultas confirmadas</p>
            <p>A proxima consulta sera em 2 dias</p>
            <a href="../registrar-indicadores" class=" flex items-center gap-2 bg-sky-500 w-40 rounded-[10px] justify-center justify-self-end p-2 mt-3">
                <p class="text-base font-medium">Vizualizar consultas</p>
            </a>
        </div>
        <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2 mt-4">
            <p>Vizualizar atendimentos anteriores</p>
            <a href="../p-atendimento-anteriores" class=" flex items-center gap-2 bg-yellow-300 w-40 rounded-[10px] justify-center justify-self-end pt-2 pb-2 mt-3">
                <span class="mdi--eye"></span>
                <p class="text-base font-medium">Vizualizar</p>
            </a>
        </div>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>