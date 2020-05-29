const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
<<<<<<< HEAD
const eyeIcon = document.querySelector('.fa-eye');
const passico = document.querySelector('.passwordicon');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
// eyeIcon.addEventListener('click', showHide);

function showHide(e) {
    if (eyeIcon.className == "fas fa-eye") {
        eyeIcon.className = "fas fa-eye-slash";
        passico.type = "text";
    } else {
        eyeIcon.className = "fas fa-eye";
        passico.type = "password";
    }
}
=======
const eyeIcon=document.querySelector('.fa-eye');
const passico=document.querySelector('.passwordicon');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
eyeIcon.addEventListener('click',showHide);
function showHide(e)
{
    if(eyeIcon.className =="fas fa-eye")
    {   
        eyeIcon.className="fas fa-eye-slash";
        passico.type="text";
    }
    else{
        eyeIcon.className="fas fa-eye";
        passico.type="password";
    }
}
>>>>>>> c9e306d0fd890deccf9583cdfe98debd5995d238
