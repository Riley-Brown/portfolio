$("#see-more").on("click", function() {
  const info = $("#main-content").position().top - 20;
  $("html, body").animate(
    {
      scrollTop: info
    },
    600
  );
  return false;
});

$("#contact-me-nav").on("click", function() {
  const contact = $("#contact-me").position().top - 20;
  $("html, body").animate(
    {
      scrollTop: contact
    },
    600
  );
  return false;
});

$("#about-me").on("click", function() {
  const about = $("#contact-me").position().top;
  $("html, body").animate(
    {
      scrollTop: about
    },
    600
  );
  return false;
});

$(".navbar-brand").on("click", function() {
  const brand = $(".navbar-top-info").position().top;
  $("html, body").animate(
    {
      scrollTop: brand
    },
    600
  );
  return false;
});
$(".my-work-nav").on("click", function() {
  const myWork = $("#myWork").position().top - 80;
  $("html, body").animate(
    {
      scrollTop: myWork
    },
    800
  );
  return false;
});
