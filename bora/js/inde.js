import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.6.0/firebase-app.js';
import { getDatabase, ref, set, push } from 'https://www.gstatic.com/firebasejs/9.6.0/firebase-database.js';


const firebaseConfig = {
  apiKey: "AIzaSyDfbz7FMZ55F8NEsKWQIly9FXtYPZMd9ME",
  authDomain: "meu-site-dhscode.firebaseapp.com",
  databaseURL: "https://meu-site-dhscode-default-rtdb.firebaseio.com",
  projectId: "meu-site-dhscode",
  storageBucket: "meu-site-dhscode.appspot.com",
  messagingSenderId: "942620163555",
  appId: "1:942620163555:web:f4bbe9f27b99b012aaf4d6"
};

const app = initializeApp(firebaseConfig);
const db = getDatabase(app);


const carrosel = document.querySelector(".works")
const slide = document.querySelectorAll(".works li")
const size = document.querySelector(".works li").offsetWidth;
const leftArrow = document.querySelector(".bi-caret-left-fill")
const rightArrow = document.querySelector(".bi-caret-right-fill")
const bullets = document.querySelectorAll(".bullets span")


let currentIndex = 0;

rightArrow.addEventListener("click",()=>{
  if(currentIndex >= 3){
    currentIndex = 0;
  }else{
    currentIndex += 1;
  }
  for(var i = 0; i < bullets.length; i++){
    bullets[i].classList.remove("active");
    bullets[currentIndex].classList.add("active");
  }
  slide.forEach(slide=>{
    slide.style.transform = `translateX(-${(size + 20) * currentIndex}px)`;
  })
})

leftArrow.addEventListener("click",()=>{
  if(currentIndex <= 0){
    currentIndex = 3;
  }else{
    currentIndex -= 1;
  }
  for(var i = 0; i < bullets.length; i++){
    bullets[i].classList.remove("active");
    bullets[currentIndex].classList.add("active");
  }
  slide.forEach(slide=>{
    slide.style.transform = `translateX(-${(size + 20) * currentIndex}px)`;
  })
})

let initial;
let X;

const frente = (event) => {
  initial = event.clientX;
};

const verificar = (e) => {
  X = e.clientX;
};

const sair = () => {
  if (X < initial) {
    if(currentIndex >= 3){
    
    }else{
      currentIndex += 1;
    }
  } else if (X > initial) {
    if(currentIndex <= 0){
    
    }else{
      currentIndex -= 1;
    }
  }
  for(var i = 0; i < bullets.length; i++){
    bullets[i].classList.remove("active");
    bullets[currentIndex].classList.add("active");
  }
  slide.forEach(slide=>{
    slide.style.transform = `translateX(-${(size + 20) * currentIndex}px)`;
  })
};

carrosel.addEventListener("mousedown", frente);
document.addEventListener("mousemove", verificar);
carrosel.addEventListener("mouseup", sair);


const pergunta = document.querySelectorAll(".quiz li")
const resposta = document.querySelectorAll(".resposta")



pergunta.forEach((click,index)=>{
  const seta = click.querySelector(".bi-caret-right-fill")
  click.addEventListener("click",()=>{
    if( resposta[index].style.display=="none"){
      resposta[index].style.display="block";
      seta.style.transform='rotate(90deg)';
    }else{
      resposta[index].style.display="none";
      seta.style.transform='rotate(0deg)'
    }
  })
 
})

const usuarios = ref(db, "users");
//formulario 

function validateForm() {
  
 const nomeCompleto = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const telefone = document.getElementById("telefone").value;
  // Expressão regular para validar um e-mail
  const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;


  if (!nomeCompleto || !email || !telefone) {
    alert("Por favor, preencha todos os campos.");
    return false;
  } else if (!email.match(emailRegex)) {
    alert("Por favor, insira um e-mail válido.");
    return false;
  } else if (telefone < 12 ) {
    alert("Por favor, insira um número de telefone válido com DDD.");
    return false;
  }else{
   
  
    push(usuarios, {
      email: email,
      telefone: telefone,
      nome: nomeCompleto,
    });
    return true;
  }
 

}

const enviar = document.getElementById("enviar")


enviar.addEventListener("click",(event)=>{
  validateForm()
  window.location.href="index.html"
})



