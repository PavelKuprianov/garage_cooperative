const btnReg = document.querySelector('.btn-reg');
const btnAuth= document.querySelector('.btn-auth');

const blockRegister = document.querySelector('.register');
const blockAuthor = document.querySelector('.author');

const pass = document.getElementById('pass');
const passDubl = document.getElementById('pass-dubl');
const btnRegSbm = document.getElementById('btn-reg-sbm');

btnReg.addEventListener('click', ()=> {
    blockAuthor.style.display = 'none';
    blockRegister.style.display = 'block';
})

btnAuth.addEventListener('click', ()=> {
    blockRegister.style.display = 'none';
    blockAuthor.style.display = 'block';
})

let flag = false

passDubl.addEventListener('focus', ()=> {
    passDubl.style.outline = 'none';
    passDubl.value = ''
})

passDubl.addEventListener('blur', ()=> {
    if(pass.value === passDubl.value) {
        flag = true;
        passDubl.style.outline = '1px solid green';
        pass.style.outline = '1px solid green';
        btnRegSbm.disabled = false;
    } else {
        passDubl.style.outline = '1px solid red';
        passDubl.value = '';
        passDubl.placeholder = 'Пароли не совпадают!';
        btnRegSbm.disabled = true;
    }
})
