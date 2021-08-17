/*********************************************************************************/
// A palavra "desenvolvedores" foi tracada por dev's e "desenvolvedor" por dev. //
/*******************************************************************************/


/* Informações do GitHub dos dev's */
const creatorsNames = [
    "Caio Valdoveste", 
    "Leticia Smidt", 
    "Rafael Santos"
];

const creatorsgitImg = [
    "https://avatars2.githubusercontent.com/u/62577482?s=460&u=9cd418ac4c3ff1b1817567f32848c642fc5c4976&v=4",
    "https://avatars.githubusercontent.com/u/71861617?v=4",
    "https://avatars0.githubusercontent.com/u/64908399?s=460&u=cb6bc7163c5cbf01cbe06bca0237975c0d5e2928&v=4"
];

const creatorsGit = [
    "https://github.com/Valdoveste", 
    "https://github.com/leticia-cyber", 
    "https://github.com/RafaelSantos1234"
];

const containerPersonal = document.getElementById("git-collaborators-list"); // Variável que armazena o elemnto com id "git-collaborators-list"

var gitUsername, gitAnchor, gitImage, gitLogo; // Variáveis para armanezar informações do GitHub dos dev's.

var containerProfile, classProfile, idProfile, contentProfile, imageProfile, nameProfile; // Variáveis que para armazenar as informaões dos dev's em elemento do HTML.

var checkbox, clock, stateCounter = 0; // Variáveis de animação.


for (let i = 0; i < 3; i++)
{
    /* 
        Cria todos os elementos que serão necessário para 
        conter as informações dos dev's.
    */
    containerProfile = document.createElement("div"); // Criando elemento div
    gitAnchor = document.createElement("a"); // Criando elemento anchor
    gitImage = document.createElement("img"); // Criando elemento img
    gitUsername = document.createElement("p"); // Criando elemento p

    gitAnchor.href = creatorsGit[i]; // Adicionando o Link do GitHun dos dev na elemnto com a tag "a"(gitAnchor).
    gitUsername.innerText = creatorsNames[i]; // Adicionando o Nome dos dev no elemente com a tag "p"(gitUsername).
    gitImage.src = creatorsgitImg[i]; // Adicionando o imagen dos dev no elemente com a tag "img"(gitImage).

    containerProfile.setAttribute("class", "collaborators"); // Atribuindo a classe "collaborators" na tag "div"(containerProfile).
    /* 
        Adicionando ID para cada um dos elementos criados anteriormente.
    */
   for (let k = 0; k < 4; k++)
   {
       containerProfile.setAttribute("id", i);   
       gitUsername.setAttribute("id", i); 
       gitAnchor.setAttribute("id", i);   
       gitImage.setAttribute("id", i);  
    }
    
    /* 
        Adicionando todos os elementos criados anteriormenete dentro
        da tag "a"(gitAnchor) e a mesma dentro de "div"(containerPersonal).
    */
    gitAnchor.appendChild(gitImage);
    gitAnchor.appendChild(gitUsername);
    containerProfile.appendChild(gitAnchor);
    
    containerPersonal.appendChild(containerProfile);
}

/* 
    Selecionando todos os elemento criados no bloco anterior.
*/
contentProfile = document.querySelectorAll(".collaborators a");
classProfile = document.querySelectorAll(".collaborators");
imageProfile = document.querySelectorAll(".collaborators a img");
nameProfile = document.querySelectorAll(".collaborators a p");

