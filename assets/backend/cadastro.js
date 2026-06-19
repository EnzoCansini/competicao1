const step1 = document.getElementById("cadastro1");
const step2 = document.getElementById("cadastro2");
const nextBtn = document.getElementById("nextBtn");
const backBtn = document.getElementById("backBtn");

function showStep(step) {
    if (step === 1) {
        step1.classList.remove("hidden");
        step2.classList.add("hidden");
        backBtn.classList.add("hidden");
    } else {
        step1.classList.add("hidden");
        step2.classList.remove("hidden");
        backBtn.classList.remove("hidden");
    }
}

if (nextBtn) {
    nextBtn.addEventListener("click", function () {
        showStep(2);
    });
}

if (backBtn) {
    backBtn.addEventListener("click", function () {
        showStep(1);
    });
}
