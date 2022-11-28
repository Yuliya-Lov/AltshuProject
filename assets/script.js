let modalWin = document.querySelector(".modal-win");
let darkWin = document.createElement("div");
    let body = document.querySelector("body");
function showModalWin() {
    body.appendChild(darkWin);
    darkWin.style.position="fixed";
    darkWin.style.opacity="0.5";
    darkWin.style.backgroundColor="#000";
    darkWin.style.width="100%";
    darkWin.style.height="100%";
    darkWin.style.zIndex="1";
    darkWin.style.left="0";
    darkWin.style.top="0";
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

function FeedbackObj (userName,userEmail,userFeedback) {
    this.userName = userName;
    this.userEmail = userEmail;
    this.userFeedback = userFeedback;
}

function NewFeedback() {
    let Readfeedback = new  FeedbackObj;
    Readfeedback.userName = document.querySelector("#name").value;
    Readfeedback.userEmail = document.querySelector("#e-mail").value,
    Readfeedback.userFeedback = document.querySelector("#feedback-text").value;
    console.log(Readfeedback);
    return Readfeedback;
}

function showThanks() {
    thanksBlock.style.zIndex ="2";
    thanksBlock.style.display="flex";
}

function validateForm() {
    if (document.querySelector("#name").value && document.querySelector("#feedback-text").value) {
        NewFeedback()
        modalWin.style.display="none";
        showThanks();
    } else {
        alert("Please fill in your name and feedback if you want to send them!");
    }
}

SubmitButton.addEventListener ("click", (e) => {
    e.preventDefault();
    validateForm();
} 
)  
OkButton.addEventListener ("click", () => {
    darkWin.parentNode.removeChild(darkWin);
    modalWin.style.display="none";
    thanksBlock.style.display="none";
} 
)  

/* SubmitButton.addEventListener ("click", () => {alert ("thanks")}) */

/* SubmitButton.addEventListener ("click", () => {
    preventDef(evt)
    //showThanks();
    alert('нажали SubmitButton');
    darkWin.style.opacity="0.9";
}) */

//динамический контент:
/* function createPartOfBlog() {
let partOfBlog = document.createElement("div");
let Blog = querySelector(".blog");
Blog.appendChild(partOfBlog);
let pictureText = document.createElement("div");
let HrefVievPost = document.createElement("div");
partOfBlog.appendChild(pictureText);
HrefVievPost.appendChild(pictureText);
pictureText.classList.add("picture-text")
HrefVievPost.classList.add("view-post")

let LittleImg = document.createElement("img");
let blogDescription = createElement("div");
pictureText.appendChild(LittleImg);
pictureText.appendChild(blogDescription);
LittleImg.classList.add("little-img");
blogDescription.classList.add("blog-description");

let DescriptionDate = document.createElement("h5");
let PartBlogName = document.createElement("h4")
let Description = document.createElement("p");
blogDescription.appendChild(DescriptionDate);
blogDescription.appendChild(PartBlogName);
blogDescription.appendChild(Description);
DescriptionDate.classList.add("red-text");
Description.classList.add("inika-15");

let HrefPost = document.createElement("p");
HrefVievPost.appendChild(HrefPost);
HrefPost.classList.add("red-text, inika-19");

let partBlogArrayFirst = ["./assets/Images/Little_img_1.png", "21 Oct, 2022", "How I've started learning web", "My prevus job was not related to web development, but I have exhausted my potential and decided to try a new field of activity."];
let partBlogArraySecond = ["./assets/Images/Little_img_2.png", "03 Dec, 2022", "Why does JavaScript is so exciting","This programming language allows you to write frontend, backend, create websites, desktop or mobile applications, and even develop games in it."]
//заполнение
LittleImg.setAttribute("src","/assets/Images/Little_img_1.png)")
*/








