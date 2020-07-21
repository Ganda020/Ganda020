<?php 

echo '<script>
        var ya = confirm("Apakah anda yakin akan menghapus?");

        if (ya) {
           $hapus;
        } else {
            document.write("Baiklah, tetap di sini saja ya :)");
        }
    </script>';
$hapus=
		// $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
		// $pecah=$ambil->fetch_assoc();
		// $fotoproduk=$pecah['foto_produk'];
		// if (file_exists("../foto_produk/$fotoproduk")) {
		// 	unlink("../foto_produk/$fotoproduk");

		// }
		$koneksi->query("DELETE FROM pelanggan where id_pelanggan='$_GET[id]'");
		echo "<script>location='index.php?halaman=pelanggan';</script>";
	;


    

 ?>
