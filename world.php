<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
$country = 'country';



$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
//$stmt = $conn->query("SELECT * FROM countries");
 $country = filter_input(INPUT_GET,"country",FILTER_SANITIZE_STRING);


$find = $conn->query("SELECT * FROM countries Where name Like '%$country%'");

$result = $find->fetchAll(PDO::FETCH_ASSOC);

//$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<ul>
<?php foreach ($result as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>
