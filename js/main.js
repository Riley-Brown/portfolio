// scroll reveal animations
window.sr = ScrollReveal({ mobile: false });

sr.reveal(".html-container", {
  origin: "left",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.1,
  delay: 200
});

sr.reveal(".css-container", {
  origin: "bottom",
  distance: "200px",

  duration: 1200,
  viewFactor: 0.1,
  delay: 400
});

sr.reveal(".javascript-container", {
  origin: "right",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.1,
  delay: 600
});
sr.reveal(".wordpress-container", {
  origin: "left",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.1,
  delay: 800
});
sr.reveal(".bootstrap-container", {
  origin: "bottom",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.1,
  delay: 1000
});
sr.reveal(".jquery-container", {
  origin: "right",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.1,
  delay: 1200
});
sr.reveal(".testimonial-wrapper", {
  origin: "left",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.1,
  delay: 200
});
// sr.reveal(".form-group", {
//   origin: "left",
//   distance: "500px",
//   duration: 1000,
//   delay: 800,
//   viewFactor: 0.1
// });

// sr.reveal("#contact-me-h3", {
//   origin: "left",
//   distance: "500px",
//   duration: 1000,
//   delay: 800,
//   viewFactor: 0.1
// });
// sr.reveal("#submit", {
//   origin: "left",
//   distance: "500px",
//   duration: 1000,
//   delay: 800,
//   viewFactor: 0.1
// });
sr.reveal("#about", {
  origin: "right",
  distance: "500px",
  duration: 1000,
  delay: 1000,
  viewFactor: 0.3
});
sr.reveal(".container-skills", {
  origin: "top",
  distance: "500px",
  duration: 1000,
  viewFactor: 0.3
});
sr.reveal(".landing-content h1", {
  origin: "top",
  distance: "200px",
  duration: 1000,
  viewFactor: 0.3,
  delay: 500
});

sr.reveal(".landing-content p", {
  origin: "bottom",
  distance: "200px",
  duration: 1000,
  viewFactor: 0.3,
  delay: 1500
});
sr.reveal(".landing-content a", {
  origin: "left",
  distance: "2000px",
  duration: 1000,
  viewFactor: 0.3,
  delay: 2000
});

sr.reveal("#contactForm", {
  origin: "left",
  distance: "200px",
  duration: 1000,
  viewFactor: 0.3,
  delay: 500
});

sr.reveal(".lightbox-container span", {
  origin: "left",
  distance: "200px",
  duration: 1000,
  viewFactor: 0.3,
  delay: 200,
  interval: 200
});

// tree house api data

function loadJSON() {
  $.getJSON("https://teamtreehouse.com/rileybrown3.json", function(
    data,
    status
  ) {
    var treehouse = data.badges.slice(-1);
    document.querySelector(".treehouse-pic-1").src = treehouse[0].icon_url;
    document.querySelector(".treehouse-1").innerHTML =
      treehouse[0].courses[0].title;
    document.querySelector(".treehouse-p-1").innerHTML = treehouse[0].name;

    // treehouse 2
    var treehouse2 = data.badges.slice(-5);
    document.querySelector(".treehouse-pic-2").src = treehouse2[0].icon_url;
    document.querySelector(".treehouse-2").innerHTML =
      treehouse2[0].courses[0].title;
    document.querySelector(".treehouse-p-2").innerHTML = treehouse2[0].name;

    // treehouse 3

    var treehouse3 = data.badges.slice(-8);
    document.querySelector(".treehouse-pic-3").src = treehouse3[0].icon_url;
    document.querySelector(".treehouse-3").innerHTML =
      treehouse3[0].courses[0].title;
    document.querySelector(".treehouse-p-3").innerHTML = treehouse3[0].name;

    //treehouse 4

    var treehouse4 = data.badges.slice(-12);
    document.querySelector(".treehouse-pic-4").src = treehouse4[0].icon_url;
    document.querySelector(".treehouse-4").innerHTML =
      treehouse4[0].courses[0].title;
    document.querySelector(".treehouse-p-4").innerHTML = treehouse4[0].name;
  });
}

document.addEventListener("DOMContentLoaded", loadJSON);

// tree house scroll reveal

sr.reveal(".card-1", {
  origin: "left",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.2,
  delay: 300
});
sr.reveal(".card-2", {
  origin: "bottom",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.2,
  delay: 400
});

sr.reveal(".card-3", {
  origin: "right",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.2,
  delay: 600
});

sr.reveal(".card-4", {
  origin: "right",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.2,
  delay: 800
});

sr.reveal(".treehouse-info", {
  origin: "right",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.2,
  delay: 200
});

// my work scroll reveal
sr.reveal(".my-work-wrapper", {
  origin: "left",
  distance: "300px",

  duration: 1200,
  viewFactor: 0.2,
  delay: 200
});

// lazy load my work images
// setTimeout(function() {
//   $(document).ready(function() {
//     $(".lazyload").each(function() {
//       //* set the img src from data-src
//       $(this).attr("src", $(this).attr("data-src"));
//     });
//   });
// }, 2000);

