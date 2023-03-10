
const form = document.querySelector('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const submit = document.getElementById('submit-btn');

submit.addEventListener('click', (e) => {
    register();
});

function register() {
    let count = 0;
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

    console.log(count)
    if (count === 3) {
        console.log('all')
        form.submit()
    }
}

document.querySelectorAll("form input").forEach(element=>{
    element.addEventListener('keyup', function(){
        const formGroup = element.parentElement;
        const small = formGroup.querySelector('small');
        small.innerText = '';
        formGroup.className = 'form-group';
    })
})


function setErrorFor(input, message){
    const formGroup = input.parentElement;
    const small = formGroup.querySelector('small');
    small.innerText = message;
    formGroup.className = 'form-group error';
}