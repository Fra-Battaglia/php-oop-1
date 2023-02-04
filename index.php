<?php 
	class Movie {
		public $title;
		public $cover;
		public $genre;
		public $year;

		function __construct($title, $cover, $genre, $year)
		{
			$this->title = $title;
			$this->cover = $cover;
			$this->genre = $genre;
			$this->year = $year;
		}

	}
	$home_alone = new Movie("Mamma, ho perso l'aereo", "https://m.media-amazon.com/images/I/A1T+lZ6iUZL._SL1500_.jpg", array("comedy", "family"), 1990);
	$kung_fu_panda = new Movie("Kung Fu Panda", "https://m.media-amazon.com/images/I/517M+F7msHL.jpg", array("cartoon", "comedy", "action"), 2008);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP Primo Esercizio OOP</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css//style.css" rel="stylesheet" >
	</head>
	<body>
		
	</body>
</html>