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
  document.getElementById('eye-icon-login').addEventListener('click', function(){
    const passwordInput = document.getElementById('login-password');
    const eyeIcon = document.getElementById('eye-icon-login');
  
    if (passwordInput.type == 'password') {
      passwordInput.type = 'text';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    } else {
      passwordInput.type = 'password';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    }
  });

  // Efek eye-icon password bagian registrasi
  document.getElementById('eye-icon-password').addEventListener('click', function(){
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eye-icon-password');

    if (passwordInput.type == 'password') {
      passwordInput.type = 'text';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    } else {
      passwordInput.type = 'password';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    }
  });

  // Efek eye-icon konfirmasi password bagian registrasi
  document.getElementById('eye-icon-confirm').addEventListener('click', function(){
    const passwordInput = document.getElementById('confirm-password');
    const eyeIcon = document.getElementById('eye-icon-confirm');

    if (passwordInput.type == 'password') {
      passwordInput.type = 'text';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    } else {
      passwordInput.type = 'password';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    }
  });
});