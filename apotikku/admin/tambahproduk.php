
<h2>Tambah Produk</h2>
<form method="post" enctype="multipart/form-data">
	<div class="form-grub">
		<label >Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-grub">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">	
	</div>
	<div class="form-grub">
		<label>Berat</label>
		<input type="number" class="form-control" name="berat">	
	</div>
	<div class="form-grub">
		<label>Deskripsi (Rp)</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>	
	</div>
	<div class="form-grub">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div><br>

	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
$pesan='<script>
		var pesan = "Data Berhasil Tersimpan";
		alert(pesan);
		</script>';
		if (isset($_POST['save'])) 
		{
			$nama=$_FILES['foto']['name'];
			$lokasi= $_FILES['foto']['tmp_name'];
			move_uploaded_file($lokasi, "../foto_produk/".$nama);
			$koneksi->query("INSERT INTO produk 
				(nama_produk,harga_produk,berat_produk,foto_produk,deskripsi_produk)
				VALUES ('$_POST[nama]','$_POST[harga]','$_POST[berat]','$nama','$_POST[deskripsi]')");

			// echo "<div class='alert alert-info'>Data Tersimpan</div>";
			echo $pesan;
			echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
		}
 ?>
 
 