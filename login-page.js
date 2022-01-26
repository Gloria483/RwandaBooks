const loginForm=document.getElementById("login_form");
const loginButton=document.getElementById("login_form_button");
const loginErrorMsg=document.getElementById("login_error_msg");
loginButton.addEventListener("click" ,(e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "user" && password === "web_dev") {
        alert("You have successfully logged in.");
        location.reload();
    } else {
        loginErrorMsg.style.opacity = 1;
    }
})




