if(document.querySelector('.header-bar')) {
  const navHeader = document.querySelector('.header-bar')
  window.addEventListener('scroll', () => {
    if(window.scrollY > 100) {
      navHeader.classList.add('fixed')
    } else if(window.scrollY < 1) {
      navHeader.classList.remove('fixed')
    }
  })
}

document.querySelectorAll('li.submenu > a').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();

    const li = this.closest('li.submenu');

    li.classList.toggle('is-open');
  });
});
