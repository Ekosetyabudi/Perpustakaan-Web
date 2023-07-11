	<?php 

    $tanggalpinjam = date("Y-m-d");
    $tanggalkembali = date("Y-m-d", strtotime("+7 days", strtotime($tanggalpinjam)));

    include '../koneksi/koneksi.php';

     ?>
  

    		<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Pinjam
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Id Anggota</label>
                                            <input class="form-control"  name="id_anggota" id="id_anggota" placeholder="Nama pinjam"  readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama pinjam</label>
                                            <input autocomplete="off" class="form-control" type="text"  name="nama_anggota" id="nama_anggota" placeholder="Nama pinjam" onkeyup="coba();" />
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input class="form-control"  name="kode_buku" id="kode_buku" placeholder="Nama pinjam"  readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control"  name="judul_buku" id="judul_buku" placeholder="Nama pinjam" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control"  name="tgl_pinjam" id="tgl_pinjam" value="<?php echo $tanggalpinjam; ?>"  readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control"  name="tgl_kembali" id="tgl_kembali" value="<?php echo $tanggalkembali; ?>" readonly />
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

   