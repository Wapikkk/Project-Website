$(document).ready(function () {
  $("#sub").on("click", function () {
    window.location = "results.html";
  });
  $(".resultSingle").each(function (e) {
  e = e * 100;
    $(this).css("animation-delay", e + "ms");
  });

  // Efek buat Preloader
  var winObj = $( window ),
    bodyObj = $( 'body' ),
    headerObj = $( 'header' );

  winObj.on( 'load', function() {
    var $preloader = $('.preloader');

    setTimeout(function(){
      $preloader.find('.boxes').fadeOut();
      $preloader.delay(350).fadeOut('slow');
    }, 1000);
  });

  // Efek eye-icon login password bagian login
  const eyeIconLogin = document.getElementById('eye-icon-login');
  if (eyeIconLogin) {
    eyeIconLogin.addEventListener('click', function() {
      const passwordInput = document.getElementById('login-password');
      if (passwordInput) {
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          eyeIconLogin.classList.remove('fa-eye');
          eyeIconLogin.classList.add('fa-eye-slash');
        } else {
          passwordInput.type = 'password';
          eyeIconLogin.classList.remove('fa-eye-slash');
          eyeIconLogin.classList.add('fa-eye');
        }
      }
    });
  }

  const eyeIconPassword = document.getElementById('eye-icon-password');
  if (eyeIconPassword) {
    eyeIconPassword.addEventListener('click', function() {
      const passwordInput = document.getElementById('password');
      if (passwordInput) {
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          eyeIconPassword.classList.remove('fa-eye');
          eyeIconPassword.classList.add('fa-eye-slash');
        } else {
          passwordInput.type = 'password';
          eyeIconPassword.classList.remove('fa-eye-slash');
          eyeIconPassword.classList.add('fa-eye');
        }
      }
    });
  }

  const eyeIconConfirm = document.getElementById('eye-icon-confirm');
  if (eyeIconConfirm) {
    eyeIconConfirm.addEventListener('click', function() {
      const passwordInput = document.getElementById('confirm-password');
      if (passwordInput) {
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          eyeIconConfirm.classList.remove('fa-eye');
          eyeIconConfirm.classList.add('fa-eye-slash');
        } else {
          passwordInput.type = 'password';
          eyeIconConfirm.classList.remove('fa-eye-slash');
          eyeIconConfirm.classList.add('fa-eye');
        }
      }
    });
  }

  
});