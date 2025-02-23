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
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Komentar</th>
</tr>
</thead><tbody>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "bukutamu_nurul");
    $hasil = $conn->query("select * from bukutamu");
    if (mysqli_num_rows($hasil) > 0) {
        $no = 0;
        while ($row = mysqli_fetch_array($hasil)) {
            $no++;
            echo '
            <tr>
            <td>' . $no . '</td>
            <td>' . $row['nama'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['komentar'] . '</td>
            </tr>';
        }
    }
    ?>
    </tbody>
</table>
<a class="btn btn-info" href="home.php">Kembali</a>&nbsp
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
