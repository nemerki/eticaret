<?php 

include 'baglan.php';


if (isset($_POST['genelayarkaydet'])) {
	
     //Tablo güncelleme işlemi
	$ayarkaydet = $db->prepare("UPDATE ayar SET

		ayar_tittle = ?,
		ayar_description = ?,
		ayar_keywords = ?,
		ayar_author = ?
		WHERE ayar_id = 0
		");

	$update = $ayarkaydet->execute([

		$_POST['ayar_tittle'],
		$_POST['ayar_description'],
		$_POST['ayar_keywords'],
		$_POST['ayar_author']
	]);

	if ($update) {
		header("Location:../production/genel-ayar.php?durum=ok");
	} else {
		header("Location:../production/genel-ayar.php?durum=no");
	}


}

if (isset($_POST['iletisimayarkaydet'])) {
	
     //Tablo güncelleme işlemi
	$ayarkaydet = $db->prepare("UPDATE ayar SET

		ayar_tel = ?,
		ayar_gsm = ?,
		ayar_faks = ?,
		ayar_mail = ?,
		ayar_il = ?,
		ayar_ilce = ?,
		ayar_adres = ?,
		ayar_mesai = ?
		WHERE ayar_id = 0
		");

	$update = $ayarkaydet->execute([

		$_POST['ayar_tel'],
		$_POST['ayar_gsm'],
		$_POST['ayar_faks'],
		$_POST['ayar_mail'],
		$_POST['ayar_il'],
		$_POST['ayar_ilce'],
		$_POST['ayar_adres'],
		$_POST['ayar_mesai']
	]);

	if ($update) {
		header("Location:../production/iletisim-ayar.php?durum=ok");
	} else {
		header("Location:../production/iletisim-ayar.php?durum=no");
	}


}


if (isset($_POST['apiayarkaydet'])) {
	
     //Tablo güncelleme işlemi
	$ayarkaydet = $db->prepare("UPDATE ayar SET

		ayar_analystic = ?,
		ayar_maps = ?,
		ayar_zopim = ?
		
		WHERE ayar_id = 0
		");

	$update = $ayarkaydet->execute([

		$_POST['ayar_analystic'],
		$_POST['ayar_maps'],
		$_POST['ayar_zopim']
		
	]);

	if ($update) {
		header("Location:../production/api-ayar.php?durum=ok");
	} else {
		header("Location:../production/api-ayar.php?durum=no");
	}


}

if (isset($_POST['sosyalayarkaydet'])) {
	
     //Tablo güncelleme işlemi
	$ayarkaydet = $db->prepare("UPDATE ayar SET

		ayar_facebook = ?,
		ayar_twitter = ?,
		ayar_google = ?,
		ayar_youtube = ?
		
		WHERE ayar_id = 0
		");

	$update = $ayarkaydet->execute([

		$_POST['ayar_facebook'],
		$_POST['ayar_twitter'],
		$_POST['ayar_google'],
		$_POST['ayar_youtube']
		
	]);

	if ($update) {
		header("Location:../production/sosyal-ayar.php?durum=ok");
	} else {
		header("Location:../production/sosyal-ayar.php?durum=no");
	}


}

if (isset($_POST['hakkimizdakaydet'])) {
	
     //Tablo güncelleme işlemi
	$ayarkaydet = $db->prepare("UPDATE hakkimizda SET

		hakkimizda_baslik = ?,
		hakkimizda_icerik = ?,
		hakkimizda_video = ?,
		hakkimizda_vizyon = ?,
		hakkimizda_misyon = ?
		
		WHERE hakkimizda_id = 0
		");

	$update = $ayarkaydet->execute([

		$_POST['hakkimizda_baslik'],
		$_POST['hakkimizda_icerik'],
		$_POST['hakkimizda_video'],
		$_POST['hakkimizda_vizyon'],
		$_POST['hakkimizda_misyon']
		
	]);

	if ($update) {
		header("Location:../production/hakkimizda-ayar.php?durum=ok");
	} else {
		header("Location:../production/hakkimizda-ayar.php?durum=no");
	}


}





?>