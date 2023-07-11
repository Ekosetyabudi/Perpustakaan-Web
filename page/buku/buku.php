
<a href="?page=buku&aksi=tambahbuku"><button class="btn btn-primary" style="margin-bottom: 5px">Tambah Buku</button></a>
  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="buku">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Buku</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php 
                                    		$sql = mysqli_query($koneksi, "SELECT * FROM tb_buku INNER JOIN tb_penerbit ON tb_buku.id_penerbit=tb_penerbit.id_penerbit INNER JOIN tb_pengarang ON tb_buku.id_pengarang=tb_pengarang.id_pengarang");
                                    		$no = 1;

                                    		while ($tampil = mysqli_fetch_array($sql)) {
                                    			
                                    	 ?>

                                    	 	<tr>
                                    	 		<td><?php echo $no++; ?></td>
                                    	 		<td><?php echo $tampil['kd_buku']; ?></td>
                                    	 		<td><?php echo $tampil['judul_buku']; ?></td>
                                    	 		<td><?php echo $tampil['nama_pengarang']; ?></td>
                                    	 		<td><?php echo $tampil['nama_penerbit']; ?></td>
                                    	 		<td><?php echo $tampil['tahun_buku']; ?></td>
                                                <td><?php echo $tampil['stok']; ?></td>
                                                <td>
                                                    <a href="?page=buku&aksi=editbuku&id=<?php echo $tampil['kd_buku']; ?>"><button class="btn btn-warning btn-xs">Ubah</button></a>
                                                    <a onclick="return confirm('Yakin Ingin Menghapus ?')" href="?page=buku&aksi=hapusbuku&id=<?php echo $tampil['kd_buku']; ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
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

