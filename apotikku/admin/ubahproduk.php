<h2>Ubah Produk</h2>


<?php
	$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
	$pecah=$ambil->fetch_assoc();

	echo "<pre>";
	print_r($pecah);
	echo "</pre>";
  ?>

  <form method="post" enctype="multipart/form-data">
	<div class="form-grub">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk']; ?>">
	</div>
	<div class="form-grub">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_produk']; ?>">	
	</div>
	<div class="form-grub">
		<label>Berat</label>
		<input type="number" class="form-control" name="berat" value="<?php echo $pecah['berat_produk']; ?>">	
	</div>
	<div class="form-grub">
		<label>Deskripsi (Rp)</label>
		<textarea class="form-control" name="deskripsi" rows="10"><?php echo $pecah['deskripsi_produk']; ?>
		</textarea>	
	</div>
	<div class="form-grub">
		<label>Foto</label>

		<input type="file" class="form-control" name="foto"><br>
		<img src="../foto_produk/<?php echo $pecah['foto_produk']?>" width="200">
	</div><br>

	<button class="btn btn-primary" name="ubah">Simpan</button>
</form>

<?php 
		if (isset($_POST['ubah'])){
			// menghapus gambar
			
			// mengubah gambar
 			$namafoto=$_FILES['foto']['name'];
 			$lokasifoto=$_FILES['foto']['tmp_name'];
 	

 			if(!empty($lokasifoto)){
 				$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
				$pecah=$ambil->fetch_assoc();
				$fotoproduk=$pecah['foto_produk'];
				if (file_exists("../foto_produk/$fotoproduk")) {
				unlink("../foto_produk/$fotoproduk");
				}
 				
			move_uploaded_file($lokasifoto,"../foto_produk/$namafoto");

 			$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',foto_produk='$namafoto', deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
 		
 	
 		}
 		else{
 			$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]', deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");


 			}
			echo '<script>var pesan = "Data Berhasil Tersimpan";alert(pesan);</script>';
			echo "<script>location='index.php?halaman=produk';</script>";
		}


 ?>

  <!-- if (isset($_POST['ubah'])){
 	$namafoto=$_FILES['foto']['name'];
 	$lokasifoto=$_FILES['foto']['tmp_name'];
 	

 	if(!empty($lokasifoto)){
		move_uploaded_file($lokasifoto,"../foto produk/$namafoto");

 		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',foto_produk='$namafoto', deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
 		
 	
 	}
 	else{
 			$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]', deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");


 	} -->

<!-- kodesalah -->
 	<!-- if (isset($_POST["ubah"])) {
			$namafoto=$_FILES['foto']['name'];
			$lokasifoto=$_FILES['foto']['tmp_foto'];
			
			if (!empty($lokasifoto)) {

				move_uploaded_file($lokasifoto,"../foto_produk/$namafoto");

				$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]', harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',foto_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
			}
			else{
				$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]', harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
			} -->