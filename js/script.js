let nameInput = document.querySelector("#name");
let emailInput = document.querySelector("#email");
let messageInput = document.querySelector("#message");
let submitter = document.querySelector("#submitter");
let messagePopup = document.querySelector("#message-popup");
let themeBtn = document.querySelector("#theme-btn");
let isFormSubmitted = false;
[nameInput,emailInput,messageInput].forEach(field =>{
    if(field){
        field.addEventListener("input",(event)=>{
            showErrorMessage(field)
        })
    }
})
function submitMessage(event) {
  submitter.click();
  event.preventDefault();
  fetch("/forms/handler.php", {
    method: "POST",
    body: new FormData(event.target)
  })
    .then(r => r.json())
    .then(d => {
        console.log(d);
        messagePopup.querySelector("p").textContent=d.message;
        messagePopup.showModal();
    })
    .catch(err => console.log(err));
}
function showErrorMessage(field){
    if(isFormSubmitted){
        let errorElement = field.nextElementSibling.nextElementSibling;
        if(field.value===""){
            errorElement.textContent = "Field must not be empty";
            field.classList.add("invalid:outline", "invalid:outline-red-500");

        }
        else{
            errorElement.textContent = "";

        }
            if (
        field.type === "email" &&
        field.value !== "" &&
        !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)
    ) {
        errorElement.textContent = "Invalid Email";
        field.classList.add("invalid:outline", "invalid:outline-red-500");


    }
        if(field.tagName==="TEXTAREA" &&
        field.value.length < 20 &&
        field.value !== ""){
            errorElement.textContent="Message should be more than 20 characters";
            field.classList.add("invalid:outline", "invalid:outline-red-500");

        }
        console.log(field.value)
    }
}
submitter.addEventListener("click",()=>{
   isFormSubmitted = true;
   [nameInput,emailInput,messageInput].forEach(field=>{
    if(field){
        showErrorMessage(field);
    }
   }) 
})
function changeTheme(){
    let currentTheme = document.documentElement.dataset.theme;
    if(currentTheme==="dark"){
    document.documentElement.dataset.theme="light";
}
    else{
        document.documentElement.dataset.theme="dark";
    }
}