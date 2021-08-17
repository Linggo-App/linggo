// Variável global que armazena qual modal será exibido para o usuário.
var     modalTarget;

const   btnOpenCCM = document.getElementById("create-column"); // Variável que armazena elemento com a id "create-column". 
//    Aguarda o evento de "click" no "btnOpenCCM" e envia para a função, "createColumnModal" os parâmetros:
//   create-columns(Nome do modal), nulo, nulo, block(mudança do modal de estilo "display:none" para "display:block"), flex(Estilização para o container do modal)
btnOpenCCM.addEventListener("click", (event) => { createColumnModal("create-columns", "", "", "block", "flex"); }); 

const   btnOpenDPM = document.getElementById("btn-show-modal-delete-project"); // Variável que armazena elemento com a id "btn-show-modal-delete-project".
 
//    Aguarda o evento de "click" no "btnOpenDPM" e envia para a função, "createColumnModal" os parâmetros:
//    delete-project(Nome do modal), nulo, nulo, block(mudança do modal de estilo "display:none" para "display:block"), flex(Estilização para o container do modal)

btnOpenDPM.addEventListener("click", (element) => { createColumnModal("delete-project", "", "", "block", "flex"); });

const   btnOpenRCM = document.getElementsByClassName("btn-rename-columns"); // Variável que armazena elemento com a classe "btn-rename-columns".

for (let itemsI of btnOpenRCM) { // Armazenando todos os "btnOpenRCM" em "itemsI".
    itemsI.addEventListener("click", (element) => { // Adiciona um "ouvinte" do evento de "click" a cada um dos items dentro de "itemsI".
    
    // Caminha pelos elementos que são parentesdo "element.currentTarget"
    // até encontrar o ID da coluna que o mesmo se encontra.
    
        let     ID_COLUMN = element.currentTarget.offsetParent.offsetParent.classList[1]; 
        
     
    // Aguarda o evento de "click" no "btnOpenRCM" e envia para a função, "createColumnModal" os parâmetros:
    //rename-columns(Nome do modal), ID_COLUMN(Id da coluna), nulo, block(mudança do modal de estilo "display:none" para "display:block"), flex(Estilização para o container do modal)
    
        createColumnModal("rename-columns", ID_COLUMN, "", "block", "flex"); 
    });
}

const btnOpenDCM = document.getElementsByClassName("btn-delete-columns"); // Variável que armazena elemento com a classe "btn-delete-columns".

for (let itemsI of btnOpenDCM) { // Armazenando todos os "btnOpenDCM" em "itemsI".
        itemsI.addEventListener("click", (element) => { // Adiciona um "ouvinte" do evento de "click" a cada um dos items dentro de "itemsI".
    
    // Caminha pelos elementos que são parentesdo "element.currentTarget"
    // até encontrar o ID da coluna que o mesmo se encontra.
    
        let     ID_COLUMN = element.currentTarget.offsetParent.offsetParent.classList[1];
     
    // Aguarda o evento de "click" no "btnOpenDCM" e envia para a função, "createColumnModal" os parâmetros:
    // delete-columns(Nome do modal), ID_COLUMN(Id da coluna), nulo, block(mudança do modal de estilo "display:none" para "display:block"), flex(Estilização para o container do modal)
    
        createColumnModal("delete-columns", ID_COLUMN, "", "block", "flex");
    });
}

const btnOpenETM = document.getElementsByClassName("btn-edit-task"); // Variável que armazena elemento com a classe "btn-edit-task".

