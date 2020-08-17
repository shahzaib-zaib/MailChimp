<?php
    include "lib/MailChimp.php";

    use \DrewM\MailChimp\MailChimp;

    $api_key = "";
    $list_id = "";

    $MailChimp = new MailChimp($api_key);
    
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $companyName = $_POST['comnamy'];
        $employeeno = $_POST['employ'];

        $result = $MailChimp->post("lists/$list_id/members", [
				'email_address' => 'davy@example.com',
				'status'        => 'subscribed',
			]);

        print_r($result);
    }

?>