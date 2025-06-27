<?php 

class Book extends BaseDocument {
    public function __construct($title, $author, $content, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
        $this->year = $year; 
    }
}

?>