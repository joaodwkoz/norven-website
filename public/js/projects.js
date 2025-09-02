document.addEventListener('DOMContentLoaded', () => {
    const imagens = {
        website: [{foto: 'img/projetos/website/foto1.png', nome: 'Labirinto JS', desc: 'Um simples joguinho feito em JS para criar e encontrar o menor caminho até o final de um labirinto criado pelo usuário.', mode: 'dark'}],
        mobile: [{foto: 'img/projetos/mobile/foto1.png', nome: 'Zookids', desc: 'Um aplicativo para crianças desenvolvido com base no Zoológico de SP.', mode: 'light'}],
        software: [{foto: 'img/projetos/software/foto1.png', nome: 'CRUD simples', desc: 'Um pequeno sistema de crud feito com interface gráfica na linguagem JAVA.', mode: 'light'}],
    }

    const images = document.querySelector('.carousel .img .images');
    const projectName = document.querySelector('.carousel .info .project-name');
    const projectDesc = document.querySelector('.carousel .info .project-desc');

    let idx = 0;
    let mode = "website";

    const optionsSide = document.querySelectorAll('.sidebar ul li');

    optionsSide.forEach(opt => {
        opt.addEventListener('click', () => {
            optionsSide.forEach(opt => {
                if(opt.classList.contains('selected')){
                    opt.classList.remove('selected');
                }  
            });

            opt.classList.add('selected');

            mode = opt.getAttribute('data-mode');
            carregarImagens();
        });
    });

    const backBtn = document.querySelector('.btn.back');
    const nextBtn = document.querySelector('.btn.next');

    backBtn.addEventListener('click', voltar);
    nextBtn.addEventListener('click', passar);

    carregarImagens();

    function carregarImagens() {
        images.innerHTML = '';

        if(mode === "website"){
            for(let arquivos of imagens.website){
                const img = document.createElement('img');

                img.src = arquivos.foto;

                images.appendChild(img);
            }

            projectName.textContent = imagens.website[idx].nome;
            projectDesc.textContent = imagens.website[idx].desc;

            if(imagens.website[idx].mode ==  "dark"){
                document.querySelector('.carousel .img .info .project-name').style.color = '#6F9AD7'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#6F9AD7'
            } else {
                document.querySelector('.carousel .img .info .project-name').style.color = '#2a343d'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#2a343d'
            }
        } else if(mode === "mobile"){
            for(let arquivos of imagens.mobile){
                const img = document.createElement('img');

                img.src = arquivos.foto;

                images.appendChild(img);
            }

            projectName.textContent = imagens.mobile[idx].nome;
            projectDesc.textContent = imagens.mobile[idx].desc;

            if(imagens.mobile[idx].mode ==  "dark"){
                document.querySelector('.carousel .img .info .project-name').style.color = '#6F9AD7'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#6F9AD7'
            } else {
                document.querySelector('.carousel .img .info .project-name').style.color = '#2a343d'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#2a343d'
            }
        } else {
            for(let arquivos of imagens.software){
                const img = document.createElement('img');

                img.src = arquivos.foto;

                images.appendChild(img);
            }

            projectName.textContent = imagens.software[idx].nome;
            projectDesc.textContent = imagens.software[idx].desc;

            if(imagens.software[idx].mode ==  "dark"){
                document.querySelector('.carousel .img .info .project-name').style.color = '#6F9AD7'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#6F9AD7'
            } else {
                document.querySelector('.carousel .img .info .project-name').style.color = '#2a343d'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#2a343d'
            }
        }
    }

    function voltar(){
        if(mode === "website"){
            idx = (((idx - 1) % imagens.website.length) + imagens.website.length) % imagens.website.length;

            const last = images.lastElementChild;
            images.removeChild(last);
            images.prepend(last);

            projectName.textContent = imagens.website[idx].nome;
            projectDesc.textContent = imagens.website[idx].desc;

            if(imagens.website[idx].mode ==  "dark"){
                document.querySelector('.carousel .img .info .project-name').style.color = '#6F9AD7'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#6F9AD7'
            } else {
                document.querySelector('.carousel .img .info .project-name').style.color = '#2a343d'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#2a343d'
            }
        } else if(mode === "mobile"){
            idx = (idx + 1) % imagens.mobile.length;

            projectName.textContent = imagens.website[idx].nome;
            projectDesc.textContent = imagens.website[idx].desc;

            if(imagens.mobile[idx].mode ==  "dark"){
                document.querySelector('.carousel .img .info .project-name').style.color = '#6F9AD7'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#6F9AD7'
            } else {
                document.querySelector('.carousel .img .info .project-name').style.color = '#2a343d'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#2a343d'
            }
        } else {
            idx = (idx + 1) % imagens.software.length;

            projectName.textContent = imagens.software[idx].nome;
            projectDesc.textContent = imagens.software[idx].desc;

            if(imagens.software[idx].mode ==  "dark"){
                document.querySelector('.carousel .img .info .project-name').style.color = '#6F9AD7'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#6F9AD7'
            } else {
                document.querySelector('.carousel .img .info .project-name').style.color = '#2a343d'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#2a343d'
            }
        }
    }

    function passar(){
        const first = images.firstElementChild;
        images.removeChild(first);
        images.appendChild(first);

        if(mode === "website"){
            idx = (idx + 1) % imagens.website.length;

            projectName.textContent = imagens.website[idx].nome;
            projectDesc.textContent = imagens.website[idx].desc;

            if(imagens.website[idx].mode ==  "dark"){
                document.querySelector('.carousel .img .info .project-name').style.color = '#6F9AD7'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#6F9AD7'
            } else {
                document.querySelector('.carousel .img .info .project-name').style.color = '#2a343d'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#2a343d'
            }
        } else if(mode === "mobile"){
            idx = (idx + 1) % imagens.mobile.length;

            projectName.textContent = imagens.website[idx].nome;
            projectDesc.textContent = imagens.website[idx].desc;

            if(imagens.mobile[idx].mode ==  "dark"){
                document.querySelector('.carousel .img .info .project-name').style.color = '#6F9AD7'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#6F9AD7'
            } else {
                document.querySelector('.carousel .img .info .project-name').style.color = '#2a343d'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#2a343d'
            }
        } else {
            idx = (idx + 1) % imagens.software.length;

            projectName.textContent = imagens.software[idx].nome;
            projectDesc.textContent = imagens.software[idx].desc;

            if(imagens.software[idx].mode ==  "dark"){
                document.querySelector('.carousel .img .info .project-name').style.color = '#6F9AD7'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#6F9AD7'
            } else {
                document.querySelector('.carousel .img .info .project-name').style.color = '#2a343d'
                document.querySelector('.carousel .img .info .project-desc').style.color = '#2a343d'
            }
        }
    }
})