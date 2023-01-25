var count = 0;

const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    register();
});

function register() {
    const emailValue =  email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    }else {
        count++;
    }
    if(passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    }else if(passwordValue.length < 6){
        setErrorFor(password, 'Enter a longer password');
    }else{
        count++;
    }
    if(password2Value === '') {
        setErrorFor(password2, 'Confirm Password cannot be blank');
    }else if(passwordValue !== password2Value) {
        setErrorFor(password2, 'Passwords don\'t match');
    }else{
        count++;
    }
}


function setErrorFor(input, message){
    const formControle = input.parentElement;
    const small = formControle.querySelector('small');
    small.innerText = message;
    formControle.className = 'form-controle error';
}