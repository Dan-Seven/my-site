const togle = document.querySelector(".togle")
const list = document.querySelector(".option")

togle.addEventListener("click",()=>{
    if(list.style.width=="100%"){
        list.style.width="0"
    }else{
        list.style.width="100%"
    }
})

const works = document.querySelector(".works")
const li = document.querySelectorAll(".works li")
const bullet = document.querySelectorAll(".bullets span")


li.forEach((li,index)=>{
li.addEventListener("touchmove",()=>{
    for(var i = 0; i<bullet.length; i++){
        bullet[i].classList.remove("active")
    }
if(li.offsetWidth == works.offsetWidth){

    bullet[index].classList.add("active");
}

})


})
const pergunta = document.querySelectorAll(".quiz li h2")
const resposta = document.querySelectorAll(".resposta")


pergunta.forEach((click,index)=>{
    const seta = click.querySelector(".bi-caret-right-fill")
    click.addEventListener("touchend",()=>{
      if( resposta[index].style.display=="none"){
        resposta[index].style.display="block";
        seta.style.transform='rotate(90deg)';
      }else{
        resposta[index].style.display="none";
        seta.style.transform='rotate(0deg)'
      }
    })
   
  })