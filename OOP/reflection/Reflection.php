<?php

class ValidationUtil{

    static function validate(LoginRequest $request){
    
        if(!isset($request->username)){
            throw new ValidationException("Username is null");
        } else if(!isset($request->password)){
            throw new ValidationException("Password is null");
        }

    }

    static function validateReflection($request){
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach($properties as $property){
            if(!$property->isInitialized($request)){
                throw new ValidationException("$property->name is not set");
            } else if(is_null($property->getValue($request))){
                throw new ValidationException("$property->name is not  set");
            }
        }
    }


}

require_once "../exception/ValidationException.php";
require_once "../exception/LoginRequest.php";


$req = new LoginRequest();
$req->username = "hendrik";
$req->password = "null";

ValidationUtil::validateReflection($req);

class RegisterUserRequest{
    public ?string $name;
    public ?string $address;
    public ?string $email;

}

$register = new RegisterUserRequest();

$register->name = "farhan";
$register->address = "jakarta";
$register->email = null;

ValidationUtil::validateReflection($register);



?>