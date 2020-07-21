<h2>Ubah Produk</h2>


<?php
	$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
	$pecah=$ambil->fetch_assoc();

	echo "<pre>";
	print_r($pecah);
	echo "</pre>";
  ?>

  <form method="post" enctype="multipart/form-data">
	<div class="form-grub">
		<label>Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_pelanggan']; ?>">
	</div>
	<div class="form-grub">
		<label>Email </label>
		<input type="text" class="form-control" name="email" value="<?php echo $pecah['email_pelanggan']; ?>">	
	</div>
	<div class="form-grub">
		<label>Password </label>
		<input type="text" class="form-control" name="password" value="<?php echo $pecah['password_pelanggan']; ?>">	
	</div>
	<div class="form-grub">
		<label>Telepone</label>
		<input type="number" class="form-control" name="telepon" value="<?php echo $pecah['telepon_pelanggan']; ?>">	
	</div>
	<br>

	<button class="btn btn-primary" name="ubah">Simpan</button>
</form>

<?php 
		if (isset($_POST['ubah'])){
			
 			$koneksi->query("UPDATE pelanggan SET nama_pelanggan='$_POST[nama]',email_pelanggan='$_POST[email]',password_pelanggan='$_POST[password]', telepon_pelanggan='$_POST[telepon]' WHERE id_pelanggan='$_GET[id]'");
 		
 			echo '<script>var pesan = "Data Berhasil Tersimpan";alert(pesan);</script>';
			echo "<script>location='index.php?halaman=pelanggan';</script>";
 		}
 		
			
		


 ?>

 