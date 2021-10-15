// (Btn Open Delete Project Modal) Show & Hide Project modal delete
const btnOpenRPM = document.getElementById("btn-show-modal-restore-project");
btnOpenRPM.addEventListener("click", (element) => { createColumnModal("restore-project", "block", "flex"); });

function createColumnModal(modal, displayX, displayY){
    modalTarget = modal;
    document.getElementById("modals-container").appendChild(document.getElementById(modal));
    document.getElementById(modal).style.display = displayX;
    document.getElementById("modals-container").style.display = displayY;
}