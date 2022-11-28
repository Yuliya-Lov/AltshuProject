
function showModalWin() {
    let darkWin = document.createElement("div");
    let body = document.querySelector("body");
    body.appendChild(darkWin);
    darkWin.style.position="fixed";
    darkWin.style.opacity="0.5";
    darkWin.style.backgroundColor="#000";
    darkWin.style.width="100%";
    darkWin.style.height="100%";
    darkWin.style.zIndex="1";
    darkWin.style.left="0";
    darkWin.style.top="0";
    let modalWin = document.querySelector(".modal-win");
    modalWin.style.display="flex";
    modalWin.style.position="fixed";
    modalWin.style.zIndex="2";
    darkWin.onclick = function hideModalWin() {
        darkWin.parentNode.removeChild(darkWin);
        modalWin.style.display="none";
        return false; 
    } 
}
let startFeedback  = document.querySelector("#start-to-feedback");
startFeedback.addEventListener ("click", () => {
    showModalWin()
})
let thanksBlock  = document.querySelector(".thanks");
let thanksText  = document.querySelector(".thanks-text");
thanksText.textContent = "Thank you for  your opinion, my friend!";
let OkButton  = document.querySelector(".ok-button");
let SubmitButton = document.querySelector(".submit-modal-win");
let FeedbackForm = document.querySelector(".feedback-form");

let FeedbackArr = {
    userName: value(document.querySelector("#name")),
    userEmail: document.querySelector("#e-mail"),
    userFeedback: document.querySelector("#feedback-text"),
}

function NewFeedback() {
    let Readfeedback = new  FeedbackArr;
    console.log(Readfeedback);
    return Readfeedback;
}


/* function showThanks() {
    modalWin.style.display="none";
    thanksBlock.style.zIndex ="2";
    thanksBlock.style.display="block";
}
 */
SubmitButton.addEventListener ("click", () => {alert ("thanks")})

/* SubmitButton.addEventListener ("click", () => {
    preventDef(evt)
    //showThanks();
    alert('нажали SubmitButton');
    darkWin.style.opacity="0.9";
}) */


//динамический контент:


