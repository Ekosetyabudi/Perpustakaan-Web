			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Anggota
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Nama Anggota</label>
                                            <input class="form-control"  name="nama_anggota" id="nama_anggota" placeholder="Nama anggota" />
                                        </div>
                                        <div class="form-group">
                                        	<button type="submit" class="btn btn-primary" name="simpan" >Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 

include '../koneksi/koneksi.php';

	if (isset($_POST['simpan'])) {
	
	$nama_anggota = $_POST['nama_anggota'];

	$simpan = mysqli_query($koneksi, "INSERT INTO tb_anggota VALUES('','$nama_anggota')");
	if ($simpan) {
		?>
		<script type="text/javascript">
			// alert("Simpan Berhasil");
			window.location="?page=anggota";
		</script>
		<?php  
	}
}
 ?>