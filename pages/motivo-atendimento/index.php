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
        <div class="titulo py-3 w-90 md:w-150 justify-self-center">
            <h2>Insira o motivo da sua consulta, isso sera compartilhado com o proficional</h2>
        </div>
        <form action="../atendimento-selecionar">
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <p>Qual o motivo da sua consulta</p>
                <div class="linha flex items-center">
                    <input type="radio" name="escolha" class=" h-4 w-4">
                    <p class=" text-center ml-2">Fazer um check-up</p>
                </div>
                <div class="linha flex items-center">
                    <input type="radio" name="escolha" class=" h-4 w-4">
                    <p class=" text-center ml-2">Acompanhar um tratamento</p>
                </div>
                <div class="linha flex items-center mb-3">
                    <input type="radio" name="escolha" class=" h-4 w-4">
                    <p class=" text-center ml-2">Outro</p>
                </div>
                <p>Escreva aqui o motivo</p>
                <textarea type="text" rows="3" class=" bg-white border-2 border-gray-700 focus:border-black rounded-[10px] w-83 md:w-143 h-25 pl-1 mt-1" placeholder="Escreva aqui"></textarea>
                <button type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 md:w-143 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <p class="text-base font-medium">Finalizar Cadastro</p>
                </button>
            </div>
        </form>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>