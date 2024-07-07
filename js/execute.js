const open = document.getElementById('open');
const show = document.getElementById('modal-container-show');
const close = document.getElementById('close');

open.addEventListener('click', () => {
    show.classList.add('show');  
});

close.addEventListener('click', () => {
    show.classList.remove('show');
});