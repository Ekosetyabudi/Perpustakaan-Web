<?php 

$id_penerbit = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_penerbit WHERE id_penerbit='$id_penerbit'");

if ($hapus) {
	?>
	<script type="text/javascript">
		// alert("Simpan Berhasil");
			window.location="?page=penerbit";
	</script>
	<?php
}

 ?>