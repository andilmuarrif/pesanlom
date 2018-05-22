<?php
include "connection.php";
$nama_barang= $_POST['nama_barang']; //get the nama value from form
$q = "SELECT * from barang where nama_barang like '%$nama_barang%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>No</td>
<td>Nama Mahasiswa</td>
<td>Alamat</td>
</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['nama_barang']."</td>
<td>".$data['harga']."</td>
<td>".$data['stock']."</td>
</tr>";
}
echo "</table>";
?>