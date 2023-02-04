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
		<div class="container">
			<div class="row my-5">
				<div class="col-3">
					<div class="card rounded-0 border-0">
					<img src="<?php echo $home_alone->cover ?>" alt="<?php echo $home_alone->title ?>" >
						<div class="card-body">
							<h3 class="card-title"><?php echo $home_alone->title ?></h3>

							<div class="info text-secondary">
								<h5 class="m-0">Genres</h5>
								<ul class="list-unstyled">
									<li><?php echo $home_alone->genre[0] ?></li>
									<li><?php echo $home_alone->genre[1] ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="card rounded-0 border-0">
					<img src="<?php echo $kung_fu_panda->cover ?>" alt="<?php echo $kung_fu_panda->title ?>" >
						<div class="card-body">
							<h3 class="card-title"><?php echo $kung_fu_panda->title ?></h3>

							<div class="info text-secondary">
								<h5 class="m-0">Genres</h5>
								<ul class="list-unstyled">
									<li><?php echo $kung_fu_panda->genre[0] ?></li>
									<li><?php echo $kung_fu_panda->genre[1] ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>