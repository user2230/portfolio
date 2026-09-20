 const sections = document.querySelectorAll('section[id]');
  const tabs = document.querySelectorAll('nav.tabs a');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting){
        tabs.forEach(t => t.classList.remove('active'));
        const active = document.querySelector(`nav.tabs a[href="#${entry.target.id}"]`);
        if (active) active.classList.add('active');
      }
    });
  }, { rootMargin: '-40% 0px -50% 0px', threshold: 0 });

  sections.forEach(s => observer.observe(s));