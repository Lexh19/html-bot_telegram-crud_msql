<?php
$servername = "localhost";
$database = "telegrambot";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_POST);
    if (isset($_POST['nama']) && isset($_POST['nim']) && isset($_POST['alamat'])  && isset($_POST['matakuliah'])  && isset($_POST['jeniskelamin']) ) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $alamat = $_POST['alamat'];
        $matakuliah = $_POST['matakuliah'];
        $jeniskelamin = $_POST['jeniskelamin'];


        $sql = "INSERT INTO telegrambot (nama, nim, alamat, matakuliah, jeniskelamin ) VALUES ('$nama', '$nim', '$alamat', '$matakuliah','$jeniskelamin')";

        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil disimpan";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Data yang diterima tidak lengkap";
    }
}


?>
