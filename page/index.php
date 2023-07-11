<?php include '../koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />


</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="?page=anggota"><i class="fa fa-male fa-3x"></i> Anggota</a>
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Master Buku<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                              <li>
                                 <a  href="?page=buku"> Data Buku</a>
                              </li>
                            <li>
                                <a href="?page=pengarang"> Data Pengarang</a>
                            </li>
                            <li>
                                <a href="?page=penerbit"> Data Penerbit</a>
                            </li>
                        </ul>
                    </li>  

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Transaksi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                              <li>
                                 <a  href="?page=pinjam"> Data Pinjam</a>
                              </li>
                            <li>
                                <a href="?page=pengembalian"> Data Pengembalian</a>
                            </li>
                        </ul>
                    </li>       	
                  

             
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                        
                      <?php 

                        $page = isset($_GET['page']) ? $_GET['page']:'';
                        $aksi = isset($_GET['aksi']) ? $_GET['aksi']:'';

                        //buku
                        if ($page == "buku") {
                          if ($aksi == "") {
                            include "buku/buku.php";
                          }else if ($aksi == "tambahbuku") {
                            include "buku/addbuku.php";
                          }else if ($aksi == "editbuku") {
                            include "buku/editbuku.php";
                          }else if ($aksi == "hapusbuku") {
                            include "buku/hapusbuku.php";
                          }
                        }
                        //pengarang
                        else if ($page == "pengarang") {
                          if ($aksi == "") {
                            include "pengarang/pengarang.php";
                          }else if ($aksi == "tambahpengarang") {
                            include "pengarang/addpengarang.php";
                          }else if ($aksi == "editpengarang") {
                            include "pengarang/editpengarang.php";
                          }else if ($aksi == "hapuspengarang") {
                            include "pengarang/hapuspengarang.php";
                          }
                        }
                        //penerbit
                        else if ($page == "penerbit") {
                          if ($aksi == "") {
                            include "penerbit/penerbit.php";
                          }else if ($aksi == "tambahpenerbit") {
                            include "penerbit/addpenerbit.php";
                          }else if ($aksi == "editpenerbit") {
                            include "penerbit/editpenerbit.php";
                          }else if ($aksi == "hapuspenerbit") {
                            include "penerbit/hapuspenerbit.php";
                          }
                        }
                        //anggota
                        else if ($page == "anggota") {
                          if ($aksi == "") {
                            include "anggota/anggota.php";
                          }else if ($aksi == "tambahanggota") {
                            include "anggota/addanggota.php";
                          }else if ($aksi == "editanggota") {
                            include "anggota/editanggota.php";
                          }else if ($aksi == "hapusanggota") {
                            include "anggota/hapusanggota.php";
                          }
                        }
                        //transaksi pinjam
                        else if ($page == "pinjam") {
                          if ($aksi == "") {
                            include "pinjam/pinjam.php";
                          }else if ($aksi == "tambahpinjam") {
                            include "pinjam/addpinjam.php";
                          }else if ($aksi == "editpinjam") {
                            include "pinjam/editpinjam.php";
                          }
                        }

                       ?>

                    </div>
                </div>
                 <!-- /. ROW  -->
               <!--   <hr /> -->
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      
      <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#buku').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>
