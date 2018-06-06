kita namakan filenya form.php

<html>
 <form method="post" action="">
 <center>
 <input type="text" name="nama"/><br>
 <input type="number" name="umur"/><br>
 <input type="submit"  name="tombol" value="kirim"/><br>
 </form>
 
 <?php
 if(isset($_POST['tombol'])){
 $nama=$_POST['nama'];
 $umur=$_POST['umur'];
 echo $nama."<br>";
 echo $umur; }
 ?>
 </html>
 