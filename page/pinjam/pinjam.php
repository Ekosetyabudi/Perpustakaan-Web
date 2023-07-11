
<a href="?page=pinjam&aksi=tambahpinjam"><button class="btn btn-primary" style="margin-bottom: 5px">Tambah pinjam</button></a>
  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data pinjam
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="buku">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama pinjam</th>
                                            <th>Judul Buku</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php 
                                    		$sql = mysqli_query($koneksi, "SELECT ang.nama_anggota, buku.judul_buku ,pinjam.tgl_pinjam, pinjam.tgl_kembali, pinjam.status FROM tb_anggota ang INNER JOIN tb_pinjam pinjam ON ang.id_anggota=pinjam.id_anggota INNER JOIN tb_buku buku ON buku.kd_buku=pinjam.kd_buku WHERE pinjam.status='pinjam'");
                                    		$no = 1;

                                    		while ($tampil = mysqli_fetch_array($sql)) {
                                    			
                                    	 ?>

                                    	 	<tr>
                                    	 		<td><?php echo $no++; ?></td>
                                    	 		<td><?php echo $tampil['nama_anggota']; ?></td>
                                    	 		<td><?php echo $tampil['judul_buku']; ?></td>
                                    	 		<td><?php echo $tampil['tgl_pinjam']; ?></td>
                                    	 		<td><?php echo $tampil['status']; ?></td>
                                                <td>
                                                    <a href="?page=pinjam&aksi=editpinjam&id=<?php echo $tampil['id_pinjam']; ?>"><button class="btn btn-warning btn-xs">Ubah</button></a>
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

