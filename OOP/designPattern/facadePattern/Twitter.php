<?php

namespace FacadePattern;

class Twitter {
    public function requestToken(){
        echo "Token requested! \n";
    }

    public function login(){
        echo "Redirect to Twitter Login Page \n";
    }
}

?>