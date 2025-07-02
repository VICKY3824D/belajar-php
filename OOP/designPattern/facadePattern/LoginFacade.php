<?php 

namespace FacadePattern;

require_once 'Facebook.php';
require_once 'Google.php';
require_once 'Twitter.php';

use FacadePattern\Facebook;
use FacadePattern\Twitter;
use FacadePattern\Google;

// Login facade for login main interface with social media
class LoginFacade {

    // social media brand name(ex: google, facebook, twitter ...)
    public $brand;

    public function setBrand(string $brand){
        $this->brand = $brand;

        return $this;
    }

    //Method to run the real class
    public function run(){

        //equals to 'new Facebook' for example
        $className = "FacadePattern\\" . $this->brand;
        $brand = new $className;

        //request token
        $brand->requestToken();

        //login 
        $brand->login();
    }



}

?>