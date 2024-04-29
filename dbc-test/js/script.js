let menu= document.querySelector('#menu-icon');
let navlist= document.querySelector('.navlist');

menu.onclick= () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');

}

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');

}

document.querySelector('.google-btn').addEventListener('click', function(event) {
    event.preventDefault();
});
s