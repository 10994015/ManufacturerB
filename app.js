const goBtn = document.getElementById('goBtn');

goBtn.addEventListener('mouseover', ()=>{
    goBtn.querySelector('img').src = "./images/B005.png";
})
goBtn.addEventListener('mouseout', ()=>{
    goBtn.querySelector('img').src = "./images/B004.png";
})

const center = document.getElementById('center');
const imgslide = center.querySelectorAll('img');
const left = document.getElementById('left');
const right = document.getElementById('right');
let num = 0;


right.addEventListener('click',()=>{
    num++;
    if(num > imgslide.length - 1){
        num = 0;
    }
    for(let i=0;i<imgslide.length;i++){
        imgslide[i].style.transform = `translateX(-${num}00%)`;
    }
})
left.addEventListener('click',()=>{
    num--;
    if(num < 0){
        num = imgslide.length - 1;
    }
    for(let i=0;i<imgslide.length;i++){
        imgslide[i].style.transform = `translateX(-${num}00%)`;
    }
})
setInterval(()=>{
    num ++;
    if(num > imgslide.length - 1){
        num = 0;
    }
    for(let i=0;i<imgslide.length;i++){
        imgslide[i].style.transform = `translateX(-${num}00%)`;
    }
}, 5000)

