<?php
    include '../classes/User.php';

    // create an object
    $user = new User;

    // call a method
    $user->login($_POST);

?>