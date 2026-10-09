<?php
// Edit bagian data ini untuk menyesuaikan profil mahasiswa.
$student = [
  "name" => "Galuh Ayu Cahyaningrum",
  "nickname" => "Galuh",
  "major" => "Sistem Informasi",
  "faculty" => "Fakultas Sains dan Teknologi Terapan",
  "university" => "Universitas Ahmad Dahlan",
  "semester" => "Semester 1",
  "location" => "Yogyakarta, Indonesia",
  "email" => "onlyssayuu@mgmail.com",
  "tagline" => "Curious mind. Creative heart.",
  "bio" => "Aku Galuh Ayu, bisa dipanggil. I'm a tech enthusias!",
  "initials" => "AP"
];
$skills = [
  ["name" => "HTML & CSS", "level" => 88, "label" => "Web design"],
  ["name" => "PHP", "level" => 72, "label" => "Backend"],
  ["name" => "JavaScript", "level" => 66, "label" => "Interaction"],
  ["name" => "UI / UX", "level" => 80, "label" => "Creative"]
];
$projects = [
  ["number" => "01", "type" => "WEB DEVELOPMENT", "title" => "Campus Connect", "desc" => "Konsep platform sederhana untuk membantu mahasiswa menemukan komunitas dan acara kampus.", "tags" => ["PHP", "MySQL", "UI Design"], "color" => "peach"],
  ["number" => "02", "type" => "CREATIVE PROJECT", "title" => "Little Moments", "desc" => "Kumpulan foto dan cerita pendek tentang sudut-sudut kota yang sering terlewat.", "tags" => ["Photography", "Storytelling"], "color" => "lilac"],
  ["number" => "03", "type" => "PRODUCTIVITY", "title" => "Study Buddy", "desc" => "Prototype dashboard untuk merapikan jadwal kuliah, tugas, dan target belajar.", "tags" => ["JavaScript", "Prototype"], "color" => "mint"]
];

$certificates = [
    ["title" => "HTML & CSS", "image" => "assets/certificates/s1.jpg"],
    ["title" => "PHP",        "image" => "assets/certificates/s2.jpg"],
    ["title" => "JavaScript", "image" => "assets/certificates/s3.jpg"],
    ["title" => "UI / UX",    "image" => "assets/certificates/s4.jpg"]
];

