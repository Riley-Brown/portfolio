// scroll reveal animations
window.sr = ScrollReveal({
  mobile: false
});

sr.reveal('.sr-left', {
  origin: 'left',
  distance: '300px',
  duration: 1200,
  viewFactor: 0.1,
  delay: 200
});
sr.reveal('.sr-right', {
  origin: 'right',
  distance: '300px',
  duration: 1200,
  viewFactor: 0.1,
  delay: 600
});
sr.reveal('.sr-bottom', {
  origin: 'bottom',
  distance: '200px',
  duration: 1200,
  viewFactor: 0.1,
  delay: 400
});
sr.reveal('.sr-top', {
  origin: 'top',
  distance: '200px',
  duration: 1000,
  viewFactor: 0.3
});

sr.reveal('.sr-interval', {
  origin: 'left',
  distance: '200px',
  duration: 1000,
  viewFactor: 0.3,
  delay: 200,
  interval: 200
});

sr.reveal('.sr-fade', {
  duration: 2000
});

// tree house api data

function loadJSON() {
  $.getJSON('https://teamtreehouse.com/rileybrown3.json', function(
    data,
    status
  ) {
    var treehouse = data.badges.slice(-1);
    document.querySelector('.treehouse-pic-1').src = treehouse[0].icon_url;
    document.querySelector('.treehouse-1').innerHTML =
      treehouse[0].courses[0].title;
    document.querySelector('.treehouse-p-1').innerHTML = treehouse[0].name;

    // treehouse 2
    var treehouse2 = data.badges.slice(-5);
    document.querySelector('.treehouse-pic-2').src = treehouse2[0].icon_url;
    document.querySelector('.treehouse-2').innerHTML =
      treehouse2[0].courses[0].title;
    document.querySelector('.treehouse-p-2').innerHTML = treehouse2[0].name;

    // treehouse 3

    var treehouse3 = data.badges.slice(-8);
    document.querySelector('.treehouse-pic-3').src = treehouse3[0].icon_url;
    document.querySelector('.treehouse-3').innerHTML =
      treehouse3[0].courses[0].title;
    document.querySelector('.treehouse-p-3').innerHTML = treehouse3[0].name;

    //treehouse 4

    var treehouse4 = data.badges.slice(-12);
    document.querySelector('.treehouse-pic-4').src = treehouse4[0].icon_url;
    document.querySelector('.treehouse-4').innerHTML =
      treehouse4[0].courses[0].title;
    document.querySelector('.treehouse-p-4').innerHTML = treehouse4[0].name;
  });
}

document.addEventListener('DOMContentLoaded', loadJSON);

// script to close mobile menu after click
$('.navbar-collapse a').click(function(e) {
  if (
    $(e.target).is('a') &&
    window.innerWidth < 767 &&
    $(e.target).attr('class') != 'dropdown-toggle'
  ) {
    $('.navbar-collapse').collapse('toggle');
  }
});

// pause carousel on initial load
window.addEventListener('load', function() {
  $('.carousel').carousel('pause');
});

const testimonial = document.querySelector('.testimonial-wrapper');

// pauses carousel when more than 200px out of viewport
window.addEventListener('scroll', () => {
  if (
    testimonial.getBoundingClientRect().top >= 200 ||
    testimonial.getBoundingClientRect().top <= -200
  ) {
    $('#testimonial').carousel('pause');
  } else {
    $('#testimonial').carousel({
      pause: false
    });
  }
});

// custom image modal
const lightboxImages = document.querySelectorAll(
  '.lightbox-container span img'
);
const modalElement = element =>
  document.querySelector(`.image-modal ${element}`);

$('body').on('click', () => {
  $('.image-modal').fadeOut();
  $('body').css('overflow-y', 'auto');
});

lightboxImages.forEach(img => {
  const data = img.dataset;
  img.addEventListener('click', e => {
    $('body').css('overflow', 'hidden');
    e.stopPropagation();
    $('.image-modal').fadeIn();
    modalElement('h1').innerHTML = data.title;
    modalElement('p').innerHTML = data.description;
    modalElement('a').href = data.url;
    modalElement('.code-link').href = data.repo;
    modalElement('img').src = img.src;
    modalElement('img').addEventListener('click', () =>
      $('.image-modal').fadeOut()
    );
  });
});

// github api repos
const reposDiv = document.querySelector('.github-repos');
let repos;

$.get('https://supersystem-mailchimp-api.herokuapp.com/github', function(data) {
  // console.log(JSON.parse(data))
  data = JSON.parse(data);
  repos = `
 ${data
   .map(
     repo => `

  <div class="col-sm-6">
    <a href=${repo.html_url} class="card" target="_blank">
    <h2> ${repo.name} </h2>
    ${
      repo.description
        ? `<p>${repo.description}</p>`
        : `<p>No description provided for this repo.</p>`
    }
            <span class="badge badge-info"> Stars: ${
              repo.stargazers_count
            } </span>
            <span class="badge badge-secondary"> Watchers: ${
              repo.watchers_count
            } </span>
            <span class="badge badge-success"> Forks: ${
              repo.forks_count
            } </span>
    </a>
  </div>

 `
   )
   .join('')}

  `;

  reposDiv.innerHTML = repos;
});

let lastHeight;

window.addEventListener('load', function() {
  let landingImg = document.querySelector('header.fullscreen-landing');
  landingImg.style.height = window.innerHeight + 'px';
  lastHeight = window.innerHeight;
  sr.reveal('.landing-content', {
    duration: 2000
  });
});

window.addEventListener('resize', function() {
  if (
    window.innerWidth > window.innerHeight ||
    Math.abs(lastHeight - window.innerHeight) > 100
  ) {
    let landingImg = document.querySelector('header.fullscreen-landing');
    landingImg.style.height = window.innerHeight + 'px';
    lastHeight = window.innerHeight;
  }
});

if (window.innerWidth < 500 || window.innerHeight < 820) {
  let prevScrollPos = window.pageYOffset;
  window.addEventListener('scroll', function() {
    let currentScrollPos = window.pageYOffset;
    console.log(currentScrollPos, prevScrollPos);
    if (prevScrollPos > currentScrollPos) {
      $('nav').fadeIn();
    } else {
      $('nav').fadeOut();
    }
    prevScrollPos = currentScrollPos;
  });
}

// landing page carousel

if (window.innerWidth > 650) {
  const landingCarousel = () => {
    const carouselItems = document.querySelector('.carousel-items');
    // move current image to back of arr after animation
    const fadeComplete = () => carouselItems.appendChild(arr[0]);
    const arr = carouselItems.getElementsByTagName('img');
    for (let i = 0; i < arr.length; i++) {
      console.log(arr[i]);
      arr[i].addEventListener('animationend', fadeComplete, false);
    }
  };

  window.addEventListener('DOMContentLoaded', landingCarousel);

  // pause animation out of view port
  let first = document
    .querySelector('.carousel-items')
    .getElementsByTagName('img')[0];

  document.getElementById('see-more').addEventListener('click', () => {
    first.style.animationName = 'none';
  });

  window.addEventListener('scroll', () => {
    const top = first.getBoundingClientRect().top;
    if (top >= 0 && top <= window.innerHeight) {
      first.style.animationName = 'fade';
    } else {
      first.style.animationName = 'none';
    }
  });
}
