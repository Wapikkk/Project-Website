<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aloutdoor.id</title>
    <link rel="icon" href="{{ asset('images/logo_aloutdoor.png') }}" type="image/x-icon">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset ('login/css/bootstrap/bootstrap.min.css')}}" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css "
    />

    <!-- theme colors -->
    <link rel="stylesheet" href="{{ asset ('login/css/colors.css')}}" />

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset ('login/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset ('login/css/animation.css')}}" />
    <link rel="stylesheet" href="{{ asset ('login/css/responsive.css')}}" />
  </head>
  <body>
      <!-- preloader -->
      <div class="preloader">
        <div class="boxes">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
  <!-- preloader end -->

    <main class="overflow-hddien position-relative">
      <div class="background">
        <div class="image-layer" style="background-image:url({{ asset('images/sunset_bromo.jpg') }})"></div>
      </div>

      <!-- container -->
      <div class="container">
        <!-- form -->
        <form class="revotForm fade-custom" action="{{ route('registrasi') }}" method="POST">
          @csrf
          <!-- heading -->
          <h1 class="mainHeading">Registrasi</h1>
          <div class="row">
            <!-- Form Start -->
            <div class="col-md-12">
              <div class="textField">
                <div class="fieldInner">
                  <input type="text" name="name" id="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="textField">
                <div class="fieldInner">
                  <input type="text" name="phone" id="phone" placeholder="Nomor Telepon" required value="{{ old('phone') }}">
                  @error('phone')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="textField">
                <div class="fieldInner">
                  <input type="email" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="textField">
                <div class="fieldInner">
                  <input type="password" placeholder="Password" id="password" name="password" required>
                  <i class="fa fa-eye" id="eye-icon-password"></i>
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="textField">
                <div class="fieldInner">
                  <input type="password" placeholder="Konfirmasi Password" id="confirm-password" name="confirm_password" required>
                  <i class="fa fa-eye" id="eye-icon-confirm"></i>
                  @error('password_confirmation')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>

          <!-- Submit button -->
          <button class="sub" type="submit">Registrasi</button>

        </form>
      </div>
    </main>
    <!-- jQuery -->
    <script src="{{ asset ('login/js/jQuery/jquery-3.7.1.min.js')}}"></script>

    <!-- bootstrap -->
    <script src="{{ asset ('login/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{ asset ('login/js/custom.js')}}"></script>
  </body>
</html>
