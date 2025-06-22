<?php

require_once "LoginRequest.php";
require_once "Validator.php";
require_once "ValidationException.php";

$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";

// try {
//     validateLoginRequest($loginRequest);
//     echo "VALID" . PHP_EOL;
// } catch (ValidationException $exception) {
//     echo "Error: {$exception->getMessage()}" . PHP_EOL;  
// } catch (Exception $exception){
//     echo "exception error: {$exception->getMessage()} " . PHP_EOL;
// }

try {
    validateLoginRequest($loginRequest);
    
} catch (ValidationException | Exception $exception) {
    echo "Error: {$exception->getMessage()}" . PHP_EOL;

    // var_dump($exception->getTrace());

    echo $exception->getTraceAsString();
    
} finally {
    echo "still executed whether error or success";
}


?>