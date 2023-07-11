			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Penerbit
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Nama Penerbit</label>
                                            <input class="form-control"  name="nama_penerbit" id="nama_penerbit" placeholder="Nama Penerbit" />
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
	
	$nama_penerbit = $_POST['nama_penerbit'];

	$simpan = mysqli_query($koneksi, "INSERT INTO tb_penerbit VALUES('','$nama_penerbit')");
	if ($simpan) {
		?>
		<script type="text/javascript">
			// alert("Simpan Berhasil");
			window.location="?page=penerbit";
		</script>
		<?php  
	}
}
 ?>