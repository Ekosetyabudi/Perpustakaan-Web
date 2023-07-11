<?php 

$id_anggota = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_anggota WHERE id_anggota='$id_anggota'");

if ($hapus) {
	?>
	<script type="text/javascript">
		// alert("Simpan Berhasil");
			window.location="?page=anggota";
	</script>
	<?php
}

 ?>