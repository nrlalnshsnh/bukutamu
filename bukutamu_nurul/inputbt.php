<script type="text/javascript">
    function validasi(form){
        var ceknama = form.nama.value;
        var cekemail = form.email.value;
        var cekkomen = form.komentar.value;
        if (ceknama == 0){
            alert("periksa kembali nama anda!");
            form.nama.focus();
            return (false);
        }
        if (cekemail == 0 || cekemail.indexOf("@",1)==-1){
            alert("periksa kembali email anda!");
            form.email.focus();
            return (false);
        }
        if (cekkomen == 0) {
            alert("periksa kembali komentar anda!");
            form.komentar.focus();
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
  background-color: #ffe4e1; /* Rose pastel */
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}

.container {
  background-color: #fff0f5; /* Lavender blush pastel */
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  width: 400px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #c71585; /* Medium violet red pastel */
}

label {
  display: block;
  margin-bottom: 5px;
  color: #db7093; /* Pale violet red pastel */
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ffb6c1; /* Light pink pastel */
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #fffaf0; /* Floral white pastel */
}


textarea {
  height: 120px;
}

button {
  background-color: #ff69b4; /* Hot pink pastel */
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #ff1493; /* Deep pink pastel */
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
.btn-group {
  display: flex;
  justify-content: flex-end;
}

.btn-group button {
  margin-left: 10px;
}
</style>
        </head>
    <body>
    <div class="continer">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="bgform" align="center">
                    <h3><b>BUKU TAMU</b></h3>
                    <div style="width: 500px;">
                    <hr>
                    <div style="width: 500px;"align ="left">
                    <form role="form" method="post" onsubmit="return validasi(this)">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control">
</div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
        <input type="text" name="email" class="form-control" >
</div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label" >Komentar</label>
    <div class="col-sm-9">
        <textarea name="komentar" class="form-control"></textarea>
</div>
</div>
<div class="form-group row">
   <input type="submit" class="btn btn-success" name="submit" value="Proses">&nbsp
   <input type="reset" class="btn btn-danger" value="Hapus">&nbsp
   <a class="btn btn-info" href="home.php">Kembali</a>&nbsp
</div>
</form>
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
<?php
$submit = @$_POST['submit'];
if (isset($submit)) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $conn = mysqli_connect("localhost", "root", "", "bukutamu_nurul") or die("koneksi gagal");
    $sql = "INSERT INTO `bukutamu` (nama,email,komentar)VALUES('$nama','$email','$komentar')";
    $result = mysqli_query($conn, $sql);
    if ($result == true) {
        ?><script type="text/javascript">
                    window.location='viewbt.php';
                    </script><?php
    } else {
        echo "error";
    }
}
?>


    