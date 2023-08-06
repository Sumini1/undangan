<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imo & maayy Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- SimplyCountdown -->
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css"/>
    <script src="countdown/simplyCountdown.min.js"></script>

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    
<section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center
text-white">
<main>
<h4>Kepada Bapak/Ibu/Saudara/i,</h4>
<h1>? & ?</h1>
<p>Akan melangsungkan resepsi pernikahan dalam :</p>
<div class="simply-countdown"></div>
<a href="#undangan" class="btn btn-lg mt-4">Lihat Undangan</a>

</main>
</section>

<nav class="navbar navbar-expand-md bg-body-transparent sticky-top mynavbar">
  <div class="container">
    <a class="navbar-brand" href="#">NI</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">NI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" aria-current="page" href="#home">HOME</a>
        <a class="nav-link" href="#info">INFO</a>
        <a class="nav-link" href="#story">STORY</a>
        <a class="nav-link" href="#gallery">GALLERY</a>
        <a class="nav-link" href="#rsvp">RSVP</a>
        <a class="nav-link" href="#gifts">GIFTS</a>
        
      </div>
      </div>
    </div>
  </div>
</nav>

<section id="home" class="home">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
          <h2>Acara Pernikahan</h2>
          <h3>Diselenggarakan pada 23 September 2023 di Cilembu, Jawa Barat.</h3>
          <p>Oleh karena itu dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i, untuk 
            hadir pada acara pernikahan kami</p>
      </div>
    </div>

      <div class="row couple">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-8 text-end">
              <h3>Imoo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque 
                  veniam repellat ex quisquam repellendus reiciendis.</p>
                  <p>Putra dari Bpk. Lorem <br> dan <br> Ibu Ipsum</p>
            </div>
            <div class="col-4">
              <img src="img/pria.jpeg" alt="Imoo" class="img-responsive rounded-circle">
            </div>
          </div>
        </div>

        <span class="heart"><i class="bi bi-heart-fill"></i></span>

        <div class="col-lg-6">
          <div class="row">
          <div class="col-4">
              <img src="img/wanita.jpeg" alt="Imoo" class="img-responsive rounded-circle">
            </div>
            <div class="col-8">
              <h3>Maay</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque 
                  veniam repellat ex quisquam repellendus reiciendis.</p>
                  <p>Putra dari Bpk. Ipsum <br> dan <br> Ibu Lorem</p>
            </div>
            
          </div>
        </div>

      </div>
  </div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        simplyCountdown('.simply-countdown', { 
        year: 2023, // required
            month: 9, // required
            day: 23, // required
            hours: 8, // Default is 0 [0-23] integer
            words: { //words displayed into the countdown
                days: { singular: 'hari', plural: 'hari' },
                hours: { singular: 'jam', plural: 'jam' },
                minutes: { singular: 'menit', plural: 'menit' },
                seconds: { singular: 'detik', plural: 'detik' }
            },
    });

    </script>
</body>
</html>