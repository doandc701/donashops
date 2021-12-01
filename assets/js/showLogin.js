const Logins = document.querySelectorAll('.js-log')
const modal = document.querySelector('.limiter')
const modalContent = document.querySelector('.js-container')

function showLogin() {
    modal.classList.add('open')
}

function hideLogin() {
    modal.classList.remove('open')
}
for (const Login of Logins) {

    Login.addEventListener('click', showLogin);
}
modal.addEventListener('click', hideLogin)
modalContent.addEventListener('click', function(event) {
    event.stopPropagation()
})