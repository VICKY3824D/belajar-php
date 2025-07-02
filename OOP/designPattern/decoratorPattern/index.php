<?php

namespace DesignPattern\DecoratorPattern;

require_once 'Comment.php';
require_once 'EmoticonParser.php';

use DesignPattern\DecoratorPattern\EmoticonParser;
use DesignPattern\DecoratorPattern\Comment;

// Instansiasi Comment
$comment = new Comment();
echo 'Sebelum parsing : ' . $comment->getContent() .  '<br />'; // Method yang dipanggil sama getContent
echo '<hr>';

// Kita ingin parsing, tinggal bikin instansiasi EmoticonParse lalu masukan object Comment jadi parameter.
$EmoticonParser = new EmoticonParser($comment);
echo 'Setelah parsing : ' . $EmoticonParser->getContent() . '<br>'; // Method yang dipanggil sama :) getContent


?>