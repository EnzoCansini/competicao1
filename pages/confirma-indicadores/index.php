<?php
include_once("../../constante.php");
?>
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
        <div class="mensagem w-90 md:w-full md:pr-10 justify-self-center justify-items-end pt-5 absolute">
            <?php if (isset($mensagem) && isset($cor)) { ?>
                <p class="alert <?= $cor ?> mt-2"><?= $mensagem?></p>
            <?php } ?>
        </div>  
        <div class="conteudo justify-center justify-self-center items-center mt-20 w-90">

                <div id="cadastro4" class="cadastro4 flex flex-col gap-3 w-83">
                    <p class=" text-xl">
                        Indicadores de saude registrados
                    </p>

                    <a href="../../pages/inicio" type="submit" id="submit" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 rounded-[10px] justify-center pt-2 pb-2 mt-20 transition">
                        <p class="text-base font-medium">Finalizar Cadastro</p>
                    </a>
                </div>
            </form>
        </div>

        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

</body>
