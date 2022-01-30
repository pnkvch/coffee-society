const links = document.querySelectorAll('a');
const { pathname } = window.location;

links.forEach(link => {
  if (link.pathname === pathname) {
    link.classList.add('active');
  }
})