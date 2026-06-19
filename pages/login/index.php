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
        <div class="botao w-90 justify-self-center justify-items-end pt-5 absolute">
            <button type="button" id="backBtn" class=" flex items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 hidden transition">
                        <span class="pajamas--go-back"></span> <p class="text-base font-medium">Voltar</p>
                    </button>
        </div>
        <div class="imagem flex justify-center mb-6 pt-6">
            <img class=" w-60" src="../../assets/img/logoG2.png" alt="logo">
        </div>
        <div class="inputs grid grid-cols-1 justify-self-center justify-items-center gap-3">
            <form action="../inicio" class=" justify-self-center justify-items-center">
                <div id="cadastro1" class="cadastro1 flex flex-col gap-3">
                    <p class="text-2xl text-left text-black">Informe seus dados para entrar<br>na sua conta</p>

                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Email ou CPF">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Senha">

                    <button type="submit" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Logar</p>
                    </button>
                </div>
            </form>
            <div class="botoes flex w-83 justify-between">
                <a href="../cadastro" class=" flex bg-yellow-300 w-40 rounded-[10px] justify-center pt-2 pb-2">
                    <p class="text-base font-medium">Criar uma conta</p>
                </a>
                <a href="../cadastro-proficional" class=" flex bg-cyan-400 w-40 rounded-[10px] justify-center pt-2 pb-2">
                    <p class="text-base font-medium">Sou Proficional</p>
                </a>
            </div>

        </div>
        <footer class=" flex flex-col bg-white mt-20 pt-10 justify-center">
            <div class="publis flex flex-col pl-10 md:pl-20">
                <linha class="flex mb-2 items-center">
                    <span class="material-symbols--sms self-center mr-2"></span>
                    <p>Nos contate via SMS!</p>
                </linha>
                <linha class="flex mb-2 items-center">
                    <span class="ic--baseline-discord self-center mr-2"></span>
                    <p>Participe de nosso discord!</p>
                </linha>
                <linha class="flex mb-2 items-center">
                    <span class="ic--baseline-whatsapp self-center mr-2"></span>
                    <p>Fale conosco no whatsaap!</p>
                </linha>
                <linha class="flex mb-2 items-center">
                    <span class="mdi--youtube2 self-center mr-2"></span>
                    <p>Assista nossos videos no youtube!</p>
                </linha>
            </div>
            <div class="imagem mr-auto ml-auto flex pb-20">
                <img class=" w-60" src="../../assets/img/logoG2.png" alt="logo">
            </div>

        </footer>
    </main>

</body>