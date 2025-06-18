<?php
$servername = "localhost";
$username = "root";
$password = "Hesoyam1!";
$dbname = "PHPSQL";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

// $products_table = "
//   CREATE TABLE Products(
//     id_product INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     product_name VARCHAR(40) NOT NULL,
//     price INT NOT NULL,
//     stock INT NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )
// ";

// if($conn->query($products_table) === true){
//   echo "Table products created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO Products (product_name, price, stock)
  VALUES ('Cawet', 10000, 80), ('Kutang', 25000, 100)";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<br> New record created successfully <br>";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>