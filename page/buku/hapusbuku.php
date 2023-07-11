<?php 

$kd_buku = isset($_GET['id']) ? $_GET['id']:'';

$hapus = mysqli_query($koneksi, "DELETE FROM tb_buku WHERE kd_buku='$kd_buku'");

if ($hapus) {
	?>
	<script type="text/javascript">
		// alert("Simpan Berhasil");
			window.location="?page=buku";
	</script>
	<?php
}

 ?>