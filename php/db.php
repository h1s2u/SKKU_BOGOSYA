<?php
    session_start();

    header('Content-Type: text/html; charset=utf-8');

    $db = new mysqli("localhost", "root", "endrnffpck7!", "bgs");
    $db->set_charset("utf-8");

    function query($query) {

        global $db;
        return $db->query($query);
    }


?>