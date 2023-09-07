var roma__navs = document.querySelectorAll('.roma__nav');
roma__navs.forEach((roma__nav) => {
  var e = document.getElementById('btn');
  e.addEventListener('click', function () {
    if (this.className == 'on') this.classList.remove('on');
    else this.classList.add('on');
    roma__nav.classList.toggle('roma__nav-active');
    document.body.classList.toggle('body__hidden');
  });
});

// lang////////////////////////////////
window.addEventListener('click', function (event) {
  if (event.target.hasAttribute('data-lang-btn')) {
    const data = event.target.getAttribute('data-lang-btn');
    let data_1 = $('[data-ru]');
    let data_2 = $('[data-kg]');

    if (data == 1) {
      data_1.attr('data-lang', 0);
      data_2.attr('data-lang', 1);
    } else if (data == 2) {
      data_1.attr('data-lang', 1);
      data_2.attr('data-lang', 0);
    }
  }
});

let indLi1 = document.querySelector('.indicator_text__li__1');
let indLi2 = document.querySelector('.indicator_text__li__2');
let indLi3 = document.querySelector('.indicator_text__li__3');
let indLi4 = document.querySelector('.indicator_text__li__4');
let indLi5 = document.querySelector('.indicator_text__li__5');
gsap.registerPlugin(ScrollTrigger);

gsap.to('.indicator_text__li__1', {
  scrollTrigger: {
    trigger: '.razbor_1',
    start: 'top 30%',
    end: 'top 27%',
    onEnter: () => indLi1.classList.add('indicator_text__li-active'),
    onEnterBack: () => indLi1.classList.remove('indicator_text__li-active'),
  },
});
gsap.to('.indicator_text__li__2', {
  scrollTrigger: {
    trigger: '.razbor_2',
    start: 'top 35%',
    end: 'top 27%',
    onEnter: () => indLi2.classList.add('indicator_text__li-active'),
    onEnterBack: () => indLi2.classList.remove('indicator_text__li-active'),
  },
});

gsap.to('.indicator_text__li__3', {
  scrollTrigger: {
    trigger: '.razbor_3',
    start: 'top 30%',
    end: 'top 27%',
    onEnter: () => indLi3.classList.add('indicator_text__li-active'),
    onEnterBack: () => indLi3.classList.remove('indicator_text__li-active'),
  },
});

gsap.to('.indicator_text__li__4', {
  scrollTrigger: {
    trigger: '.razbor_4',
    start: 'top 30%',
    end: 'top 27%',
    onEnter: () => indLi4.classList.add('indicator_text__li-active'),
    onEnterBack: () => indLi4.classList.remove('indicator_text__li-active'),
  },
});

gsap.to('.indicator_text__li__5', {
  scrollTrigger: {
    trigger: '.razbor_5',
    start: 'top 30%',
    end: 'top 27%',
    onEnter: () => indLi5.classList.add('indicator_text__li-active'),
    onEnterBack: () => indLi5.classList.remove('indicator_text__li-active'),
  },
});

gsap.to('.indicator_line', {
  scrollTrigger: {
    trigger: '.razbor',
    start: 'top 30%',
    end: '60% -300%',
    scrub: true,
  },
  scaleY: 1,
});

let gsap_header__text = $('.gsap_header__text');
gsap.from(gsap_header__text, {
  duration: 1.5,
  delay: 1.1,
  ease: Back.easeOut.config(0.6),
  x: '-100%',
  stagger: {
    grid: [7, 15],
    from: 'start',
    amount: 0.8,
  },
});

var myCarousel = document.querySelector('#hod_carousel');
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: false,
  ride: false,
});

const reserveBtn = document.querySelector('[data-bron_KV]');
const formContainer = document.querySelector('.form-container');
const closeButton = document.querySelector('.form-close');
const submitBtn = document.querySelector('.submit-btn');
const confirmationBox = document.querySelector('.confirmation-box');

let isRequestSent = false;

reserveBtn.addEventListener('click', function () {
  document.querySelector('.form_wrapper').style.display = 'flex';
});

closeButton.addEventListener('click', function () {
  formContainer.style.display = 'none';
});

submitBtn.addEventListener('click', async function () {
  if (!isRequestSent) {
    isRequestSent = true;

    const name = document.querySelector('.name').value;
    const phone = document.querySelector('.phone').value;

    if (name.trim() !== '' && phone.trim() !== '') {
      // Если оба инпута заполнены, то выполняем код
      const newBooking = {
        Floor: CV[data_1].etaj,
        Room: CV[data_1].room,
        Square: CV[data_1].square + 'm²',
        Name: name,
        Phone: phone,
      };

      const infoForCRM = [];
      infoForCRM.push(newBooking);
      console.log(infoForCRM);

      const response = await fetch(
        'https://b24-m8og14.bitrix24.ru/rest/1/g25u2stl2tixz2kg/crm.deal.add',
        {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            fields: {
              TITLE: 'Заявка на бронирование',
              NAME: name,
              PHONE: [{ VALUE: phone, VALUE_TYPE: 'WORK' }],
              UF_CRM_1693401463: 'A',
              COMMENTS: 'ahahaha',
            },
          }),
        },
      );

      var romajonButton = document.querySelector('.romajon-button');
      var romajonContainer = document.querySelector('.romajon-container');
      var romajonCheckmark = document.querySelector('.romajon-svg');
      var romajonClassName = 'animate';
      var scene_1 = document.querySelector('.scene_1');
      var scene_2 = document.querySelector('.scene_2');

      if (!romajonCheckmark.classList.contains(romajonClassName)) {
        romajonCheckmark.classList.add(romajonClassName);
        scene_1.classList.add('none');
        scene_2.classList.remove('none');

        setTimeout(() => {
          document.querySelector('.form_wrapper').style.display = 'none';
        }, 3000);
      }
    } else {
      alert('Пожалуйста, заполните все поля формы.');
    }
  }
});

closeButton.addEventListener('click', function () {
  formContainer.style.display = 'none';
});
