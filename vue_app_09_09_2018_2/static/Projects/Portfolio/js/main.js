var scroll = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scroll, {
  throttle: 500,
  scrollOffset: 150
});

const sideNav = document.querySelector('.sidenav');
M.Sidenav.init(sideNav, {
  draggable: true
});

const slider = document.querySelector('.slider');
M.Slider.init(slider, {
  indicators: false,
  height: 600,
  transition: 500,
  interval: 7000
});

const modalSuccess = document.querySelector('#modalSuccess');
M.Modal.init(modalSuccess, {});
var instanceSuccess = M.Modal.getInstance(modalSuccess);

const modalFill = document.querySelector('#modalFill');
M.Modal.init(modalFill, {});
var instanceFill = M.Modal.getInstance(modalFill);

AOS.init({
  easing: 'ease-out-back',
	duration: 1000
});
