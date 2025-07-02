<?php

namespace FacadePattern;

require_once 'LoginFacade.php';

use FacadePattern\LoginFacade;


$userOption1 = 'Google';

// without facade

// if( $userOption == 'Google'){
//     $login = new Google;
//     $login->requestToken();
//     $login->login();
// } else if ( $userOption == 'Twitter'){
//     $login = new Twitter;
//     $login->requestToken();
//     $login->login();
// } else if ( $userOption == 'Facebook'){
//     $login = new Twitter;
//     $login->requestToken();
//     $login->login();
// }

//with facade

$userOption2 = 'Twitter';
$userOption3 = 'Facebook';

$login = new LoginFacade;
$login->setBrand($userOption3)->run();

?>