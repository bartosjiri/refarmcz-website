$(document).ready(function() {

  //Navigation updating
  function updateNavigation() {
    var navigationLinks = $('.nav-menu-list li a').map(function() {
      return $(this).attr('href');
    }).get();
    var navigationItems = navigationLinks.map(function(d) {
      return d.replace('.php', ''); //dodělat i pro jiné hodnoty !!!
    });
    for (var i = 0; i < navigationItems.length; i++) {
      if (window.location.href.indexOf(navigationItems[i]) > -1) {
        var currentPage = navigationItems[i];
        $('.nav-menu-list li a').removeClass('link-nav-page-active');
        $('.nav-menu-list li a[href*=' + currentPage + ']').addClass('link-nav-page-active');
      }
    }
  };


  //Navigation control
  function lockNavigation() {
    var positionFromTop = $(window).scrollTop();
    var positionFromLeft = $(window).scrollLeft();
    $('body').css('overflow', 'hidden');
    $(window).scroll(function(){
      $(this).scrollTop(positionFromTop).scrollLeft(positionFromLeft);
    });
  };

  function unlockNavigation() {
    $('body').css('overflow', 'auto');
    $(window).unbind('scroll');
  };


  // Navigation dynamics
  function openNavigation() {
    $('.nav-button-open').toggleClass('nav-button-active');
    $('.nav-button-close').toggleClass('nav-button-active');
    $('.nav-menu').toggleClass('nav-menu-active');
    $('.nav-menu-logo').addClass('animated fadeIn');
    $('.link-nav-page').addClass('animated fadeInLeft');
    $('.nav-menu-social').addClass('animated fadeIn');
  };

  function closeNavigation() {
    $('.nav-button-open').toggleClass('nav-button-active');
    $('.nav-button-close').toggleClass('nav-button-active');
    $('.nav-menu').toggleClass('nav-menu-active');
    $('.link-nav-page, .nav-menu-logo, .nav-menu-social').removeClass('animated fadeInLeft fadeIn');
  };

  $('.nav-button-open').on('click', function() {
    lockNavigation();
    openNavigation();
  });
  $('.nav-button-close, .link-nav-page').on('click', function() {
    unlockNavigation();
    closeNavigation();
  });


  // Index URL fix
  function fixIndex() {
    if (window.location.href.indexOf('index') > -1) {
      history.replaceState('', '', '/');
    }
  };


  // Cover scroll helper
  function coverHelper() {
    if($('.cover').length){
      $(window).scroll(function() {
        var fromTop = $(window).scrollTop();
        if (fromTop > 100) {
          $('.cover-scroll').css('visibility' , 'hidden');
        }
      })
    }
  };

  $(window).on('load', function(){
    coverHelper();
  });


  // AJAX transitions
  var FadeTransition = Barba.BaseTransition.extend({
    start: function() {
      Promise
        .all([this.newContainerLoading, this.fadeOut()])
        .then(this.fadeIn.bind(this));
    },
    fadeOut: function() {
      return $(this.oldContainer).animate({ opacity: 0 }).promise();
    },
    fadeIn: function() {
      var _this = this;
      var $el = $(this.newContainer);
      $(this.oldContainer).hide();
      document.documentElement.scrollTop = 0;
      document.body.scrollTop = 0;
      updateNavigation();
      coverHelper();
      $('footer').removeClass('aos-animate');
      $el.css({
        visibility : 'visible',
        opacity : 0
      });
      $el.animate({ opacity: 1 }, 800, function() {
        _this.done();
      });
      fixIndex();
    }
  });
  Barba.Prefetch.init();
  Barba.Pjax.getTransition = function() {
    return FadeTransition;
  };
  Barba.Pjax.start();


  // Element animations
  AOS.init({
    once: true,
    offset: 150,
    duration: 600
  });



});
