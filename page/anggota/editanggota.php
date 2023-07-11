<?php 

$id_anggota = $_GET['id'];
$ambilanggota = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota='$id_anggota'");
$tampil = mysqli_fetch_array($ambilanggota);

 ?>

	<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Anggota
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                            <input type="hidden" class="form-control"  name="id_anggota" id="id_anggota" value="<?php echo $tampil['id_anggota']; ?>">
                                        <div class="form-group">
                                            <label>Nama Anggota</label>
                                            <input class="form-control"  name="nama_anggota" id="nama_anggota" value="<?php echo $tampil['nama_anggota']; ?>" />
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
    
    $nama_anggota = $_POST['nama_anggota'];
    $id_anggota = $_POST['id_anggota'];

    $ubah = mysqli_query($koneksi, "UPDATE tb_anggota SET nama_anggota='$nama_anggota' WHERE id_anggota='$id_anggota'");
    if ($ubah) {
        ?>
        <script type="text/javascript">
            // alert("Simpan Berhasil");
            window.location="?page=anggota";
        </script>
        <?php  
    }
}
 ?>