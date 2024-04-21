import "./scss/style.scss";
import ScrollHint from "scroll-hint";

$(function () {
  // バーガーメニュー
  // $(".c-burger-icon").off("click");
  // $(".c-burger-icon").on("click", function () {
  //   $("#c-burger-icon").toggleClass("c-burger-open");
  //   $(".l-header__burger").toggleClass("u-dis--show");
  //   $(window).scroll(function () {
  //     $("#c-burger-icon").removeClass("c-burger-open");
  //     $(".l-header__burger").removeClass("u-dis--show");
  //   });
  // });
  //アコーディオン
  // $(".l-faq__content > dt").off("click");
  // $(".l-faq__content > dt").on("click", function () {
  //   $(this).next().slideToggle(400);
  //   $(this).find(".c-close").toggleClass("c-open");
  // });
});

document.addEventListener('DOMContentLoaded', function() {
  // ハンバーガーメニュー
  const burgerIcon = document.getElementById('c-burger-icon');
  const burgerToggle = document.getElementById('js-header__burger');
  const burgerBg = document.getElementById('burger-open--bg');
  const body = document.body;
  const headerBurgerBg = document.querySelector('.l-header');

  function closeBgmenu() {
    body.classList.remove('is-drawerActive')
    burgerIcon.setAttribute('aria-expanded', 'false')
    burgerToggle.style.visibility = 'hidden'
    burgerToggle.setAttribute('aria-hidden', 'true')
    burgerBg.classList.remove("c-burger-open--bg");
  }

  burgerIcon.addEventListener('click', function(){
    body.classList.toggle('is-drawerActive')
    if (this.getAttribute('aria-expanded') == 'false'){
      this.setAttribute('aria-expanded', true);
      burgerToggle.style.visibility = 'visible';
      burgerToggle.setAttribute('aria-hidden', false);
    }else{
      this.setAttribute('aria-expanded', false)
      burgerToggle.style.visibility = 'hidden'
      burgerToggle.setAttribute('aria-hidden', 'true')
    }
    burgerBg.classList.toggle("c-burger-open--bg");
  });

  burgerBg.addEventListener('click', function(){
    closeBgmenu();
  });
  document.addEventListener("scroll", function(){
    closeBgmenu();
  });

  // アコーディオン
  const contentTtl = document.querySelectorAll(".l-faq__content > dt");

  contentTtl.forEach(titleEach => {
    titleEach.addEventListener('click', function(){
      this.nextElementSibling.classList.toggle("--open");
      this.querySelector(".c-close").classList.toggle('c-open');
    });
  });
});


//スクロールヒント
window.onload = function () {
  new ScrollHint(".l-list__scroll", {
    i18n: {
      scrollable: "スクロールできます",
    },
  });
};
