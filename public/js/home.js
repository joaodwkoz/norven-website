const texts = ['<Projeto/>', '<Negócio/>', '<E-commerce/>', '<Aplicativo/>', '<Site/>'];

const textContainer = document.querySelector('#home .main-text .bold');

let i = 0, j = 0, isDeleting = false, currentText = '', speed = 240;

function typeLoop(){
    currentText = texts[i];

    if(isDeleting){
        textContainer.textContent = currentText.substring(0, j--);
    } else {
        textContainer.textContent = currentText.substring(0, j++);
    }

    if(!isDeleting && j === currentText.length){
        setTimeout(() => {}, 480);
        isDeleting = true;
        speed = 4000;
    } else if(isDeleting && j === 0){
        isDeleting = false;
        i = (i + 1) % texts.length;
        speed = 240;
    } else {
        typingSpeed = isDeleting ? 80 : 240;
    }

    setTimeout(typeLoop, typingSpeed);
}

document.addEventListener("DOMContentLoaded", typeLoop);