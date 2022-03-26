const classbtn = document.getElementsByClassName('classbtn');
const chkok = document.getElementsByClassName('chkok');

const post1 = document.getElementById('post1');
const post2 = document.getElementById('post2');
const post3 = document.getElementById('post3');
const post4 = document.getElementById('post4');
const className = document.getElementsByClassName('className');

const clearchkok = ()=>{
    for(let i=0;i<chkok.length;i++){
        chkok[i].style.display = "none";
    }
    post1.style.display = "none";
    post2.style.display = "none";
    post3.style.display = "none";
    post4.style.display = "none";
}

const chkbtnFn = (e)=>{
    clearchkok();
    e.target.querySelector('.chkbox').querySelector('.chkok').style.display = "block";
    if(e.target.innerText === "全部"){
        post1.style.display = "block";
        post2.style.display = "block";
        post3.style.display = "block";
        post4.style.display = "block";
    }else if(e.target.innerText === "綜合"){
        post2.style.display = "block";
    }else if(e.target.innerText === "活動"){
        post3.style.display = "block";
    }else{
        post4.style.display = "block";
    }
}

for(let i=0;i<classbtn.length;i++){
    classbtn[i].addEventListener('click', chkbtnFn)
}

for(let i=0;i<className.length;i++){
    if(className[i].innerText == "綜合"){
        className[i].style.border = "1px  blue solid";
        className[i].style.color = "blue";
    }else if(className[i].innerText == "更新"){
        className[i].style.border = "1px  green solid";
        className[i].style.color = "green";
    }else{
        className[i].style.border = "1px  red solid";
        className[i].style.color = "red";
    }
}