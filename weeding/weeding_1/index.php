<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Animasi -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="https://img.icons8.com/doodle/48/000000/wedding-rings--v1.png"/>
    <title>Wedding Alfian & Verika</title>
  </head>

  <body id="home">
    <!-- play music -->
    <video id="video1" width="420" controls loop>
      <source src="music/club_eighties-dari_hati.mp4" type="video/mp4" />
      Your browser does not support HTML video.
    </video>

    <!-- Navbar bottom -->
    <div id="navbar1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="15">
      <nav class="navbar navbar-light bg-white navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="15">
        <ul class="navbar-nav nav-justified w-100">
          <li class="nav-item">
            <a href="#home" class="nav-link" onclick="return theFunction();" >
              <i class="bi bi-house-fill"></i>
              <br />
              Home</a
            >
          </li>
          <li class="nav-item">
            <a href="#wedding" class="nav-link">
              <i class="bi bi-heart-fill"></i>
              <br />
              Mempelai
            </a>
          </li>
          <li class="nav-item">
            <a href="#resepsi" class="nav-link">
              <i class="bi bi-calendar-check-fill"></i>
              <br />
              Resepsi</a
            >
          </li>
          <li class="nav-item">
            <a href="#lokasi" class="nav-link">
              <i class="bi bi-geo-alt-fill"></i>
              <br />
              Lokasi</a
            >
          </li>
        </ul>
      </nav>
    </div>

    <!--  jumbotron -->
    <section class="jumbotron text-center" style="overflow-x: hidden">
      <div class="font-display">
        <p class="pt-5 fw-bolder the-wedding-of" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="20">The Wedding Of</p>
        <h4 class="display-3 fw-bolder" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="20">Verika</h4>
        <h4 class="display-3 fw-bolder" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="20">And</h4>
        <h4 class="display-3 fw-bolder" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="20">Alfian</h4>
        <p class="pt-1 fw-bolder the-wedding-of-tgl" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="20">14 November 2021</p>

        <a href="#pembukaan"><button class="btn btn-dark bukaUndangan p-3" onclick="bukaUndangan()" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="20">Buka Undangan</button></a>
        <!-- volume speaker -->
        <i onclick="playPause(this)" id="volume" class="bi bi-volume-down-fill" style="font-size: 2rem; color: #2c3e50"></i>
      </div>
    </section>

    <!-- end jumbotron -->
    <div id="full-bg">
      <!-- Pembukaan -->
      <section id="pembukaan" style="overflow-x: hidden">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12 pt-2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="15">
              <h1 class="display-5 fw-bold">بِسْمِ اللهِ الرَّحْمنِ الرَّحِيمِ-</h1>
              <p class="fs-6 pt-3 pb-5">
                Dengan memohon rahmat dan ridho Allah SWT yang telah menciptakan Mahluk-Nya secara berpasang-pasangan, kami bermaksud menyelenggarakan pernikahan anak kami.<br /><br />
                Tanpa mengurangi rasa hormat, sehubungan dengan situasi pandemi Covid-19, mohon maaf apabila dalam pelaksanaan acara Akad Nikah, kami membatasi jumlah tamu undangan yang hadir. Kami memohon do'a restu agar menjadi keluarga
                yang Sakinah Mawaddah Warrahmah. Atas perhatiannya, kami ucapkan terimakasih. <br />
                <br />Wassalamu'alaikum Warahmatullahi Wabarakatuh
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--  -->

      <!-- surat ar-rum -->
      <section id="surat" style="overflow-x: hidden">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <h1 class="display-5 fw-bold" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="15">QS.Ar Rum 21</h1>
              <p class="fs-6 pt-3 lh-lg isi-surat" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="15">
                ❝ Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan- Nya diantaramu rasa kasih dan sayang. Sesungguhnya
                pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir. ❞ <br />
                <br />(Ar-Rum: 21)
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End surat ar-rum -->

      <!-- Wedding -->
      <section id="wedding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h5 class="display-6 nama-mempelai" data-aos="zoom-in" data-aos-duration="1000">Verika Khairani, S.Kom</h5>
              <h6 class="pb-5" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="20">Putri Pertama Bapak Badrun Taman <br />Dan <br />Ibu  Dwi Murwati</h6>
              <h5>Dengan</h5>
              <h5 class="display-6 nama-mempelai pt-5 data-aos="fade-left" data-aos-duration="2000" data-aos-delay="20"" data-aos="zoom-in" data-aos-duration="500">Alfian Latuna Tama, S.Kom</h5>
              <h6 data-aos="fade-left" data-aos-duration="2000" data-aos-delay="20">Putra pertama Bapak Pelda. Mar. Supriyanto <br/>Dan<br />Ibu  Nuryati (Almh)</h6>
            </div>
          </div>
        </div>
      </section>
      <!-- End Wedding -->

      <!-- Tanggal Wedding -->
      <section id="resepsi" style="overflow-x: hidden">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <h2 class="akad display-5 fw-bold" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="15">Save The Date</h2>
            </div>
            <!-- COUNTDOWN NIKAH -->
            <section id="countDownNikah">
              <div class="container">
                <div class="col-md-12">
                  <div class="row">
                    <div class="countdown">
                      <div class="container-day">
                        <h3 class="day">Time</h3>
                        <h3 class="days">Hari</h3>
                      </div>
                      <div class="container-hour">
                        <h3 class="hour">Time</h3>
                        <h3 class="days">Jam</h3>
                      </div>
                      <div class="container-minute">
                        <h3 class="minute">Time</h3>
                        <h3 class="days">Menit</h3>
                      </div>
                      <div class="container-second">
                        <h3 class="second">Detik</h3>
                        <h3 class="days">Detik</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="row d-flex justify-content-around fs-5 pt-1 lh-lg">
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="15">
              <h5 class="fs-5 fw-bold pb-2">Akad</h5>
              <h6 class="fs-6"><i class="bi bi-calendar-date"></i> Minggu, 30 Oktober 2022</h6>
              <h6 class="fs-6"><i class="bi bi-clock-fill"></i> Pukul 10.00 Wib</h6>
              <h6 class="fs-6"><i class="bi bi-pin-map-fill"></i> Masjid Al-Mahdy, Ujung Aspal</h6>
            </div>
            <div class="col-md-4" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="15">
              <h5 class="fs-5 fw-bold pt-4">Resepsi</h5>
              <h6 class="fs-6"><i class="bi bi-calendar-date"></i> Minggu, 14 November 2021</h6>
              <h6 class="fs-6"><i class="bi bi-clock-fill"></i> Pukul 13.00 - 16.00 Wib</h6>
              <h6 class="fs-6"><i class="bi bi-pin-map-fill"></i> Gedung Aula - Masjid Al-Mahdy, Ujung Aspal</h6>
            </div>
          </div>
        </div>
      </section>
      <!-- End Tanggal Wedding -->

      <!-- Gallery -->
      <section id="gallery">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2 class="display-5 fw-bold pb-4" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="15">Gallery</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000">
              <a href="">
                <img src="img/2.jpg" alt="Gambar 1" class="img-fluid gallery-img" />
              </a>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000">
              <a href="">
                <img src="img/3.jpg" alt="Gambar 2" class="img-fluid gallery-img" />
              </a>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000">
              <a href="">
                <img src="img/1.jpg" alt="Gambar 3" class="img-fluid gallery-img" />
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gallery -->

      <!-- Start lokasi -->
      <section id="lokasi" style="overflow-x: hidden">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <h2 class="display-5 fw-bold pb-4 locations" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="15">Lokasi Pernikahan</h2>
              <a href="https://goo.gl/maps/Kw6MAGz8cLrAb4TP9" target="_blank" class="btn btn-dark mb-4">Arahkan ke Google Maps</a>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.958150411601!2d106.9244573!3d-6.3305609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e2d79dbb953469!2sMasjid%20Besar%20Al-Mahdy!5e0!3m2!1sid!2sid!4v1623310349117!5m2!1sid!2sid"
                width="100%"
                height="450"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="15"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
      <!-- End lokasi -->

      <!-- protokol -->
      <div class="container protokoll">
        <div class="row text-center">
          <div class="col-sm-12 pt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="15">
            <p class="fs-6 pb-4">Tanpa mengurangi rasa hormat kami, <br/>di masa pandemi di mohon untuk
            </p>
          </div>
          <!-- icon -->
          <div class="container row d-flex justify-content-around">
            <div class="row">
              <div class="col-sm-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="15">
                <p>Gunakan Masker</p>
                <img src="img/icon1.png"  width="100px" alt="">
              </div>
              <div class="col-sm-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="15">
                <p>Mencuci Tangan</p>
                <img src="img/icon2.png"  width="100px" alt="">

              </div>
              <div class="col-sm-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="15">
                <p>Cek Suhu tubuh</p>
                <img src="img/icon3.png"  width="100px" alt="">
              </div>
              <div class="col-sm-6 pt-4 jaga-jarak" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="15">
                <p>Jaga Jarak</p>
                <img src="img/icon4.png"  width="150px" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/TextPlugin.min.js"></script>

    <!-- <script src="js/countdown.js"></script> -->
    <script src="js/countdownbaru.js"></script>
    <script>

      function bukaUndangan() {
        document.getElementById("home").style.overflow = "visible";
        // document.getElementById("navbar1").style.display = "block";
        document.getElementById("volume").style.display = "block";

        document.getElementById("video1").play();
      }
      const myVideo = document.getElementById("video1");

      function playPause(x) {
        if (myVideo.paused) {
          myVideo.play();
          document.getElementById("volume").className = "bi bi-volume-down-fill";
        } else {
          myVideo.pause();
          document.getElementById("volume").className = "bi bi-volume-mute-fill";
        }
      }
    </script>
  </body>
</html>
