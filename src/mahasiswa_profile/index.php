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
  "bio" => "Aku Galuhhhhhhhhhhhhhhhhhhhhh",
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
      <a href="#about">About</a><a href="#skills">Skills</a><a href="#projects">Projects</a>
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
          <p class="body-copy">Buatku, kuliah bukan cuma soal menyelesaikan tugas. Ini juga ruang untuk mencoba hal baru, bertemu orang dengan perspektif berbeda, dan pelan-pelan mengenali hal yang benar-benar ingin aku kembangkan.</p>
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
        <p class="eyebrow">04 / YOUR TURN</p>
        <h2>Have an idea?<br><span class="serif-line">Let's make it happen.</span></h2>
        <p class="contact-copy">Terbuka untuk teman belajar, project kecil, atau obrolan kreatif. Jangan sungkan menyapa!</p>
        <a class="button button-light" href="mailto:<?= htmlspecialchars($student["email"]) ?>">Send me an email <span>↗</span></a>
        <div class="contact-bottom"><span><?= htmlspecialchars($student["email"]) ?></span><span>MADE WITH ♡ & CURIOSITY</span></div>
      </div>
    </section>
  </main>

  <footer class="site-footer"><a class="brand" href="#home"><span class="brand-mark">a.</span><span>student<span class="brand-light">folio</span></span></a><p>One step, one project, one day at a time.</p><a href="#home" class="back-top">BACK TO TOP ↑</a></footer>

  <div class="modal-backdrop" id="projectModal" aria-hidden="true">
    <div class="project-modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
      <button class="modal-close" id="modalClose" aria-label="Tutup detail">×</button>
      <p class="eyebrow" id="modalType">PROJECT DETAILS</p><h2 id="modalTitle">Project title</h2><p id="modalDesc"></p><div class="tag-row" id="modalTags"></div><p class="modal-footnote">Ganti contoh ini dengan project asli kamu di <code>index.php</code>.</p>
    </div>
  </div>
  <script>
    const projectData = <?= json_encode($projects, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
  </script>
  <script src="assets/script.js"></script>
</body>
</html>
