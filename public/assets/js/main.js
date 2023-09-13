const baseUrl = $('meta[name="baseUrl"]').attr("content");

document.addEventListener("DOMContentLoaded", () => {
  "use strict";
  /**
   * Preloader
   */
  const preloader = document.querySelector("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
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
  const scrollTop = document.querySelector(".scroll-top");
  if (scrollTop) {
    const togglescrollTop = function () {
      window.scrollY > 100
        ? scrollTop.classList.add("active")
        : scrollTop.classList.remove("active");
    };
    window.addEventListener("load", togglescrollTop);
    document.addEventListener("scroll", togglescrollTop);
    scrollTop.addEventListener(
      "click",
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      })
    );
  }

  /**
   * Mobile nav toggle
   */
  const mobileNavShow = document.querySelector(".mobile-nav-show");
  const mobileNavHide = document.querySelector(".mobile-nav-hide");

  document.querySelectorAll(".mobile-nav-toggle").forEach((el) => {
    el.addEventListener("click", function (event) {
      event.preventDefault();
      mobileNavToogle();
    });
  });

  function mobileNavToogle() {
    document.querySelector("body").classList.toggle("mobile-nav-active");
    mobileNavShow.classList.toggle("d-none");
    mobileNavHide.classList.toggle("d-none");
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll("#navbar a").forEach((navbarlink) => {
    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener("click", () => {
      if (document.querySelector(".mobile-nav-active")) {
        mobileNavToogle();
      }
    });
  });

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll(".navbar .dropdown > a");

  navDropdowns.forEach((el) => {
    el.addEventListener("click", function (event) {
      if (document.querySelector(".mobile-nav-active")) {
        event.preventDefault();
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("dropdown-active");

        let dropDownIndicator = this.querySelector(
          ".dropdown-indicator"
        );
        dropDownIndicator.classList.toggle("bi-chevron-up");
        dropDownIndicator.classList.toggle("bi-chevron-down");
      }
    });
  });

  /**
   * Initiate pURE cOUNTER
   */
  // new PureCounter();

  /**
   * Initiate glightbox
   */
  // const glightbox = GLightbox({
  //   selector: '.glightbox'
  // });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  // new Swiper('.slides-1', {
  //   speed: 600,
  //   loop: true,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: false
  //   },
  //   slidesPerView: 'auto',
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   },
  //   navigation: {
  //     nextEl: '.swiper-button-next',
  //     prevEl: '.swiper-button-prev',
  //   }
  // });

  /**
   * Animation on scroll function and init
   */
  // function aos_init() {
  //   AOS.init({
  //     duration: 1000,
  //     easing: 'ease-in-out',
  //     once: true,
  //     mirror: false
  //   });
  // }

  // window.addEventListener('load', () => {
  //   aos_init();
  // });

  function isValidDomain(url) {
    var regex =
      /^(https?:\/\/)?(www\.)?([a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]+\.[a-zA-Z]{2,}\/?([^\s]*)$/;

    return regex.test(url);
  }

  const urlGenBtn = document.querySelector(".urlGenBtn");
  urlGenBtn.addEventListener("click", (e) => {
    var isReadonly = $(".longUrl").prop("readonly");
    if (isReadonly) {
      e.preventDefault();
      $('.longUrl').removeAttr("readonly").val("");
      $(".urlGenResponse").hide();
      $("#urlGenForm .urlGenBtn").prop("type", "submit");
    }
  });

  const urlGenForm = document.querySelector("#urlGenForm");
  urlGenForm.addEventListener("submit", (e) => {
    e.preventDefault();

    var isInputReadonly = $(".longUrl").prop("readonly");
    if (isInputReadonly) {
      return false;
    }

    $(".errorMsg").hide();
    const longUrl = $(".longUrl").val();
    if (!longUrl.trim()) {
      $(".errorMsg").html("Long URL required").show();
      return false;
    }

    if (!isValidDomain(longUrl.trim())) {
      $(".errorMsg").html("Long URL seems not valid.").show();
      return false;
    }

    $("#urlGenForm .urlGenBtn .btn-text").hide();
    $("#urlGenForm .urlGenBtn .loader")
      .removeClass("hidden")
      .addClass("shown");
    $("#urlGenForm .urlGenBtn").prop("disabled", true);

    $.ajax({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
      type: "POST",
      url: baseUrl + "/generateShortenUrl",
      data: "longUrl=" + longUrl,
      success: function (response) {
        console.log(response);
        let html = ``;
        if (response.status) {
          const shortUrl = response.data.short_url;
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

          html += `<div class="pr">`;
          html += `<a href="${shortUrl}" target="_blank" class="btn btn-success btn-sm" title="Visit Site"><i class="fa-solid fa-diamond-turn-right"></i> Visit</a>`;
          html += `<span class="dropdown btnShare">`;
          html += `<button class="btn btn-info btn-sm mx-1 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">`;
          html += `<i class="fa-solid fa-share-nodes"></i> Share`;
          html += `</button>`;
          html += `<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">`;
          html += `<li><a href="https://www.facebook.com/sharer/sharer.php?u=${shortUrl}" class="facebook" target="_blank"><i class="fa-brands fa-facebook"></i> <span>Facebook</span></a></li>`;
          html += `<li><a href="https://api.whatsapp.com/send?text=${shortUrl}" class="whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i> <span>WhatsApp</span></a></li>`;
          html += `<li><a href="https://twitter.com/intent/tweet?url=${shortUrl}" class="twitter" target="_blank"><i class="fa-brands fa-twitter"></i> <span>Twitter</span></a></li>`;
          html += `<li><a href="https://www.linkedin.com/shareArticle?url=${shortUrl}" class="linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i> <span>Linkedin</span></a></li>`;
          html += `<li><a href="https://pinterest.com/pin/create/button/?url=${shortUrl}" class="pinterest" target="_blank"><i class="fa-brands fa-pinterest"></i> <span>Pinterest</span></a></li>`;
          html += `<li><a href="mailto:?subject=Share URLGEN on Email&body=:${shortUrl}" class="envelope" target="_blank"><i class="fa fa-envelope"></i> <span>Envelope</span></a></li>`;
          html += `</ul>`;
          html += `</span>`;
          html += `<a href="javascript:;" class="btn btn-secondary btn-sm myURLGenBtn" title="My URLGen History"><i class="fa-solid fa-history"></i> My URLGens</a>`;
          // html += `<button class="btn btn-primary btn-sm" title="Generate QR"><i class="fa-solid fa-qrcode"></i> QR</button>`;
          html += `</div>`;
        } else {
          html += `<div class="alert alert-danger">${response.message}</div>`;
        }

        $(".urlGenResponse").html(html).show();

        $("#urlGenForm .longUrl").prop("readonly", true);
        $("#urlGenForm .urlGenBtn .btn-text")
          .html("Generate another")
          .show();
        $("#urlGenForm .urlGenBtn .loader")
          .removeClass("shown")
          .addClass("hidden");
        $("#urlGenForm .urlGenBtn")
          .prop("type", "button")
          .prop("disabled", false);
      },
    });
  });

});

