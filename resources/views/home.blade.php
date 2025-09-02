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
      <img src="img/norven.png" alt="" onclick="window.location.href = ''">
    </div>

    <div class="separator"></div>

    <div class="options">
      <ul>
        <li>
          <a href="#about">Sobre</a>
        </li>

        <li>
          <a href="#projects">Projetos</a>
        </li>

        <li>
          <a href="#team">Time</a>
        </li>

        <li>
          <a href="#contact">Contato</a>
        </li>
      </ul>
    </div>
  </nav>

  <button id="btn-up" onclick="document.querySelector('#home').scrollIntoView({ behavior: 'smooth' });">
      <img src="img/btns/seta.png" alt="">
    </button>

  <main id="app">
    <section id="home">
      <div class="bg">
        <div class="bg-icon left">
          <img src="img/assets/home/floating-icon-left.png" alt="">
        </div>

        <div class="bg-icon right">
          <img src="img/assets/home/floating-icon-right.png" alt="">
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
          <img src="img/btns/home/btn.png" alt="">
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
          <img src="img/assets/about/Illustration.png" alt="">
        </div>
      </div>

      <div class="about-content">
        <span class="title">
          Soluções que apontam para o futuro
        </span>

        <div class="cards">
          <div class="card">
            <img src="img/assets/about/Automate.png" alt="">
          </div>

          <div class="card">
            <img src="img/assets/about/UX.png" alt="">
          </div>

          <div class="card">
            <img src="img/assets/about/Accessibility.png" alt="">
          </div>
        </div>

        <div class="partners">
          <span class="title">Conheça aqueles que nos apoiam</span>

          <div class="imgs">
            <img src="img/assets/about/logo-aquadev.webp" alt="">

            <img src="img/assets/about/logo-maze.webp" alt="">

            <img src="img/assets/about/logo-wisys.webp" alt="">
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
                    <img src="img/assets/projects/website.png" alt="">
                  </div>
                  <span class="text">Website</span>
                  <div class="arrow">
                    <img src="img/assets/projects/seta.png" alt="">
                  </div>
                </li>
                
                <li data-mode="mobile">
                  <div class="icon">
                    <img src="img/assets/projects/mobile.png" alt="">
                  </div>
                  <span class="text">Mobile</span>
                  <div class="arrow">
                    <img src="img/assets/projects/seta.png" alt="">
                  </div>
                </li>
                
                <li data-mode="software">
                  <div class="icon">
                    <img src="img/assets/projects/software.png" alt="">
                  </div>
                  <span class="text">Software</span>
                  <div class="arrow">
                    <img src="img/assets/projects/seta.png" alt="">
                  </div>
                </li>
              </ul>
            </div>
          </div>
  
          <div class="carousel">
            <div class="btn back">
              <img src="img/assets/projects/seta-projeto.png" alt="" style="transform: rotate(180deg);">
            </div>
  
            <div class="img">
              <div class="images">
                
              </div>

              <div class="info">
                <span class="project-name">Projeto</span>
  
                <span class="project-desc">O Labirinto JS</span>
              </div>
            </div>
  
            <div class="btn next">
              <img src="img/assets/projects/seta-projeto.png" alt="">
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
              <img src="img/assets/team/foto-adriel.PNG" alt="">
            </div>

            <div class="info">
              <span>Adriel - DBA</span>
            </div>
          </div>

          <div class="user">
            <div class="user-img">
              <img src="img/assets/team/foto-bruno.webp" alt="">
            </div>

            <div class="info">
              <span>Bruno - Back-end</span>
            </div>
          </div>

          <div class="user">
            <div class="user-img">
              <img src="img/assets/team/foto-gustavo.webp" alt="">
            </div>

            <div class="info">
              <span>Gustavo - Front-end</span>
            </div>
          </div>

          <div class="user">
            <div class="user-img">
              <img src="img/assets/team/foto-joao.PNG" alt="">
            </div>

            <div class="info">
              <span>João Pedro - Full-stack</span>
            </div>
          </div>

          <div class="user">
            <div class="user-img">
              <img src="img/assets/team/foto-kaua.webp" alt="">
            </div>

            <div class="info">
              <span>Kauã - Front-end</span>
            </div>
          </div>
        </div>

        <div class="second-row">
          <div class="user">
            <div class="user-img">
              <img src="img/assets/team/foto-leticia.webp" alt="">
            </div>

            <div class="info">
              <span>Letícia - Mobile</span>
            </div>
          </div>

          <div class="user">
            <div class="user-img">
              <img src="img/assets/team/foto-luan.webp" alt="">
            </div>

            <div class="info">
              <span>Luan - Back-end</span>
            </div>
          </div>

          <div class="user">
            <div class="user-img">
              <img src="img/assets/team/foto-marcos.webp" alt="">
            </div>

            <div class="info">
              <span>Marcos - DBA</span>
            </div>
          </div>

          <div class="user">
            <div class="user-img">
              <img src="img/assets/team/foto-maria.webp" alt="">
            </div>

            <div class="info">
              <span>Maria - Mobile</span>
            </div>
          </div>

          <div class="user">
            <div class="user-img">
              <img src="img/assets/team/foto-vitor.PNG" alt="">
            </div>

            <div class="info">
              <span>Vitor - Designer</span>
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
          <img src="img/assets/contact/Illustration.png" alt="">
        </div>
      </div>

      <div class="form">
        <form action="" id="contact-form">
          <div class="nome">
            <span data-important="true">Nome *</span>

            <input type="text" name="" id="">
          </div>

          <div class="email">
            <span data-important="true">Email *</span>

            <input type="text" name="" id="">
          </div>

          <div class="empresa">
            <span data-important="false">Empresa</span>

            <input type="text" name="" id="">
          </div>

          <div class="assunto">
            <span data-important="true">Assunto *</span>

            <div class="select"></div>
          </div>

          <div class="mensagem">
            <span data-important="false">Mensagem</span>

            <textarea name="" id=""></textarea>
          </div>

          <button id="send-btn">
            <div class="icon">
              <img src="img/assets/contact/send-icon.png" alt="">
            </div>

            <span class="text">Enviar</span>
          </button>
        </form>
      </div>
    </section>
  </main>

  <footer>
    <div class="main">
      <div class="identity">
        <span class="logo">Norven</span>

        <span class="desc">Ventos que te guiam adiante.</span>

        <div class="icons">
          <div class="icon">
            <img src="img/assets/footer/linkedin.png" alt="">
          </div>

          <div class="icon">
            <img src="img/assets/footer/instagram.png" alt="">
          </div>

          <div class="icon">
            <img src="img/assets/footer/twitter.png" alt="">
          </div>
        </div>
      </div>

      <div class="content">
        <div class="nav">
          <button class="go-section" onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth' })">
            <div class="text">Sobre</div>
            <div class="img">
              <img src="img/assets/footer/seta-secao.png" alt="">
            </div>
          </button>

          <button class="go-section" onclick="document.getElementById('projects').scrollIntoView({ behavior: 'smooth' })">
            <div class="text">Projetos</div>
            <div class="img">
              <img src="img/assets/footer/seta-secao.png" alt="">
            </div>
          </button>

          <button class="go-section" onclick="document.getElementById('team').scrollIntoView({ behavior: 'smooth' })">
            <div class="text">Time</div>
            <div class="img">
              <img src="img/assets/footer/seta-secao.png" alt="">
            </div>
          </button>

          <button class="go-section" onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })">
            <div class="text">Contato</div>
            <div class="img">
              <img src="img/assets/footer/seta-secao.png" alt="">
            </div>
          </button>

          <button class="go-up" onclick="document.getElementById('home').scrollIntoView({ behavior: 'smooth' })">
            <img src="img/assets/footer/seta.png" alt="">
          </button>
        </div>
      </div>
    </div>

    <div class="end">
      <span class="end-text">© 2025 Norven. Todos os direitos reservados.</span>
    </div>
  </footer>

  <script src="js/home.js"></script>
  <script src="js/scrolltrigger.js"></script>
  <script src="js/projects.js"></script>
</body>
</html>