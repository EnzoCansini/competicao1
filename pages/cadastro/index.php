<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../src/output.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    npx @tailwindcss/cli -i ./assets/src/css/input.css -o ./src/output.css --watch
    !-->
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="../../assets/icons/icons.css">
    <title>Document</title>
</head>

<body>
    <?php include_once("../../assets/parts/header.php") ?>
    <main class="">
        <div class="botao w-90 md:w-screen md:pr-10 justify-self-center justify-items-end pt-5 absolute">
            <button type="button" id="backBtn" class=" flex md:fixed items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 hidden transition">
                        <span class="pajamas--go-back"></span> 
                        <p class="text-base font-medium">Voltar</p>
                    </button>
        </div>
        <div class="imagem flex justify-center mb-6 pt-6">
            <img class=" w-60" src="../../assets/img/logoG2.png" alt="logo">
        </div>
        <div class="inputs grid grid-cols-1 justify-self-center justify-items-center gap-3">
            <form action="../inicio" class=" justify-self-center justify-items-center">
                <div id="cadastro1" class="cadastro1 flex flex-col gap-3">
                    <p class="text-2xl text-left text-black">Informe seus dados para criar a <br> sua conta</p>

                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Nome">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="CPF">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Email">

                    <button type="button" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Cadastrar</p>
                    </button>
                </div>

                <div id="cadastro2" class="cadastro2 flex flex-col gap-3 hidden">
                    
                    <p class="text-2xl text-left text-black">So precisamos de mais alguns <br>dados para criar sua conta</p>
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Telefone">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Estado">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Cidadade">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Rua, Numero">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Crie uma senha">

                    <button type="submit" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Finalizar Cadastro</p>
                    </button>
                </div>
            </form>
            <script>
                const step1 = document.getElementById('cadastro1');
                const step2 = document.getElementById('cadastro2');
                const nextBtn = document.getElementById('nextBtn');
                const backBtn = document.getElementById('backBtn');

                function showStep(step) {
                    if (step === 1) {
                        step1.classList.remove('hidden');
                        step2.classList.add('hidden');
                        backBtn.classList.add('hidden');
                    } else {
                        step1.classList.add('hidden');
                        step2.classList.remove('hidden');
                        backBtn.classList.remove('hidden');
                    }
                }

                if (nextBtn) {
                    nextBtn.addEventListener('click', function() {
                        showStep(2);
                    });
                }

                if (backBtn) {
                    backBtn.addEventListener('click', function() {
                        showStep(1);
                    });
                }
            </script>
            <div class="botoes flex w-83 justify-between">
                <a href="../login" class=" flex bg-yellow-300 w-40 rounded-[10px] justify-center pt-2 pb-2">
                    <p class="text-base font-medium">Ja tenho conta</p>
                </a>
                <a href="../cadastro-proficional" class=" flex bg-cyan-400 w-40 rounded-[10px] justify-center pt-2 pb-2">
                    <p class="text-base font-medium">Sou Proficional</p>
                </a>
            </div>

        </div>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>