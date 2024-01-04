<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Sistemdeki bütün kullanıcılar</h1>
	<?php
		foreach ($values->result() as $value) {
			echo "İsim = ".$value->firstname."<br>";
			echo "Soy isim = ".$value->lastname."<br>";
			echo "telefon numarası = ".$value->telephone_number."<br>";
			echo "email = ".$value->email."<br>";
			echo "Oluşturulma tarihi = ".$value->createdAt."<br>";
			echo "<hr>";
		}
	?>
	<a href="<?php echo base_url('/panel')?>">Geri dön</a>
</body>
</html>