const step1 = document.getElementById('cadastro1');
const step2 = document.getElementById('cadastro2');
const step3 = document.getElementById('cadastro3');
const step4 = document.getElementById('cadastro4');
const nextBtn1 = document.getElementById('nextBtn1');
const nextBtn2 = document.getElementById('nextBtn2');
const nextBtn3 = document.getElementById('nextBtn3');
const backBtn1 = document.getElementById('backBtn1');
const backBtn2 = document.getElementById('backBtn2');
const backBtn3 = document.getElementById('backBtn3');


function showStep(step) {
    if (step === 1) {
        step1.classList.remove('hidden');
        step2.classList.add('hidden');
        step3.classList.add('hidden');
        step4.classList.add('hidden');
    } else if (step === 2) {
        step1.classList.add('hidden');
        step2.classList.remove('hidden');
        step3.classList.add('hidden');
        step4.classList.add('hidden');
    } else if (step === 3) {
        step1.classList.add('hidden');
        step2.classList.add('hidden');
        step3.classList.remove('hidden');
        step4.classList.add('hidden');
    } else {
        step1.classList.add('hidden');
        step2.classList.add('hidden');
        step3.classList.add('hidden');
        step4.classList.remove('hidden');
    }
}

if (nextBtn1) {
    nextBtn1.addEventListener('click', function () {
        showStep(2);
    });
}

if (nextBtn2) {
    nextBtn2.addEventListener('click', function () {
        showStep(3);
    });
}

if (nextBtn3) {
    nextBtn3.addEventListener('click', function () {
        showStep(4);
    });
}

if (backBtn1) {
    backBtn1.addEventListener('click', function () {
        showStep(1);
    });
}

if (backBtn2) {
    backBtn2.addEventListener('click', function () {
        showStep(2);
    });
}

if (backBtn3) {
    backBtn3.addEventListener('click', function () {
        showStep(3);
    });
}