<?php include 'data.php'?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title><?= $profil['nama'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/957301ad34.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div class="header-content">
        <h1>Raditya Ahmad Pratama</h1>
        <button id="btnToggle" class="btn btn-dark"><i class="bi bi-brightness-high-fill"></i></button>
        <p class="tagline">Informatics Student - UNTIRTA</p>
      </div>
    </header>

    <main>
      <div class="content-wrapper">
      <section id="tentang">
        <h2>About Me</h2>
        <p>NIM: 3337250052</p>
        <p>My Hobby is Workout</p>
      </section>

      <section id="skill">
        <h2>Skill</h2>
        <div class="skill-list">
          <span class="skill-item">Networking</span>
          <span class="skill-item">Python</span>
          <span class="skill-item">C++</span>
          <span class="skill-item">HTML</span>
        </div>
      </section>
      </div>
      <section id="fakta">
        <h2><i class="bi bi-router"></i> Fact of the Day</h2>
        <p id="isi-fakta">Genarating Fact...</p>
        <button id="btnRefresh" class="btn btn-dark" style="font-size: 1.5rem; color: rgb(255, 141, 251);"><i class="bi bi-arrow-clockwise"></i></button>
      </section>

    </main>
  
    <footer>
      <a href="mailto:radityapone@gmail.com"
        ><button class="btn btn-dark" style="font-size: 1.5rem; color: rgb(255, 141, 251);"><i class="bi bi-envelope-at-fill"></i></button>
      </a>
      <a href="https://instagram.com/rddit.ya" target="_blank"
        ><button class="btn btn-dark" style="font-size: 1.5rem; color: rgb(255, 141, 251);"><i class="bi bi-instagram"></i></button>
      </a>
      <a href="https://github.com/Rddit" target="_blank"
        ><button class="btn btn-dark" style="font-size: 1.5rem; color: rgb(255, 141, 251);"><i class="bi bi-github"></i></button>
      </a>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
