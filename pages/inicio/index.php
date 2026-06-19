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
    <main>

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