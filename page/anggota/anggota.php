
<a href="?page=anggota&aksi=tambahanggota"><button class="btn btn-primary" style="margin-bottom: 5px">Tambah Anggota</button></a>
  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="buku">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Anggota</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php 
                                    		$sql = mysqli_query($koneksi, "SELECT * FROM tb_anggota");
                                    		$no = 1;

                                    		while ($tampil = mysqli_fetch_array($sql)) {
                                    			
                                    	 ?>

                                    	 	<tr>
                                    	 		<td><?php echo $no++; ?></td>
                                    	 		<td><?php echo $tampil['nama_anggota']; ?></td>
                                                <td>
                                                    <a href="?page=anggota&aksi=editanggota&id=<?php echo $tampil['id_anggota']; ?>"><button class="btn btn-warning btn-xs">Ubah</button></a>
                                                    <a onclick="return confirm('Yakin Ingin Menghapus ?')" href="?page=anggota&aksi=hapusanggota&id=<?php echo $tampil['id_anggota']; ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
                                                </td>
                                    	 	</tr>

                                    	 <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                   </div>
                </div>
</div> 

