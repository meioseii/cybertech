const formContainer = document.querySelector('.form-container');
const inputSelect = document.querySelector('.input-select');
const buttons = document.querySelectorAll('.form-button');
const usernameInput = document.querySelector('.username-input');
const passwordInput = document.querySelector('.password-input');
let selectValue = inputSelect?.value;


inputSelect?.addEventListener('change', () => {
    console.log(selectValue);
    selectValue = inputSelect.value;
})

buttons.forEach(button => {
    button.addEventListener('click', () => {
    switch(selectValue) {
        case 'Accounting':
            window.location.href = './accounting/cyb_acc_new.html';
            break;
        case 'Admin':
            window.location.href = 'admin.html';
            break;
        case 'Supply Chain Management':
            window.location.href = './supply_chain/index.html';
            break;
        case 'Human Resource':
            window.location.href = './human_resource/cyb_hrd_new.html';
            break;
        case 'Marketing':
            window.location.href = './marketing/cyb_mkt_new.html';
            break;
        case 'Payroll':
            window.location.href = './payroll/cyb_pyr_new.html';
            break;
    }
})
})

usernameInput.addEventListener('change', () => {
    console.log(usernameInput.value)
})

formContainer.addEventListener('input', () => {
    if (usernameInput.value !== '' && passwordInput.value !== '') {
        buttons.forEach(button => {
            button.removeAttribute('disabled');
        })
    } else {
        buttons.forEach(button => {
            button.setAttribute('disabled', 'true');
        })
    }
})



