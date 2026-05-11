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

if(document.querySelector('li.submenu > a')) {
  document.querySelectorAll('li.submenu > a').forEach(submenu => {
    submenu.removeAttribute('href')
  })
}
