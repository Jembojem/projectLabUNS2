// Video Changer
// function videoChanger() {
//   $("#pricing-video").attr("src", "/img/landing/lab2.mp4");
// }

// // Button
// $("#btn-land-1").hover(
//   function () {
//     $("#pricing-video").attr("src", "/img/landing/lab2.mp4");
//   },
//   function () {
//     $("#pricing-video").attr("src", "/img/landing/lab1.mp4");
//   }
  // function () {
  //   $("#pricing .row .col-12").addClass("active");
  //   $("#pricing .container-fluid").addClass("active");
  // },
  // function () {
  //   $("#pricing .row .col-12").removeClass("active");
  //   $("#pricing .container-fluid").removeClass("active");
  // }
// );

// Scroll Function
// Navbar
$(window).scroll(function () {
  var position = $(window).scrollTop();
  if (position > 450) {
    $("nav .container-fluid .nav-link").addClass("text-black");
    $("nav .container-fluid .navbar-brand").addClass("text-black");
    $("nav .container-fluid").addClass("anim-navbar-open");
    $("nav .container-fluid").removeClass("anim-navbar-close");
  } else if (position > 100) {
    $("nav .container-fluid").addClass("anim-navbar-close");
  } else {
    $("nav .container-fluid .nav-link").removeClass("text-black");
    $("nav .container-fluid .navbar-brand").removeClass("text-black");
    $("nav .container-fluid").removeClass("anim-navbar-open");
    $("nav .container-fluid").removeClass("anim-navbar-close");
  }
  console.log(position);
});

// Glider JS
new Glider(document.querySelector(".glider"), {
  slidesToShow: 5,
  slidesToScroll: 5,
  draggable: true,
  dots: ".dots",
  arrows: {
    prev: ".glider-prev",
    next: ".glider-next",
  },
});
