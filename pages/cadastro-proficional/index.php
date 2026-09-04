<?php

include_once("../../constante.php");

?>

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
    <?php include_once("../../assets/parts/headerC.php") ?>
    <main class="">
        <div class="botao w-90 md:w-full md:pr-10 justify-self-center justify-items-end pt-5 absolute">
            <button type="button" id="backBtn" class=" flex items-center gap-3 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 hidden transition">
                <span class="pajamas--go-back"></span>
                <p class="text-base font-medium">Voltar</p>
            </button>
        </div>
        <div class="mensagem w-90 md:w-full md:pr-10 justify-self-center justify-items-end pt-5 absolute">
            <?php if (isset($mensagem) && isset($cor)) { ?>
                <p class="alert <?= $cor ?> mt-2"><?= $mensagem ?></p>
            <?php } ?>
        </div>
        <div class="imagem flex justify-center mb-6 pt-6">
            <img class=" w-60" src="../../assets/img/logoG2.png" alt="logo">
        </div>
        <div class="inputs grid grid-cols-1 justify-self-center justify-items-center gap-3">
            <form action="<?= ROOT_PATH ?>assets/src/cadastrarUsuario.php" method="POST" class=" justify-self-center justify-items-center">
                <div id="cadastro1" class="cadastro1 flex flex-col gap-3 w-90 md:w-150 justify-self-center content-center">
                    <p class="text-2xl text-left text-black">Informe seus dados para criar a sua conta de proficional</p>

                    <input type="text" name="txtNome" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" placeholder="Nome">
                    <input type="text" name="txtCPF" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" placeholder="CPF">
                    <input type="text" name="txtEmail" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" placeholder="Email">

                    <button type="button" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-full rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Cadastrar</p>
                    </button>
                </div>

                <div id="cadastro2" class="cadastro2 flex flex-col gap-3 hidden">

                    <p class="text-2xl text-left text-black">So precisamos de mais alguns <br>dados para criar sua conta</p>
                    <input type="text" name="txtTelefone" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" placeholder="Telefone">
                    <input type="text" name="txtEstado" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" placeholder="Estado">
                    <input type="text" name="txtCidade" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" placeholder="Cidade">
                    <input type="text" name="txtRua" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" placeholder="Rua, Numero">
                    <label for="txtEspecialidade" class="text-lg font-medium">Escolha sua especialidade:</label>
                    <select name="txtEspecialidade" class="bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" id="txtEspecialidade">
                        <option value="Cardiologista">Cardiologista</option>
                        <option value="Nutricionista">Nutricionista</option>
                        <option value="Fisioterapeuta" selected>Fisioterapeuta</option>
                        <option value="Psicologo">Psicólogo</option>
                        <option value="Neurologista">Neurologista</option>
                        <option value="Farmaceutico">Farmacêutico</option>
                    </select>
                    <input type="text" name="txtRegistro" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" placeholder="Registro Proficional">

                    <div class="card bg-white rounded-[10px] p-2 flex flex-col my-6 w-90 md:w-150 justify-self-center gap-3 content-center">
                        <h3>Selecione os dias que esta disponivel</h3>
                        <div class="dias flex flex-wrap gap-2 items-center justify-center my-4">
                            <label class="cursor-pointer">
                                <input type="checkbox" name="dia[]" value="segunda" class="hidden peer">
                                <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    Segunda
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="dia[]" value="terca" class="hidden peer">
                                <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    Terça
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="dia[]" value="quarta" class="hidden peer">
                                <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    Quarta
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="dia[]" value="quinta" class="hidden peer">
                                <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    Quinta
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="dia[]" value="sexta" class="hidden peer">
                                <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    Sexta
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="dia[]" value="sabado" class="hidden peer">
                                <span class="dia flex rounded-[10px] peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    Sabado
                                </span>
                            </label>
                        </div>
                        <h3>Selecione os horarios que esta disponivel nos dias selecionados</h3>
                        <div class="dias flex flex-wrap gap-2 items-center justify-center my-4">
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="06:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    06:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="07:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    07:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="08:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    08:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="09:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    09:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="10:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    10:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="11:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    11:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="12:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    12:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="13:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    13:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="14:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    14:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="15:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    15:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="16:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    16:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="17:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    17:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="18:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    18:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="19:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    19:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="20:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    20:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="21:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    21:00
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" name="hora[]" value="22:00" class="hidden peer">
                                <span class="hora flex rounded-[10px]  peer-checked:bg-blue-400 peer-checked:border-blue-500 peer-checked:font-bold bg-gray-200 border justify-center items-center w-20">
                                    22:00
                                </span>
                            </label>
                        </div>
                        <div class="botao w-auto justify-end">
                            <button type="button" id="submit" class=" flex justify-self-end bg-yellow-300 hover:bg-yellow-400 w-50 md:w-60 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                                <p class="text-base font-medium">Salvar dias e horarios</p>
                            </button>

                        </div>
                    </div>
                    <input type="text" name="txtSenha" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] h-9.5 w-full pl-1" placeholder="Crie uma senha">

                    <button type="submit" id="nextBtn" class=" flex bg-sky-500 hover:bg-sky-600 w-full rounded-[10px] justify-center pt-2 pb-2 transition">
                        <p class="text-base font-medium">Finalizar Cadastro</p>
                    </button>
                </div>
            </form>
            <div class="botoes flex w-full gap-4 justify-between">
                <a href="../login-proficional" class=" flex bg-yellow-300 w-full rounded-[10px] justify-center pt-2 pb-2">
                    <p class="text-base font-medium">Ja tenho conta</p>
                </a>
                <a href="../cadastro" class=" flex bg-cyan-400 w-full rounded-[10px] justify-center pt-2 pb-2">
                    <p class="text-base font-medium">Sou Paciente</p>
                </a>
            </div>

        </div>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

    <script src="../../assets/backend/cadastro.js"></script>
</body>