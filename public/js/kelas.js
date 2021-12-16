const radios = document.querySelectorAll("input[name='type-tugas']");
const form = document.getElementById("add");

radios[0].addEventListener("click", () => {
    form.setAttribute("action", window.location.href + "/materi/create");
});

radios[1].addEventListener("click", () => {
    form.setAttribute("action", window.location.href + "/tugas/create");
});