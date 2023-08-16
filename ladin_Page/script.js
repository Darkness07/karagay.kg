function imgslider(anything) {
  document.querySelector('.phone').src = anything;
}

function bgcolor(color) {
  const sec = document.querySelector('.sec');
  sec.style.background = color;
}

function togogo() {
  const menu = document.querySelector('.menu');
  const navigation = document.querySelector('.navigation');
  menu.classList.toggle('active');
  navigation.classList.toggle('active');
}

