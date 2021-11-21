<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simessi</title>
  <link rel="shortcut icon" type="image/icon" href="{{ asset ('assets/images/Logo-kabupaten-Tangerang.png') }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset ('landing-page/vendors/owl-carousel/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('landing-page/vendors/owl-carousel/css/owl.theme.default.css') }}">
  <link rel="stylesheet" href="{{ asset ('landing-page/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('landing-page/vendors/aos/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset ('landing-page/css/style.min.css') }}">

</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar"
    style="background-color:rgb(255, 255, 255);">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-70">
        {{-- <img src="images/Group2.svg" alt=""> --}}
        <img src="{{ asset ('assets/images/Logo-kabupaten-Tangerang.png') }}" width="70" height="80" alt="">
       <div class="ml-3">
        <h3 style="color:rgb(136, 49, 235);">SIMESSI </h3>
        <h5 style="color:rgb(136, 49, 235);">PAUD DIKMAS</h5>
       </div>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="{{asset('assets/images/Logo-kabupaten-Tangerang.png')}}" width="30" height="35"  alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Tentang Kami <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">Pelayanan Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#digital-marketing-section">Alur</a>  
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#feedback-section">Alur</a>
          </li> --}}
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <a href="{{route('login')}}" class="btn btn-success" >Masuk</a>
          </li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>

  {{-- banner --}}

  {{-- <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Search engine optimisation &<br>Marketing.</h1>
      <h6 class="font-weight-normal text-muted pb-3">Simple is a simple template with a creative design that solves all your marketing and SEO queries.</h6>
      <div>
        <button class="btn btn-opacity-light mr-1">Get started</button>
        <button class="btn btn-opacity-success ml-1">Learn more</button>
      </div>
      <img src="{{asset ('landing-page/images/Group171.svg')}}" alt="" class="img-fluid">
    </div>
  </div> --}}



  <div class="row align-items-center ml-5 mr-5">
    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
      <center class="mb-3"> <h1 style="color:rgb(136, 49, 235);">SIMESSI</h1></center>
        <img src="{{ asset ('assets/images/simessi-001.png') }}" class="img-fluid mt-3" style="max-height: 300px" alt="">
    </div>
    <div class="col-lg-7 col-md-7">
        <div class="title-heading mt-4">
            <h1 class="judul mb-3" style="color:rgb(136, 49, 235);">Sistem Monitoring <br>Evaluasi Serta Verifikasi</h1>
            <div class="border-custom"></div>
            <p class="para-desc text-muted text-md-left text-justify">
              SIMESSI ini dikembangkan dalam upaya membentuk sebuah sistem aplikasi yang dapat membantu kemudahan akses percepatan pelayanan khususnya bidang PAUD Dikmas terhadap lembaga – lembaga mitra. Utamanya kemudahan dalam Monitoring dan Evaluasi serta Verifikasi; kemudahan pengawasan dan pengendalian; meningkatkan transparansi, akuntabilitas dan kredibilitas pengelolaan lembaga; serta yang terpenting tersedianya database pelaporan kegiatan secara digital. SIMESSI ini dapat diakses oleh lembaga penyelenggara pendidikan non formal sesuai dengan persyaratan yang sudah ditentukan.                <span class="collapsed">
                    {{-- <a href="javascript:void(0)"> Selengkapnya..</a> --}}
                </span>
                <span class="expanded mb-4" style="display: none;">
                    Bantuan pemerintah ini dikemas dalam bentuk sistem informasi dengan tujuan untuk memperluas akses bantuan pemerintah kepada warga masyarakat agar tepat guna dan tepat sasaran serta meningkatkan transparansi, akuntabilitas dan kredibilitas pengelolaan bantuan pemerintah. Bantuan pemerintah ini dapat diakses oleh calon lembaga penyelenggara sesuai dengan persyaratan yang sudah ditentukan
                    <a href="javascript:void(0)"> Lebih sedikit</a>
                </span>
            </p>
            {{-- <div class="watch-video mt-4 pt-2 text-md-left text-center">
                <a href="https://drive.google.com/file/d/1E7mLpGyT22urtsaFgciGng_A3N4lhwFt/preview" class="video-play-icon watch text-dark mb-2"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle title-dark text-white position-relative play play-iconbar"></i> LIHAT VIDEO</a>
            </div> --}}
        </div>
    </div>
