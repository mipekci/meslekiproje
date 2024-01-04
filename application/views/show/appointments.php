<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Sistemdeki bütün randevular</h1>
	<?php
		foreach ($values->result() as $value) {
			$user = $this->Show_Model->selectUserWithId($value->id);

			foreach ($user->result() as $wormer) {
				echo "Kullanıcı adı = "."<span style='color:red'>".$wormer->firstname."</span>"."<br>";
				echo "Kullanıcı Soyadı = "."<span style='color:green'>".$wormer->lastname."</span>"."<br>";
			}

			echo "Başlık = ".$value->header."<br>";
			echo "Metin = ".$value->body."<br>";
			echo "Oluşturulma tarihi = ".$value->createdAt."<br>";
			echo "<hr>";
		}
	?>
	<a href="<?php echo base_url('/panel')?>">Geri dön</a>
</body>
</html>