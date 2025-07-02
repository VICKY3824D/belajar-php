<?php 

namespace DesignPattern\DecoratorPattern;

// Sebuah class komentar. Yang memiliki properti / field name dan content.
class Comment {
    private $name;
    private $content = 'Senyum manis :)';

    public function getContent() {
        return $this->content;
    }
}

$comment = new Comment();
echo $comment->getContent(); // Output: Senyum manis :)

?>