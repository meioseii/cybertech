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
            window.location.href = 'about.html';
            break;
        case 'Client':
            window.location.href = 'profile.html';
            break;
        case 'Information Technology':
            window.location.href = 'faqs.html';
            break;
        case 'Supply Chain Management (Inbound)':
            window.location.href = 'index.html';
            break;
        case 'Supply Chain Management (Outbound)':
            window.location.href = 'profile.html';
            break;
        case 'Human Resource':
            window.location.href = '';
            break;
        case 'Marketing':
            window.location.href = '';
            break;
        case 'Payroll':
            window.location.href = '';
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