$(document).on("click", ".copyBtn", function () {
  const textToCopy = $(".urlGenUrl").val();
  const mgsEl = $(".copyMsg");
  copyToClipBoard(textToCopy, mgsEl);
});

$(document).on("click", ".historyCopyBtn", function () {
  const id = $(this).data('id');
  const textToCopy = $(".shortenUrl_" + id).html();
  const mgsEl = $(".copyAck_" + id);
  copyToClipBoard(textToCopy, mgsEl);
});

function copyToClipBoard(textToCopy, mgsEl) {
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

    mgsEl.show();
    setTimeout(function () {
      mgsEl.hide();
    }, 5000);
  }
}

$(document).on("click", ".btnShare", function () {
  $(".shareMenu").toggle();
});

$(document).on("click", ".myURLGenBtn", async function () {
  $('.urlGenHistory').toggleClass('open')
  const myURLGens = await getURLGenHistory();
  let html = ``;
  if (myURLGens.status) {
    const urls = myURLGens.urlGens;
    if (urls.length > 0) {
      $('.clearHistory').show();
      html += `<div class="list-group">`;
      urls.forEach(row => {
        const shortUrl = row.short_url;
        html += `<div class="list-group-item list-group-item-action flex-column align-items-start">`;
        html += `<div class="d-flex w-100 justify-content-between">`;
        html += `<h5 class="mb-1 shortenUrl_${row.id}">${shortUrl}</h5>`;
        html += `<small class="text-muted timeDiff">${formatTimeDifference(row.created_at)}</small>`;
        html += `</div>`;
        html += `<p class="mb-1">${row.long_url}</p>`;
        html += `<div class="pr">`;
        html += `<span class="ack ackPos text-success none copyAck_${row.id}">Copied</span>`;
        html += `<a href="javascript:;" class="btn btn-primary btn-sm historyCopyBtn" data-id="${row.id}" title="Copy Shorten URL"><i class="fa-solid fa-copy"></i> Copy</a>`;
        html += `<a href="${shortUrl}" target="_blank" class="btn btn-success btn-sm mx-1" title="Visit Site"><i class="fa-solid fa-diamond-turn-right"></i> Visit</a>`;
        html += `<span class="dropdown btnShare">`;
        html += `<button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">`;
        html += `<i class="fa-solid fa-share-nodes"></i> Share`;
        html += `</button>`;
        html += `<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">`;
        html += `<li><a href="https://www.facebook.com/sharer/sharer.php?u=${shortUrl}" class="facebook" target="_blank"><i class="fa-brands fa-facebook"></i> <span>Facebook</span></a></li>`;
        html += `<li><a href="https://api.whatsapp.com/send?text=${shortUrl}" class="whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i> <span>WhatsApp</span></a></li>`;
        html += `<li><a href="https://twitter.com/intent/tweet?url=${shortUrl}" class="twitter" target="_blank"><i class="fa-brands fa-twitter"></i> <span>Twitter</span></a></li>`;
        html += `<li><a href="https://www.linkedin.com/shareArticle?url=${shortUrl}" class="linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i> <span>Linkedin</span></a></li>`;
        html += `<li><a href="https://pinterest.com/pin/create/button/?url=${shortUrl}" class="pinterest" target="_blank"><i class="fa-brands fa-pinterest"></i> <span>Pinterest</span></a></li>`;
        html += `<li><a href="mailto:?subject=Share URLGEN on Email&body=:${shortUrl}" class="envelope" target="_blank"><i class="fa fa-envelope"></i> <span>Envelope</span></a></li>`;
        html += `</ul>`;
        html += `</span>`;
        html += `</div>`;
        html += `</div>`;
      });
      html += `</div>`;
    } else {
      $('.clearHistory').hide();
      html += `<div class="alert alert-info">You didn't generated shorten URL yet.</div>`;
    }
  } else {
    html += `<div class="">${myURLGens.message}</div>`;
  }
  $('.urlGenHistoryResponse').html(html);
  return false
})

