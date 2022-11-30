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


//динамический контент:
let partBlogArray = [  
    {
    wherePic: "./assets/Images/Little_img_1.png", 
    when: "21 Oct, 2022",
    title: "How I've started learning web",
    text: "My prevus job was not related to web development, but I have exhausted my potential and decided to try a new field of activity.",
    },
    { 
    wherePic:"./assets/Images/Little_img_2.png",
    when: "03 Dec, 2022",
    title: "Why does JavaScript is so exciting",
    text: "This programming language allows you to write frontend, backend, create websites, desktop or mobile applications, and even develop games in it."
    },
    { 
    wherePic:"./assets/Images/Little_img_3.png",
    when: "20 Dec, 2022", 
    title: "How I've developed this site",
    text: "This is my training ground, where I grow my skills)"
    },
];
let arrow = document.createElement("p");

function createPartOfBlog(partBlogArray) {
    for (let i=0; i<partBlogArray.length; i++) {
let Blog = document.querySelector(".blog");
let partOfBlog = document.createElement("div");
Blog.appendChild(partOfBlog);
partOfBlog.classList.add("part-of-blog");     
let pictureText = document.createElement("div");
let HrefVievPost = document.createElement("div");
partOfBlog.appendChild(pictureText);
partOfBlog.appendChild(HrefVievPost);
pictureText.classList.add("picture-text");
HrefVievPost.classList.add("view-post");

let LittleImg = document.createElement("img");
let blogDescription = document.createElement("div");
pictureText.appendChild(LittleImg);
pictureText.appendChild(blogDescription);
LittleImg.classList.add("little-img");
LittleImg.setAttribute("src", partBlogArray[i]["wherePic"]);
blogDescription.classList.add("blog-description");

let DescriptionDate = document.createElement("h5");
let PartBlogName = document.createElement("h4")
let Description = document.createElement("p");
blogDescription.appendChild(DescriptionDate);
blogDescription.appendChild(PartBlogName);
blogDescription.appendChild(Description);
DescriptionDate.classList.add("red-text");
Description.classList.add("inika-15");
DescriptionDate.textContent = partBlogArray[i]["when"];
PartBlogName.textContent = partBlogArray[i]["title"];
Description.textContent = partBlogArray[i]["text"];

let HrefPost = document.createElement("p");
let arrow = document.createElement("p");
HrefVievPost.appendChild(HrefPost);
HrefVievPost.appendChild(arrow);
HrefPost.classList.add("red-text", "inika-19");
HrefPost.textContent = "View post ";
arrow.innerHTML = "➡";

let lineBlog = document.createElement("hr");
Blog.appendChild(lineBlog);
lineBlog.classList.add("hr");

}
}

createPartOfBlog(partBlogArray);

