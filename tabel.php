<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot Telegram</title>
</head>
<body>
    <label for="cari">Cari Nama</label>
    <form method="get" action="">
        <input type="text" name="cari">
    </form>
    <br>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Mata Kuliah</th>
            <th>Jenis Kelamin</th>
        </tr>


    <?php 
    
    include "database.php";
    $no=1;
    $query = mysqli_query($conn, "select * from telegrambot");

    if(isset($_GET['cari'])){
        $query = mysqli_query($conn, "select * from telegrambot where nama like '%".
            $_GET['cari']."%'");
    }

    while($tampil = mysqli_fetch_assoc($query)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[nama]</td>
            <td>$tampil[nim]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[matakuliah]</td>
            <td>$tampil[jeniskelamin]</td>
        </tr>";

        $no++;
    }
    ?>
    </table>

    <div class="navigasi-tabel">
        <a href="index.php"><button>Kembali Ke Index</button></a>
    </div>

</body>
</html>

<style>
    body{
        background: #1b1b1b;
        color: #cecece;
        margin: 0;
        padding: 0;
    }
    
button{
    margin-top: 10px;
    width: 220px;
    padding: 7px 5px 7px 5px;
    background: #0084ff;
    outline: none;
    border: none;
    border-radius: 5px;
    color: white;
    cursor: pointer;
}
    .navigasi-tabel{
    margin-top: 500px;
    margin-right: -20px;
}
</style>

