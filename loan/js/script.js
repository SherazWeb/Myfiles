const pass = document.getElementById('password');
const c_pass = document.getElementById('c-password');
const form = document.getElementById('signup');
const signupErr = document.getElementById('errors');

form.addEventListener('submit', (e) => {
    if(pass.value && c_pass.value){
        if(pass.value !== c_pass.value){
            e.preventDefault();
            signupErr.innerText = `Passwords don't match`;
            signupErr.style.display = 'block';
        }
    }
});