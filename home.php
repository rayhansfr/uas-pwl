<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php include 'components/link.php'; ?>
  </head>
  
  <body>
    <?php include 'components/navbar.php'; ?>

    <!-- SECTION HERO GOES HERE -->
    <section id="hero">
      <div class="container">
          <div class="d-flex align-items-center justify-content-end min-vh-100">
              <div class="text-end text-white col-sm-10">
                  <div class="title">
                    <h1 class="display-5 fw-bold lh-1 mb-3">PAUDQu Assabiqunal Awwalun</h1>
                  </div>
                  <p class="lead row-cols-lg-2">Mendidik Generasi Unggul, Cerdas, dan Qurani untuk Membangun Masa Depan Berkualitas</p>
              </div>
          </div>
      </div>
    </section>

    <!-- SECTION PROFIL GOES HERE -->
    <section id="profil">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/grid4.png" class="d-block mx-lg-auto img-fluid" alt="grid4" width="700" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Pendidikan Berbasis Al-Quran</h1>
            <p class="lead">Transformasi spiritual melalui pendekatan holistik: Akidah dan akhlak mulia, pemberantasan buta huruf Al-Quran, cinta Kitab Suci, serta persiapan membaca Al-Quran yang baik dan benar. Bergabunglah untuk membentuk masa depan bercahaya bersama kami!</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="infoppdb.php">
                <button type="button" class="btn btn-cust btn-lg px-4 me-md-2">Informasi PPDB</button>
              </a>  
              <a href="#program-unggulan">
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Program Unggulan</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- GALERI GOES HERE -->
    <section id="galeri">
      <div class="container px-4 py-5">
        <h1 class="text-center pb-2">Galeri</h1>
        
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('assets/galeri/kbm1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pb-5 mb-5 mt-4 display-6 lh-1 fw-bold">Kegiatan Belajar Mengajar</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('assets/galeri/outing1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pb-5 mb-5 mt-4 display-6 lh-1 fw-bold">Outing Class Ocean Dream</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('assets/galeri/manasik1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pb-5 mb-5 mt-4 display-6 lh-1 fw-bold">Praktik Manasik Haji</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('assets/galeri/palestine1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pb-5 mb-5 mt-4 display-6 lh-1 fw-bold">Celengan Peduli Palestina</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('assets/galeri/hutri1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pb-5 mb-5 mt-4 display-6 lh-1 fw-bold">Perayaan HUT RI</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('assets/galeri/dhuha1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pb-5 mb-5 mt-4 display-6 lh-1 fw-bold">Pembiasaan Sholat Dhuha</h2>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- PROGRAM UNGGULAN GOES HERE -->
    <section id="program-unggulan">
      <div class="container px-4 py-5" id="program-unggulan">
        <h1 class="border-bottom text-center pb-2">Program Unggulan</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 py-5">
          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">Calistung</h4>
              <p>Mengembangkan kemampuan literasi awal, matematika dasar, serta keterampilan sensorik-motorik.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">BTQ</h4>
              <p>Memperkenalkan dasar baca tulis Quran juga pemahaman nilai-nilai agama dan etika moral.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">English</h4>
              <p>Membiasakan dengan kosakata dan ekspresi dasar Bahasa Inggris dalam kehidupan sehari-hari.</p>
            </div>
          </div>
        
          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">Bahasa Arab</h4>
              <p>Mengenal dasar-dasar Bahasa Arab mulai dari huruf, kosakata, dan frasa sederhana.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">Surat & Ayat</h4>
              <p>Memperkuat hubungan dengan Al-Quran, berfokus pada hafalan surat pendek dan ayat pilihan.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">Hadits</h4>
              <p>Menanamkan nilai ehidupan dan etika Islami dengan hafalan hadits-hadits singkat dan bermakna.</p>
            </div>
          </div>
          
          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">Eksplorasi</h4>
              <p>Merangsang rasa ingin tahu dan kreativitas melalui eksplor alam, seni, dan ilmu pengetahuan sosial.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">Parenting</h4>
              <p>Mengedepankan peran orangtua dalam mendukung perkembangan anak dengan diskusi, workshop, dan seminar.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">Pembiasaan Ibadah</h4>
              <p>Mendorong pembentukan kebiasaan positif terlebih pembiasaan shalat, dzikir, dan aktivitas keagamaan.</p>
            </div>
          </div>


          <div class="col d-flex align-items-start">
            <img src="assets/icon/check.png" class="img-fluid me-3" width="35" alt="checkbox">
            <div>
              <h4 class="fw-bold mb-0">Nahwu Shorof</h4>
              <p>Memahami dasar tata Bahasa Arab (Nahwu) dan morfologi (Shorof) sebagai pondasi pemahaman Bahasa Arab.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>