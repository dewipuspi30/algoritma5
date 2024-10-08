<html>
<body>
	<form method="GET" action="">
		<input type="text" name="nama"><br>
		<input type="text" name="email"><br>
		<input type="submit" name="submit" value="Submit">
	</form>

    <?php
   
   if ($_GET)
   {
       echo 'Nama: ' . $_GET['nama'];
       echo '<br>';
       echo 'email: ' . $_GET['nama'];
   }
   echo"<p><strong>by dewi puspita sari</strong>";
    ?>
</body>
</html>
