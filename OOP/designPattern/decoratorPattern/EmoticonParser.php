<?php

namespace DesignPattern\DecoratorPattern;

class EmoticonParser{
    private $content;

    public function __construct($object){

        // Membuat constuctor yang menerima object. Ini yang membuat independen. Nanti object yang membutuhkan Emoticon dipassing lewat sini.

        $this->content = $object;
    }

    public function getContent(){
        
        // Nah disini class methodnya kita semacam override, dengan method yang sama kita tambahkan fungsionalitas Emoticon.
        // Panggil parseEmoticon.

        return $this->parseEmoticon($this->content->getContent());
    }

    public function parseEmoticon($content){

        // Ini hanya contoh ya, harusnya parser Emoticon lebih rumit dari ini. Kita hanya string replace senyuman jadi gambar aja.

        return str_replace(':)', '<img width="40" src="https://findicons.com/files/icons/360/emoticons/128/smile_1.png" />', $content);
    }
}

?>