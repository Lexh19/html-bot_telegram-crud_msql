function kirimPesan() {

    var nama = document.getElementById('nama');
    var nim = document.getElementById('nim');
    var alamat = document.getElementById('alamat');
    var matakuliah = document.getElementById('matakuliah');
    var jeniskelamin = document.getElementById('jeniskelamin');

    var gabungan = 'Nama%3A%0A' + nama.value + '%0ANim%3A%0A' + nim.value + '%0AAlamat%3A%0A' + alamat.value +'%0AMatakuliah%3A%0A' + matakuliah.value + '%0AJeniskelamin%3A%0A' + jeniskelamin.value;

    var token = '6806544102:AAGEtfRuHMBiaoVUl7fL-9cg70qnQOIojpU'; // Ganti dengan token bot yang kamu buat
    var grup = '-4026692275'; // Ganti dengan chat id dari bot yang kamu buat

    $.ajax({
        url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
        method: `POST`,
    })
}