const navBtn = document.querySelector('.navbar-btn')
const closeBtn = document.querySelector('.close-btn')
const navBar = document.querySelector('.navbar')

navBtn.addEventListener('click', ()=>{
    navBar.classList.add('active')
});

closeBtn.addEventListener('click', ()=>{
    navBar.classList.remove('active')
});


