<?php

define('DB_USER', 'abu');
define('DB_PASSWORD', 'aburefko159753');
define('DB_HOST', 'localhost');
define('DB_NAME', 'stack');

$konekcija = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect' . mysqli_connect_error());

mysqli_set_charset($konekcija, "utf8");
	
	$pregled = "SELECT * FROM buys";
$korisnici = mysqli_query($konekcija, $pregled);
foreach ($korisnici as $korisnik){
$idk = $korisnik['idk'];


$upit = "SELECT * FROM clients WHERE id={$idk}";
$result = mysqli_query($konekcija, $upit);

if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
			echo $row['id'];
		}
} else {
	echo 'no results';
}

}


?>