$github = [
    "username" => "onlyayuu",
    "url" => "https://github.com/onlyayuu",
    "bio" => "Mahasiswa Sistem Informasi yang suka ngoding, bikin project kecil, dan belajar hal baru lewat eksperimen.",
    "repos" => 14,
    "followers" => 8,
    "following" => 8,
    "stats" => [
        ["label" => "Repositories", "value" => "14"],
        ["label" => "Contributions", "value" => "34"],
        ["label" => "Languages",    "value" => "6"]
    ],
    "reposList" => [
        ["name" => "praktikpython", "lang" => "Python", "desc" => "Latihan dan eksperimen Python."],
        ["name" => "PBL", "lang" => "Python", "desc" => "Project Based Learning."],
        ["name" => "laporin", "lang" => "Blade", "desc" => "Website pengaduan sarana prasarana di sekolah."],
        ["name" => "mini-game-side-scroll", "lang" => "C#", "desc" => "Game side-scroll 2D ala Mario dengan C# murni."],
        ["name" => "museum_app", "lang" => "C++", "desc" => "Aplikasi museum."],
        ["name" => "moodydo", "lang" => "PHP", "desc" => "Project PHP."],
        ["name" => "calculateme", "lang" => "C++", "desc" => "Kalkulator sederhana."]
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Landing page profil mahasiswa interaktif.">
  <title><?= htmlspecialchars($student["name"]) ?> — Student Profile</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
  <script>document.documentElement.classList.add('js');</script>
</head>
<body>
  <div class="page-glow glow-one"></div><div class="page-glow glow-two"></div>
  <header class="site-header">
    <a class="brand" href="#home" aria-label="Kembali ke awal"><span class="brand-mark">a.</span><span>student<span class="brand-light">folio</span></span></a>
    <nav class="nav-links" id="navLinks">

  <a href="#about">About</a>
  <a href="#skills">Skills</a>
  <a href="#github">GitHub</a>
  <a href="#projects">Projects</a>
    </nav>
    <div class="header-actions">
      <button class="icon-button" id="themeToggle" aria-label="Ganti tema" title="Ganti tema">☾</button>
      <a class="button button-small" href="#contact">Say hello <span>↗</span></a>
      <button class="menu-toggle" id="menuToggle" aria-label="Buka menu" aria-expanded="false">☰</button>
    </div>
  </header>

  <main>
    <section class="hero section-wrap" id="home">
      <div class="hero-copy reveal">
        <div class="eyebrow"><span class="status-dot"></span> AVAILABLE FOR COLLABORATION</div>
        <p class="hello">HELLO, WORLD! <span class="wave">✳</span></p>
        <h1>I'm <?= htmlspecialchars($student["nickname"]) ?>.<br><span class="serif-line">I make ideas</span><br>feel <span class="highlight">real.</span></h1>
        <p class="hero-description"><?= htmlspecialchars($student["bio"]) ?></p>
        <div class="hero-actions">
          <a class="button" href="#projects">Explore my work <span>↘</span></a>
          <a class="text-link" href="#about">More about me <span>↓</span></a>
        </div>
        <div class="hero-meta">
          <span><i class="meta-icon">⌁</i> <?= htmlspecialchars($student["location"]) ?></span>
          <span><i class="meta-icon">✳</i> <?= htmlspecialchars($student["semester"]) ?></span>
        </div>
      </div>
      <div class="hero-visual reveal">
        <div class="orbit orbit-one"></div><div class="orbit orbit-two"></div>
        <div class="profile-card">
          <div class="card-top"><span>STUDENT IDENTITY</span><span class="card-star">✳</span></div>
          <div class="portrait">
            <div class="portrait-shape shape-a"></div><div class="portrait-shape shape-b"></div>
            <div class="avatar-monogram"><?= htmlspecialchars($student["initials"]) ?></div>
            <span class="portrait-sticker sticker-one">creative<br>by nature</span>
            <span class="portrait-sticker sticker-two">✦ 2026</span>
          </div>
          <div class="profile-card-bottom">
            <div><h2><?= htmlspecialchars($student["name"]) ?></h2><p><?= htmlspecialchars($student["major"]) ?> student</p></div>
            <span class="round-arrow">↗</span>
          </div>
        </div>
        <div class="floating-note note-top"><span class="note-icon">✎</span><span><b>Always learning</b><small>one thing at a time</small></span></div>
        <div class="floating-note note-bottom"><span class="note-icon note-pink">♡</span><span><b>Made with curiosity</b><small>and a little coffee</small></span></div>
        <span class="decor-star star-a">✳</span><span class="decor-star star-b">✦</span>
      </div>
      <div class="scroll-cue"><span></span> SCROLL TO EXPLORE</div>
    </section>

    <section class="about section-wrap section-pad" id="about">
      <div class="section-heading reveal"><p class="eyebrow">01 / A LITTLE INTRO</p><h2>Not just a student.<br><span class="serif-line">A work in progress.</span></h2></div>
      <div class="about-grid">
        <div class="about-note reveal"><span class="quote-mark">“</span><p>I'm here to learn, experiment, and make things that mean something.</p><span class="note-caption">A NOTE TO MY FUTURE SELF</span></div>
        <div class="about-details reveal">
          <p class="body-copy">Kuliah adalah tempat di mana saya bisa bereksplorasi dan membuka pemikiran saya supaya lebih luas terbuka</p>
          <div class="info-grid">
            <div class="info-item"><span>UNIVERSITY</span><b><?= htmlspecialchars($student["university"]) ?></b></div>
            <div class="info-item"><span>MAJOR</span><b><?= htmlspecialchars($student["major"]) ?></b></div>
            <div class="info-item"><span>FACULTY</span><b><?= htmlspecialchars($student["faculty"]) ?></b></div>
            <div class="info-item"><span>CURRENTLY</span><b><?= htmlspecialchars($student["semester"]) ?></b></div>
          </div>
          <a class="text-link" href="#contact">Let's connect <span>↗</span></a>
        </div>
      </div>
    </section>

    <section class="skills section-wrap section-pad" id="skills">
      <div class="section-heading reveal"><p class="eyebrow">02 / THINGS I'M LEARNING</p><h2>Curiosity, meet <span class="serif-line">capability.</span></h2><p class="section-subtitle">Skill bukan garis finish. Ini snapshot dari hal-hal yang sedang aku pelajari.</p></div>
      <div class="skills-layout">
        <div class="skill-list reveal">
          <?php foreach ($skills as $skill): ?>
          <div class="skill-row">
            <div class="skill-label"><div><h3><?= htmlspecialchars($skill["name"]) ?></h3><span><?= htmlspecialchars($skill["label"]) ?></span></div><b><?= (int)$skill["level"] ?>%</b></div>
            <div class="skill-track"><span style="--level: <?= (int)$skill["level"] ?>%"></span></div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="learning-card reveal"><div class="learning-spark">✳</div><p class="eyebrow">CURRENT FOCUS</p><h3>Learning by<br><span class="serif-line">making things.</span></h3><p>Setiap project adalah kesempatan buat mencoba, salah, memperbaiki, dan tumbuh sedikit lebih jauh.</p><div class="focus-tags"><span>Build</span><span>Reflect</span><span>Repeat ↻</span></div></div>
      </div>
    </section>

    <section class="github section-wrap section-pad" id="github">
  <div class="section-heading reveal">
    <p class="eyebrow">02.5 / WHERE I BUILD</p>
    <h2>Codes live on <span class="serif-line">GitHub.</span></h2>
    <p class="section-subtitle">Beberapa repository yang aku kerjakan — dari latihan kuliah sampai project iseng.</p>
  </div>

  <div class="github-layout">
    <div class="github-card reveal">
      <span class="github-label">GitHub</span>
      <h3>@<?= htmlspecialchars($github["username"]) ?></h3>
      <p><?= htmlspecialchars($github["bio"]) ?></p>
      <div class="github-meta">
        <span><strong><?= htmlspecialchars($github["repos"]) ?></strong> repos</span>
        <span><strong><?= htmlspecialchars($github["followers"]) ?></strong> followers</span>
      </div>
      <a class="button button-light" href="<?= htmlspecialchars($github["url"]) ?>" target="_blank" rel="noopener">
        Kunjungi profil <span>↗</span>
      </a>
    </div>

    <div class="github-stats reveal">
      <?php foreach ($github["stats"] as $stat): ?>
        <div class="stat-card">
          <span class="stat-value"><?= htmlspecialchars($stat["value"]) ?></span>
          <span class="stat-label"><?= htmlspecialchars($stat["label"]) ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="repo-grid reveal">
    <?php foreach ($github["reposList"] as $repo): ?>
      <a class="repo-card" href="<?= htmlspecialchars($github["url"] . "/" . $repo["name"]) ?>" target="_blank" rel="noopener">
        <div class="repo-top">
          <span class="repo-icon">📁</span>
          <span class="repo-lang"><?= htmlspecialchars($repo["lang"]) ?></span>
        </div>
        <h4><?= htmlspecialchars($repo["name"]) ?></h4>
        <p><?= htmlspecialchars($repo["desc"]) ?></p>
        <span class="repo-arrow">↗</span>
      </a>
    <?php endforeach; ?>
  </div>
</section>

    <div class="certificates-trigger">
      <h3>My Certificates ♡</h3>
      <p>A little collection of my learning journey.</p>
      <button type="button" id="openCertificates">Tampilkan Sertifikat ↗</button>
    </div>

    <section class="projects section-wrap section-pad" id="projects">
      <div class="projects-heading reveal"><div class="section-heading"><p class="eyebrow">03 / SELECTED WORK</p><h2>Small ideas,<br><span class="serif-line">real progress.</span></h2></div><p class="section-subtitle">Beberapa ide yang sedang dan ingin aku kembangkan. Pilih kartu untuk melihat detailnya.</p></div>
      <div class="project-grid">
        <?php foreach ($projects as $project): ?>
        <button class="project-card <?= htmlspecialchars($project["color"]) ?> reveal" data-project="<?= htmlspecialchars($project["number"]) ?>" aria-label="Lihat detail <?= htmlspecialchars($project["title"]) ?>">
          <div class="project-art art-<?= htmlspecialchars($project["color"]) ?>"><span class="art-number"><?= htmlspecialchars($project["number"]) ?></span><span class="art-symbol"><?= $project["number"] === "01" ? "⌘" : ($project["number"] === "02" ? "◉" : "↗") ?></span><span class="art-label"><?= htmlspecialchars($project["type"]) ?></span></div>
          <div class="project-info"><div><h3><?= htmlspecialchars($project["title"]) ?></h3><p><?= htmlspecialchars($project["desc"]) ?></p></div><span class="project-arrow">↗</span></div>
          <div class="tag-row"><?php foreach ($project["tags"] as $tag): ?><span><?= htmlspecialchars($tag) ?></span><?php endforeach; ?></div>
        </button>
        <?php endforeach; ?>
      </div>
      <p class="project-hint"><span>✳</span> These are sample projects — edit them with your own work.</p>
    </section>

    <section class="contact section-wrap section-pad" id="contact">
      <div class="contact-panel reveal">
        <div class="contact-decoration">✳</div>
        <p class="eyebrow">05 / YOUR TURN</p>
        <h2>Have an idea?<br><span class="serif-line">Let's make it happen.</span></h2>
        <p class="contact-copy">Terbuka untuk teman belajar, project kecil, atau obrolan kreatif. Jangan sungkan menyapa!</p>

<a class="button button-light" href="mailto:<?= htmlspecialchars($student["email"]) ?>">
  Send me an email <span>↗</span>
</a>

<a class="button button-light" href="<?= htmlspecialchars($github["url"]) ?>" target="_blank" rel="noopener" style="margin-left:10px;">
  GitHub <span>↗</span>
</a>

<div class="contact-bottom">
  <span><?= htmlspecialchars($student["email"]) ?></span>
  <span>MADE WITH ♡ & CURIOSITY</span>
</div>
      </div>
    </section>
  </main>

  <footer class="site-footer"><a class="brand" href="#home"><span class="brand-mark">a.</span><span>student<span class="brand-light">folio</span></span></a><p>One step, one project, one day at a time.</p><a href="#home" class="back-top">BACK TO TOP ↑</a></footer>

  <!-- Modal project -->
  <div class="modal-backdrop" id="projectModal" aria-hidden="true">
    <div class="project-modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
      <button class="modal-close" id="modalClose" aria-label="Tutup detail">×</button>
      <p class="eyebrow" id="modalType">PROJECT DETAILS</p><h2 id="modalTitle">Project title</h2><p id="modalDesc"></p><div class="tag-row" id="modalTags"></div><p class="modal-footnote">Ganti contoh ini dengan project asli kamu di <code>index.php</code>.</p>
    </div>
  </div>

  <!-- Modal sertifikat -->
  <div class="cert-modal" id="certModal" aria-hidden="true">
    <div class="cert-modal-content" role="dialog" aria-modal="true" aria-label="My Certificates">
      <div class="cert-modal-header">
        <div>
          <h2>My Certificates</h2>
          <p>Little achievements, big steps ♡</p>
        </div>
        <button type="button" class="cert-close" id="closeCertificates" aria-label="Tutup galeri">&times;</button>
      </div>
      <div class="cert-grid">
        <?php foreach ($certificates as $cert): ?>
          <button type="button"
                  class="cert-item"
                  data-image="<?= htmlspecialchars($cert['image'], ENT_QUOTES, 'UTF-8') ?>"
                  data-title="<?= htmlspecialchars($cert['title'], ENT_QUOTES, 'UTF-8') ?>">
            <img src="<?= htmlspecialchars($cert['image'], ENT_QUOTES, 'UTF-8') ?>"
                 alt="<?= htmlspecialchars($cert['title'], ENT_QUOTES, 'UTF-8') ?>"
                 loading="lazy">
            <span><?= htmlspecialchars($cert['title'], ENT_QUOTES, 'UTF-8') ?></span>
          </button>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- Lightbox zoom sertifikat -->
  <div class="cert-lightbox" id="certLightbox" aria-hidden="true">
    <button type="button" class="lightbox-close" id="closeLightbox" aria-label="Tutup zoom">&times;</button>
    <button type="button" class="zoom-control" id="zoomOut" aria-label="Perkecil gambar">−</button>
    <button type="button" class="zoom-control" id="zoomIn" aria-label="Perbesar gambar">+</button>
    <div class="cert-zoom-container" id="zoomContainer">
      <img id="zoomImage" src="" alt="Preview sertifikat">
    </div>
  </div>

  <!-- SEMUA JS DI SINI -->
  <script>
    // Data project dari PHP
    const projectData = <?= json_encode($projects, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;

    // ============ UTIL ============
    const $  = (sel, root = document) => root.querySelector(sel);
    const $$ = (sel, root = document) => [...root.querySelectorAll(sel)];

    // ============ REVEAL ============
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    $$('.reveal, .skill-row').forEach(el => revealObserver.observe(el));

    // ============ MOBILE NAV ============
    const menuToggle = $('#menuToggle');
    const navLinks = $('#navLinks');
    menuToggle?.addEventListener('click', () => {
      const open = navLinks.classList.toggle('open');
      menuToggle.setAttribute('aria-expanded', String(open));
      menuToggle.textContent = open ? '×' : '☰';
    });
    $$('#navLinks a').forEach(link => link.addEventListener('click', () => {
      navLinks.classList.remove('open');
      menuToggle?.setAttribute('aria-expanded', 'false');
      if (menuToggle) menuToggle.textContent = '☰';
    }));

    // ============ THEME ============
    const themeToggle = $('#themeToggle');
    if (localStorage.getItem('studentfolio-theme') === 'dark') document.body.classList.add('dark');
    function updateThemeIcon() {
      if (themeToggle) themeToggle.textContent = document.body.classList.contains('dark') ? '☀' : '☾';
    }
    updateThemeIcon();
    themeToggle?.addEventListener('click', () => {
      document.body.classList.toggle('dark');
      localStorage.setItem('studentfolio-theme', document.body.classList.contains('dark') ? 'dark' : 'light');
      updateThemeIcon();
    });

    // ============ PROJECT MODAL ============
    const modal = $('#projectModal');
    const closeModalButton = $('#modalClose');
    function openProject(project) {
      if (!project || !modal) return;
      $('#modalType').textContent = project.type;
      $('#modalTitle').textContent = project.title;
      $('#modalDesc').textContent = project.desc;
      const tags = $('#modalTags');
      tags.replaceChildren();
      project.tags.forEach(tag => {
        const chip = document.createElement('span');
        chip.textContent = tag;
        tags.appendChild(chip);
      });
      modal.classList.add('open');
      modal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      closeModalButton.focus();
    }
    function closeModal() {
      modal?.classList.remove('open');
      modal?.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }
    $$('[data-project]').forEach(card => {
      card.addEventListener('click', () => {
        const project = projectData.find(item => item.number === card.dataset.project);
        openProject(project);
      });
    });
    closeModalButton?.addEventListener('click', closeModal);
    modal?.addEventListener('click', e => { if (e.target === modal) closeModal(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

    // ============ CERTIFICATE GALLERY ============
    const certModal    = document.getElementById('certModal');
    const openCertBtn  = document.getElementById('openCertificates');
    const closeCertBtn = document.getElementById('closeCertificates');

    const lightbox  = document.getElementById('certLightbox');
    const zoomImage = document.getElementById('zoomImage');

    let zoomLevel = 1;

    // Buka galeri
    openCertBtn?.addEventListener('click', () => {
      certModal.classList.add('open');
      certModal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    });

    // Tutup galeri
    function closeCertModal() {
      certModal?.classList.remove('open');
      certModal?.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }
    closeCertBtn?.addEventListener('click', closeCertModal);
    certModal?.addEventListener('click', e => {
      if (e.target === certModal) closeCertModal();
    });

    // Klik item sertifikat → lightbox zoom
    document.querySelectorAll('.cert-item').forEach(item => {
      item.addEventListener('click', () => {
        zoomImage.src = item.dataset.image;
        zoomImage.alt = item.dataset.title;
        zoomLevel = 1;
        zoomImage.style.transform = 'scale(1)';
        lightbox.classList.add('open');
        lightbox.setAttribute('aria-hidden', 'false');
      });
    });

    // Tutup lightbox
    document.getElementById('closeLightbox')?.addEventListener('click', () => {
      lightbox.classList.remove('open');
      lightbox.setAttribute('aria-hidden', 'true');
      zoomImage.src = '';
    });

    // Zoom in / out
    document.getElementById('zoomIn')?.addEventListener('click', () => {
      zoomLevel = Math.min(zoomLevel + 0.25, 3);
      zoomImage.style.transform = `scale(${zoomLevel})`;
    });
    document.getElementById('zoomOut')?.addEventListener('click', () => {
      zoomLevel = Math.max(zoomLevel - 0.25, 0.5);
      zoomImage.style.transform = `scale(${zoomLevel})`;
    });

    // ESC menutup semua
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') {
        closeCertModal();
        if (lightbox?.classList.contains('open')) {
          lightbox.classList.remove('open');
          lightbox.setAttribute('aria-hidden', 'true');
          zoomImage.src = '';
        }
      }
    });
  </script>
</body>
</html>