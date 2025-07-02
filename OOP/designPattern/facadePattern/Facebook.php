<?php

namespace FacadePattern;

class Facebook {
    public function requestToken(){
        echo "Token requested! \n";
    }

    public function login(){
        echo "Redirect to Facebook Login Page \n";
    }
}

?>