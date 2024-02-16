<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Заявки</title>
</head>
<body>
	<?
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$item = $_POST["item"];
		echo $name."    ".$phone."    ".$email."    ".$item;

		$pdo = new PDO('mysql:host=localhost;dbname=sashakhan2', "sashakhan2", "24357902aS");

		$stmt = $pdo->prepare("INSERT INTO Users(name, phone, email, item) VALUES(:name, :phone, :email, :item)");

		$stmt->bindValue(":name", $name);
		$stmt->bindValue(":phone", $phone);
		$stmt->bindValue(":email", $email);
		$stmt->bindValue(":item", $item);

		if($stmt->execute()) {
			echo "Заявки принята <br>";
			echo $name."    ".$phone."    ".$email."    ".$item;
		} else{
			echo "Какая-то ошибка";
		}
	?>
	<form action="list.php">
		<button>Посмотреть все заявки</button>
	</form>
	<form action="index.html">
		<button>На главную</button>
	</form>
</body>
</html>