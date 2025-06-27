<?php
namespace AppUser;

require_once 'Notifier.php';

class SMSNotifier implements Notifier {
    public function notify() {
        // Implementation for sms notification
        echo "Sending sms notification...";
    }
}

?>