// $(".carousel").carousel({
//   interval: 20000
// });

// script to close mobile menu after click

$(".navbar-collapse a").click(function(e) {
  if (
    $(e.target).is("a") &&
    window.innerWidth < 767 &&
    $(e.target).attr("class") != "dropdown-toggle"
  ) {
    $(".navbar-collapse").collapse("toggle");
  }
});

// custom image modal
// modal one
function modalClickOne() {
  $(".lightbox-container .span-1").on("click", function() {
    $(".image-modal").fadeIn();
    document.querySelector(".image-modal img").src = imgs[4];
    // set description
    document.querySelector(".image-modal h1").innerHTML = "Daniel D Website";
    document.querySelector(".image-modal p").innerHTML =
      "Personal website built for a client. The awesome design was provived by the client, I just put it all together. Built using Bootstrap.";
    // set link href
    document
      .querySelector(".image-modal a")
      .setAttribute("href", "https://riley.gg/upwork-4/");
  });
}
modalClickOne();
// modal 2

function modalClickTwo() {
  $(".lightbox-container .span-2").on("click", function() {
    $(".image-modal").fadeIn();
    document.querySelector(".image-modal img").src = imgs[1];
    // set description
    document.querySelector(".image-modal h1").innerHTML =
      "Insta Clone React App";
    document.querySelector(".image-modal p").innerHTML =
      "A dynamic Instagram clone using React";
    // set link href
    document
      .querySelector(".image-modal a")
      .setAttribute("href", "https://riley.gg/lambda/insta-clone");
  });
}

modalClickTwo();

// modal 3
function modalClickThree() {
  $(".lightbox-container .span-3").on("click", function() {
    $(".image-modal").fadeIn();
    document.querySelector(".image-modal img").src = imgs[2];
    // set description
    document.querySelector(".image-modal h1").innerHTML =
      "Video Mentum Landing Page";
    document.querySelector(".image-modal p").innerHTML =
      "Web site for a video production company. This site was requested to be a 1 day design and build. Made using Bootstrap and jQuery.";
    // set link href
    document
      .querySelector(".image-modal a")
      .setAttribute("href", "https://riley.gg/video-mentum/");
  });
}

modalClickThree();

// modal 4
function modalClickFour() {
  $(".lightbox-container .span-4").on("click", function() {
    $(".image-modal").fadeIn();
    document.querySelector(".image-modal img").src = imgs[3];
    // set description
    document.querySelector(".image-modal h1").innerHTML = "WB Flashback";
    document.querySelector(".image-modal p").innerHTML =
      "Website built to showcase the changes in Brooklyn, New York, over many years. Includes amazing crossfade, and split image before and after effects. Built using CSS, and JavaScript.";
    // set link href
    document
      .querySelector(".image-modal a")
      .setAttribute("href", "https://riley.gg/upwork-3/");
  });
}

modalClickFour();

function modalClickFive() {
  $(".lightbox-container .span-5").on("click", function() {
    // fade modal in
    $(".image-modal").fadeIn();
    // set image src
    document.querySelector(".image-modal img").src = imgs[0];
    // set description
    document.querySelector(".image-modal h1").innerHTML =
      "Bay Shells Landing Page";
    document.querySelector(".image-modal p").innerHTML =
      "Beautiful modern design provided by the client, includes dynamic clickable tabs, and slick carousel. Built using vanilla CSS and jQuery.";
    // set link href
    document
      .querySelector(".image-modal a")
      .setAttribute("href", "https://riley.gg/upwork-7/");
  });
}

modalClickFive();

function modalClickSix() {
  $(".lightbox-container .span-6").on("click", function() {
    $(".image-modal").fadeIn();
    document.querySelector(".image-modal img").src = imgs[5];
    // set description
    document.querySelector(".image-modal h1").innerHTML = "Blargin Homes";
    document.querySelector(".image-modal p").innerHTML =
      "Blargin Homes landing page. Built using PHP, a Bootstrap template, and heavily customized by myself";
    // set link href
    document
      .querySelector(".image-modal a")
      .setAttribute("href", "https://riley.gg/upwork-2/");
  });
}

modalClickSix();

// close modal
function modalClose() {
  $(".image-modal span").on("click", function() {
    $(".image-modal").fadeOut();
  });
}

modalClose();

function modalCloseTwo() {
  $(".image-modal img").on("click", function() {
    $(".image-modal").fadeOut();
  });
}
modalCloseTwo();

var imgs = [
  "img/bayshells-landing.jpg",
  "img/insta-clone.png",
  "img/video-mentum-landing.jpg",
  "img/wb-flashback.jpg",
  "img/daniel-landing-page.jpg",
  "img/blargin-homes-landing.jpg"
];

// play vid on hover
// var figure = $(".video").hover(hoverVideo, hideVideo);

// function hoverVideo(e) {
//   $("video", this)
//     .get(0)
//     .play();
// }
// function hideVideo(e) {
//   $("video", this)
//     .get(0)
//     .pause();
// }
