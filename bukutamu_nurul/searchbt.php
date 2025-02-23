<script type="text/javascript">
    function validasi(form) {
        var cekcari = form.cari.value;
        if (cekcari == 0) {
            alert("Masukan kata kunci!");
            form.cari.focus();
            return (false);
        }
        return (true);
    }
</script>
<!DOCTYPE html>

<html>
<head>

<title>Buku Tamu</title>
<style>
body {
  font-family: sans-serif;
  background-color: #ffe4e1; /* Pink pastel sebagai latar belakang */
}

h1 {
  color: #ff69b4; /* Pink terang untuk judul */
  text-align: center;
  margin-top: 20px;
}
form {
  width: 500px; /* Atur lebar formulir */
  margin: 0 auto; /* Tengahkan formulir */
}

label {
  display: block; /* Jadikan label ditampilkan sebagai blok */
  margin-bottom: 5px; /* Berikan margin bawah pada label */
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%; /* Atur lebar input dan textarea 100% */
  padding: 8px; /* Berikan padding pada input dan textarea */
  margin-bottom: 10px; /* Berikan margin bawah pada input dan textarea */
  box-sizing: border-box; /* Pastikan padding tidak menambah lebar elemen */
}

textarea {
  height: 120px; /* Atur tinggi textarea */
}

input[type="submit"] {
  background-color: #ffb6c1; /* Berikan warna latar belakang pada tombol */
  color: white; /* Berikan warna teks putih pada tombol */
  padding: 10px 15px; /* Berikan padding pada tombol */
  border: none; /* Hilangkan border pada tombol */
  cursor: pointer; /* Ubah cursor menjadi pointer saat diarahkan ke tombol */
}
input[type="reset"] {
  background-color: #ffb6c1; /* Berikan warna latar belakang pada tombol */
  color: white; /* Berikan warna teks putih pada tombol */
  padding: 10px 15px; /* Berikan padding pada tombol */
  border: none; /* Hilangkan border pada tombol */
  cursor: pointer; /* Ubah cursor menjadi pointer saat diarahkan ke tombol */
}
table {
  width: 80%;
  margin: 20px auto;
  border-collapse: collapse;
  border: 2px solid #ffb6c1; /* Pink pastel untuk bingkai tabel */
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ffb6c1; /* Pink pastel untuk garis antar baris */
}

tr:hover {
  background-color: #fff0f5; /* Rose white sebagai latar belakang baris saat dihover */
}

.kembali {
  display: block;
  width: 100px;
  margin: 20px auto;
  padding: 10px;
  text-align: center;
  background-color: #ffb6c1; /* Pink pastel untuk tombol kembali */
  color: white;
  text-decoration: none;
  border-radius: 5px;
}

.kembali:hover {
  background-color: #ff69b4; /* Pink terang saat tombol dihover */
}

/* Style untuk search bar */
.search-container {
  width: 80%;
  margin: 20px auto;
}

.search-container input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ffb6c1; /* Pink pastel untuk bingkai search bar */
  border-radius: 5px;
}

.search-container button {
  padding: 10px;
  background-color: #ffb6c1; /* Pink pastel untuk tombol search */
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
</style>
</head>

<body>
<div class="center-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"></div>
            <div class="bgform" align="center">
                <h3><b>BUKU TAMU</b></h3>
                <div style="width: 900px;">
                    <hr>
                    <form role="form" method="post" onsubmit="return validasi(this)">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kolom</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="kolom">
                                    <option value="nama">Nama</option>
                                    <option value="email">Email</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kata kunci</label>
                            <div class="col-sm-9">
                                <input type="text" name="cari" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="submit" class="btn btn-success" name="submit" value="Proses">&nbsp
                            <a class="btn btn-info" href="home.php">Kembali</a>&nbsp
                        </div>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Komentar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $kolom = isset($_POST['kolom']) ? $_POST['kolom'] : '';
                            $cari = isset($_POST['cari']) ? $_POST['cari'] : '';
                            $conn = mysqli_connect("localhost", "root", "", "bukutamu_nurul");
                            if (!empty($kolom) && !empty($cari)) {
                                $hasil = $conn->query("SELECT * FROM bukutamu WHERE $kolom LIKE '%$cari%'");
                            }if ($cari == "") {
                                echo "";
                            } else {
                                $jumlah = mysqli_num_rows($hasil);
                                echo "Ditemukan : $jumlah";
                                if (mysqli_num_rows($hasil) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($hasil)) {
                                        $no++;
                                        echo
                                        '<tr>
                                        <td>' . $no . '</td>
                                        <td>' . $row['nama'] . '</td>
                                        <td>' . $row['email'] . '</td>
                                        <td>' . $row['komentar'] . '</td>
                                        </tr>';
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
    </div>
    </div>
</body>

</html>