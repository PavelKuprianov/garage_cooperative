const linkArenda = document.querySelectorAll('.link-arenda')
const rent = document.querySelector('.rent');
const control = document.getElementById('control');
const inputHidden = document.getElementById('id-box');

linkArenda.forEach((itemArenda)=> {
    itemArenda.addEventListener('click', (e) => {
        const idClick = e.target.parentElement.id
        rent.style.display = 'block';
        control.textContent = `Вы собираетесь арендовать бокс №${idClick}`;
        inputHidden.value = idClick;
        // console.log(inputHidden)
    })
})



