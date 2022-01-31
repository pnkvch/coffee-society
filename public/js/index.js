const links = document.querySelectorAll('a');
const { pathname } = window.location;

links.forEach(link => {
  if (link.pathname === pathname) {
    link.classList.add('active');
  }
})

const onChange = () => {
  const password = document.querySelector('input[name="password"]');
  const confirm = document.querySelector('input[name="confirm-password"]');
  if (confirm.value === password.value) {
    confirm.setCustomValidity('');
  } else {
    confirm.setCustomValidity('Passwords do not match');
  }
}