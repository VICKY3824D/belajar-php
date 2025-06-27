<?php

class BaseDocument{
    protected $title = '';
    protected $author = '';
    protected $content = '';

    protected int $year;

     public function getTitle(){
        return $this->title;
     }

     public function getAuthor(){
        return $this->author;
     }

    public function getContent(){
        return $this->content;
    }

    public function getYear(){
        return $this->year;
    }
}
?>