</div>

  {{-- banner --}}
  <div class="content-wrapper">
    <div class="container">
      <section class="features-overview" id="features-section" >
        <div class="content-header">
          <h2>Pelayanan Kami </h2>
          <h6 class="section-subtitle text-muted">Bidang PAUD Dikmas membidangi Sie<br> Kesetaraan – Keaksaraan, Sie Pendidikan <br>Anak Usia Dini (PAUD), dan Sie Kursus Kelembagaan</h6>
        </div>
        <div class="d-md-flex justify-content-between">
          <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
              <img src="{{asset ('assets/images/logo-simessi1.png')}}" width="250px" alt="" class="img-icons">
              <h5 class="py-3">Kesetaraan - Keaksaraan</h5>
              <p class="text-muted">Sie Kesetaraan - Keaksaraan adalah seksie layanan pendidikan yang berorientasi pada Program Pendidikan Kesetaraan ( Program Paket A/setara SD, Program Paket B/setara SMP, Program Paket C/setara SMA ) dan Program Pendidikan Keaksaraan.</p>
              {{-- <a href="#"><p class="readmore-link">Readmore</p></a>   --}}
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
              <img src="{{asset ('assets/images/logo-simessi2.png')}}" width="250px" alt="" class="img-icons">
              <h5 class="py-3">Pendidikan Anak Usia Dini</h5>
              <p class="text-muted">Sie PAUD adalah seksie layanan pendidikan anak usia dini untuk memberikan bekal pengetahuan paling awal, keterampilan dasar, dan pembentukan karakter dalam mempersiapkan potensi diri untuk melanjutkan ke tingkat pendidikan yang lebih tinggi.</p>
              {{-- <a href="#"><p class="readmore-link">Readmore</p></a> --}}
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
              <img src="{{asset ('assets/images/logo-simessi3.png')}}" width="250px" alt="" class="img-icons">
              <h5 class="py-3">Kursus - Kelembagaan</h5>
              <p class="text-muted">Sie Kursus - Kelembagaan adalah seksie layanan pendidikan melalui kursus dan pelatihan untuk memberikan bekal pengetahuan, keterampilan dan menumbuhkan sikap mental dalam mengelola potensi diri dan lingkungan yang dapat dijadikan bekal untuk menjalani tahap kehidupan lebih baik.</p>
              {{-- <a href="#"><p class="readmore-link">Readmore</p></a> --}}
            </div>
          </div>
        </div>
      </section>     

      {{-- ---- --}}
      <section class="features-overview" id="features-section" >
        <div class="content-header">
          <h2>Alur Pendaftaran</h2>
          <h6 class="section-subtitle text-muted">Berikut merupakan beberapa langkah yang dapat ditempuh untuk melakukan pendaftaran sistem terkait.</h6>
        </div>
      </section>


      <section class="digital-marketing-service" id="digital-marketing-section">
  
        <div class="row align-items-center">
          <div class="col-md-3">
            <img src="{{asset ('landing-page/images/alur-1.png')}}" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <h3 class="m-0 " style="color:rgb(94, 214, 180);">LANGKAH 1</h3>
            <h3 class="m-0 " style="color:rgb(49, 52, 235);">Daftarkan Lembaga Anda</h3>
            <p class="py-4 m-0 text-muted">Sebelum daftar, pastikan lembaga Anda sudah memenuhi kriteria lembaga penyelenggara pendidikan non formal yang mempunyai NPSN.</p>
          </div>

          <div class="col-md-3">
            <img src="{{asset ('landing-page/images/alur-2.png')}}" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <h3 class="m-0  " style="color:rgb(94, 214, 180);">LANGKAH 2</h3>
            <h3 class="m-0 " style="color:rgb(49, 52, 235);">Pilih Seksie Pelayanan</h3>
            <p class="py-4 m-0 text-muted">Pastikan seksie pelayanan yang dipilih sesuai dengan kriteria lembaga Anda.</p>
          </div>
        </div>
        <br>
        <div class="row align-items-center">
          <div class="col-md-3">
            <img src="{{asset ('landing-page/images/alur-3.png')}}" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <h3 class="m-0 " style="color:rgb(94, 214, 180);">LANGKAH 3</h3>
            <h3 class="m-0 " style="color:rgb(49, 52, 235);">Ajukan Dokumen</h3>
            <p class="py-4 m-0 text-muted">Pastikan Anda mengisi instrumen secara lengkap dan benar sesuai dokumen yang valid.</p>
          </div>
        
          <div class="col-md-3">
            <img src="{{asset ('landing-page/images/alur-4.png')}}" alt="" class="img-fluid">
          </div>
          <div class="col-md-3">
            <h3 class="m-0  " style="color:rgb(94, 214, 180);">LANGKAH 4</h3>
            <h3 class="m-0 " style="color:rgb(49, 52, 235);">Segera Registrasi</h3>
            <a href="/login" class="btn btn-success mt-3" >Registrasi Sekarang</a>
            <div class="col-lg-9 col-xl-8 p-0">
            </div>
          </div>
        </div>    
      </div>
    </section>     
    <br><br>

    <footer class="footer" style="background-color:rgba(240, 242, 248, 0.816);" id="kontak">
      <div class="container">
          <div class="row pb-5 pt-5">

              <div class="col-lg-3 col-6 mb-0 mb-md-4 pb-0 pb-md-2">
                  <div class="logo-footer mb-3 text-md-left text-center">
                      <img src="{{ asset ('assets/images/Logo-kabupaten-Tangerang.png') }}" height="100" alt="">
                  </div>
                  <div class="mb-4 text-md-left text-center judul-utama-footer">
                    BIDANG PAUD DIKMAS<br>
                    DINAS PENDIDIKAN <br>
                    KABUPATEN TANGERANG
                  </div>
                  <ul class="list-unstyled social-icon social mb-0 mt-4 text-md-left text-center">
                      <li class="list-inline-item"><a style="color:rgb(136, 49, 235);" target="_blank" href="#" class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook fea icon-sm fea-social"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a></li>
                      <li class="list-inline-item"><a style="color:rgb(136, 49, 235);" target="_blank" href="#" class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a></li>
                      <li class="list-inline-item"><a style="color:rgb(136, 49, 235);" target="_blank" href="#" class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter fea icon-sm fea-social"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a></li>
                      <li class="list-inline-item"><a style="color:rgb(136, 49, 235);" target="_blank" href="#" class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube fea icon-sm fea-social"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></a></li>
                  </ul>
              </div>
              
              <div class="col-lg-5 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                  <div class="title-heading ml-lg-4 ">
                      <h4 class="mb-4 text-md-left text-center"  style="color:rgb(171, 174, 179);">Hubungi kami</h4>
                      <div class="media contact-detail align-items-center mt-3">
                          <div class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-m-md text-dark mr-3"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                          </div>
                          <div class="media-body content">
                              <h5 class="mb-0" style="color:rgb(171, 174, 179);">Surel</h5>
                              <a href="mailto:kesetaraan.tangerangkab@gmail.com" style="color:rgb(136, 49, 235);">kesetaraan.tangerangkab@gmail.com</a>
                          </div>
                      </div>
                      
                      <div class="media contact-detail align-items-center mt-3">
                          <div class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone fea icon-m-md text-dark mr-3"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                          </div>
                          <div class="media-body content">
                              <h5 class="mb-0" style="color:rgb(171, 174, 179);">Telepon / Faks</h5>
                              <a href="tel:0215725041"  style="color:rgb(136, 49, 235);">(021)5990707  /  (021)5990711</a>
                          </div>
                      </div>
                      
                      <div class="media contact-detail align-items-center mt-3">
                          <div class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin fea icon-m-md text-dark mr-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                          </div>
                          <div class="media-body content">
                              <h5 class="mb-0" style="color:rgb(171, 174, 179);">Alamat</h5>
                              <a href="https://goo.gl/maps/Lj6E85A8CoGRK2xT6" target="_blank" style="color:rgb(136, 49, 235);">Jl. H. Abdul Hamid, Komplek Perkantoran Pemerintah Kabupaten Tangerang, Tigaraksa 15720</a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                  <h4 class="mb-4 text-md-left text-center" style="color:rgb(171, 174, 179);">Lokasi</h4>
                  <iframe src="https://maps.google.com/maps?q=Jl.%20H.%20Abdul%20Hamid,%20Komplek%20Perkantoran%20Pemerintah%20Kabupaten%20Tangerang,%20Tigaraksa%2015720&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>

              {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="282" height="226" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20H.%20Abdul%20Hamid,%20Komplek%20Perkantoran%20Pemerintah%20Kabupaten%20Tangerang,%20Tigaraksa%2015720&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org">pirate bay</a><br><style>.mapouter{position:relative;text-align:right;height:226px;width:282px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:226px;width:282px;}</style></div></div> --}}
          </div>
      </div>
  </footer>


  <footer class="footer pt-5 pb-5"  style="background-color:rgb(0, 1, 2);">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left">
                    <p class="mb-0" style="color:rgb(240, 242, 248);" >©Bidang PAUD Dikmas DINAS PENDIDIKAN KABUPATEN TANGERANG
                    </p>
                </div>
            </div>
            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
            </div>
        </div>
    </div>
  </footer>
           

     
      {{-- <section class="contact-details" id="contact-details-section">
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <img src="images/Group2.svg" alt="" class="pb-2">
            <div class="pt-2">
              <p class="text-muted m-0">mikayla_beer@feil.name</p>
              <p class="text-muted m-0">906-179-8309</p>
            </div>         
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Get in Touch</h5>
            <p class="text-muted">Don’t miss any updates of our new templates and extensions.!</p>
            <form>
              <input type="text" class="form-control" id="Email" placeholder="Email id">
            </form>
            <div class="pt-3">
              <button class="btn btn-dark">Subscribe</button>
            </div>   
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Our Guidelines</h5>
            <a href="#"><p class="m-0 pb-2">Terms</p></a>   
            <a href="#" ><p class="m-0 pt-1 pb-2">Privacy policy</p></a> 
            <a href="#"><p class="m-0 pt-1 pb-2">Cookie Policy</p></a> 
            <a href="#"><p class="m-0 pt-1">Discover</p></a> 
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="pb-2">Our address</h5>
              <p class="text-muted">518 Schmeler Neck<br>Bartlett. Illinois</p>
              <div class="d-flex justify-content-center justify-content-md-start">
                <a href="#"><span class="mdi mdi-facebook"></span></a>
                <a href="#"><span class="mdi mdi-twitter"></span></a>
                <a href="#"><span class="mdi mdi-instagram"></span></a>
                <a href="#"><span class="mdi mdi-linkedin"></span></a>
              </div>
          </div>
        </div>  
      </section>
      <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2019<a href="https://www.bootstrapdash.com/" class="px-1">Bootstrapdash.</a>All rights reserved.</p>
      </footer> --}}
      <!-- Modal for Contact - us Button -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email-1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
   
    </div> 
  </div>
  <script src="{{ asset ('landing-page/vendors/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset ('landing-page/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset ('landing-page/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset ('landing-page/vendors/aos/js/aos.js') }}"></script>
  <script src="{{ asset ('landing-page/js/landingpage.js') }}"></script>
 

 
</body>
</html>