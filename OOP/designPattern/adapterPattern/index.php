<?php

spl_autoload_register(function ($class) {
	include "documents/entities/".$class.".php";
});

include "documents/DocumentAdapter.php";

$blog = new Blog("Hello World", "Ridwanbejo", "Lorem ipsum sit dolor amet!", 2000, "http://myblog.net/hello-world");

$documentAdapter = new DocumentAdapter($blog);
echo $documentAdapter->createHeader();
echo $documentAdapter->createPreview(50);

$book = new Book("Murder in Mesopotamia", "Agatha Christie", "Lorem ipsum sit dolor amet!. Lorem ipsum sit dolor amet!. Lorem ipsum sit dolor amet!", 1997);

$documentAdapter = new DocumentAdapter($book);
echo $documentAdapter->createHeader();
echo $documentAdapter->createPreview(20);

$paper = new Paper("N-Tier Web Architecture for Resilient Business Infrastructure", "Kresna Galuh, Toni Haryanto, and Ahmad Oriza", "Lorem ipsum sit dolor amet!. Lorem ipsum sit dolor amet!. Lorem ipsum sit dolor amet!", 2002, "This is abstract!");

$documentAdapter = new DocumentAdapter($paper);
echo $documentAdapter->createHeader();
echo $documentAdapter->createPreview(30);

?>