for (let itemsI of btnOpenETM) { // Armazenando todos os "btnOpenETM" em "itemsI".
    itemsI.addEventListener("click", (element) => { // Adiciona um "ouvinte" do evento de "click" a cada um dos items dentro de "itemsI".
    
    // Caminha pelos elementos que são parentesdo "element.currentTarget"
    // até encontrar o ID da coluna que o mesmo se encontra.
    
        let     ID_COLUMN = element.currentTarget.parentElement.parentElement.classList[1];
    
    // Caminha pelos elementos que são parentesdo "element.currentTarget"
    // até encontrar o ID da tarefa que o mesmo se encontra.
    
        let     ID_TASK = element.currentTarget.parentElement.parentElement.id;
    
    // Caminha pelos elementos que são parentesdo "element.currentTarget"
    // até encontrar os elementos "filhos" que armazenam a descriçõa e horário da tarefa.
    
        let     CONTENT_TASKS = element.currentTarget.parentElement.parentElement.firstElementChild.children;

        document.getElementById("new-task-name").value = CONTENT_TASKS[0].innerHTML; // Armazena o texto de descrição da tarefa.
        document.getElementById("new-time-task").value = CONTENT_TASKS[1].innerHTML; // Armazena o horário adicionado na tarefa.

     
    //    Aguarda o evento de "click" no "btnOpenETM" e envia para a função, "createColumnModal" os parâmetros:
    //    delete-columns(Nome do modal), ID_COLUMN(Id da coluna), ID_TASK(Id da tarefa), block(mudança do modal de estilo "display:none" para "display:block"), flex(Estilização para o container do modal)
    
        createColumnModal("edit-task", ID_COLUMN, ID_TASK, "block", "flex"); 
    });
}
const btnOpenDTM = document.getElementsByClassName("btn-delete-task"); // Variável que armazena elemento com a classe "btn-delete-task".

for (let itemsI of btnOpenDTM) { // Armazenando todos os "btnOpenDTM" em "itemsI".
    itemsI.addEventListener("click", (element) => { // Adiciona um "ouvinte" do evento de "click" a cada um dos items dentro de "itemsI".
    
    //    Caminha pelos elementos que são parentesdo "element.currentTarget"
    //    até encontrar o ID da coluna que o mesmo se encontra.
    
        let     ID_COLUMN = element.currentTarget.parentElement.parentElement.classList[1];
    
    //    Caminha pelos elementos que são parentesdo "element.currentTarget"
    //    até encontrar o ID da tarefa que o mesmo se encontra.
    
        let     ID_TASK = element.currentTarget.parentElement.parentElement.id;

     
    //    Aguarda o evento de "click" no "btnOpenDTM" e envia para a função, "createColumnModal" os parâmetros:
    //    delete-columns(Nome do modal), ID_COLUMN(Id da coluna), ID_TASK(Id da tarefa), block(mudança do modal de estilo "display:none" para "display:block"), flex(Estilização para o container do modal)
    
        createColumnModal("delete-task", ID_COLUMN, ID_TASK, "block", "flex");
    });
}

const   btnOpenTaskCreator = document.querySelectorAll("div.box-column-header > div > button > svg"); // Variável que armazena o elemento com a tag "svg".
// const boxTaskCreate = document.getElementsByClassName("box-task-creator");

for (let itemsI of btnOpenTaskCreator) { // Armazenando todos os "btnOpenTaskCreator" em "itemsI". 
    itemsI.addEventListener("click", element => { // Adiciona um "ouvinte" do evento de "click" a cada um dos items dentro de "itemsI".
        let     COLUMN = element.currentTarget.parentElement.parentElement.offsetParent; // Caminha pelos elementos parentes de "element" e encontra a coluna que o mesmo reside(elemento mãe).
        let     btnShowTaskCreator = COLUMN.lastElementChild.firstElementChild;  // Caminha pelos elementos parentes de "element" e encontra o elemento "TextArea".

        if (COLUMN.classList[1] === btnShowTaskCreator.classList[1]) // Verifica se as classes que estõa no index "1" dos elementos são iguais.
        { 
            btnShowTaskCreator.style.display = "block"; // Altera o estilo "display:none" do elemento "TextArea" para "display:block".
            COLUMN.lastElementChild.firstElementChild.firstElementChild.firstElementChild.focus(); // Torna o elemento "TextArea" para focado para facilita a digitação do usuário.
            COLUMN.lastElementChild.firstElementChild.firstElementChild.firstElementChild.nextElementSibling.nextElementSibling.value = COLUMN.classList[1]; // Adiciona a classe da coluna no input "ID_COLUMN_CREATE_TASK".
            // debugger
        }
    });
}

