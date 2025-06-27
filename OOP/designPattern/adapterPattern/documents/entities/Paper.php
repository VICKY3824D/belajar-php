<?php

class Paper extends BaseDocument {
    private $abstract = '';

    public function __construct($title, $author, $content, $year, $abstract) {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
        $this->year = $year;
        $this->abstract = $abstract;
    }

    public function getAbstract() {
        return $this->abstract;
    }
}

?>