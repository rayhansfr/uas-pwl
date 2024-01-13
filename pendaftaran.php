<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <?php include 'components/link.php'; ?>

  <script>
    // $(document).ready(function() {
    // Fungsi untuk mereset formulir
    function resetForm() {
      $(':input').val('');
      $('input:file').val('');
      $('select').prop('selectedIndex', 0);
      $(':radio, :checkbox').prop('checked', false);
    }

    // Menggunakan fungsi resetForm saat tombol "Reset all" diklik
    $('#resetButton').click(function() {
      resetForm();
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
              <img src="assets/pendaftaran/talent.png" alt="Talent" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>

            <!-- FORM GOES HERE -->
            <div class="col-xl-6">
              <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">Pendaftaran Peserta Didik Baru</h3>

                  <!-- ROW 1 -->
                  <div class="row">
                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="text" id="namaLengkap" name="namaLengkap" class="form-control form-control-lg" required />
                        <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <div class="form-outline">
                        <input type="text" id="NIK" name="NIK" class="form-control form-control-lg" required />
                        <label class="form-label" for="NIK">NIK</label>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-outline">
                        <input type="number" id="anakKe" name="anakKe" class="form-control form-control-lg" required />
                        <label class="form-label" for="anakKe">Anak Ke </label>
                      </div>
                    </div>
                  </div>

                  <!-- ROW 4 -->
                  <div class="form-outline mb-4">
                    <label for="agama" class="form-label">Agama</label>
                    <select id="agama" class="form-select" name="agama" required>
                      <option value="Islam">Islam</option>
                      <option value="Kristen Katolik">Kristen Katolik</option>
                      <option value="Kristen Protestan">Kristen Protestan</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Kong Hu-Chu">Kong Hu-Chu</option>
                    </select>
                  </div>

                  <!-- ROW 2 -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="namaAyah" name="namaAyah" class="form-control form-control-lg" required />
                        <label class="form-label" for="namaAyah">Nama Ayah</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="namaIbu" name="namaIbu" class="form-control form-control-lg" required />
                        <label class="form-label" for="namaIbu">Nama Ibu</label>
                      </div>
                    </div>
                  </div>

                  <!-- ROW 3 -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="pekerjaanAyah" name="pekerjaanAyah" class="form-control form-control-lg" required />
                        <label class="form-label" for="pekerjaanAyah">Pekerjaan Ayah</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="pekerjaanIbu" name="pekerjaanIbu" class="form-control form-control-lg" required />
                        <label class="form-label" for="pekerjaanIbu">Pekerjaan Ibu</label>
                      </div>
                    </div>
                  </div>

                  <!-- ROW 4 -->
                  <div class="form-outline mb-4">
                    <input type="text" id="alamat" name="alamat" class="form-control form-control-lg" required />
                    <label class="form-label" for="alamat">Alamat Lengkap</label>
                  </div>


                  <!-- APA -->
                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                    <h6 class="mb-0 me-4">Jenis Kelamin: </h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="jenisKelamin" id="laki-laki" value="Laki-Laki" required />
                      <label class="form-check-label" for="laki-laki">Laki-laki</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="Perempuan" />
                      <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                  </div>

                  <!-- APA -->
                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                    <h6 class="mb-0 me-4">Tanggal Lahir: </h6>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="date" class="form-control" name="tanggalLahir" id="tanggalLahir" placeholder="Select date" required />
                      </div>
                    </div>
                  </div>

                  <!-- APA -->
                  <div class="form-outline mb-4">
                    <input type="text" id="tempat" name="tempat" class="form-control form-control-lg" required />
                    <label class="form-label" for="tempat">Tempat Lahir</label>
                  </div>

                  <!-- APA -->
                  <div class="form-outline mb-4">
                    <input type="text" id="noHP" name="noHP" class="form-control form-control-lg" required />
                    <label class="form-label" for="noHP">No Handphone</label>
                  </div>

                  <!-- UPLOAD BERKAS -->
                  <!-- Upload Scan Kartu Keluarga -->
                  <div class="form-outline mb-4">
                    <input type="file" id="scanKK" name="scanKK" class="form-control form-control-lg" accept=".jpg, .jpeg" required />
                    <label class="form-label" for="scanKK">Upload Scan Kartu Keluarga (JPG only)</label>
                  </div>

                  <!-- Upload Scan KTP Orang Tua -->
                  <div class="form-outline mb-4">
                    <input type="file" id="scanKTP" name="scanKTP" class="form-control form-control-lg" accept=".jpg, .jpeg" required />
                    <label class="form-label" for="scanKTP">Upload Scan KTP Orang Tua (JPG only)</label>
                  </div>

                  <!-- Upload Foto Anak -->
                  <div class="form-outline mb-4">
                    <input type="file" id="fotoAnak" name="fotoAnak" class="form-control form-control-lg" accept=".jpg, .jpeg" required />
                    <label class="form-label" for="fotoAnak">Upload Foto Anak (JPG only)</label>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" id="resetButton" class="btn btn-light btn-lg">Reset all</button>
                    <button class="btn btn-primary btn-lg ms-3" type="submit" name="submit">Daftar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>