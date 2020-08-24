var btn = document.querySelectorAll('.btn');

for(var i = 0; i<btn.length; i++){
    btn[i].addEventListener('click', function(){
        document.querySelector('#next').classList.toggle('hide');
        document.querySelector('#prev').classList.toggle('hide');
        document.querySelector('#pg1').classList.toggle('hide');
        document.querySelector('#pg2').classList.toggle('hide');
    })
}




