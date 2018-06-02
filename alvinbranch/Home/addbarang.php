<?php
//koneksi ke database
require 'functionedit.php';


//ambil data dari tabel barang

$queryy = query("SELECT * FROM barang ");


/** proses pengecekan apakah data dari database berhasil ditampilkan atau 
tidak dengan menggunakan tampilan var_dump
while ($data = mysqli_fetch_assoc($query) ) {
*var_dump($data); }
*/

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Supplier Account</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Supplier Account</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../Home/index.php">Back to Home</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    

                    <li>
                        <a href="../home/addbarang.php"><i class="fa fa-desktop "></i>Products</a>
                    </li>
					<li>
                        <a href="../Login/addproduct.php"><i class="fa fa-edit "></i>Add Product</a>
                    </li>
                   


                    
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Informasi Barang</h2>
                    </div>
                </div>
                
                
                
                
                <hr />
                
                    <div class="col-md-6">
                        <h5>List Barang</h5>
						
                        <table class="table table-striped table-bordered table-hover">
                            <thead>	
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Stok Barang</th>	
				    <th>Aksi</th>	
                                </tr>
                            </thead>
                            
                                <?php $i = 1; ?>   
				<?php foreach( $queryy as $row ) : ?>    
    				<tr>
        				<td><?= $i ?></td>
        				<td><?= $row["nama_barang"]; ?></td>
        				<td><?= $row["harga"]; ?></td>
        				<td><?= $row["stok"]; ?></td>
        				<td>

           				 <a href="../login/ubah.php?id_barang=<?= $row["id_barang"]?>">Ubah</a> ||
         				   <a href="../login/hapus.php?id_barang=<?= $row["id_barang"]?> onclick="return confirm('yakin?');">Hapus</a>
                                                                                                                    
       					 </td>
    				</tr>
  				<?php $i++; ?>
   				<?php endforeach; ?>
                            
                        </table>
						
                    </div>
                    
                
                
                
                

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
