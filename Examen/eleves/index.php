<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 16.12.2019
 * Time: 14:23
 */

require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        default :
            home();
            break;
    }
}
else{
    home();
}