<?php

class Product
{
    private string $product_name;
    private int $price;
    private int $stock;

    public function setProductName(string $product_name): void
    {
        if (empty($product_name)) {
            throw new InvalidArgumentException("<p>Nama barang tidak boleh kosong</p>");
        }
        $this->product_name = $product_name;
    }
    public function getProductName(): string
    {
        return $this->product_name;
    }

    public function getPrice(): int { return $this->price;}

    public function setPrice(int $price): void
    {
        if ($price < 0) {
            throw new InvalidArgumentException("<p>Harga harus positif</p>");
        }
        $this->price = $price;
    }

    public function getStock(): int { return $this->stock; }


    public function setStock(int $stock): void
    {
        if ($stock < 0) {
            throw new InvalidArgumentException("<p>Stok harus positif</p>");
        }
        $this->stock = $stock;
    }


    public function insertToDatabase($conn)

    {
        try {
            // Prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO Products (product_name, price, stock) VALUES (:product_name, :price, :stock)");

            // Bind parameters
            $stmt->bindParam(':product_name', $this->product_name);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':stock', $this->stock);

            // Execute the statement
            $stmt->execute();
            echo "Product created successfully";

            // prevent reload behavior
            header("Location: io.php");
            exit;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


}
// Check if the form is submitted

if (!empty($_POST['proses3'])) {

    $servername = "localhost";
    $username = "root";
    $password = "Hesoyam1!";
    $dbname = "PHPSQL";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Create a new Product instance
    $product = new Product();

    $error = [];

    try {
        $product->setProductName(trim($_POST['product_name']));
    } catch (InvalidArgumentException $e) {
        $error['product_name'] = strip_tags($e->getMessage());
    }

    try {
        $product->setStock((int)$_POST['stock']);
    } catch (InvalidArgumentException $e) {
        $error['stock'] = strip_tags($e->getMessage());
    }

    try {
        $product->setPrice((int)$_POST['price']);
    } catch (InvalidArgumentException $e) {
        $error['price'] = strip_tags($e->getMessage());
    }

    if (empty($error)) {
        $product->insertToDatabase($conn);
        $conn = null;
    } else {
        foreach ($error as $msg) {
            echo "<div class='text-danger'>{$msg}</div>";
        }
    }


    // Insert the product into the database
    $product->insertToDatabase($conn);


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body class="d-flex justify-content-start align-items-center vh-200 p-5" >
    <div class="card " style="width: 400px; background-color:lemonchiffon">
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="product_name">Nama Barang</label><br>
                    <input type="text" class="form-control" name="product_name" id="product_name">
                </div>
                <div class="mb-3">
                    <label for="price">Harga</label><br>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Masukkan harga barang">
                    <?php if (isset($error['price'])) : ?>
                        <div class="text-danger"><?= $error['price'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="stock">Stok</label><br>
                    <input type="number" name="stock" class="form-control" id="stock" placeholder="Masukkan stok barang">
                    <?php if (isset($error['stock'])) : ?>
                        <div class="text-danger"><?= $error['stock'] ?></div>
                    <?php endif; ?>
                </div>
                <!-- <button type="submit" class="btn btn-primary" name="proses3">Submit</button> -->
                <input type="submit" name="proses3" value="Sumbit" class="btn btn-primary">
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>

</html>

<?php
// Close the database connection
if (isset($conn)) {
    $conn = null;
}
// Prevent form resubmission on page refresh
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

?>