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
    width: 500px; /* Lebar контейнера sedikit diperbesar */
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #c71585; /* Medium violet red pastel */
}

.content {
    display: flex;
    flex-direction: column; /* Mengatur elemen-elemen di dalam .content menjadi вертикальном */
    align-items: center; /* Menengahkan elemen-elemen di dalam .content secara horizontal */
}

.options {
    display: flex;
    margin-bottom: 20px;
}

.options a {
    margin: 0 10px;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    color: #db7093; /* Pale violet red pastel */
    background-color: #fffaf0; /* Floral white pastel */
    border: 1px solid #ffb6c1; /* Light pink pastel */
}

.options a:hover {
    background-color: #ffb6c1; /* Light pink pastel */
    color: white;
}

.search-box {
    display: flex;
}

.search-box input[type="text"] {
    padding: 8px;
    border: 1px solid #ffb6c1; /* Light pink pastel */
    border-radius: 4px;
    margin-right: 10px;
    flex-grow: 1; /* Memungkinkan input untuk растягиваться */
}

.search-box button {
    background-color: #ff69b4; /* Hot pink pastel */
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.search-box button:hover {
    background-color: #ff1493; /* Deep pink pastel */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ffb6c1; /* Light pink pastel */
}

th {
    background-color: #fff0f5; /* Lavender blush pastel */
}

tr:hover {
    background-color: #fffaf0; /* Floral white pastel */
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
                    <a class="btn btn-success" href="inputbt.php">Buku Tamu</a>&nbsp
                    <a class="btn btn-danger" href="viewbt.php">Tampilkan</a>&nbsp
                    <a class="btn btn-info" href="searchbt.php">Search</a>&nbsp
                    <hr>
</div>
</div>
</div>
</div>
<div class="col-md-3"></div>
    </div></div></body></html>