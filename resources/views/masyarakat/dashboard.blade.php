<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - iLanding Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{asset( 'assets/css/main.css')}}" rel="stylesheet">

  <style>

.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}

.contact-form .submit-btn {
  display: inline-block;
  background-color: #37AFE1;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}


</style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
    <img src="{{ asset('img/Logo-Kemendesa-Dianisa.com_.png') }}" alt="Logo" style="width: 40px; height: 40px; margin-right: 10px; object-fit: contain;">
    <h1 class="sitename">KEMENDESA</h1>
  </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Upload</a></li>
          <li><a href="#features">Pengaduan</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <form action="{{route('logout')}}" method="POST">
      <button class="btn-getstarted" type="submit">
      @csrf  
      Log Out</button>
</form>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              

              <h1 class="mb-4">
                Layanan <br>
                Pengaduan <br>
                <span class="accent-text">Masyarakat</span>
              </h1>

              <p class="mb-4 mb-md-5">
                Ini adalah platform untuk melaporkan kejadian kejadian tekterduga.
                apa saja bisa dilaporkan yang penting sesui dengan ketentuan.
              </p>

              
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="{{asset('images/mailbox.png')}}" alt="Hero Image" class="img-fluid">
              </div>
            </div>
          </div>
        </div>



      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      <h1 class="title">Buat Laporan Anda Disini!</h1>
      @php
    $combinedErrors = [];
@endphp

<!-- Gabungkan error dari 'isi_laporan' dan 'foto' -->
@if ($errors->has('isi_laporan') || $errors->has('foto'))
    @php
        // Gabungkan kedua error jika ada
        $combinedErrors = array_merge(
            $errors->get('isi_laporan'),
            $errors->get('foto')
        );
    @endphp

    <!-- Tampilkan error gabungan dalam satu alert -->
    <div class="alert alert-danger">
        @foreach ($combinedErrors as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<!-- Menampilkan error lainnya -->
@foreach ($errors->all() as $error)
    @if (!str_contains($error, 'isi_laporan') && !str_contains($error, 'foto'))
        <div class="alert alert-danger">{{ $error }}</div>
    @endif
@endforeach

      <form action="{{route('masyarakat.store')}}" method="POST" class="contact-form row" enctype="multipart/form-data">
        @csrf
      <div class="form-field col-lg-6">
      <div class="form-field col-lg-6 ">
      <input id="foto" name="foto" class="input-file" type="file" hidden required>
                <label for="foto">
<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 100 100" width="100px" height="100px"><path fill="#c7ede6" d="M88.704,55.677c0.3-0.616,0.566-1.264,0.796-1.943c2.633-7.77-1.349-17.078-9.733-19.325 C78.86,23.026,70.86,15.216,61.826,13.884c-10.341-1.525-19.814,5.044-22.966,15.485c-3.799-1.346-7.501-1.182-10.99,0.857 c-1.583,0.732-3.031,1.812-4.33,3.233c-1.907,2.086-3.147,4.719-3.652,7.495c-0.748,0.118-1.483,0.236-2.176,0.484 c-4.04,1.449-6.589,4.431-7.288,8.923c-0.435,2.797,0.443,5.587,0.933,6.714c1.935,4.455,6.422,6.98,10.981,6.312 c0.227-0.033,0.557,0.069,0.752,0.233c0.241,7.12,3.698,13.417,8.884,17.014c8.321,5.772,19.027,3.994,25.781-3.921 c2.894,2.96,6.338,4.398,10.384,3.876c4.023-0.519,7.147-2.739,9.426-6.349c1.053,0.283,2.051,0.691,3.083,0.804 c4.042,0.442,7.324-1.165,9.732-4.8c0.922-1.391,1.793-3.194,1.793-6.354C92.174,60.634,90.88,57.667,88.704,55.677z"/><path fill="#f29373" d="M49.764 73.3L49.764 48.048 43.967 53.846 41.256 51.135 51.668 40.72 61.805 51.128 59.087 53.846 53.3 48.059 53.3 73.3z"/><path fill="#472b29" d="M51.711 41.765l9.111 9.357-1.734 1.734-4.097-4.097-2.39-2.39v3.38V72.6h-2.136V49.739v-3.38l-2.39 2.39-4.107 4.107-1.721-1.721 9.333-9.335.048.058L51.711 41.765M51.677 39.723l-.001.001-.001-.001L40.266 51.135l3.701 3.701 5.097-5.097V74H54V49.749l5.087 5.087 3.701-3.701L51.677 39.723 51.677 39.723zM63.5 38h-16c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h16c.276 0 .5.224.5.5S63.776 38 63.5 38zM45.5 38h-1c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1c.276 0 .5.224.5.5S45.776 38 45.5 38zM42.5 38h-3c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h3c.276 0 .5.224.5.5S42.776 38 42.5 38z"/><g><path fill="#f29373" d="M65.7 40.3L65.7 35.3 37.3 35.3 37.3 40.3 33.7 40.3 33.7 31.7 69.3 31.7 69.3 40.3z"/><path fill="#472b29" d="M68.6,32.4V36v3.6h-2.2V36v-1.4H65H38h-1.4V36v3.6h-2.2V36v-3.6H38h27H68.6 M70,31h-5H38h-5v5v5h5 v-5h27v5h5v-5V31L70,31z"/></g><g><path fill="#fdfcef" d="M76.164,79.43c0,0,10.616,0,10.681,0c2.452,0,4.439-1.987,4.439-4.439 c0-2.139-1.513-3.924-3.527-4.344c0.023-0.187,0.039-0.377,0.039-0.57c0-2.539-2.058-4.598-4.597-4.598 c-1.499,0-2.827,0.721-3.666,1.831c-0.215-2.826-2.739-5.007-5.693-4.646c-2.16,0.264-3.947,1.934-4.344,4.073 c-0.127,0.686-0.114,1.352,0.013,1.977c-0.579-0.624-1.403-1.016-2.322-1.016c-1.68,0-3.052,1.308-3.16,2.961 c-0.763-0.169-1.593-0.158-2.467,0.17c-1.671,0.627-2.861,2.2-2.93,3.983c-0.099,2.533,1.925,4.617,4.435,4.617 c0.191,0,0.861,0,1.015,0h9.218"/><path fill="#472b29" d="M86.845,79.93H76.164c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h10.681 c2.172,0,3.939-1.767,3.939-3.939c0-1.854-1.316-3.476-3.129-3.855c-0.254-0.053-0.425-0.292-0.394-0.55 c0.021-0.168,0.035-0.337,0.035-0.51c0-2.259-1.838-4.098-4.098-4.098c-1.292,0-2.483,0.595-3.267,1.632 c-0.126,0.166-0.34,0.237-0.54,0.179c-0.2-0.059-0.342-0.235-0.358-0.442c-0.094-1.238-0.701-2.401-1.664-3.19 c-0.973-0.798-2.207-1.149-3.471-0.997c-1.947,0.238-3.556,1.747-3.913,3.668c-0.112,0.601-0.108,1.201,0.011,1.786 c0.045,0.22-0.062,0.442-0.261,0.545c-0.199,0.102-0.443,0.06-0.595-0.104c-0.513-0.552-1.208-0.856-1.956-0.856 c-1.4,0-2.569,1.095-2.661,2.494c-0.01,0.146-0.082,0.28-0.199,0.367c-0.117,0.087-0.268,0.118-0.408,0.088 c-0.755-0.167-1.468-0.118-2.183,0.15c-1.498,0.562-2.545,1.982-2.606,3.535c-0.042,1.083,0.347,2.109,1.096,2.889 c0.75,0.78,1.758,1.209,2.84,1.209h10.233c0.276,0,0.5,0.224,0.5,0.5s-0.224,0.5-0.5,0.5H63.065 c-1.356,0-2.621-0.539-3.561-1.516c-0.939-0.977-1.428-2.263-1.375-3.621c0.076-1.949,1.384-3.73,3.254-4.432 c0.72-0.27,1.464-0.363,2.221-0.279c0.362-1.655,1.842-2.884,3.582-2.884c0.603,0,1.194,0.151,1.72,0.431 c0.004-0.327,0.036-0.655,0.097-0.983c0.436-2.346,2.399-4.188,4.775-4.478c1.54-0.191,3.039,0.244,4.226,1.216 c0.899,0.737,1.543,1.742,1.847,2.851c0.919-0.807,2.094-1.256,3.347-1.256c2.811,0,5.098,2.287,5.098,5.098 c0,0.064-0.001,0.128-0.004,0.192c2.048,0.628,3.492,2.547,3.492,4.723C91.784,77.714,89.568,79.93,86.845,79.93z"/><path fill="#fdfcef" d="M73.591,69.651c-1.642-0.108-3.055,1.026-3.157,2.533c-0.013,0.187-0.004,0.371,0.023,0.55 c-0.317-0.358-0.786-0.6-1.324-0.636c-0.985-0.065-1.836,0.586-1.959,1.471c-0.179-0.049-0.366-0.082-0.56-0.095 c-1.437-0.094-2.674,0.898-2.762,2.216"/><path fill="#472b29" d="M63.853,75.941c-0.006,0-0.012,0-0.017,0c-0.138-0.009-0.242-0.128-0.233-0.266 c0.098-1.454,1.453-2.556,3.028-2.449c0.116,0.008,0.234,0.022,0.353,0.045c0.26-0.878,1.158-1.485,2.166-1.421 c0.377,0.025,0.73,0.139,1.035,0.33c0-0.004,0-0.008,0-0.012c0.111-1.641,1.652-2.872,3.423-2.765 c0.138,0.009,0.242,0.128,0.233,0.266c-0.009,0.138-0.131,0.243-0.266,0.233c-1.514-0.102-2.799,0.933-2.891,2.3 c-0.011,0.165-0.004,0.332,0.021,0.496c0.017,0.109-0.041,0.217-0.141,0.264c-0.098,0.047-0.219,0.023-0.293-0.061 c-0.285-0.321-0.705-0.522-1.154-0.552c-0.846-0.056-1.589,0.496-1.695,1.256c-0.01,0.071-0.05,0.134-0.109,0.174 c-0.06,0.04-0.135,0.051-0.203,0.033c-0.173-0.046-0.345-0.076-0.511-0.086c-1.303-0.085-2.417,0.805-2.497,1.983 C64.093,75.84,63.983,75.941,63.853,75.941z"/><g><path fill="#fdfcef" d="M88.642,71.167c-1.543-0.727-3.327-0.213-3.985,1.15c-0.082,0.169-0.142,0.344-0.182,0.521"/><path fill="#472b29" d="M84.474,73.088c-0.018,0-0.037-0.002-0.056-0.006c-0.135-0.031-0.219-0.165-0.188-0.299 c0.045-0.199,0.113-0.393,0.201-0.574c0.716-1.484,2.651-2.054,4.317-1.268c0.125,0.059,0.179,0.208,0.12,0.333 c-0.059,0.126-0.209,0.177-0.333,0.12c-1.417-0.667-3.056-0.204-3.654,1.033c-0.072,0.148-0.127,0.305-0.164,0.468 C84.691,73.009,84.588,73.088,84.474,73.088z"/></g></g><g><path fill="#fdfcef" d="M30.126,63.487c1.71,0,3.194,0,3.215,0c1.916,0,3.469-1.52,3.469-3.396 c0-1.636-1.182-3.001-2.756-3.323c0.018-0.143,0.031-0.288,0.031-0.436c0-1.942-1.609-3.517-3.593-3.517 c-1.172,0-2.209,0.551-2.865,1.401c-0.168-2.162-2.141-3.83-4.45-3.554c-1.688,0.202-3.084,1.479-3.395,3.116 c-0.1,0.525-0.089,1.034,0.01,1.512c-0.453-0.477-1.097-0.777-1.814-0.777c-1.313,0-2.385,1.001-2.47,2.265 c-0.596-0.129-1.245-0.121-1.928,0.13c-1.306,0.48-2.236,1.683-2.29,3.047c-0.077,1.937,1.504,3.532,3.467,3.532 c0.149,0,0.673,0,0.794,0h7.204 M24.245,63.487h0.327"/><path fill="#472b29" d="M33.341,63.987h-3.215c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h3.215 c1.637,0,2.969-1.299,2.969-2.896c0-1.363-0.991-2.554-2.356-2.833c-0.256-0.052-0.429-0.293-0.396-0.552 c0.016-0.123,0.027-0.247,0.027-0.374c0-1.664-1.388-3.017-3.093-3.017c-0.977,0-1.877,0.44-2.47,1.207 c-0.126,0.164-0.341,0.233-0.539,0.173c-0.198-0.059-0.339-0.234-0.355-0.44c-0.071-0.913-0.507-1.741-1.227-2.332 c-0.742-0.609-1.687-0.883-2.665-0.764c-1.475,0.177-2.694,1.292-2.963,2.712c-0.084,0.443-0.081,0.887,0.008,1.317 c0.046,0.219-0.06,0.441-0.257,0.545c-0.198,0.104-0.44,0.063-0.595-0.099c-0.38-0.401-0.896-0.622-1.452-0.622 c-1.038,0-1.903,0.79-1.971,1.799c-0.01,0.145-0.082,0.278-0.198,0.366s-0.265,0.119-0.406,0.089 c-0.573-0.125-1.111-0.087-1.65,0.111c-1.129,0.415-1.917,1.459-1.963,2.598c-0.031,0.782,0.252,1.526,0.799,2.096 c0.568,0.591,1.337,0.916,2.167,0.916h7.998c0.276,0,0.5,0.224,0.5,0.5s-0.224,0.5-0.5,0.5h-7.998 c-1.089,0-2.142-0.446-2.888-1.224c-0.737-0.767-1.12-1.771-1.078-2.828c0.061-1.538,1.113-2.943,2.617-3.496 c0.548-0.201,1.115-0.276,1.688-0.228c0.332-1.268,1.507-2.198,2.882-2.198c0.431,0,0.854,0.094,1.24,0.269 c0.011-0.199,0.035-0.397,0.073-0.597c0.35-1.844,1.924-3.291,3.827-3.519c1.249-0.149,2.462,0.2,3.418,0.984 c0.668,0.548,1.147,1.254,1.399,2.047c0.717-0.568,1.61-0.882,2.557-0.882c2.257,0,4.093,1.802,4.093,4.017 c0,0.02,0,0.04,0,0.06c1.603,0.52,2.726,2.011,2.726,3.7C37.31,62.239,35.53,63.987,33.341,63.987z M24.571,63.987h-0.327 c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h0.327c0.276,0,0.5,0.224,0.5,0.5S24.847,63.987,24.571,63.987z"/><g><path fill="#472b29" d="M31.79,58.695c-0.018,0-0.036-0.002-0.055-0.006c-0.135-0.03-0.219-0.164-0.189-0.299 c0.035-0.153,0.087-0.301,0.157-0.441c0.555-1.123,2.084-1.537,3.409-0.924c0.125,0.058,0.18,0.207,0.122,0.332 s-0.206,0.179-0.332,0.122c-1.081-0.501-2.315-0.19-2.751,0.692c-0.052,0.104-0.091,0.214-0.116,0.328 C32.008,58.615,31.905,58.695,31.79,58.695z"/></g><g><path fill="#472b29" d="M27.106,63.987h-1.005c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h1.005 c0.276,0,0.5,0.224,0.5,0.5S27.382,63.987,27.106,63.987z"/></g></g><g><path fill="#fff" d="M47.405 23H37.5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9.905c.276 0 .5.224.5.5S47.682 23 47.405 23zM50.5 23h-1c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1c.276 0 .5.224.5.5S50.777 
23 50.5 23zM55.491 25H46.5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h8.991c.276 0 .5.224.5.5S55.767 25 55.491 25zM44.5 25h-1c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1c.276 0 .5.224.5.5S44.777 25 44.5 25zM41.5 25h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.276 0 .5.224.5.5S41.777 25 41.5 25zM47.5 27h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.276 0 .5.224.5.5S47.776 27 47.5 27zM50.5 18c-.177 0-.823 0-1 0-.276 0-.5.224-.5.5 0 .276.224.5.5.5.177 0 .823 0 1 0 .276 0 .5-.224.5-.5C51 18.224 50.776 18 50.5 18zM50.5 20c-.177 0-4.823 0-5 0-.276 0-.5.224-.5.5 0 .276.224.5.5.5.177 0 4.823 0 5 0 .276 0 .5-.224.5-.5C51 20.224 50.776 20 50.5 20zM55.5 22c-.177 0-2.823 0-3 0-.276 0-.5.224-.5.5 0 .276.224.5.5.5.177 0 2.823 0 3 0 .276 0 .5-.224.5-.5C56 22.224 55.776 22 55.5 22z"/></g><g><path fill="#fff" d="M81.5 49h-10c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h10c.276 0 .5.224.5.5S81.776 49 81.5 49zM85.5 49h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.276 0 .5.224.5.5S85.776 49 85.5 49zM90.5 51h-10c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h10c.276 0 .5.224.5.5S90.777 51 90.5 51zM78.5 51h-1c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1c.276 0 .5.224.5.5S78.776 51 78.5 51zM75.375 51H73.5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1.875c.276 0 .5.224.5.5S75.651 51 75.375 51zM84.5 47h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5S84.777 47 84.5 47zM81.5 53h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.276 0 .5.224.5.5S81.776 53 81.5 53z"/></g></svg><span>Upload Foto</span>
                </label>
      </div>
      <div class="form-field col-lg-12">
         <input id="isi_laporan" name="isi_laporan" class="input-text js-input" type="text" required>
         <label class="label" for="isi_laporan">Deskripsi Laporan</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pengaduan Masyarakat</h2>
        <p>ini adalah daftar pengaduan dari masyarakat</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="d-flex justify-content-center">

          <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                <h4>Semua</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                <h4>Belum di Proses</h4>
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                <h4>Proses</h4>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                <h4>Selesai</h4>
              </a>
            </li>

          </ul>

        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
          <section class="row">
    <div class="col-12">
        @foreach ($pengaduan as $ngadu)
            <div class="card mb-3">
                <div class="card-header d-flex align-items-center">
                    <img src="{{ $ngadu->masyarakat->foto_profile ? asset('storage/' . $ngadu->masyarakat->foto_profile) : asset('img/avatar-1.webp') }}" 
                         alt="User Avatar" 
                         class="rounded-circle me-3" 
                         style="width: 50px; height: 50px; object-fit: cover;">
                    <div>
                        <h5 class="mb-0">{{ $ngadu->masyarakat->nama }}</h5>
                        <small class="text-muted">{{ $ngadu->created_at->format('d M Y, H:i') }}</small>
                    </div>
                </div>

                <div class="card-body">
                    @if ($ngadu->foto)
                        <img src="{{ asset('storage/' . $ngadu->foto ) }}" 
                             class="img-fluid rounded mt-3 mb-4">
                    @endif
                    <p class="card-text">{{ $ngadu->isi_laporan }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
          </div>

          <div class="tab-pane fade" id="features-tab-2">
          <section class="row">
            <div class="col-12">
                  @foreach ($pengaduan as $ngadu)
                  @if ($ngadu->status === '0')
                      <div class="card mb-3">
                          <div class="card-header d-flex align-items-center">
                              <img src="{{ $ngadu->masyarakat->foto_profile ? asset('storage/' . $ngadu->masyarakat->foto_profile) : asset('img/avatar-1.webp') }}" 
                                  alt="User Avatar" 
                                  class="rounded-circle me-3" 
                                  style="width: 50px; height: 50px; object-fit: cover;">
                              <div>
                                  <h5 class="mb-0">{{ $ngadu->masyarakat->nama }}</h5>
                                  <small class="text-muted">{{ $ngadu->created_at->format('d M Y, H:i') }}</small>
                              </div>
                          </div>

                          <div class="card-body">
                              @if ($ngadu->foto)
                                  <img src="{{ asset('storage/' . $ngadu->foto ) }}" 
                                      class="img-fluid rounded mt-3 mb-4">
                              @endif
                              <p class="card-text">{{ $ngadu->isi_laporan }}</p>
                          </div>
                      </div>
                      </div>
                      @endif
                  @endforeach
                  @if (!$pengaduan->where('status', '0')->count())
            <div class="text-center">
                <h4>Tidak ada pengaduan yang belum diproses</h4>
            </div>
        @endif
            </div>
          </section>
          </div>

          <div class="tab-pane fade" id="features-tab-3">
          <section class="row">
            <div class="col-12">
                  @foreach ($pengaduan as $ngadu)
                  @if ($ngadu->status === 'proses')
                      <div class="card mb-3">
                          <div class="card-header d-flex align-items-center">
                              <img src="{{ $ngadu->masyarakat->foto_profile ? asset('storage/' . $ngadu->masyarakat->foto_profile) : asset('img/avatar-1.webp') }}" 
                                  alt="User Avatar" 
                                  class="rounded-circle me-3" 
                                  style="width: 50px; height: 50px; object-fit: cover;">
                              <div>
                                  <h5 class="mb-0">{{ $ngadu->masyarakat->nama }}</h5>
                                  <small class="text-muted">{{ $ngadu->created_at->format('d M Y, H:i') }}</small>
                              </div>
                          </div>

                          <div class="card-body">
                              @if ($ngadu->foto)
                                  <img src="{{ asset('storage/' . $ngadu->foto ) }}" 
                                      class="img-fluid rounded mt-3 mb-4">
                              @endif
                              <p class="card-text">{{ $ngadu->isi_laporan }}</p>
                          </div>
                      </div>
                      @endif
                  @endforeach
                  @if (!$pengaduan->where('status', 'proses')->count())
            <div class="text-center">
                <h4>Tidak ada pengaduan yang diproses</h4>
            </div>
        @endif

            </div>
          </section>
          </div>
          <div class="tab-pane fade" id="features-tab-4">
          <section class="row">
            <div class="col-12">
                  @foreach ($pengaduan as $ngadu)
                  @if ($ngadu->status === 'selesai')
                      <div class="card mb-3">
                          <div class="card-header d-flex align-items-center">
                              <img src="{{ $ngadu->masyarakat->foto_profile ? asset('storage/' . $ngadu->masyarakat->foto_profile) : asset('img/avatar-1.webp') }}" 
                                  alt="User Avatar" 
                                  class="rounded-circle me-3" 
                                  style="width: 50px; height: 50px; object-fit: cover;">
                              <div>
                                  <h5 class="mb-0">{{ $ngadu->masyarakat->nama }}</h5>
                                  <small class="text-muted">{{ $ngadu->created_at->format('d M Y, H:i') }}</small>
                              </div>
                          </div>

                          <div class="card-body">
                              @if ($ngadu->foto)
                                  <img src="{{ asset('storage/' . $ngadu->foto ) }}" 
                                      class="img-fluid rounded mt-3 mb-4">
                              @endif
                              <p class="card-text">{{ $ngadu->isi_laporan }}</p>
                              
                              <p class="card-text">Tanggapan : {{ $ngadu->tanggapan->tanggapan ?? "okey"}}</p>
                          </div>
                      </div>
                      @endif
                  @endforeach
                  @if (!$pengaduan->where('status', 'selesai')->count())
            <div class="text-center">
                <h4>Tidak ada pengaduan yang sudah selesai</h4>
            </div>
        @endif

            </div>
          </section>
          </div>

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Features Cards Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>
              <p>hubungin jika  memiliki laporan apa saja</p>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  @foreach ($gawai as $tugas)
                  <p>{{$tugas->nama_petugas}} :  {{$tugas->telp}}</p> 
                  @endforeach
                  
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>BayuHandsame@gmail.com</p>
                  <p>rere@gmail.com</p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">KEMENDESA</span>
          </a>
          <div class="footer-contact pt-3">
            <p>50 bojong</p>
            <p>jakarta, cipayung</p>
            <p class="mt-3"><strong>Phone:</strong> <span>089675641234</span></p>
            <p><strong>Email:</strong> <span>rere@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Upload</a></li>
            <li><a href="#">Pengaduan</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">KEMENDESA</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">ByuCompany</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets//vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets//vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets//vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets//vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets//vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets//vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets//js/main.js')}}"></script>

</body>

</html>