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
        <div class="botao w-90 md:w-150 justify-self-center justify-items-end py-2">
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
                <form action="../inicio">
                    <p class="text-xl">Selecione o dia</p>
                    <section id="etapa1" class="dias flex flex-wrap gap-2 items-center justify-center">
                        <label class="cursor-pointer">
                            <input type="radio" name="dia" value="segunda" class="hidden dia-opcao">
                            <span class="dia flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                Segunda
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="dia" value="terca" class="hidden dia-opcao">
                            <span class="dia flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                Terça
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="dia" value="quarta" class="hidden dia-opcao">
                            <span class="dia flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                Quarta
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="dia" value="quinta" class="hidden dia-opcao">
                            <span class="dia flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                Quinta
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="dia" value="sexta" class="hidden dia-opcao">
                            <span class="dia flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                Sexta
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="diaInvalido" value="sabado" class="hidden dia-opcao">
                            <span class="dia flex rounded-[10px] bg-gray-400 border justify-center items-center w-20">
                                Sabado
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="diaInvalido" value="domingo" class="hidden dia-opcao">
                            <span class="dia flex rounded-[10px] bg-gray-400 border justify-center items-center w-20">
                                Domingo
                            </span>
                        </label>
                    </section>
                    <p class="text-xl">Selecione a Hora</p>
                    <section id="etapa2" class="horas flex flex-wrap gap-2 items-center justify-center hidden">
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="07:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                07:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="08:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                08:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="09:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                09:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="10:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                10:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="11:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                11:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="12:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-400 border justify-center items-center w-20">
                                12:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="13:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                13:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="14:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                14:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="15:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                15:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="16:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                16:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="17:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                17:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="18:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                18:00
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="hora" value="19:00" class="hidden hora-opcao">
                            <span class="hora flex rounded-[10px] bg-gray-200 border justify-center items-center w-20">
                                19:00
                            </span>
                        </label>
                    </section>
                    <section id="etapa3" class="aceitacao flex flex-col gap-2 mt-2 hidden">
                        <p>Voce aceita que caso seu atendimento nao possoa ser confirmado pelo medico ele seja repassado para outro profissional?</p>
                        <div class="input justify-self-start flex gap-1">
                            <input type="radio" name="confirmacao" value="sim" id="confirmacao-sim">
                            <label for="confirmacao-sim">Aceito</label>
                        </div>
                        <div class="input justify-self-start flex gap-1">
                            <input type="radio" name="confirmacao" value="nao" id="confirmacao-nao">
                            <label for="confirmacao-nao">Nao Aceito</label>
                        </div>
                    </section>
                    <button type="submit" id="btnFinal" class=" flex bg-yellow-300 hover:bg-yellow-400 w-83 md:w-143 rounded-[10px] justify-center pt-2 pb-2 mt-2 transition">
                        <p class="text-base font-medium">Selecionar</p>
                    </button>
                </form>
            </div>
        </div>
        <?php include_once("../../assets/parts/footer.php") ?>
    </main>

    <script>
        const etapa2 = document.getElementById('etapa2');
        const etapa3 = document.getElementById('etapa3');
        const btnFinal = document.getElementById('btnFinal');

        const radiosDia = document.querySelectorAll('input[name="dia"]');
        const radiosHora = document.querySelectorAll('input[name="hora"]');
        const radiosConf = document.querySelectorAll('input[name="confirmacao"]');

        function pintarSelecionado(name) {
            document.querySelectorAll(`input[name="${name}"]`).forEach(radio => {
                const span = radio.nextElementSibling;
                if (radio.checked) {
                    span.classList.add('bg-sky-500', 'text-white', 'border-sky-500');
                    span.classList.remove('bg-slate-100');
                } else {
                    span.classList.remove('bg-sky-500', 'text-white', 'border-sky-500');
                    span.classList.add('bg-slate-100');
                }
            });
        }

        function esconderDepois(step) {
            if (step <= 1) {
                etapa2.classList.add('hidden');
                etapa3.classList.add('hidden');
                btnFinal.classList.add('hidden');
                document.querySelectorAll('input[name="hora"]').forEach(i => i.checked = false);
                document.querySelectorAll('input[name="confirmacao"]').forEach(i => i.checked = false);
            }
            if (step <= 2) {
                etapa3.classList.add('hidden');
                btnFinal.classList.add('hidden');
                document.querySelectorAll('input[name="confirmacao"]').forEach(i => i.checked = false);
            }
        }

        radiosDia.forEach(radio => {
            radio.addEventListener('change', () => {
                pintarSelecionado('dia');
                esconderDepois(1);
                etapa2.classList.remove('hidden');
            });
        });

        radiosHora.forEach(radio => {
            radio.addEventListener('change', () => {
                pintarSelecionado('hora');
                esconderDepois(2);
                etapa3.classList.remove('hidden');
            });
        });

        radiosConf.forEach(radio => {
            radio.addEventListener('change', () => {
                pintarSelecionado('confirmacao');
                btnFinal.classList.remove('hidden');
            });
        });
    </script>
</body>