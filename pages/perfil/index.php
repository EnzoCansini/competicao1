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
        <div class="botao w-90 md:w-150 pt-2 justify-self-center justify-items-end absolute">
            <a href="../inicio" class=" flex items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 transition">
                <span class="pajamas--go-back"></span>
                <p class="text-base font-medium">Voltar</p>
            </a>
        </div>
        <div class="titulo py-2 mb-3 w-90 md:w-150 justify-self-center">
            <h2>Perfil</h2>
        </div>
        <section class="flex w-90 md:w-150 justify-self-center gap-3 content-center">
            <img src="../../assets/img/usuario.png" alt="usuario" class=" justify-center">
            <div class="conteudo flex flex-col">
                <p>Atualizar a foto de perfil</p>
                <button type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-50 md:w-60 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <p class="text-base font-medium">Enviar Foto</p>
                </button>
            </div>
        </section>
        <section class="w-90 md:w-150 justify-self-center gap-3 content-center">
            <div class="card bg-white rounded-[10px] p-2 flex flex-col my-3">
                <p>Vizualizar indicaodres de saude</p>
                <button type="submit" id="submit" class=" flex ml-auto bg-sky-400 hover:bg-sky-500 w-50 md:w-60 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <span class="mdi--eye"></span>
                    <p class="text-base font-medium">Vizualizar</p>
                </button>
            </div>
            <h2>Atualizar dados da conta</h2>
            <form action="../inicio" class=" justify-self-center justify-items-center">
                <div id="cadastro1" class="cadastro1 flex flex-col mt-2 gap-3">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Email">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Telefone">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Estado">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Cidadade">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Rua, Numero">

                    <button type="submit" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Ataulizar Cadastro</p>
                    </button>
                </div>
            </form>
            
            <h2>Mudar sua senha</h2>
            <form action="../inicio" class=" justify-self-center justify-items-center">
                <div id="cadastro1" class="cadastro1 flex flex-col mt-2 gap-3">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Senha antiga">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 pl-1" placeholder="Senha nova">

                    <button type="submit" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-83 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Mudar senha</p>
                    </button>
                </div>
            </form>
        </section>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>