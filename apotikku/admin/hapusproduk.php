<?php 

echo '<script>
        var ya = confirm("Apakah anda yakin akan menghapus?");

        if (ya) {
           $hapus;
        } else {
            location="index.php?halaman=produk";
        }
    </script>';

$hapus=
		$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
		$pecah=$ambil->fetch_assoc();
		$fotoproduk=$pecah['foto_produk'];
		if (file_exists("../foto_produk/$fotoproduk")) {
			unlink("../foto_produk/$fotoproduk");

		}
		$koneksi->query("DELETE FROM produk where id_produk='$_GET[id]'");
		echo "<script>location='index.php?halaman=produk';</script>";
	;
 ?>
