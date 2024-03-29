jQuery(function () {
  var appear = false;
  var pagetop = $("#page_top");
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      //100pxスクロールしたら
      if (appear == false) {
        appear = true;
        pagetop.stop().animate(
          {
            bottom: "0px", //下から50pxの位置に
          },
          300
        ); //0.3秒かけて現れる
      }
    } else {
      if (appear) {
        appear = false;
        pagetop.stop().animate(
          {
            bottom: "-50px", //下から-50pxの位置に
          },
          300
        ); //0.3秒かけて隠れる
      }
    }
  });
  pagetop.click(function () {
    $("body, html").animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
    return false;
  });
});

$(".accordion-table table tbody tr:nth-child(1)").on("click", function () {
  var findElm = $(this).next(".accordion-table table tbody tr:nth-child(2)");
  event.preventDefault(); //ブラウザ動作の無効化
  $(findElm).slideToggle();

  if ($(this).hasClass("close")) {
    $(this).removeClass("close");
    $(this).removeClass("open");
  } else {
    $(this).addClass("close");
  }
});

$(window).on("load", function () {
  $(".accordion-table table tbody").addClass("open");
  $(".open").each(function (index, element) {
    var Title = $(element).children(
      ".accordion-table table tbody tr:nth-child(2)"
    );
    $(Title).addClass("close");
    var Box = $(element).children(
      ".accordion-table table tbody tr:nth-child(2)"
    );
    $(Box).slideUp(500);
  });
});

$(document).ready(function () {
  $(".archive-list__dropdown").change(function () {
    var selectedOption = $(this).find("option:selected");
    var archiveLink = selectedOption.val();
    if (archiveLink) {
      window.location.href = archiveLink;
    }
  });
});

$(function () {
  $(".slider").slick({
    arrows: true,
    autoplay: true,
    adaptiveHeight: true,
    centerMode: true,
    centerPadding: "20%",
    slidesToShow: 2,
    dots: true,
    prevArrow: '<span class="slide-arrow prev-arrow"></span>',
    nextArrow: '<span class="slide-arrow next-arrow"></span>',
    responsive: [
      {
        breakpoint: 960,
        settings: {
          slidesToShow: 1, // ブレイクポイント960px以下での表示数
          centerPadding: "10%",
        },
      },
    ],
  });
});
