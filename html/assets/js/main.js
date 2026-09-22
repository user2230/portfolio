const sections = document.querySelectorAll('section[id]');
const tabs = document.querySelectorAll('nav.tabs a');

if ('scrollRestoration' in history) {
  history.scrollRestoration = 'manual';
}

window.scrollTo(0, 0);

const updateActiveTab = () => {
  let currentSection = sections[0];
  const activationLine = window.innerHeight * .7;
  const isAtBottom = window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 2;

  if (window.scrollY <= 20) {
    currentSection = sections[0];
  } else if (isAtBottom) {
    currentSection = sections[sections.length - 1];
  } else {
    sections.forEach(section => {
      if (section.getBoundingClientRect().top <= activationLine) {
        currentSection = section;
      }
    });
  }

  const navSection = ['skills', 'projects'].includes(currentSection.id)
    ? 'projects'
    : currentSection.id;

  tabs.forEach(tab => tab.classList.remove('active'));
  const active = document.querySelector(`nav.tabs a[data-nav-section="${navSection}"]`);
  if (active) active.classList.add('active');
};

window.addEventListener('scroll', updateActiveTab, { passive: true });
window.addEventListener('resize', updateActiveTab);
updateActiveTab();

tabs.forEach(tab => {
  tab.addEventListener('click', event => {
    const target = document.querySelector(tab.getAttribute('href'));

    if (!target) return;

    event.preventDefault();
    const headerHeight = document.querySelector('.site-header')?.offsetHeight || 0;
    const targetTop = target.getBoundingClientRect().top + window.scrollY - headerHeight - 16;

    window.history.replaceState(null, '', tab.getAttribute('href'));
    window.scrollTo({ top: Math.max(0, targetTop), behavior: 'smooth' });
    tabs.forEach(item => item.classList.remove('active'));
    tab.classList.add('active');
  });
});