$(document).on("click", ".clearHistoryBtn", async function () {
  if (confirm("Are you sure you want to delete your history? This action cannot be undone & if you have active visitors they will face issues when will click on generated link.")) {
    const removeResponse = await removeURLGenHistory();
    $('.myURLGenBtn').trigger('click');
  }
})

function formatTimeDifference(createdAt) {
  var currentTime = new Date();
  var createdAt = new Date(createdAt);
  var timeDifference = currentTime - createdAt;

  // Convert milliseconds to seconds
  var secondsDifference = Math.floor(timeDifference / 1000);

  // Define time intervals for formatting
  var intervals = [
    { label: 'day', seconds: 86400 },
    { label: 'hour', seconds: 3600 },
    { label: 'minute', seconds: 60 },
    { label: 'second', seconds: 1 }
  ];

  // Format the time difference
  var result = '';
  for (var i = 0; i < intervals.length; i++) {
    var interval = intervals[i];
    var count = Math.floor(secondsDifference / interval.seconds);
    if (count > 0) {
      result += count + ' ' + (count === 1 ? interval.label : interval.label + 's') + ' ago';
      break;
    }
  }

  return result;
}

$(document).ready(function () {
  $('body').click(function (event) {
    if (!$(event.target).closest('.urlGenHistory').length) {
      $('.urlGenHistory').removeClass('open')
    }
  });
});

$('.urlGenHistory .close').on('click', function () {
  $('.urlGenHistory').removeClass('open')
})

function getURLGenHistory() {
  return Promise.resolve($.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    type: "GET",
    url: baseUrl + "/getURLGenHistory",
  }));
}
function removeURLGenHistory() {
  return Promise.resolve($.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    type: "GET",
    url: baseUrl + "/removeURLGenHistory",
  }));
}

// Function to generate pagination
function generatePagination(response) {
  var paginationHtml = '';
  // Create "Previous" button if available
  if (response.links[0].active) {
    paginationHtml += '<button class="prev">Previous</button>';
  }

  // Create page number buttons
  $.each(response.links, function (index, link) {
    if (link.active) {
      paginationHtml += '<button class="page active">' + link.label + '</button>';
    } else {
      paginationHtml += '<button class="page">' + link.label + '</button>';
    }
  });

  // Create "Next" button if available
  if (response.links[2].active) {
    paginationHtml += '<button class="next">Next</button>';
  }

  // Append pagination HTML to the #pagination element
  $('#pagination').html(paginationHtml);

  // Add event handlers for pagination buttons
  $('.prev').click(function () {
    // Handle previous page click
    // Implement your logic to load the previous page here
  });

  $('.next').click(function () {
    // Handle next page click
    // Implement your logic to load the next page here
  });

  $('.page').click(function () {
    var pageNumber = $(this).text();
    // Handle page number click
    // Implement your logic to load the specific page here
    console.log('Clicked on page ' + pageNumber);
  });
}