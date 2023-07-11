
<a href="?page=pengarang&aksi=tambahpengarang"><button class="btn btn-primary" style="margin-bottom: 5px">Tambah Pengarang</button></a>
  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Pengarang
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="buku">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pengarang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php 
                                    		$sql = mysqli_query($koneksi, "SELECT * FROM tb_pengarang");
                                    		$no = 1;

                                    		while ($tampil = mysqli_fetch_array($sql)) {
                                    			
                                    	 ?>

                                    	 	<tr>
                                    	 		<td><?php echo $no++; ?></td>
                                    	 		<td><?php echo $tampil['nama_pengarang']; ?></td>
                                                <td>
                                                    <a href="?page=pengarang&aksi=editpengarang&id=<?php echo $tampil['id_pengarang']; ?>"><button class="btn btn-warning btn-xs">Ubah</button></a>
                                                    <a onclick="return confirm('Yakin Ingin Menghapus ?')" href="?page=pengarang&aksi=hapuspengarang&id=<?php echo $tampil['id_pengarang']; ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
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

