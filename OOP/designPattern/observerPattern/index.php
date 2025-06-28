<?php

/**
 * Interface Observer
 * 
 * Defines a common interface for all observer classes.
 * Each observer must implement the `send()` method,
 * which will be called when the subject triggers an event.
 */
interface Observer {
    public function send();
}

/**
 * Class Sms
 * 
 * Concrete implementation of the Observer interface.
 * Simulates sending an SMS notification.
 */
class Sms implements Observer {
    public function send() {
        echo "Sending SMS notification..." . PHP_EOL;
    }
}

/**
 * Class Whatsapp
 * 
 * Another implementation of the Observer interface.
 * Simulates sending a WhatsApp notification.
 */
class Whatsapp implements Observer {
    public function send() {
        echo "Sending WhatsApp notification..." . PHP_EOL;
    }
}

/**
 * Class User
 * 
 * Represents a user in the system.
 * The `register()` method simulates user registration.
 */
class User {
    public function register() {
        echo "User registered successfully!" . PHP_EOL;
    }
}

/**
 * Class UserObserver
 * 
 * Manages a list of observer objects and notifies them when an event occurs.
 * This acts as a custom implementation of the Observer pattern.
 */
class UserObserver {
    private $observers = [];

    /**
     * Attach a new observer to the observer list.
     * 
     * @param Observer $object The observer to be attached.
     * @return $this Allows method chaining.
     */
    public function attach($object) {
        $this->observers[] = $object;
        return $this;
    }

    /**
     * Notify all attached observers by calling their `send()` method.
     */
    public function run() {
        foreach ($this->observers as $observer) {
            $observer->send();
        }
    }
}

// --- Example Usage ---

// Create a new user and register them
$user = new User();
$user->register();

// Create a user observer and attach multiple notification services
$observer = new UserObserver();
$observer->attach(new Sms())
         ->attach(new Whatsapp());

// Trigger the notification to all observers
$observer->run();

?>
