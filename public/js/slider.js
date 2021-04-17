let imgs = document.querySelectorAll('.slider img');
let count = 0;
let slider= document.querySelector('.slider');

let timeset = setInterval(()=>{
     for(let i=0;i<imgs.length;i++){
        imgs[i].classList.add('opacity')
    }
    imgs[count].classList.remove('opacity');
    count++;
    if(count>=imgs.length){
        count=0;
    }
}, 3000)