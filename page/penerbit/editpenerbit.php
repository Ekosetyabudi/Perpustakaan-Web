<?php 

$id_penerbit = $_GET['id'];
$ambilpenerbit = mysqli_query($koneksi, "SELECT * FROM tb_penerbit WHERE id_penerbit='$id_penerbit'");
$tampil = mysqli_fetch_array($ambilpenerbit);

 ?>

	<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Penerbit
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                            <input type="hidden" class="form-control"  name="id_penerbit" id="id_penerbit" value="<?php echo $tampil['id_penerbit']; ?>">
                                        <div class="form-group">
                                            <label>Nama Penerbit</label>
                                            <input class="form-control"  name="nama_penerbit" id="nama_penerbit" value="<?php echo $tampil['nama_penerbit']; ?>" />
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
    
    $nama_penerbit = $_POST['nama_penerbit'];
    $id_penerbit = $_POST['id_penerbit'];

    $ubah = mysqli_query($koneksi, "UPDATE tb_penerbit SET nama_penerbit='$nama_penerbit' WHERE id_penerbit='$id_penerbit'");
    if ($ubah) {
        ?>
        <script type="text/javascript">
            // alert("Simpan Berhasil");
            window.location="?page=penerbit";
        </script>
        <?php  
    }
}
 ?>