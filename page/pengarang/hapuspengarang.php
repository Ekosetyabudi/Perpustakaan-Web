<?php 

$id_pengarang = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_pengarang WHERE id_pengarang='$id_pengarang'");

if ($hapus) {
	?>
	<script type="text/javascript">
		// alert("Simpan Berhasil");
			window.location="?page=pengarang";
	</script>
	<?php
}

 ?>