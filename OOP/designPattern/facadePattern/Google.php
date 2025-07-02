<?php

namespace FacadePattern;

class Google {
    public function requestToken(){
        echo "Token requested! \n";
    }

    public function login(){
        echo "Redirect to Google Login Page \n";
    }
}

?>