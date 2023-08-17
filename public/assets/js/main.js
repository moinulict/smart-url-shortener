/**
* Template Name: Logis
* Updated: Jul 27 2023 with Bootstrap v5.3.1
* Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  const baseUrl = $('meta[name="baseUrl"]').attr('content');
  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Sticky header on scroll
   */
  // const selectHeader = document.querySelector('#header');
  // const dataPage = selectHeader.getAttribute('data-page');
  // if (selectHeader && dataPage === 'home') {
  //   document.addEventListener('scroll', () => {
  //     window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
  //   });
  // }

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function () {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Mobile nav toggle
   */
  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function (event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navbar a').forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function (event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  /**
   * Initiate pURE cOUNTER
   */
  new PureCounter();

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }

  window.addEventListener('load', () => {
    aos_init();
  });


  function isValidDomain(url) {
    // Regular expression to match a valid domain name
    var regex = /^(https?:\/\/)?([a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/;

    return regex.test(url);
  }


  const urlGenForm = document.querySelector('#urlGenForm');
  urlGenForm.addEventListener('submit', (e) => {
    e.preventDefault();
    $('.errorMsg').hide();
    const longUrl = $('.longUrl').val();
    if (!longUrl.trim()) {
      $('.errorMsg').html('Long URL required').show();
      return false;
    }

    if (!isValidDomain(longUrl.trim())) {
      $('.errorMsg').html('Long URL seems not valid.').show();
      return false;
    }

    $.ajax({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      type: "POST",
      url: baseUrl + '/generateShortenUrl',
      data: "longUrl=" + longUrl,
      success: function (response) {
        console.log(response);
        let html = ``;
        if (response.status) {
          html += `<div for="" class="mb-2">Generated URL</div>`;
          html += `<span class="mb-2 copyMsg none text-success font-weight-bold">Copied</span>`;
          html += `<div class="input-group mb-3">`;
          html += `<input type="text" class="form-control urlGenUrl" placeholder="URLGEN short url" aria-label="Username" aria-describedby="basic-addon1" value="${response.data.short_url}">`;
          html += `<span class="input-group-text bg-primary" id="basic-addon1">`;
          html += `<a href="javascript:;" class="text-white copyBtn">`;
          html += `<i class="fa-solid fa-copy "></i> Copy URL`;
          html += `</a>`;
          html += `</span>  `;
          html += `</div>`;

          html += `<div>`;
          html += `<a href="${response.data.short_url}" target="_blank" class="btn btn-success btn-sm" title="Visit Site"><i class="fa-solid fa-diamond-turn-right"></i> Visit</a>`;
          html += `<button class="btn btn-info btn-sm mx-1" title="Share Generated URL"><i class="fa-solid fa-share-nodes"></i> Share</button>`;
          html += `<button class="btn btn-primary btn-sm" title="Generate QR"><i class="fa-solid fa-qrcode"></i> QR</button>`;
          html += `</div>`;
        } else {
          html += `<div class="alert alert-danger">${response.message}</div>`;
        }

        $(".urlGenResponse").html(html).show();
      }
    });

  });

});

$(document).on("click", ".copyBtn", function () {
  const textToCopy = $(".urlGenUrl").val();
  if (textToCopy) {
    // Create a temporary textarea element
    var textarea = document.createElement("textarea");
    textarea.value = textToCopy;
    document.body.appendChild(textarea);

    // Select the text and copy it to the clipboard
    textarea.select();
    document.execCommand("copy");

    // Remove the temporary textarea
    document.body.removeChild(textarea);

    var messageDiv = $('.copyMsg');
    messageDiv.show();
    setTimeout(function () {
      messageDiv.hide();
    }, 5000);
  }
});