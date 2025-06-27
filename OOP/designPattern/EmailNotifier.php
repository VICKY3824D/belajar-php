<?php
namespace AppUser;

require_once 'Notifier.php';

class EmailNotifier implements Notifier {
    public function notify() {
        // Implementation for email notification
        echo "Sending email notification...";
    }
}

?>