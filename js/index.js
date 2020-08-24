var nav = document.querySelector('.nav-bar');
var navHeight = getComputedStyle(nav).height.split('px')[0]*0.2;

function stickyCheck(){
    if(window.pageYOffset > navHeight){
        nav.classList.add('sticky');
    }
    else if(window.pageYOffset < navHeight){
        nav.classList.remove('sticky');
    }
}

window.addEventListener('scroll', stickyCheck);