const   btnCloseTask = document.getElementsByClassName("btn-close-task-creator"); // Variável que armazena o elemento com a classe "btn-close-task-creator".

for (let itemsI of btnCloseTask) {  // Armazenando todos os "btnCloseTask" em "itemsI".
    itemsI.addEventListener("click", (event) => { // Adiciona um "ouvinte" do evento de "click" a cada um dos items dentro de "itemsI".
        itemsI.parentElement.parentElement.parentElement.style.display = "none"; // Altera o estilo "display:block" do "box-task-creator" para "display:none".
     });
}

const   taskDF = document.getElementsByTagName("textarea"); // Variável que armazena elemento com a tag "TextArea".

for (let itemsI of taskDF) { // Armazenando todos os "taskDF" em "itemsI".
    itemsI.addEventListener("keyup", event => { // Adiciona um "ouvinte" do evento de "keyup", que aciona sempre que o usuário digita uma informação no "TextArea".
        let     COLUMN = event.currentTarget.offsetParent; // Caminha pelos elementos parentes de "element" e encontra a coluna que o mesmo reside(elemento mãe).
        // Caminha pelos elementos parentes de "COLUMN" e encontra o "btn-create-task".
        let     btnCreateTask = COLUMN.lastElementChild.firstElementChild.firstElementChild.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling;

        // debugger
        
        //    Verifica se o "TextArea"(event.currentTarget) possui mais "0" caracteries, 
        //    e se as classes que estõa no index "1" das variáveis COLUMN e btnCreateTask são iguais.
        //    Essas condições sendo verdaderia o sistema irá ativar o botão "Adicionar", se não irá destivar o botão.
        
        if (event.currentTarget.value.length >= 1 
            && COLUMN.classList[1] === btnCreateTask.classList[1]) 
        {
            btnCreateTask.disabled = false;
        } else {
            btnCreateTask.disabled = true;
        }
    });
}

var btnCloseModal = document.getElementsByClassName("btn-close-modal"); // Variável que armazena o elemento com a classe "btn-close-modal".

for (let itemsI of btnCloseModal) { // Armazenando todos os "taskDF" em "itemsI". 
    itemsI.addEventListener("click", (event) => {   // Adiciona um "ouvinte" do evento de "click" a cada um dos items dentro de "itemsI".
        closeColumn(modalTarget, "none"); // Altera o estilo "display:block" do "modalTarget" para "display:none".
    });
}



// Parametros da função createColumnModal (Nome modal, ID_Coluna, ID_Tarefa, EstiloModal, EstiloModalContainer)
function createColumnModal(modal, ID_COLUMN, ID_TASK, displayX, displayY) {
    modalTarget = modal; // Variável que armazena qual modal será exibido para o usuário.
    document.getElementById("modals-container").appendChild(document.getElementById(modal)); // Insere o "modal" dentro de do "modal-container".
    document.getElementById("ID_COLUMN_MODAL").value = ID_COLUMN; // Armazena o Id da coluna no input "ID_COLUMN_MODAL" para facilitar munipulação de consultas e casdastros com PHP.
    document.getElementById("ID_TASK_MODAL").value = ID_TASK; // Armazena o Id da tarefa no input "ID_TASK_MODAL" para facilitar munipulação de consultas e casdastros com PHP.
    document.getElementById(modal).style.display = displayX; // Altera o "display:none" do madal para "display:block".
    document.getElementById("modals-container").style.display = displayY; // Altera o "display:none" do madal para "display:flex" assim deixando o modal centralizado na tela.
}

// Parametros da função createColumnModal (Nome modal, Estilo)
function closeColumn(modal, display) {
    document.getElementById("modals-container").style.display = display; // Altera o "display:flex" do madal para "display:none".
    document.getElementById(modal).style.display = display; // Altera o "display:block" do madal para "display:none".
}

//Não tira Caio!
$(document).ready(function(){
    $("#box-routine-title").change(function(){
        $("#rotina_titulo").trigger('click');
    })
})
