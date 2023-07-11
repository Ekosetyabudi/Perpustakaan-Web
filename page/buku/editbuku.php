<?php 

$kdbuku = $_GET['id'];
$ambilkd = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE kd_buku='$kdbuku'");
$tampil = mysqli_fetch_array($ambilkd);

 ?>

	<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input class="form-control"  name="kd_buku" id="kd_buku" value="<?php echo $tampil['kd_buku']; ?>" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control" name="judul_buku" id="judul_buku" value="<?php echo $tampil['judul_buku']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <select class="form-control" name="id_penerbit" id="id_penerbit">
                                            	<?php 
                                            	$sql = mysqli_query($koneksi, "SELECT * FROM tb_penerbit");
                                            	while ($tampil1 = mysqli_fetch_array($sql)) {
                                            		if ($tampil['id_penerbit'] == $tampil1['id_penerbit']) {
                                            		 ?>
                                            		 <option value="<?php echo $tampil1['id_penerbit']; ?>" selected><?php echo $tampil1['nama_penerbit']; ?></option>
                                            		 <?php 
                                            		} else {
                                         			?>
                                         		<option value="<?php echo $tampil1['id_penerbit']; ?>"><?php echo $tampil1['nama_penerbit']; ?></option>
                                         	<?php
                                         	}    	
                                         		}
                                            	 ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <select class="form-control" name="id_pengarang" id="id_pengarang">
                                                <?php 
                                                $sql = mysqli_query($koneksi, "SELECT * FROM tb_pengarang");
                                                while ($tampil1 = mysqli_fetch_array($sql)) {
                                                    if ($tampil['id_pengarang'] == $tampil1['id_pengarang']) {
                                                     ?>
                                                     <option value="<?php echo $tampil1['id_pengarang']; ?>" selected><?php echo $tampil1['nama_pengarang']; ?></option>
                                                     <?php 
                                                    } else {
                                                    ?>
                                                <option value="<?php echo $tampil1['id_pengarang']; ?>"><?php echo $tampil1['nama_pengarang']; ?></option>
                                            <?php
                                            }       
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
                                            			if ($i == $tampil['tahun_buku']) {
                                            				?>
                                            				<option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
                                            		<?php
                                            			} else {
                                            		?>
                                            		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            		<?php 
                                            	}
                                            		}
                                            	 ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input class="form-control" type="number" name="stok" id="stok" value="<?php echo $tampil['stok']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        	<button type="submit" class="btn btn-primary" name="ubah" >Simpan</button>
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

    if (isset($_POST['ubah'])) {
    
    $kd_buku = $_POST['kd_buku'];
    $judul_buku = $_POST['judul_buku'];
    $id_penerbit = $_POST['id_penerbit'];
    $tahun_buku = $_POST['tahun_buku'];
    $stok = $_POST['stok'];
    $id_pengarang = $_POST['id_pengarang'];

    $ubah = mysqli_query($koneksi, "UPDATE tb_buku SET judul_buku='$judul_buku', id_pengarang='$id_pengarang', id_penerbit='$id_penerbit', tahun_buku='$tahun_buku', stok='$stok' WHERE kd_buku='$kd_buku'");
    if ($ubah) {
        ?>
        <script type="text/javascript">
            // alert("Simpan Berhasil");
            window.location="?page=buku";
        </script>
        <?php  
    }
}
 ?>