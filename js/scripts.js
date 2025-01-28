jQuery(document).ready(function ($) {
  $(".acc .questionContainer").click(function () {
    $(this).next(".content").slideToggle();
  });
});

jQuery(document).ready(function ($) {
  if (window.matchMedia("(max-width: 1199px)").matches) {
    $(".navbar-nav li").click(function () {
      const current_dropdown = $(this).children(".sub-menu");
      $(".sub-menu").not(current_dropdown).slideUp();
      current_dropdown.slideToggle();
    });
  }
});

jQuery(document).ready(function ($) {
  var myCarousel = $(".carousel");
  myCarousel.append("<ol class='carousel-indicators'></ol>");
  var indicators = $(".carousel-indicators");

  myCarousel
    .find(".carousel-inner")
    .children(".carousel-item")
    .each(function (index) {
      index === 0
        ? indicators.append(
            "<li data-target='#carouselExampleIndicators' data-slide-to='" +
              index +
              "' class='active'></li>"
          )
        : indicators.append(
            "<li data-target='#carouselExampleIndicators' data-slide-to='" +
              index +
              "'></li>"
          );
    });
  $(".carousel-inner div:first").addClass("active");
  $(".carousel-item .row:odd").addClass("reverse");

  $(".carousel").carousel();
});

jQuery(document).ready(function ($) {
  $(".help-dashed-container div:even").addClass(
    "help-bubble-image-container-light"
  );
  $(".help-dashed-container div:odd").addClass("help-bubble-image-container");
});

jQuery(document).ready(function ($) {
  $(".step-number-text:even").parent().addClass("steps-numbers-light");
  $(".step-number-text:odd").parent().addClass("steps-numbers");
});

jQuery(document).ready(function ($) {
  $(".card-text").each(function (i) {
    len = $(this).text().length;
    if (len > 164) {
      $(this).text($(this).text().substr(0, 164) + "...");
    }
  });
});
