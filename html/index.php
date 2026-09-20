<?php
require __DIR__ . '/includes/header.php';
?>

  <section class="hero" id="home">
    <span class="folder-label mono">dossier — portfolio 2026</span>
    <div class="hero-grid">
      <div>
        <h1 id="name-text"></h1>
        <div class="role" id="role-text"></div>
        <p class="lede">Ik bouw snelle, doordachte webapplicaties van eerste schets tot werkende code. Deze pagina is mijn portfolio in het kort: wie ik ben, wat ik kan en wat ik gemaakt heb.</p>
      </div>
      <div class="stamp">
        <div id="stamp-text"></div>
      </div>
    </div>
  </section>

  <div class="curved-loop-band" aria-label="Portfolio focus">
    <div id="curved-loop"></div>
  </div>

  <section id="about" data-fade-content>
    <span class="eyebrow">01</span>
    <h2 class="head">Over mij</h2>
    <div class="about-body">
      <p>Ik ben een Software Development-student. 3e-jaars Software Development-student met een voorkeur voor projecten waarbij ik snel iets werkends kan neerzetten en daarna pas verfijn. Ik leer het snelst door dingen kapot te maken en opnieuw op te bouwen.</p>
      <ul class="fact-list">
        <li><span>locatie</span><span>Amsterdam, NL</span></li>
        <li><span>opleiding</span><span>Software Development</span></li>
        <li><span>beschikbaar</span><span>stage / bijbaan</span></li>
        <li><span>focus</span><span>frontend & backend</span></li>
      </ul>
    </div>
  </section>

  <section id="skills" data-fade-content>
    <span class="eyebrow">02</span>
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
    <span class="eyebrow">03</span>
    <h2 class="head">Projecten</h2>

    <div class="project">
      <span class="tab mono">schoolproject</span>
      <h3>Weer-app met live API</h3>
      <p>Een webapp die actuele weersgegevens ophaalt via een externe API en toont per locatie, met caching zodat de app ook offline bruikbaar blijft.</p>
      <div class="tags"><span>JavaScript</span><span>API</span><span>CSS</span></div>
      <a href="#" class="link mono">bekijk op github →</a>
    </div>

    <div class="project">
      <span class="tab mono">side project</span>
      <h3>Takenlijst met React</h3>
      <p>Een lichte to-do applicatie met lokale opslag, drag-and-drop volgorde en een minimalistische interface, gebouwd om React hooks onder de knie te krijgen.</p>
      <div class="tags"><span>React</span><span>JavaScript</span></div>
      <a href="#" class="link mono">bekijk op github →</a>
    </div>

    <div class="project">
      <span class="tab mono">stage-opdracht</span>
      <h3>Dashboard voor klantdata</h3>
      <p>Een intern dashboard waarmee klantgegevens overzichtelijk worden weergegeven, inclusief filters, zoekfunctie en een koppeling met een SQL-database.</p>
      <div class="tags"><span>Python</span><span>SQL</span><span>Flask</span></div>
      <a href="#" class="link mono">bekijk op github →</a>
    </div>
  </section>

  <section id="cv" data-fade-content>
    <span class="eyebrow">04</span>
    <h2 class="head">CV</h2>
    <div class="envelope">
      <p>Wil je mijn volledige achtergrond, opleiding en werkervaring zien? Download mijn cv als pdf.</p>
      <a href="assets/documents/cv-furkan-ceylan.pdf" class="btn" download>Download cv</a>
    </div>
  </section>

  <section id="contact" data-fade-content>
    <span class="eyebrow">05</span>
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