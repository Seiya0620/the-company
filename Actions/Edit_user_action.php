<?php
    include '../classes/User.php';

    // create an object
    $user = new User;

    // call the method
    $user->update($_POST,$_FILES);
?>