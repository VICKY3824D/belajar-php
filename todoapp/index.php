<?php

$todo_s = [];

if(file_exists('todo.txt')){
    $file = file_get_contents('todo.txt');
    $todo_s = unserialize($file);
}

// $_POST['todo'] berfungsi untuk mengambil value dari <input type="text" name="todo" id="">
if(isset($_POST['todo'])){
    $data = $_POST['todo'];
    $todo_s[] = [
        'todo' => $data,
        'status' => 0
    ];
    saveData($todo_s);
}

// $_GET['status']) untuk mengambil query parameter status
if(isset($_GET['status'])){
    // Update the status of the todo item
    $todo_s[$_GET['key']]['status'] = $_GET['status'];

    // Save the updated todo list back to the file
    saveData($todo_s);
}

if(isset($_GET['hapus'])){
    unset($todo_s[$_GET['key']]);
    saveData($todo_s);
}

function saveData($todos){
    file_put_contents('todo.txt', serialize($todos));
    header('Location: index.php');
}

print_r($todo_s);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo APP</title>
</head>
<body>
    <h1>Todo APP</h1>
    <form action="" method="post">
        <label for="">Apa Kegiatanmu hari ini</label><br>
        <input type="text" name="todo" id="">
        <button type="submit">Tambah</button>
    </form>

    <h2>List Todo</h2>
    <ul>
        <?php foreach($todo_s as $key => $value): ?>
        <li>
            <input  type="checkbox"
                     name="todo" 
                     onclick="window.location.href= 'index.php?status= <?php echo ($value['status'] == 1) ? '0' : '1'; ?> &key=<?php echo $key; ?>';"
                     <?php 
                        if($value['status'] == 1){
                            echo 'checked';
                        }
                     ?>
                     >

            <label >
                <?php 
                if($value['status'] == 1){
                    echo '<del>' . $value['todo'] . '</del>';
                } else{
                    echo $value['todo'];
                }
                ?>
            </label>

            <a href="index.php?hapus=1&key=<?php echo $key; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus')"> 
                Hapus
            </a>
        </li>
        <?php endforeach;?>
    </ul>

</body>
</html>