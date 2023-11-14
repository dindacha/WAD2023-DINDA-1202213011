<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];

    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    if(isset($_POST['update'])){
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $nama_mobil = $_POST['nama_mobil'];
        $brand_mobil = $_POST['brand_mobil']; 
        $warna_mobil = $_POST['warna_mobil'];
        $tipe_mobil = $_POST['tipe_mobil'];
        $harga_mobil = $_POST['harga_mobil'];


        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $sql = "UPDATE showroom_mobil set nama_mobil='$nama_mobil', brand_mobil='$brand_mobil', warna_mobil='$warna_mobil', tipe_mobil='$tipe_mobil', harga_mobil='$harga_mobil' WHERE id = '$id'";

        // Eksekusi perintah SQL
        $query = mysqli_query($connect, $sql);

        // Buatkan kondisi jika eksekusi query berhasil
        if($query){
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
            header('Location:list_mobil.php');
        } else {
            die('gagal menyimpan perubahan');
        }
    
    } else {
        die('akses dilarang');
    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database
    }
?>