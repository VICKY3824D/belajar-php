<?php
namespace AppUser;

include_once('EmailNotifier.php');
include_once('SMSNotifier.php');
include_once('FaxNotifier.php');

use AppUser\EmailNotifier;
use AppUser\SMSNotifier;
use AppUser\FaxNotifier;


class User {

    public function getNotified(){

        return 'sms';
    }
}

$user = new \AppUser\User();
$notifier = $user->getNotified();

switch ($notifier) {
    case 'sms':
        $notification = new SMSNotifier();
        break;
    case 'email':
        $notification = new EmailNotifier();
        break;
    case 'fax':
        $notification = new FaxNotifier();
        break;
    default:
        throw new \Exception("Unknown notification type");
}

$notification->notify();

?>