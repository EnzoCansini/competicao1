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
            <h2>Selecione o profional desejado que fara seu atendimento</h2>
        </div>
        <div class="botao w-90 md:w-full md:pr-10 justify-self-center justify-items-end py-2">
            <div class="botoes flex gap-2">
                <button type="button" id="backBtn" class=" flex items-center gap-2 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 transition">
                    <span class="mdi--filter medio"></span>
                    <p class="text-base font-medium">Filtrar</p>
                </button>
                <button type="button" id="backBtn" class=" flex items-center gap-2 bg-sky-600 hover:bg-sky-700 w-25 rounded-[10px] justify-center pt-2 pb-2 transition">
                    <span class="pajamas--go-back"></span>
                    <p class="text-base font-medium">Voltar</p>
                </button>
            </div>
        </div>
        <div class="card flex flex-col gap-2 px-2 justify-self-center">
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <div class="conteudo flex">
                    <img src="../../assets/img/medico.png" alt="medico" class="w-30 h-30">
                    <div class="textos flex flex-col pl-2">
                        <p>Dr.Nome</p>
                        <p>Modalidade: Nome</p>
                        <p>Dias e horarios disponiveis</p>
                        <p>Segunda a sexta</p>
                        <p>Manha e tarde</p>
                    </div>
                </div>
                <a href="../atendimento-marcar/" type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 md:w-143 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <p class="text-base font-medium">Selecionar</p>
                </a>
            </div>
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <div class="conteudo flex">
                    <img src="../../assets/img/medico.png" alt="medico" class="w-30 h-30">
                    <div class="textos flex flex-col pl-2">
                        <p>Dr.Nome</p>
                        <p>Modalidade: Nome</p>
                        <p>Dias e horarios disponiveis</p>
                        <p>Segunda a sexta</p>
                        <p>Manha e tarde</p>
                    </div>
                </div>
                <a href="../atendimento-marcar/" type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 md:w-143 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <p class="text-base font-medium">Selecionar</p>
                </a>
            </div>
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <div class="conteudo flex">
                    <img src="../../assets/img/medico.png" alt="medico" class="w-30 h-30">
                    <div class="textos flex flex-col pl-2">
                        <p>Dr.Nome</p>
                        <p>Modalidade: Nome</p>
                        <p>Dias e horarios disponiveis</p>
                        <p>Segunda a sexta</p>
                        <p>Manha e tarde</p>
                    </div>
                </div>
                <a href="../atendimento-marcar/" type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 md:w-143 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <p class="text-base font-medium">Selecionar</p>
                </a>
            </div>
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <div class="conteudo flex">
                    <img src="../../assets/img/medico.png" alt="medico" class="w-30 h-30">
                    <div class="textos flex flex-col pl-2">
                        <p>Dr.Nome</p>
                        <p>Modalidade: Nome</p>
                        <p>Dias e horarios disponiveis</p>
                        <p>Segunda a sexta</p>
                        <p>Manha e tarde</p>
                    </div>
                </div>
                <a href="../atendimento-marcar/" type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 md:w-143 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <p class="text-base font-medium">Selecionar</p>
                </a>
            </div>
            <div class="card bg-white rounded-[10px] flex-col w-90 md:w-150 justify-self-center p-2">
                <div class="conteudo flex">
                    <img src="../../assets/img/medico.png" alt="medico" class="w-30 h-30">
                    <div class="textos flex flex-col pl-2">
                        <p>Dr.Nome</p>
                        <p>Modalidade: Nome</p>
                        <p>Dias e horarios disponiveis</p>
                        <p>Segunda a sexta</p>
                        <p>Manha e tarde</p>
                    </div>
                </div>
                <a href="../atendimento-marcar/" type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 md:w-143 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                    <p class="text-base font-medium">Selecionar</p>
                </a>
            </div>
        </div>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>