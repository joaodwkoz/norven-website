document.addEventListener('DOMContentLoaded', () => {
    const projects = {
        website: [
            { foto: 'img/projetos/website/foto1.png', nome: 'Labirinto JS', desc: 'Um simples joguinho feito em JS para criar e encontrar o menor caminho.'},
        ],
        mobile: [
            { foto: 'img/projetos/mobile/foto1.png', nome: 'Zookids', desc: 'Um aplicativo para crianças desenvolvido com base no Zoológico de SP.' },
        ],
    };

    const carouselImage = document.querySelector('.carousel .img .images');

    let idx = 0; 
    let mode = "website";

    const displayImage = document.createElement('img');

    const projectInfo = document.querySelector('.carousel .img .info');
    const projectName = projectInfo.querySelector('.project-name');
    const projectDesc = projectInfo.querySelector('.project-desc');

    carouselImage.appendChild(displayImage);

    function updateCarousel() {
        const currentProjects = projects[mode];
        
        idx = (idx % currentProjects.length + currentProjects.length) % currentProjects.length;

        const currentProj = currentProjects[idx];
        
        displayImage.src = currentProj.foto;

        projectName.textContent = currentProj.nome;
        projectDesc.textContent = currentProj.desc;
    }

    function goBack() {
        idx--;
        updateCarousel();
    }

    function goNext() {
        idx++;
        updateCarousel();
    }
    
    const optionsSide = document.querySelectorAll('.sidebar ul li');

    optionsSide.forEach(opt => {
        opt.addEventListener('click', () => {
            optionsSide.forEach(o => o.classList.remove('selected'));
            opt.classList.add('selected');

            mode = opt.getAttribute('data-mode');
            idx = 0; 
            
            updateCarousel();
        });
    });

    const backBtn = document.querySelector('.btn.back');
    const nextBtn = document.querySelector('.btn.next');

    backBtn.addEventListener('click', goBack);
    nextBtn.addEventListener('click', goNext);

    updateCarousel(); 
});