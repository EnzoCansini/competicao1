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
        <div class="botao w-90 md:w-150 pt-3 justify-self-center justify-items-end absolute">
            <a href="../inicio-proficional" class=" flex items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 transition">
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
            <div class="card bg-white rounded-[10px] p-2 flex flex-col my-6">
                <h3>Selecione os dias que esta disponivel</h3>
                <div class="dias flex flex-wrap gap-2 items-center justify-center my-4">
                    <label class="cursor-pointer">
                        <input type="checkbox" name="dia" value="segunda" class="hidden  peer">
                        <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            Segunda
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="dia" value="terca" class="hidden peer">
                        <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            Terça
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="dia" value="quarta" class="hidden peer">
                        <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            Quarta
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="dia" value="quinta" class="hidden peer">
                        <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            Quinta
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="dia" value="sexta" class="hidden peer">
                        <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            Sexta
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="dia" value="sabado" class="hidden peer">
                        <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            Sabado
                        </span>
                    </label>
                </div>
                <h3>Selecione os horarios que esta disponivel nos dias selecionados</h3>
                <div class="dias flex flex-wrap gap-2 items-center justify-center my-4">
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="06:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            06:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="07:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            07:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="08:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            08:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="09:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            09:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="10:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            10:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="11:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            11:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="12:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            12:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="13:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            13:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="14:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            14:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="15:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            15:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="16:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            16:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="17:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            17:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="18:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            18:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="19:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            19:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="20:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            20:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="21:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            21:00
                        </span>
                    </label>
                    <label class="cursor-pointer">
                        <input type="checkbox" name="hora" value="22:00" class="hidden peer">
                        <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                            22:00
                        </span>
                    </label>
                </div>
                <div class="botao w-auto justify-end">
                <button type="submit" id="submit" class=" flex justify-self-end bg-yellow-300 hover:bg-yellow-400 w-50 md:w-60 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <p class="text-base font-medium">Salvar dias e horarios</p>
                </button>
                    
                </div>
            </div>
            <h2>Atualizar dados da conta</h2>
            <form action="../inicio" class=" justify-self-center justify-items-center my-2">
                <div id="cadastro1" class="cadastro1 flex flex-col gap-3">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 md:w-143 md:ml-7 pl-1" placeholder="Email">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 md:w-143 md:ml-7 pl-1" placeholder="Telefone">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 md:w-143 md:ml-7 pl-1" placeholder="Estado">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 md:w-143 md:ml-7 pl-1" placeholder="Cidadade">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 md:w-143 md:ml-7 pl-1" placeholder="Rua, Numero">

                    <button type="submit" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-83 md:w-143 md:ml-7 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Atualizar Cadastro</p>
                    </button>
                </div>
            </form>

            <h2>Mudar sua senha</h2>
            <form action="../inicio" class=" justify-self-center justify-items-center">
                <div id="cadastro1" class="cadastro1 flex flex-col mt-2 gap-3">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 md:w-143 md:ml-7 pl-1" placeholder="Senha antiga">
                    <input type="text" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-83 md:w-143 md:ml-7 pl-1" placeholder="Senha nova">

                    <button type="submit" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-83 md:w-143 md:ml-7 rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Mudar senha</p>
                    </button>
                </div>
            </form>
            <div class="justify-self-center justify-items-center pt-4">
                <a href="../../assets/src/logout.php" type="button" id="" class=" flex bg-red-500 hover:bg-red-600 w-83 md:w-143 md:ml-7 rounded-[10px] justify-center pt-2 pb-2 transition">
                    <p class="text-base font-medium">Sair</p>
                </a>
            </div>
        </section>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>