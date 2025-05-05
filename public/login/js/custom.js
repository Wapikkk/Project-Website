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

  // Fungsi untuk menampilkan pesan kesalahan
  function showError(inputElement, message) {
    let errorDiv = inputElement.closest('.textField').find('.error-message');
    if (!errorDiv.length) {
        errorDiv = $('<div class="error-message"><i class="fa fa-exclamation-circle"></i><span></span></div>');
        inputElement.closest('.fieldInner').after(errorDiv);
    }
    errorDiv.find('span').text(message);
    errorDiv.show();
    inputElement.addClass('is-invalid');
}

// Fungsi untuk menyembunyikan pesan kesalahan
function hideError(inputElement) {
    let errorDiv = inputElement.closest('.textField').find('.error-message');
    errorDiv.hide();
    inputElement.removeClass('is-invalid');
}

// Validasi Nama Lengkap
$('#name').on('input', function () {
    const name = $(this).val().trim();
    if (!name) {
        showError($(this), 'Nama wajib diisi.');
    } else {
        hideError($(this));
    }
});

// Validasi Nomor Telepon
$('#phone').on('input', function () {
    const phone = $(this).val().trim();
    const phoneRegex = /^[0-9]{10,13}$/;
    if (!phone) {
        showError($(this), 'Nomor telepon wajib diisi.');
    } else if (!phoneRegex.test(phone)) {
        showError($(this), 'Nomor telepon hanya berisi angka (10-13 digit).');
    } else {
        hideError($(this));
    }
});

// Validasi Email
$('#email').on('input', function () {
    const email = $(this).val().trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email) {
        showError($(this), 'Email wajib diisi.');
    } else if (!emailRegex.test(email)) {
        showError($(this), 'Email tidak valid.');
    } else {
        hideError($(this));
    }
});

// Validasi Password
$('#password').on('input', function () {
    const password = $(this).val();
    const confirmPassword = $('#confirm-password').val();
    if (!password) {
        showError($(this), 'Password wajib diisi.');
    } else if (password.length < 8) {
        showError($(this), 'Password minimal 8 karakter.');
    } else {
        hideError($(this));
    }
    // Periksa konfirmasi password jika sudah diisi
    if (confirmPassword && password !== confirmPassword) {
        showError($('#confirm-password'), 'Konfirmasi password tidak cocok.');
    } else {
        hideError($('#confirm-password'));
    }
});

// Validasi Konfirmasi Password
$('#confirm-password').on('input', function () {
    const password = $('#password').val();
    const confirmPassword = $(this).val();
    if (!confirmPassword) {
        showError($(this), 'Konfirmasi password wajib diisi.');
    } else if (password !== confirmPassword) {
        showError($(this), 'Konfirmasi password tidak cocok.');
    } else {
        hideError($(this));
    }
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
    eyeIconConfirm.addEventListener('click', function(){
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