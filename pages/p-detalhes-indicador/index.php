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
            <h2>Editar indicador de saude</h2>
        </div>
        <div class="botao w-90 md:w-150 justify-self-center justify-items-end ">
            <a href="../p-lista-indicadores" class=" flex items-center my-3 gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 transition">
                <span class="pajamas--go-back"></span>
                <p class="text-base font-medium">Voltar</p>
            </a>
        </div>
        <div class="div flex flex-col justify-center justify-self-center gap-4">
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <p class="mb-2">Indicadores de saude</p>
                <p>Dia: 25/07/2026</p>
                <p>Hora: 15:31</p>
            </div>
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <p class="mb-2">Altura e peso</p>
                <p>Altura: 1,70</p>
                <p>Peso: 75Kg</p>
            </div>
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <p class="mb-2">Pressao arterial e temperatura</p>
                <p>Pressao arterial: 25</p>
                <p>Temperatura: 36G</p>
            </div>
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <p class="mb-2">Observações</p>
                <p>As observações de saúde serão mostradas aqui</p>
            </div>
        </div>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>