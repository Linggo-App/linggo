// Variable that captures wich
var modalTarget;

// (Btn Open Create Column Modal) Show & Hide column modal creator
const btnOpenCCM = document.getElementById("create-column"); 
btnOpenCCM.addEventListener("click", (event) => { createColumnModal("create-columns", "", "", "block", "flex"); });

// (Btn Open Rename Column Modal) Show & Hide column modal rename
const btnOpenRCM = document.getElementsByClassName("btn-rename-columns");
for(let itemsI of btnOpenRCM){
    itemsI.addEventListener("click", (element) => {
        let ID_COLUMN = element.target.offsetParent.offsetParent.classList[1];
        createColumnModal("rename-columns", ID_COLUMN, "", "block", "flex"); 
    });
}

// (Btn Open Delete Column Modal) Show & Hide column modal delete
const btnOpenECM = document.getElementsByClassName("btn-delete-columns");
for(let itemsI of btnOpenECM){
    itemsI.addEventListener("click", (element) => {
        let ID_COLUMN = element.target.offsetParent.offsetParent.classList[1];
        createColumnModal("delete-columns", ID_COLUMN, "", "block", "flex");
    });
}

// (Btn Open edit task Modal) Show & Hide task modal editor
const btnOpenETM = document.getElementsByClassName("btn-edit-task");
for(let itemsI of btnOpenETM){
    itemsI.addEventListener("click", (element) => {
        let ID_COLUMN = element.target.parentElement.parentElement.offsetParent.classList[1];
        let ID_TASK = element.target.parentElement.parentElement.offsetParent.classList[2];
        createColumnModal("edit-task", ID_COLUMN, ID_TASK, "block", "flex"); 
    });
}

// (Btn Open Delete task Modal) Show & Hide task modal delete
const btnOpenDTM = document.getElementsByClassName("btn-delete-task");
for(let itemsI of btnOpenDTM){
    itemsI.addEventListener("click", (element) => {
        let ID_COLUMN = element.target.parentElement.parentElement.offsetParent.classList[1];
        let ID_TASK = element.target.parentElement.parentElement.offsetParent.classList[2];
        createColumnModal("delete-task", ID_COLUMN, ID_TASK, "block", "flex");
    });
}

function createColumnModal(modal, ID_COLUMN, ID_TASK, displayX, displayY){
    modalTarget = modal;
    document.getElementById("modals-container").appendChild(document.getElementById(modal));
    document.getElementById("ID_COLUMN_MODAL").value = ID_COLUMN;
    document.getElementById("ID_TASK_MODAL").value = ID_TASK;
    document.getElementById(modal).style.display = displayX;
    document.getElementById("modals-container").style.display = displayY;
}

const btnCloseModal = document.getElementById("btn-close-modal");
btnCloseModal.addEventListener("click", (event) => { createColumnModal(modalTarget, "none", "none"); });

// Show & Hide task creator
const btnOpenTaskCreator = document.querySelectorAll("div.box-column-header > div > button > svg");
const boxTaskCreate = document.getElementsByClassName("box-task-creator");
const taskDescritionFiel = document.getElementsByTagName("textarea");

for(let itemsI of btnOpenTaskCreator){ 
    itemsI.addEventListener("click", element => {
        let COLUMN = element.target.parentElement.parentElement.offsetParent;
        let btnShowTaskCreator = COLUMN.lastElementChild.firstElementChild;
        // let textarea = COLUMN.lastElementChild.firstElementChild.firstElementChild.firstElementChild;
        if(COLUMN.classList[1] === btnShowTaskCreator.classList[1]){ 
            btnShowTaskCreator.style.display = "block";
            COLUMN.lastElementChild.firstElementChild.firstElementChild.firstElementChild.focus();
            COLUMN.lastElementChild.firstElementChild.firstElementChild.firstElementChild.nextElementSibling.nextElementSibling.value = COLUMN.classList[1];
            // debugger
        }
    });
}

const btnCloseTask = document.getElementsByClassName("btn-close-task-creator");
for(let itemsI of btnCloseTask){
    itemsI.addEventListener("click", (event) => { 
        itemsI.parentElement.parentElement.parentElement.style.display = "none";
     });
}


// Disable & Enable to btn-create-task idColumnCreateTask
for(let itemsI of taskDescritionFiel){
    itemsI.addEventListener("keyup", event => {
        let COLUMN = event.target.offsetParent;
        let btnCreateTask = COLUMN.lastElementChild.firstElementChild.firstElementChild.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling;

        // debugger
        if( event.target.value.length >= 1 && 
            COLUMN.classList[1] === btnCreateTask.classList[1]){
            btnCreateTask.disabled = false;
        }else{
            btnCreateTask.disabled = true;
        }
    });
}

