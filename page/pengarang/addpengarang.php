			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Pengarang
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Nama Pengarang</label>
                                            <input class="form-control"  name="nama_pengarang" id="nama_pengarang" placeholder="Nama Pengarang" />
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
	
	$nama_pengarang = $_POST['nama_pengarang'];

	$simpan = mysqli_query($koneksi, "INSERT INTO tb_pengarang VALUES('','$nama_pengarang')");
	if ($simpan) {
		?>
		<script type="text/javascript">
			// alert("Simpan Berhasil");
			window.location="?page=pengarang";
		</script>
		<?php  
	}
}
 ?>