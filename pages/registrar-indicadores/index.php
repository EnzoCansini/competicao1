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
        <div class=" flex titulo mb-3 w-90 justify-self-center items-center justify-between">
            <h2>Registrar Indicadores de saude</h2>
            <!-- <button type="button" id="backBtn" class=" flex items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center h-8 pr-2 pl-2">
                <span class="pajamas--go-back"></span>
                <p class="text-base font-medium">Voltar</p>
            </button> -->
        </div>
        <div class="conteudo justify-center justify-self-center items-center mt-20 w-90">

            <form action="../inicio" class=" justify-self-center justify-items-center">

                <div id="cadastro1" class="cadastro1 flex flex-col gap-3 w-83">
                    <p class=" text-xl">
                        Para iniciar, precisamos saber seu peso e altura 1
                    </p>

                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Peso" required>
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Altura" required>

                    <button type="button" id="nextBtn1" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Proximo</p>
                    </button>
                </div>

                <div id="cadastro2" class="cadastro2 flex flex-col gap-3 hidden w-83">
                    <p class=" text-xl">
                        Coloque aqui a sua temperatura corporal e pressao arterial
                    </p>

                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Pressão: exemplo 120/80 mmHg" required>
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Batimentos: exemplo 72 bpm" required>

                    <button type="button" id="nextBtn2" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Proximo</p>
                    </button>
                    <button type="button" id="backBtn1" class=" flex items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center h-8 pr-2 pl-2">
                        <span class="pajamas--go-back"></span>
                        <p class="text-base font-medium">Voltar</p>
                    </button>
                </div>

                <div id="cadastro3" class="cadastro3 flex flex-col gap-3 hidden w-83">
                    <p class=" text-xl">
                        Voce tem alguma doença cronica ou tem alguma observação sobre sua saude, se sim insira aqui
                    </p>

                    <textarea type="text" rows="3" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] w-83 h-25 pl-1 resize-y" placeholder="Escreva aqui"></textarea>

                    <button type="button" id="nextBtn3" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Proximo</p>
                    </button>
                    <button type="button" id="backBtn2" class=" flex items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center h-8 pr-2 pl-2">
                        <span class="pajamas--go-back"></span>
                        <p class="text-base font-medium">Voltar</p>
                    </button>
                </div>

                <div id="cadastro4" class="cadastro4 flex flex-col gap-3 hidden w-83">
                    <p class=" text-xl">
                        Indicadores de saude registrados
                    </p>

                    <button type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 rounded-[10px] justify-center pt-2 pb-2 mt-20 transition">
                        <p class="text-base font-medium">Finalizar Cadastro</p>
                    </button>
                    <button type="button" id="backBtn3" class=" flex items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center h-8 pr-2 pl-2">
                        <span class="pajamas--go-back"></span>
                        <p class="text-base font-medium">Voltar</p>
                    </button>
                </div>
            </form>
        </div>

        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

    <script src="../../assets/backend/registro-saude.js"></script>
</body>
