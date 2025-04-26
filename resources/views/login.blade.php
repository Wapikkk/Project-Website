<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aloutdoor.id</title>
    <link rel="stylesheet" href="{{ asset('images/logo_aloutdoor.png') }}" type="image/x-icon">

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
    <main class="overflow-hddien position-relative">
      <div class="videoBG">
        <video src="assets/video/bgVideo.mp4" loop muted autoplay></video>
      </div>

      <!-- container -->
      <div class="container">
        <!-- form -->
        <form
          class="revotForm fade-custom"
          novalidate
          onsubmit="return false"
          c
        >
          <!-- heading -->
          <h1 class="mainHeading">Find Accessible <br />Homes To Rent</h1>
          <div class="row">
            <!-- Form Start -->
            <div class="col-md-12">
              <div class="textField">
                <div class="fieldInner">
                  <i class="fa-solid fa-location-dot"></i>
                  <input
                    type="text"
                    name="location"
                    placeholder="Location..."
                  />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="textField">
                <label>Min Price</label>
                <div class="fieldInner">
                  <select name="min">
                    <option value="No Min">No Min</option>
                    <option value="$20">$20</option>
                    <option value="$60">$60</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="textField">
                <label>Max Price</label>
                <div class="fieldInner">
                  <select name="max">
                    <option value="No Max">No Max</option>
                    <option value="$40">$40</option>
                    <option value="$60">$80</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="textField">
                <label>Property Type</label>
                <div class="fieldInner">
                  <select name="property">
                    <option value="">Select Category</option>
                    <option value="Outdoor">Outdoor</option>
                    <option value="Indoor">Indoor</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="textField">
                <label>Bed Rooms</label>
                <div class="fieldInner">
                  <select name="room">
                    <option value="No Min">No Min</option>
                    <option value="3">3</option>
                    <option value="1">1</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="textField">
                <label>Property Location</label>
                <div class="fieldInner">
                  <select name="location">
                    <option value="All Cities">All Cities</option>
                    <option value="NY">New York</option>
                    <option value="NJ">New Jersey</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <!-- Submit button -->
          <button id="sub">Search Result</button>
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
