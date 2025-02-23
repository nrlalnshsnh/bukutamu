<?
$kolom = $_POST['kolom'];
$cari = $_POST['cari'];
$conn = mysqli_connect("localhost", "root", "", "bukutamu_nurul");
$hasil = $conn->query("select * from bukutamu where $kolom like'%$cari%'");
$jumlah = mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan : $jumlah";
echo "<br>";
while ($baris = mysqli_fetch_array(result: $hasil)) {
    echo "Nama : ";
    echo $baris[0];
    echo "<br>";
    echo "Email: ";
    echo $baris[1];
    echo "<br>";
    echo "Komentar :";
    echo $baris[2], "<br>";
}
?>