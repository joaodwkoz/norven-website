window.addEventListener('scroll', () => {
    const btn = document.querySelector('#btn-up');
    
    const homeSection = document.querySelector('#home');

    if(homeSection) {
        const homeBottom = homeSection.getBoundingClientRect().bottom;

        if (homeBottom <= 50) { 
            btn.style.opacity = '1';
        } else {
            btn.style.opacity = '0';
        }
    }
    
    const sections = document.querySelectorAll('#home, #about, #projects, #team, #contact');
    const options = document.querySelectorAll('nav .options ul li');

    let current = '';

    sections.forEach(section => {
        const rect = section.getBoundingClientRect();

        if(rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
            current = section.id;
        }
    });

    options.forEach(op => {
        const a = op.querySelector('a');

        if(a && a.getAttribute('href') === `#${current}`) {
            op.classList.add('selected');
        } else {
        op.classList.remove('selected');
        }
    });
});