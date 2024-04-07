import './bootstrap';

//Close alert
const alertInfo = document.querySelector('.alert-info')
const closeAlert = document.querySelector('.close_message')
if (closeAlert) {
    closeAlert.addEventListener('click', ()=> {
        alertInfo.classList.add('d-none')
})
}


if(alertInfo) {
    setTimeout(() => {
        alertInfo.classList.add('d-none')
    }, 3000)
}
