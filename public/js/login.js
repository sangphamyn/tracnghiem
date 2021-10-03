var account_tab_item = document.querySelectorAll('.account-tab-item');
var login_form = document.querySelector('.login-form');
var signup_form = document.querySelector('.signup-form');
account_tab_item[0].addEventListener('click', ()=> {
    signup_form.classList.add('hide');
    login_form.classList.remove('hide');
    document.querySelector('.account-tab-active').classList.remove('account-tab-active');
    account_tab_item[0].classList.add('account-tab-active');
})
account_tab_item[1].addEventListener('click', ()=> {
    signup_form.classList.remove('hide');
    login_form.classList.add('hide');
    document.querySelector('.account-tab-active').classList.remove('account-tab-active');
    account_tab_item[1].classList.add('account-tab-active');
})