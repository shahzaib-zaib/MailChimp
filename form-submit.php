<?php
    include "lib/MailChimp.php";

    use \DrewM\MailChimp\MailChimp;

    $api_key = "a5aec72851eb576ac6d2bc51d33df7ff-us17";
    $list_id = "a99ae6af1a";

    $MailChimp = new MailChimp($api_key);
    
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $companyName = $_POST['comnamy'];
        $employeeno = $_POST['employ'];

        $result = $MailChimp->post("lists/$list_id/members", [
                'email_address' => $email,
                'merge_fields' => ['FNAME'=>$fname, 'LNAME'=>$lname, 'COMPANY'=>$companyName, 'EMPLOYEES'=>$employeeno],
				'status'        => 'subscribed',
			]);

        print_r($result);
    }

?>