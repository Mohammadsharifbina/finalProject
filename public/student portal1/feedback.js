const container = document.querySelector(".container");
const emoji = document.querySelector(".emoji");
const texterea = document.querySelector(".texterea");
const btn = document.querySelector(".btn");
emoji.addEventListener('click',(e) =>{
    if(e.target.className.includes('emoji'))return;
    texterea.classList.add('texterea--active');
    btn.classList.add('btn--active');
})

container.addEventListener('mouseleave',()=>{
    texterea.classList.remove('texterea--active')
    btn.classList.remove('btn--active')
})

