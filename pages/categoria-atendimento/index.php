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
        <div class="botao w-90 md:w-full md:pr-10 justify-self-center justify-items-end pt-5 absolute">
            <a href="../inicio" type="button" id="backBtn" class=" flex mt-8 md:mt-0 items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 transition">
                <span class="pajamas--go-back"></span>
                <p class="text-base font-medium">Voltar</p>
            </a>
        </div>
        <div class="titulo mb-3 w-90 md:w-150 justify-self-center justify-center">
            <h1>Selecione a categoria do atendimento</h1>
        </div>
        <div class="itens grid grid-cols-2 gap-5 w-90 md:grid-cols-3 md:w-135 justify-self-center">
            <div class="item bg-sky-400 flex-col justify-center rounded-[10px] h-40">
                <div class="icone justify-self-center">
                    <span class="uil--heart-medical grandegrid"></span>
                </div>
                <p class=" justify-self-center text-xl">Cardiovascular</p>
            </div>
            <div class="item bg-sky-400 flex-col justify-center rounded-[10px] h-40">
                <div class="icone justify-self-center">
                    <span class="uil--heart-medical grandegrid"></span>
                </div>
                <p class=" justify-self-center text-xl">Cardiovascular</p>
            </div>
            <div class="item bg-sky-400 flex-col justify-center rounded-[10px] h-40">
                <div class="icone justify-self-center">
                    <span class="uil--heart-medical grandegrid"></span>
                </div>
                <p class=" justify-self-center text-xl">Cardiovascular</p>
            </div>
            <div class="item bg-sky-400 flex-col justify-center rounded-[10px] h-40">
                <div class="icone justify-self-center">
                    <span class="uil--heart-medical grandegrid"></span>
                </div>
                <p class=" justify-self-center text-xl">Cardiovascular</p>
            </div>
            <div class="item bg-sky-400 flex-col justify-center rounded-[10px] h-40">
                <div class="icone justify-self-center">
                    <span class="uil--heart-medical grandegrid"></span>
                </div>
                <p class=" justify-self-center text-xl">Cardiovascular</p>
            </div>
            <div class="item bg-sky-400 flex-col justify-center rounded-[10px] h-40">
                <div class="icone justify-self-center">
                    <span class="uil--heart-medical grandegrid"></span>
                </div>
                <p class=" justify-self-center text-xl">Cardiovascular</p>
            </div>
            <div class="item bg-sky-400 flex-col justify-center rounded-[10px] h-40">
                <div class="icone justify-self-center">
                    <span class="uil--heart-medical grandegrid"></span>
                </div>
                <p class=" justify-self-center text-xl">Cardiovascular</p>
            </div>
            <div class="item bg-sky-400 flex-col justify-center rounded-[10px] h-40">
                <div class="icone justify-self-center">
                    <span class="uil--heart-medical grandegrid"></span>
                </div>
                <p class=" justify-self-center text-xl">Cardiovascular</p>
            </div>
        </div>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>