for (let itemsI of classProfile) // Armazenando todos os "classProfile" em "itemsI".
{
    itemsI.addEventListener("mouseover", (event) => { // Adiciona um "ouvinte" do evento de "mouseover" a cada um dos items dentro de "itemsI".
        
        idProfile = event.target.id; // Captura o id do elemento que mouse do usuário estiver em cima.

        /*
            Altera o tamanha em comprimento e altura da imagen do desenvolvedor selecionado no momento em 35px.
        */
        imageProfile[idProfile].style.width="35px"; 
        imageProfile[idProfile].style.height="35px";

        /*
            Este bloco gerencia quando o nome do desenvolvedor deve aparecer.
        */
        for(let itemsJ of contentProfile) // Armazenando todos os "classProfile" em "itemsJ".
        {

            itemsJ.addEventListener("transitionend", event => { // Adiciona um "ouvinte" do evento de "transitionend" a cada um dos items dentro de "itemsJ".
                /*
                    Verifica se o "itemsJ.offsetWidth" que informa o tamanho do elemento, 
                    for igual á 35px, o nome do dev será mantido invisível, se não
                    será trocado seu estilo de "display:none" para "display:flex".
                */
                if (itemsJ.offsetWidth == 35)
                {
                    nameProfile[idProfile].style.display="none"; 
                }else if (itemsJ.offsetWidth  > 170){ 
                    nameProfile[idProfile].style.display="flex";
                }
            });

            /*
                Este bloco Impede que o nome do dev, apareça enquanto a animação estiver "correndo".
            */
            itemsJ.addEventListener("transitionrun", event => { // Adiciona um "ouvinte" do evento de "transitionrun" a cada um dos items dentro de "itemsJ".
                for(let i = 0; i < 3; i++)
                {
                    nameProfile[i].style.display="none"; // Altera o estilo do "nameProfile[i]" para "display:none".
                } 
            });
            
        }

    });
}

/*
    Este bloco gerencia o tamanho dos ícones dos dev's, quando o mouse não está mais em cima do ícone.
*/
for(let itemsI of classProfile) // Armazenando todos os "classProfile" em "itemsI".
{
    itemsI.addEventListener("mouseout", (event) => { // Adiciona um "ouvinte" do evento de "mouseover" a cada um dos items dentro de "itemsI".
        
        idProfile = event.target.id; // Captura o id do elemento que mouse do usuário estiver em cima.

        /*
            Altera o tamanha em comprimento e altura da imagen do desenvolvedor selecionado no momento em 25px.
        */
        imageProfile[idProfile].style.width="25px"
        imageProfile[idProfile].style.height="25px"

    });
}

checkbox = document.getElementById("checkGit"); // Variável que armazena elemento com a id "checkGit".
checkbox.checked = false; // Altera o "checkbox" para  false.

gitLogo = document.querySelectorAll("label[for='checkGit'] img")[0];  // Variável que armazena elemento com a tag "img"

checkbox.addEventListener("click", (event) => { // Adiciona um "ouvinte" do evento de "click" a cada um dos items dentro de "itemsI".

    // Enviando os parametros para a funão que anima a lojo do GitHub.
    gitLogo.addEventListener("mouseout", eventOpacityout => { opacityChanger("0.5"); });
    gitLogo.addEventListener("mouseover", eventOpacityover => { opacityChanger("1"); });

    /*
        Esta função realiza a animação de opacidade para quando o mouse estiver ou não em cima da logo do GitHub.
    */
    function opacityChanger(value){
        if (!event.target.checked && stateCounter == 0) 
            gitLogo.style.opacity = value; 
    }

    /*
        Esse bloco é responsável por chamar a função que irá exibir ou esconder os ícones do dev's. 
    */
    if (event.target.checked && stateCounter == 0)
    {
        clock = setInterval(animationStart, 500); 
        gitLogo.style.opacity="1";
        animationStart();
    } else if(!event.target.checked && stateCounter == 3) {
        clock = setInterval(animationEnd, 500);
        animationEnd(); 
    }

    /* 
        Este função realiza a animaçõao que exibe todos os ícone dos dev's.
    */
    function animationStart()
    {
        if (stateCounter > 2)
        {
            clearInterval(clock);
        } else {
            contentProfile[stateCounter].style.transform = "scale(1)";
            stateCounter++;
        }
    }
        
    /* 
        Este função realiza a animaçõao que escondete todos os ícone dos dev's.
    */
    function animationEnd()
    {
        if (stateCounter <= 0)
        {
            clearInterval(clock);
            gitLogo.style.opacity="0.5";
        } else {
            stateCounter--;
            contentProfile[stateCounter].style.transform = "scale(0)";
        }
    }
});
