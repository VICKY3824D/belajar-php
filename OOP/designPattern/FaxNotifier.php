<?php 
namespace AppUser;

require_once 'Notifier.php';

class FaxNotifier implements Notifier {
    public function notify() {
        // Implementation for fax notification
        echo "Sending fax notification...";
    }
}

?>