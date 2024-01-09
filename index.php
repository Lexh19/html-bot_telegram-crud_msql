<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bot Telegram</title>
</head>

<body>
    <div class="container">
        <form  action="database.php" method="post">
            <h3>Silahkan Input</h3>
    
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" placeholder="Nama" />
        
            <label for="nim">NIM :</label><br>
            <input type="text" name="nim" id="nim" placeholder="Nim" />
     
            
            <label for="alamat">Alamat :</label><br>
            <input type="text" name="alamat" id="alamat" placeholder="Alamat" />

            
            <label for="matakuliah">Mata Kuliah</label><br>
            <input type="text" name="matakuliah" id="matakuliah" placeholder="Mata_kuliah" />

            <label for="jeniskelamin">Jenis Kelamin :</label><br>
            <input type="radio" name="jeniskelamin" value="Laki-Laki" checked="" id="jeniskelamin">Laki-Laki
			<input type="radio" name="jeniskelamin" value="Perempuan" checked="" id="jeniskelamin">Perempuan

             <button id="kirim" value="KIRIM" onclick="kirimPesan()" ;>KIRIM</button>
        </form>
        <div class="navigator">
        <a href="tabel.php"><button>Table </button></a>
    </div>
    </div>
   
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
    integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="main.js"></script>

</html>



