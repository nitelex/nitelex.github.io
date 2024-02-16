<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/stylelist.css">
	</head>
	<body>
	<main>
	<?
	$pdo = new PDO('mysql:host=localhost;dbname=mirzohakim', "mirzohakim", "Bory1111");
	$stmt = $pdo->query("SELECT *FROM Users ORDER BY User_ID DESC");
	?>

	<p>ID  Имя  Телефоне  Почта<br></p>

	<?
		echo "<div>";
		foreach ($stmt as $row) {
			echo $row["User_ID"]."  ";
			echo $row["Name"]."  ";
			echo $row["Phone"]."  ";
			echo $row["Email"]."  ";
			echo $row["item"]."<br>";

		}
		echo "</div>";
	?>
	
	<form action="index.html">
		<button>На главную</button>
	</form>

	</body>
	</main>
</html>