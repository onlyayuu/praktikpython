const $ = (selector, root = document) => root.querySelector(selector);
const $$ = (selector, root = document) => [...root.querySelectorAll(selector)];

// Reveal elements as they enter the viewport.
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });
$$('.reveal, .skill-row').forEach(el => revealObserver.observe(el));

// Mobile navigation.
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

// Theme toggle. Saves preference for the next visit.
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

// Project cards open an accessible details modal.
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
modal?.addEventListener('click', event => { if (event.target === modal) closeModal(); });
document.addEventListener('keydown', event => { if (event.key === 'Escape') closeModal(); });
