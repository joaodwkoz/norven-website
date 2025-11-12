<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <title>Norven</title>
</head>
<body>
    <nav>
        <div id="nav-icon">
            <img src="{{ url('img/norven.png') }}" alt="" onclick="location.reload()">
        </div>

        <div class="options">
            <ul>
                <li class="selected">
                    <a href="#home">Home</a>
                </li>

                <li>
                    <a href="#about">Sobre</a>
                </li>

                <li>
                    <a href="#projects">Projetos</a>
                </li>

                <li>
                    <a href="#team">Time</a>
                </li>
            </ul>
        </div>

        <div class="contact">
            <button id="contact-us-btn" onclick="document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' });">
                <span>Contato</span>

                <div class="contact-icon">
                    <img src="{{ url('img/assets/footer/seta-secao-azul.png') }}" alt="">
                </div>
            </button>
        </div>
    </nav>

    <button id="btn-up" onclick="document.querySelector('#home').scrollIntoView({ behavior: 'smooth' });">
        <img src="{{ url('img/btns/seta.png') }}" alt="">
    </button>

    <main id="app">
        <section id="home">
            <div class="bg">
                <div class="bg-icon left">
                    <img src="{{ url('img/assets/home/floating-icon-left.png') }}" alt="">
                </div>

                <div class="bg-icon right">
                    <img src="{{ url('img/assets/home/floating-icon-right.png') }}" alt="">
                </div>
            </div>

            <div class="main-text">
                <span class="normal">
                    O vento da inovação no seu
                </span>
                <span class="bold">
                    Negócio
                </span>
                <div class="separator"></div>
            </div>

            <div class="call-to-action">
                <span>Vamos tirar sua ideia do papel?</span>

                <button id="home-btn" onclick="document.querySelector('#about').scrollIntoView({ behavior: 'smooth' });">
                    <img src="{{ url('img/btns/home/btn.png') }}" alt="">
                </button>

                <span class="subtext">Ventos que te guiam adiante.</span>
            </div>
        </section>

        <section id="about">
            <div class="first-content">
                <div class="text">
                    <span class="title">
                        Norven — direção e impulso digital
                    </span>

                    <span class="subtitle">
                        Somos movidos pelo vento da inovação. Guiamos startups e empresas de pequeno e médio porte rumo à transformação digital, criando soluções web e mobile que unem propósito, performance e design.
                    </span>
                </div>

                <div class="img">
                    <img src="{{ url('img/assets/about/Illustration.png') }}" alt="">
                </div>
            </div>

            <div class="about-content">
                <span class="title">
                    Soluções que apontam para o futuro
                </span>

                <div class="cards">
                    <div class="card">
                        <img src="{{ url('img/assets/about/Automate.png') }}" alt="">
                    </div>

                    <div class="card">
                        <img src="{{ url('img/assets/about/UX.png') }}" alt="">
                    </div>

                    <div class="card">
                            <img src="{{ url('img/assets/about/Accessibility.png') }}" alt="">
                    </div>
                </div>

                <div class="partners">
                    <span class="title">Conheça aqueles que nos apoiam</span>

                    <div class="imgs">
                        <img src="{{ url('img/assets/about/logo-aquadev.webp') }}" alt="">

                        <img src="{{ url('img/assets/about/logo-maze.webp') }}" alt="">

                        <img src="{{ url('img/assets/about/logo-wisys.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="projects">
            <span class="title">
                Nossos projetos
            </span>

            <div class="main-content-container">
                <div class="main-content">
                    <div class="sidebar-container">
                        <div class="separator"></div>

                        <div class="sidebar">
                            <ul>
                                <li class="selected" data-mode="website">
                                    <div class="icon">
                                        <img src="{{ url('img/assets/projects/website.png') }}" alt="">
                                    </div>
                                    <span class="text">Website</span>
                                    <div class="arrow">
                                        <img src="{{ url('img/assets/projects/seta.png') }}" alt="">
                                    </div>
                                </li>
                                
                                <li data-mode="mobile">
                                    <div class="icon">
                                        <img src="{{ url('img/assets/projects/mobile.png') }}" alt="">
                                    </div>
                                    <span class="text">Mobile</span>
                                    <div class="arrow">
                                        <img src="{{ url('img/assets/projects/seta.png') }}" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
        
                    <div class="carousel">
                        <div class="btn back">
                            <img src="{{ url('img/assets/projects/seta-projeto.png') }}" alt="" style="transform: rotate(180deg);">
                        </div>
            
                        <div class="img">
                            <div class="images">
                                
                                <div class="info">
                                    <span class="project-name">

                                    </span>

                                    <span class="project-desc">

                                    </span>
                                </div>
                            </div>
                        </div>
            
                        <div class="btn next">
                            <img src="{{ url('img/assets/projects/seta-projeto.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team">
            <span class="title">Time</span>

            <div class="team">
                <div class="first-row">
                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-adriel.PNG') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">Adriel</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-bruno.webp') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">Bruno</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-gustavo.webp') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">Gustavo</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-joao.PNG') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">João</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-kaua.webp') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">Kauã</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="second-row">
                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-leticia.webp') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">Metícia</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-luan.webp') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">Luan</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-marcos.webp') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">Marcos</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-maria.webp') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">Maria</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user">
                        <div class="user-img">
                            <img src="{{ url('img/assets/team/foto-vitor.webp') }}" alt="">
                        </div>

                        <div class="info">
                            <span class="info-name">Vitor</span>

                            <div class="info-separator"></div>

                            <div class="info-links">
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-github.png') }}" alt="">
                                </a>
                                
                                <a href="">
                                    <img src="{{ url('img/assets/team/icon-linkedin.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="side-content">
                <span class="text">
                    Desenvolva seu projeto conosco!
                </span>

                <span class="subtext">
                    Tem um projeto em mente ou quer saber como podemos ajudar a sua startup? Estamos prontos para ouvir você.
                </span>

                <div class="img">
                    <img src="{{ url('img/assets/contact/Illustration.png') }}" alt="">
                </div>
            </div>

            <form id="contact-form" data-action="{{ route('contato.enviar') }}">
                @csrf
                <div class="form-group">
                    <div class="form-group-label">
                        <img src="{{ url('img/assets/contact/form-nome.png') }}" alt="">

                        <span>
                            Nome *
                        </span>
                    </div>

                    <input type="text" name="nome" required>
                </div>

                <div class="form-group">
                    <div class="form-group-label">
                        <img src="{{ url('img/assets/contact/form-email.png') }}" alt="">

                        <span>
                            Email *
                        </span>
                    </div>

                    <input type="email" name="email" required>
                </div>

                <div class="form-group">
                    <div class="form-group-label">
                        <img src="{{ url('img/assets/contact/form-empresa.png') }}" alt="">

                        <span>
                            Empresa
                        </span>
                    </div>

                    <input type="text" name="empresa">
                </div>

                <div class="form-group">
                    <div class="form-group-label">
                        <img src="{{ url('img/assets/contact/form-assunto.png') }}" alt="">

                        <span>
                            Assunto *
                        </span>
                    </div>

                    <input type="text" name="assunto">
                </div>

                <div class="form-group">
                    <div class="form-group-label">
                        <img src="{{ url('img/assets/contact/form-mensagem.png') }}" alt="">

                        <span>
                            Mensagem *
                        </span>
                    </div>

                    <textarea name="mensagem" required></textarea>
                </div>

                <button type="submit" id="send-btn">
                    <div class="icon">
                        <img src="{{ url('img/assets/contact/send-icon.png') }}" alt="">
                    </div>

                    <span>
                        Enviar
                    </span>
                </button>
            </div>
        </section>
    </main>

    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.431471984672!2d-46.40218112361308!3d-23.552942261284986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce65086cafaf55%3A0xf7da96815e7611da!2sEscola%20T%C3%A9cnica%20Estadual%20de%20Guaianazes!5e0!3m2!1spt-BR!2sbr!4v1762966034249!5m2!1spt-BR!2sbr" width="900" height="600" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <footer>
        <div class="main">
            <div class="identity">
                <span class="logo">Norven</span>

                <span class="desc">Ventos que te guiam adiante.</span>

                <div class="icons">
                    <a class="icon">
                        <img src="{{ url('img/assets/footer/linkedin.png') }}" alt="">
                    </a>

                    <a class="icon">
                        <img src="{{ url('img/assets/footer/instagram.png') }}" alt="">
                    </a>

                    <a class="icon">
                        <img src="{{ url('img/assets/footer/twitter.png') }}" alt="">
                    </a>
                </div>
            </div>

            <div class="content">
                <div class="nav">
                    <button class="go-section" onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth' })">
                        <div class="text">Sobre</div>
                        <div class="img">
                            <img src="{{ url('img/assets/footer/seta-secao.png') }}" alt="">
                        </div>
                    </button>

                    <button class="go-section" onclick="document.getElementById('projects').scrollIntoView({ behavior: 'smooth' })">
                        <div class="text">Projetos</div>
                        <div class="img">
                            <img src="{{ url('img/assets/footer/seta-secao.png') }}" alt="">
                        </div>
                    </button>

                    <button class="go-section" onclick="document.getElementById('team').scrollIntoView({ behavior: 'smooth' })">
                        <div class="text">Time</div>
                        <div class="img">
                            <img src="{{ url('img/assets/footer/seta-secao.png') }}" alt="">
                        </div>
                    </button>

                    <button class="go-section" onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })">
                        <div class="text">Contato</div>
                        <div class="img">
                            <img src="{{ url('img/assets/footer/seta-secao.png') }}" alt="">
                        </div>
                    </button>

                    <button class="go-up" onclick="document.getElementById('home').scrollIntoView({ behavior: 'smooth' })">
                        <img src="{{ url('img/assets/footer/seta-secao.png') }}" alt="">
                    </button>
                </div>
            </div>
        </div>

        <div class="end">
            <span class="end-text">© 2025 Norven. Todos os direitos reservados.</span>
        </div>
    </footer>

    <div id="alert-area">
        <div class="alert-container" data-success-icon="{{ asset('img/assets/alerts/sucesso.png') }}" data-error-icon="{{ asset('img/assets/alerts/erro.png') }}">

        </div>
    </div>

    <script src="{{ url('js/home.js') }}"></script>
    <script src="{{ url('js/scrolltrigger.js') }}"></script>
    <script src="{{ url('js/projects.js') }}"></script>
    <script src="{{ url('js/alerts.js') }}"></script>
    <script src="{{ url('js/form.js') }}"></script>
</body>
</html>