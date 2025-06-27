<?php

// namespace PaymentFactory;

interface PaymentInterface {
    public function getStatus();
    public function getIssue();
}

class CreditCard implements PaymentInterface {
    public function getStatus(){
        // checkoing server for credit card payment status
        echo "Checking credit card server ... ";
    }

    public function getIssue(){
        // checking server for credit card payment issue
        echo "Issue sent! \n";
    }
}

class Dana implements PaymentInterface {
    public function getStatus(){
        // checkoing server for dana payment status
        echo "Checking dana server ... ";
    }

    public function getIssue(){
        // checking server for dana payment issue
        echo "Issue sent! \n";
    }
}

class Gopay implements PaymentInterface {
    public function getStatus(){
        // checkoing server for gopay payment status
        echo "Checking gopay server ... ";
    }

    public function getIssue(){
        // checking server for gopay payment issue
        echo "Issue sent! \n";
    }
}

// factory class that creates any payment objects
class PaymentFactory{
    public function getInstance($class){
        return new $class();
    }
}

$optiohn = "CreditCard"; // can be creditcard, dana, gopay

$factory = new PaymentFactory();
$payment = $factory->getInstance(ucfirst($optiohn));
$payment->getStatus();
$payment->getIssue();

?>