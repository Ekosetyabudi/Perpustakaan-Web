<?php 

$id_pengarang = $_GET['id'];
$ambilpengarang = mysqli_query($koneksi, "SELECT * FROM tb_pengarang WHERE id_pengarang='$id_pengarang'");
$tampil = mysqli_fetch_array($ambilpengarang);

 ?>

	<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Pengarang
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                            <input type="hidden" class="form-control"  name="id_pengarang" id="id_pengarang" value="<?php echo $tampil['id_pengarang']; ?>">
                                        <div class="form-group">
                                            <label>Nama Pengarang</label>
                                            <input class="form-control"  name="nama_pengarang" id="nama_pengarang" value="<?php echo $tampil['nama_pengarang']; ?>" />
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
    
    $nama_pengarang = $_POST['nama_pengarang'];
    $id_pengarang = $_POST['id_pengarang'];

    $ubah = mysqli_query($koneksi, "UPDATE tb_pengarang SET nama_pengarang='$nama_pengarang' WHERE id_pengarang='$id_pengarang'");
    if ($ubah) {
        ?>
        <script type="text/javascript">
            // alert("Simpan Berhasil");
            window.location="?page=pengarang";
        </script>
        <?php  
    }
}
 ?>