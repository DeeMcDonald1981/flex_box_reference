const createModal = () => {
  let expand = document.querySelectorAll('.expand');
  let modal = document.querySelectorAll('.modal');
  let modalClose = document.querySelectorAll('.modalContent small');
  let layover = document.querySelectorAll('.layover');

  for (let i = 0; i < expand.length; i++) {
    expand[i].addEventListener('click', () => {
      modal[i].classList.add('modalDisplay');
      console.log('clicked');
    });
    expand[i].addEventListener('mouseover', () => {
      layover[i].innerHTML =
        `
      <p>click to expand</p>
      `;
    });
  }

  for (let i = 0; i < expand.length; i++) {
    modalClose[i].addEventListener('click', () => {
      modal[i].classList.remove('modalDisplay')
    });
  }
}
createModal();

const createStickyNav = () => {
  let navigation = document.querySelector('.navigation');
  let stickyNav = 'stickyNav';
  window.addEventListener('scroll', () => {
    if (window.scrollY > 140) {
      navigation.classList.add(stickyNav);
    } else {

      navigation.classList.remove(stickyNav);
    }
  })
}
createStickyNav();

const createMobileNav = () => {
  let navMenu = document.querySelector('.navmenu');
  let navRight = document.querySelector('.right');
  let navClose = document.querySelector('.mobile');
  navMenu.addEventListener('click', () => {
    navRight.classList.add('navSlide');
  })
  navClose.addEventListener('click', () => {
    navRight.classList.remove('navSlide');
  })
}
createMobileNav();