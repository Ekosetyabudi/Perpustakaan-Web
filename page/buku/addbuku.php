			<?php 
				$kdbuku = mysqli_query($koneksi, "SELECT MAX(kd_buku) AS kodebuku FROM tb_buku");
				$cek = mysqli_fetch_array($kdbuku);
				$id_baru = $cek['kodebuku'];

				$urut = substr($id_baru, 4);
				$urut++;

				$new = "Kode";
				$newkd = $new.sprintf("%03s", $urut);
			 ?>

			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input class="form-control"  name="kd_buku" id="kd_buku" value="<?php echo $newkd; ?>" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul Buku" />
                                        </div>
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <select class="form-control" name="id_penerbit" id="id_penerbit">
                                            	<?php 
                                            	$sql = mysqli_query($koneksi, 'SELECT * FROM tb_penerbit');
                                            	while ($tampil = mysqli_fetch_array($sql)) {
                                         			?>
                                         		<option value="<?php echo $tampil['id_penerbit']; ?>"><?php echo $tampil['nama_penerbit']; ?></option>
                                         	<?php    	
                                         		}
                                            	 ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <select class="form-control" name="id_pengarang" id="id_pengarang">
                                                <?php 
                                                $sql = mysqli_query($koneksi, 'SELECT * FROM tb_pengarang');
                                                while ($tampil = mysqli_fetch_array($sql)) {
                                                    ?>
                                                <option value="<?php echo $tampil['id_pengarang']; ?>"><?php echo $tampil['nama_pengarang']; ?></option>
                                            <?php       
                                                }
                                                 ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Buku</label>
                                            <select class="form-control" name="tahun_buku" id="tahun_buku">
                                            	<?php 
                                            		$tahun = date("Y");
                                            		for ($i=$tahun-10; $i <=$tahun ; $i++) { 
                                            		?>
                                            		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            		<?php 
                                            		}
                                            	 ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input class="form-control" type="number" name="stok" id="stok" placeholder="Stok Buku" />
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
	
	$kd_buku = $_POST['kd_buku'];
	$judul_buku = $_POST['judul_buku'];
	$id_penerbit = $_POST['id_penerbit'];
	$tahun_buku = $_POST['tahun_buku'];
	$stok = $_POST['stok'];
	$id_pengarang = $_POST['id_pengarang'];

	$simpan = mysqli_query($koneksi, "INSERT INTO tb_buku VALUES('$kd_buku','$judul_buku','$id_pengarang','$id_penerbit','$tahun_buku','$stok')");
	if ($simpan) {
		?>
		<script type="text/javascript">
			// alert("Simpan Berhasil");
			window.location="?page=buku";
		</script>
		<?php  
	}
}
 ?>