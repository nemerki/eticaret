<?php 

try {
	$db = new PDO('mysql:host=localhost;dbname=eticaret','root','3620235m');
	// echo 'başarılı';
	
} catch (PDOException $e) {
	$e->getMessage();
}
?>