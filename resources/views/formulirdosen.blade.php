<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tambah Dosen</title>
  </head>
  <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 bg-primary py-4"></div>
            </div>
            <div class="row">
                <div class="col-lg-2 vh-100">
                    <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link active" href="/dosen">Dosen</a>
                        <a class="nav-link" href="#">Mahasiswa</a>
                        <a class="nav-link" href="#">Skripsi</a>
                    </div>
                </div>

                    <div class="col-lg-10 vh-100">
                    <div class="card">
                    <div class="card-body">
                        <form action="/dosen/simpandosen" method="POST" class="pt-2 pb-2">
                            @csrf
                            <div class="form-group w-25">
                                <label>NIDN</label>
                                <input type="number" name="nidn" class="form-control" placeholder="Masukan NIDN" required>
                            </div>
                            <div class="form-group w-25">
                                <label>Nama Dosen</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Dosen" required>
                            </div>
                            <label>Status</label>
                            <div class="form-check w-25=">
                                <input type="radio" name="status" value="Dosen Tetap" class="form-check-input">
                                <label>Dosen Tetap</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="radio" name="status" value="Dosen Tidak Tetap" class="form-check-input">
                                <label>Dosen Tidak Tetap</label>
                            </div>
                            <div class="form-group w-25">
                                <label>Jabatan Fungsional</label>
                                <select name="jafung" class="form-control">
                                    <option value="0">Pilih Jabatan Fungsional</option>
                                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                                    <option value="Asisten Ahli">Asisten Ahli</option>
                                    <option value="Lektor">Lektor</option>
                                    <option value="Lektor Kepala">Lektor Kepala</option>
                                    <option value="Guru Besar">Guru Besar</option>
                                </select>
                            </div>
                            <label>Bidang Keahlian</label>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="pakar[]" value="AI" class="form-check-input">
                                <label>AI</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="pakar[]" value="Web Developer" class="form-check-input">
                                <label>Web Developer</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="pakar[]" value="DB Engineer" class="form-check-input">
                                <label>DB Engineer</label>
                            </div>
                            <div class="form-group pt-4">
                                <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                            </div>
                        </form>
                </div>
                </div>
                </div>
                </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
