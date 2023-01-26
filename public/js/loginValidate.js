
const form = document.querySelector('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const submit = document.getElementById('submit-btn');

submit.addEventListener('click', (e) => {
    login();
});

function login() {
    let count = 0;
    const emailValue =  email.value.trim();
    const passwordValue = password.value.trim();
    if(emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    }else {
        count++;
    }
    if(passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    }else{ 
        count++;
    }
    console.log(count)
    if (count === 2) {
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