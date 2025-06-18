<?php
$servername = "localhost";
$username = "root";
$password = "Hesoyam1!";
$dbname = "PHPSQL";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",  $username, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO Products (product_name, price, stock) VALUES (:product_name, :price, :stock)");

  $stmt->bindParam(':product_name', $product_name);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':stock', $stock);

  // //insert a row
  // $product_name = 'Kaos';
  // $price = 30000;
  // $stock = 45;
  // $stmt->execute();


  // //insert another row
  // $product_name = 'Kemeja';
  // $price = 250000;
  // $stock = 18;
  // $stmt->execute();
  
  echo "Products created successfully";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

?>