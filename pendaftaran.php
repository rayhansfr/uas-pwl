<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php include 'components/link.php'; ?>

    <script>
        $(document).ready(function () {
            // Fungsi untuk mereset formulir
            function resetForm() {
                $(':input').val('');
                $('input:file').val('');
                $('select').prop('selectedIndex', 0);
                $(':radio, :checkbox').prop('checked', false);
            }

            // Menggunakan fungsi resetForm saat tombol "Reset all" diklik
            $('#resetButton').click(function () {
                resetForm();
            });

            // Menggunakan fungsi resetForm saat tombol "Submit form" diklik
            $('#submitButton').click(function () {
                resetForm();
                // Menampilkan notifikasi setelah reset
                alert("Terima Kasih telah mendaftarkan putra/i nya untuk menjadi bagian dari PAUDQu Assabiqunal Awwalun. Ditunggu kabar selanjutnya melalui WhatsApp ya! -admin ppdb");
            });
        });
    </script>
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <section id="formulirppdb">
      <div class="container my-5">
        <div class="row p-4 d-flex justify-content-center align-items-center h-100 rounded-3 border shadow-lg">
          <div class="col my-4">
              <div class="row g-0">
                <!-- PICTURE GOES HERE -->
                <div class="col-xl-6 d-none d-xl-block">
                  <img src="assets/pendaftaran/talent.png" alt="Talent" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"/>
                </div>

                <!-- FORM GOES HERE -->
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-5 text-uppercase">Pendaftaran Peserta Didik Baru</h3>
                    
                    <!-- ROW 1 -->
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m">Nama Lengkap</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n">Nama Panggilan</label>
                        </div>
                      </div>
                    </div>

                    <!-- ROW 2 -->
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m1">Nama Ayah</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n1">Nama Ibu</label>
                        </div>
                      </div>
                    </div>

                    <!-- ROW 3 -->
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m1">Pekerjaan Ayah</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n1">Pekerjaan Ibu</label>
                        </div>
                      </div>
                    </div>

                    <!-- ROW 4 -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">Alamat Lengkap</label>
                    </div>

                    <!-- APA -->
                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                      <h6 class="mb-0 me-4">Jenis Kelamin: </h6>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                          value="option1" />
                        <label class="form-check-label" for="femaleGender">Laki-laki</label>
                      </div>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                          value="option2" />
                        <label class="form-check-label" for="maleGender">Perempuan</label>
                      </div>
                    </div>

                    <!-- APA -->
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <select class="select" id="tanggalLahir">
                        <option value="" selected disabled>Tanggal Lahir</option>
                          <?php
                          for ($day = 1; $day <= 31; $day++) {
                              echo "<option value='$day'>$day</option>";
                          }
                          ?>
                        </select>
                      </div>

                      <div class="col-md-6 mb-4">
                        <select class="select" id="tahunLahir">
                        <option value="" selected disabled>Tahun Lahir</option>
                          <?php
                          $startYear = 2010;
                          $endYear = 2024;

                          for ($year = $startYear; $year <= $endYear; $year++) {
                              echo "<option value='$year'>$year</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                    <!-- APA -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example9" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example9">Tempat Lahir</label>
                    </div>

                    <!-- APA -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example9" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example9">No Handphone</label>
                    </div>

                    <!-- UPLOAD BERKAS -->
                    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
                      <!-- Upload Scan Kartu Keluarga -->
                      <div class="form-outline mb-4">
                          <input type="file" id="scanKK" name="scanKK" class="form-control form-control-lg" accept=".jpg, .jpeg" />
                          <label class="form-label" for="scanKK">Upload Scan Kartu Keluarga (JPG only)</label>
                      </div>

                      <!-- Upload Scan KTP Orang Tua -->
                      <div class="form-outline mb-4">
                          <input type="file" id="scanKTP" name="scanKTP" class="form-control form-control-lg" accept=".jpg, .jpeg" />
                          <label class="form-label" for="scanKTP">Upload Scan KTP Orang Tua (JPG only)</label>
                      </div>

                      <!-- Upload Foto Anak -->
                      <div class="form-outline mb-4">
                          <input type="file" id="fotoAnak" name="fotoAnak" class="form-control form-control-lg" accept=".jpg, .jpeg" />
                          <label class="form-label" for="fotoAnak">Upload Foto Anak (JPG only)</label>
                      </div>

                      <div class="d-flex justify-content-end pt-3">
                          <button type="button" id="resetButton" class="btn btn-light btn-lg">Reset all</button>
                          <button type="button" id="submitButton" class="btn btn-warning btn-lg ms-2">Submit form</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>