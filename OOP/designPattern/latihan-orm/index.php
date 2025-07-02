<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=127.0.0.1;dbname=latihan_orm', 'root', 'Hesoyam1!');

// Insert

// $user = R::dispense('user');
// $user->name = 'Kadrun Abdul';
// $id = R::store($user);

// echo "{$user->name} berhasil disimpan dengan ID: {$id}";


// $user1 = R::load('user' , 1);
// print_r($user1);

$user = R::findOne( 'user', ' name = ? ', [ 'Kadrun Abdul' ] );
R::trash($user);
echo "User dengan nama {$user->name} telah dihapus.";

// $users = R::findAll('user');
// foreach ($users as $user) {
//     echo "ID: {$user->id}, Name: {$user->name}<br>";
// }

// $user = R::findOne('user', 'name = ?', ['Pardimen']);
//     $user->name = 'Tumijo';

// R::store($user); // simpan




?>