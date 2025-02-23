<HTML>
<HEAD>
<title>Simpan Buku Tamu</title>
</HEAD>
<BODY>
    <h1>Simpan Buku Tamu MySQL</h1>
    <?
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
    $conn = mysqli_connect
    ("localhost", "root", "", "bukutamu_nurul") or die("koneksi gagal");
    echo "Nama : $nama <br>";
    echo "Email : $email <br>";
    echo "Komentar : $komentar <br>";
    $sqlstr = "insert into bukutamu (nama,email,komentar) values ('$nama,'$email','$komentar')";
    $result = mysqli_query($conn, $sqlstr);
    echo "Simpan bukutamu berhasil dilakukan";
    ?>
</BODY>
</HTML>
