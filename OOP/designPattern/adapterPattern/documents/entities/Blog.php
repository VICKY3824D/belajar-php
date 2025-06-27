<?php

class Blog extends BaseDocument{
    private $url = '';

    public function __construct($title, $author, $content, $year, $url) {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
        $this->year = $year;
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }
}

?>