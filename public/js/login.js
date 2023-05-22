const usernameField = document.querySelector("[name=username]");

usernameField.addEventListener("keyup", (event) => {
    if(!usernameField.validity.valid){
        console.error("nama invalid");
        document.getElementById("invalid-username").style.display = "block";
    } else {
         console.info("usernama  valid");
        document.getElementById("invalid-username").style.display = "none";
    }

});

const passwordField = document.querySelector("[name=password]");

passwordField.addEventListener("keyup", (event) => {
    if(!passwordField.validity.valid){
        console.error("nama invalid");
        document.getElementById("invalid-password").style.display = "block";
    } else {
         console.info("nama  valid");
        document.getElementById("invalid-password").style.display = "none";
    }

});