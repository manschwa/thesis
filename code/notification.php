<?php
class MyPlugin extends StudIPPlugin implements SystemPlugin {
    public function __construct() {
        NotificationCenter::addObserver($this,
            "send_mail_to_accepted_user",
            "user_accepted_to_seminar");
    }

    public function send_mail_to_accepted_user($username) {
        /* hier das, was getan werden soll, wenn der Nutzer registriert ist */
    }
}
