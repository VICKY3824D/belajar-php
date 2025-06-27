<?php

class DocumentAdapter {
    private $document;

    public function __construct($doc){
        $this->document = $doc;
    }

    public function createHeader(){
        $title = $this->document->getTitle();
        $author = $this->document->getAuthor();
        $year = $this->document->getYear();

        return "<h1>" . $title . " created by " . $author . "</h1>" . 
               "<p>Year: " . $year . "</p>";
    }


    public function createPreview($length){
        return substr($this->document->getContent(), 0, $length) ;
    }
}

?>


