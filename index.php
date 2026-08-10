<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    npx @tailwindcss/cli -i ./assets/src/css/input.css -o ./src/output.css --watch
    !-->
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/icons/icons.css">
    <title>Document</title>
</head>

<body>
    <header class=" flex justify-between p-3 items-center bg-white">
        <img class=" w-60" src="./assets/img/logo3.png" alt="logo">
        <a href="./pages/cadastro" class=" bg-yellow-300 rounded-lg p-5 pt-2 pb-2">
            <p class="text-base font-medium">Entrar</p>
        </a>
    </header>
    <main class="">
        <section class="flex flex-col mx-auto max-w-200">
            <div class="imagem w-90">
                <img class=" object-cover" src="./assets/img/Rectangle1.png" alt="">
            </div>
            <div class="w-90 h-96 bg-[url('./assets/img/Rectangle1.png')] "></div>
            <div class="textos m-3">
                <h1>Quem somos</h1>
                <p class="">A InovaVida Digital nasceu com a missão de transformar o cuidado com a saúde na terceira idade, tornando o acesso à informação, acompanhamento médico e prevenção de doenças mais simples, humano e acessível.
                    Desenvolvemos soluções digitais voltadas especialmente para idosos e suas famílias, ajudando no acompanhamento de doenças crônicas, na organização de tratamentos e no monitoramento de indicadores de saúde de forma prática e intuitiva. Nosso objetivo é reduzir barreiras tecnológicas e aproximar as pessoas de um cuidado contínuo e preventivo.
                    Acreditamos que tecnologia e bem-estar devem caminhar juntos. Por isso, criamos uma plataforma pensada para facilitar o dia a dia, oferecendo acesso a conteúdos confiáveis sobre saúde, lembretes importantes, acompanhamento personalizado e mais autonomia para quem busca viver com qualidade de vida.
                    Mais do que uma startup de tecnologia, somos uma iniciativa dedicada a promover longevidade saudável, cuidado preventivo e inclusão digital para a melhor idade.</p>
                <div class="flex botao justify-end mt-4">
                    <a href="./pages/cadastro" class=" bg-yellow-300 rounded-lg p-5 pt-2 pb-2">
                        <p class="text-base font-medium">Entrar</p>
                    </a>
                </div>
            </div>
        </section>
        <img src="./assets/img/Rectangle 3.png" class=" md:w-180 md:h-44 justify-self-center" alt="">
        <section class=" flex flex-col justify-center max-w-200 mx-auto">
            <div class="textos ml-3 md:pb-2">
                <h1>Oferecemos</h1>
            </div>
            <div class="section grid grid-cols-2 gap-2 items-baseline justify-center pl-4 pr-4">
                <div class="quadro place-items-center">
                    <div class="icon">
                        <span class="fa6-solid--house-medical"></span>
                    </div>
                    <div class="texto text-center">Lorem ipsum dolor sit amet </div>
                </div>
                <div class="quadro place-items-center">
                    <div class="icon">
                        <span class="uil--heart-medical"></span>
                    </div>
                    <div class="texto text-center">Lorem ipsum dolor sit amet </div>
                </div>
                <div class="quadro place-items-center">
                    <div class="icon">
                        <span class="wpf--medical-doctor"></span>
                    </div>
                    <div class="texto text-center">Lorem ipsum dolor sit amet </div>
                </div>
                <div class="quadro place-items-center">
                    <div class="icon">
                        <span class="mdi--youtube"></span>
                    </div>
                    <div class="texto text-center">Lorem ipsum dolor sit amet </div>
                </div>
            </div>
            <div class="flex botao justify-end p-3">
                <a href="./pages/cadastro" class=" bg-yellow-300 rounded-lg p-5 pt-2 pb-2">
                    <p class="text-base font-medium">Entrar</p>
                </a>
            </div>
        </section>
        <img src="./assets/img/itens-medicos.png" class=" md:w-180 md:h-44 justify-self-center" alt="">
        <section class=" flex flex-col justify-center max-w-200 mx-auto pt-3">

            <h1>Conteudo recomendado</h1>
            <div class="video m-auto justify-center">
                <iframe
                    class=" w-90 h-52 md:w-150 md:h-88"
                    src="https://www.youtube.com/embed/4UlkCfXf-_U"
                    title="Vídeo do YouTube"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="div flex flex-col">
                <h2>Artigos recomendados</h2>
                <a href="https://tailwindcss.com/docs/background-image" class=" font-bold underline text-blue-600">aobaa</a>
                <a href="https://tailwindcss.com/docs/background-image" class=" font-bold underline text-blue-600">aobaa</a>
                <a href="https://tailwindcss.com/docs/background-image" class=" font-bold underline text-blue-600">aobaa</a>
            </div>
        </section>

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
                <img class=" w-60" src="./assets/img/logoG2.png" alt="logo">
            </div>
        </footer>
    </main>
</body>

</html>