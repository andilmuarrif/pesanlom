<!doctype html>
<html lang="en">
  <head>
    <title>PesanLom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">PesanLom</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              
              <li class="nav-item">
                <a class="nav-link" href="../login/loginindex.html">			  
				<?php
				session_start();
				if ($_SESSION == true)
				echo 'Helo '.$_SESSION['username'];
				else
				echo 'login';
			?>
			</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="../Login/account.html">Account</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="../Home/About2.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Home/bantuan.html">Help</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="../Login/logout.php">Logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="1" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>PesanLom</h1>
              <p>Bonding Companies all Around</p>
			  
            </div>
		


            <!-- form quick search -->
            
<form name="form1" method="get" action="" class="form-inline element-animate" id="search-form">
<input placeholder="Search Product" class="form-control form-control-block search-input" type="text" name="q" id="autocomplete"/> <button type="SUBMIT" name="SUBMIT" class="btn btn-primary">Search</button>
<br>

</form>
<!-- menampilkan hasil pencarian -->
<br>
<br>
<font color = "fffff"> 

      
      <?php ?>
    </table>
    <?php
  


if(isset($_GET['q']) && $_GET['q']){
  $conn = mysql_connect("localhost", "root", "");
  mysql_select_db("pesanlom");
  $q = $_GET['q'];
  $sql = "select * from barang where nama_barang like '%$q%' or harga like '%$q%' or stok like '%$q%'";
  $result = mysql_query($sql);
  if(mysql_num_rows($result) > 0){
    ?>
      <table class="table table-striped table-bordered table-hover" border="9">
        
      <tr>
  <h1> 
        <td><b>Nama barang</b></td>
        <td><b>Harga</b></td>
        <td><b>Stok</b></td>
</h1>
      </tr>
      
       

      <?php
      while($barang = mysql_fetch_array($result)){?>
      <tr>
       <?php
  
    
    echo "

    <tr>
    <td><a href=\"home.php?id_barang=".$barang['id_barang']."\">".$barang['nama_barang']."</a></td>
    <td>".$barang['harga']."</td>
    <td>".$barang['stok']."</td>
    </tr>";

    
 
  ?>
      
      <?php }?>
    </table>
    <?php
  }else{

    echo 'Data not found!';
  }
}
?>
<font color = "fffff"> 
			

			





			

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    

    
    
		
    
    
   
    
            
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

    <script src="js/main.js"></script>
  </body>
</html>