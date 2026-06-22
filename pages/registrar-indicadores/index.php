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
    <?php include_once("../../assets/parts/header.php") ?>
    <main>
        <div class=" flex titulo mb-3 w-90 md:w-150 justify-self-center items-center justify-between">
            <h2>Registrar Indicadores de saude</h2>
            <button type="button" id="backBtn" class=" flex items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center h-8 pr-2 pl-2">
                <span class="pajamas--go-back"></span>
                <p class="text-base font-medium">Voltar</p>
            </button>
        </div>
        <div class="conteudo justify-center justify-self-center items-center mt-20 w-90 md:w-150">

            <form action="../inicio" class=" justify-self-center justify-items-center">
                <div id="cadastro1" class="cadastro1 flex flex-col gap-3">
                    <p class=" text-center">
                        Para iniciar, precisamos saber seu peso e altura
                    </p>

                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Peso">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Altura">

                    <button type="button" id="nextBtn1" class=" flex bg-sky-500 hover:bg-sky-600 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Cadastrar</p>
                    </button>
                </div>

                <div id="cadastro2" class="cadastro1 flex flex-col gap-3">
                    <p class=" text-center">
                        Para iniciar, precisamos saber seu peso e altura
                    </p>

                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Peso">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Altura">

                    <button type="button" id="nextBtn2" class=" flex bg-sky-500 hover:bg-sky-600 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Cadastrar</p>
                    </button>
                </div>

                <div id="cadastro3" class="cadastro1 flex flex-col gap-3">
                    <p class=" text-center">
                        Para iniciar, precisamos saber seu peso e altura
                    </p>

                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Peso">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Altura">

                    <button type="button" id="nextBtn3" class=" flex bg-sky-500 hover:bg-sky-600 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Cadastrar</p>
                    </button>
                </div>

                <div id="cadastro4" class="cadastro2 flex flex-col gap-3 hidden">

                    <p class="text-2xl text-left text-black">So precisamos de mais alguns <br>dados para criar sua conta</p>
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Telefone">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Estado">

                    <button type="submit" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Finalizar Cadastro</p>
                    </button>
                </div>
            </form>
            <script>
                const step1 = document.getElementById('cadastro1');
                const step2 = document.getElementById('cadastro2');
                const step3 = document.getElementById('cadastro3');
                const step4 = document.getElementById('cadastro4');
                const nextBtn1 = document.getElementById('nextBtn1');
                const nextBtn2 = document.getElementById('nextBtn2');
                const nextBtn3 = document.getElementById('nextBtn3');
                const backBtn1 = document.getElementById('backBtn1');
                const backBtn2 = document.getElementById('backBtn2');
                const backBtn3 = document.getElementById('backBtn3');

                function showStep(step) {
                    if (step === 1) {
                        step1.classList.remove('hidden');
                        step2.classList.add('hidden');
                        backBtn.classList.add('hidden');
                    } else if (step === 2) {
                        step1.classList.remove('hidden');
                        step2.classList.add('hidden');
                        backBtn.classList.add('hidden');
                    } else if (step === 3) {
                        step1.classList.remove('hidden');
                        step2.classList.add('hidden');
                        backBtn.classList.add('hidden');
                    } else  {
                        step1.classList.add('hidden');
                        step2.classList.remove('hidden');
                        backBtn.classList.remove('hidden');
                    }
                }

                if (nextBtn1) {
                    nextBtn.addEventListener('click', function() {
                        showStep(2);
                    });
                }

                if (nextBtn2) {
                    nextBtn.addEventListener('click', function() {
                        showStep(3);
                    });
                }
                
                if (nextBtn3) {
                    nextBtn.addEventListener('click', function() {
                        showStep(4);
                    });
                }

                if (backBtn1) {
                    backBtn.addEventListener('click', function() {
                        showStep(1);
                    });
                }
                
                if (backBtn2) {
                    backBtn.addEventListener('click', function() {
                        showStep(2);
                    });
                }
                
                if (backBtn3) {
                    backBtn.addEventListener('click', function() {
                        showStep(3);
                    });
                }
            </script>
        </div>

        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>