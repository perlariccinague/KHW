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
