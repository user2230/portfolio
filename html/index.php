<?php
require __DIR__ . '/includes/header.php';
?>

  <section class="hero" id="home">
    <span class="folder-label mono">portfolio — 2026</span>
    <div class="hero-grid">
      <div>
        <h1 id="name-text"></h1>
        <div class="role" id="role-text"></div>
        <p class="lede">Ik bouw snelle, doordachte webapplicaties van eerste schets tot werkende code. Dit portfolio geeft een beknopt beeld van wie ik ben, wat ik kan en wat ik heb gemaakt.</p>
      </div>
      <div class="hero-side">
        <figure class="hero-profile">
          <img src="assets/images/furkan.jpeg" alt="Profielfoto van Furkan Ceylan">
          <figcaption class="mono">software developer · Amsterdam</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <div class="curved-loop-band" aria-label="Portfolio focus">
    <div id="curved-loop"></div>
  </div>

  <section id="about" data-fade-content>
    <h2 class="head">Over mij</h2>
    <div class="about-body">
      <div class="about-copy">
        <p>Ik ben een derdejaarsstudent Software Development die graag aan projecten werkt waarin ik snel iets werkends kan bouwen en het daarna kan verfijnen.</p>
        <p>Ik leer het beste door dingen uit elkaar te halen en opnieuw op te bouwen. Mijn focus ligt op duidelijke interfaces, praktische code en digitale producten die prettig werken.</p>
      </div>
      <ul class="fact-list">
        <li><span>locatie</span><span>Amsterdam, NL</span></li>
        <li><span>opleiding</span><span>Software Development</span></li>
        <li><span>beschikbaar voor</span><span>stage / parttime</span></li>
        <li><span>focus</span><span>frontend & backend</span></li>
      </ul>
    </div>
  </section>

  <section id="skills" data-fade-content>
    <h2 class="head">Skills</h2>
    <div class="card-row">
      <div class="index-card"><div class="name">HTML & CSS</div><div class="bar"><i style="width:90%"></i></div></div>
      <div class="index-card"><div class="name">Git & GitHub</div><div class="bar"><i style="width:90%"></i></div></div>
      <div class="index-card"><div class="name">Docker</div><div class="bar"><i style="width:75%"></i></div></div>
      <div class="index-card"><div class="name">SQL</div><div class="bar"><i style="width:80%"></i></div></div>
      <div class="index-card"><div class="name">Figma</div><div class="bar"><i style="width:75%"></i></div></div>
      <div class="index-card"><div class="name">React</div><div class="bar"><i style="width:65%"></i></div></div>
      <div class="index-card"><div class="name">JavaScript</div><div class="bar"><i style="width:60%"></i></div></div>
    </div>
  </section>

  <section id="projects" data-fade-content>
    <h2 class="head">Projecten</h2>

    <div class="project">
      <span class="tab mono">zijproject</span>
      <h3>Responsive kalender</h3>
      <p>Een duidelijke kalender waarmee je tussen maanden kunt navigeren. De huidige dag wordt automatisch gemarkeerd en de interface werkt op desktop en mobiel.</p>
      <div class="tags"><span>HTML</span><span>CSS</span><span>JavaScript</span></div>
      <div class="project-links">
        <a href="https://38906.hosts2.ma-cloud.nl/kalender/" class="link mono" target="_blank" rel="noopener noreferrer">bekijk website →</a>
        <a href="https://github.com/user2230/kalender" class="link link-code mono" target="_blank" rel="noopener noreferrer">bekijk code ↗</a>
      </div>
    </div>

    <div class="project">
      <span class="tab mono">webproject</span>
      <h3>Webshop</h3>
      <p>Een gebruiksvriendelijke webshop met een duidelijke productpresentatie en een praktische flow voor bezoekers.</p>
      <div class="tags"><span>HTML</span><span>CSS</span><span>JavaScript</span></div>
      <div class="project-links">
        <a href="https://38906.hosts2.ma-cloud.nl/webshop/" class="link mono" target="_blank" rel="noopener noreferrer">bekijk website →</a>
        <a href="https://github.com/user2230/webshop" class="link link-code mono" target="_blank" rel="noopener noreferrer">bekijk code ↗</a>
      </div>
    </div>

    <div class="project">
      <span class="tab mono">zijproject</span>
      <h3>Stopwatch</h3>
      <p>Een eenvoudige stopwatch waarmee je de tijd kunt starten, pauzeren en resetten.</p>
      <div class="tags"><span>HTML</span><span>CSS</span><span>JavaScript</span></div>
      <div class="project-links">
        <a href="https://38906.hosts2.ma-cloud.nl/stopwatch/" class="link mono" target="_blank" rel="noopener noreferrer">bekijk website →</a>
        <a href="https://github.com/user2230/stopwatch" class="link link-code mono" target="_blank" rel="noopener noreferrer">bekijk code ↗</a>
      </div>

    </div>
  </section>

  <section id="cv" data-fade-content>
    <h2 class="head">CV</h2>
    <div class="envelope">
      <p>Bekijk mijn opleiding, ervaring en vaardigheden in mijn CV.</p>
      <a href="FurkanCV2.pdf" class="btn mono" target="_blank" rel="noopener noreferrer">bekijk cv</a>
    </div>
  </section>

  <section id="contact" data-fade-content>
    <h2 class="head">Contact</h2>
    <div class="contact-grid">
      <a href="mailto:Furkanefeceylan2008@gmail.com" class="contact-item">
        <span class="label mono">e-mail</span>
        <span class="value">Furkanefeceylan2008@gmail.com</span>
      </a>
      <a href="https://linkedin.com/in/jouwnaam" class="contact-item">
        <span class="label mono">linkedin</span>
        <span class="value">Furkan Ceylan</span>
      </a>
      <a href="https://github.com/user2230" class="contact-item">
        <span class="label mono">github</span>
        <span class="value">user2230</span>
      </a>
      <a href="tel:+31642487105" class="contact-item">
        <span class="label mono">telefoon</span>
        <span class="value">06 42487105</span>
      </a>
    </div>
  </section>

<?php
require __DIR__ . '/includes/footer.php';
?>