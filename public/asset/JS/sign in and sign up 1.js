let signup = document.querySelector(".t-signup");
let login = document.querySelector(".t-login");
let addclass = document.querySelector(".site");
signup.addEventListener('click', function(){
    addclass.className= 'site signup-show';
});
login.addEventListener('click', function(){
    addclass.className= 'site login-show';
    
});

