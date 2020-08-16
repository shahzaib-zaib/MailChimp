<?php

    if($_POST['submit']){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $companyName = $_POST['comnamy'];
        $employeeno = $_POST['employ'];

        echo $fname . " " . $lname;
        echo $email;
        echo $employeeno;
    }

?>