<?php 

include APPPATH.'third_party/PHPMailer/src/Exception.php';
include APPPATH.'third_party/PHPMailer/src/PHPMailer.php';
include APPPATH.'third_party/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class RegisterStudent extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->database('default');
    }

    function Create_NextButton() {
    	if(isset($_POST['RegisterUsername']) && isset($_POST['RegisterEmail']) && isset($_POST['RegisterPassword'])  && isset($_POST['RegisterRP'])  && isset($_POST['RegisterSI']) && !empty($_POST['RegisterUsername']) && !empty($_POST['RegisterEmail']) && !empty($_POST['RegisterPassword']) && !empty($_POST['RegisterRP']) && !empty($_POST['RegisterSI'])) {
    		$Code = rand(0, 999999999);

  			try {
  				if($this->db->query("Select Count(*) as x from Student where StudentID=". $_POST['RegisterSI'])->result()[0]->x != 0) {

  					$x = include APPPATH.'third_party/SMTPConfig.php';

  					// Sending a Verification Key Code to Email Account
  					$mail = new PHPMailer();
				    $mail->isSMTP();
				    $mail->Host = 'smtp.gmail.com'; 
				    $mail->SMTPSecure = 'ssl';
				    $mail->SMTPAuth = true;
				    $mail->Username = $x['Email'];
				    $mail->Password = $x['Password'];
				    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
				    $mail->Port = 465;

				    //Recipients
				    $mail->setFrom($x['Email'], "Student EWallet Notifications");
				    $mail->addAddress($_POST['RegisterEmail'], $_POST['RegisterUsername']);

				    // Content
				    $mail->isHTML(true);
				    $mail->Subject = 'Verification Code';
				    $mail->Body    = 'Verification Code is <b>'. $Code .'</b>';
				    // Send
				    $mail->send();

				    if($this->db->query("Select Count(*) as x from Registration")->result()[0]->x != 0) {
			    		if(json_encode($this->db->query("Select * from Registration where RegisterSI=". $_POST['RegisterSI'])->result()[0]) == 'null') {
				    		if($_POST['RegisterPassword'] == $_POST['RegisterRP']) {
								$this->db->insert("Registration", array(
					    			"RegisterID" => null,
					    			"RegisterUsername" => $_POST['RegisterUsername'],
					    			"RegisterEmail" => $_POST['RegisterEmail'],
					    			"RegisterPassword" => $_POST['RegisterPassword'],
					    			"RegisterSI" => $_POST['RegisterSI'],
					    			"RegisterCode" => $Code,
					    			"RegisterExpire" => time() + (30 * 24 * 60 * 60),
					    			"isApprove" => false,
					    			"isDelete" => false,
					    			"TimeRegister" => date("H:i:s"),
					    			"DateRegister" => date("Y-m-d")
					    		));

					    		echo json_encode(array(
							    	"isError" => false
							    ));
				    		}
				    		else echo json_encode(array(
					    		"isError" => true,
					    		"ErrorDisplay" => "Error: Password Mismatched!"
					    	));
				    	}
				    	else echo json_encode(array(
					   		"isError" => true,
					   		"ErrorDisplay" => "Error: Student ID is already Registered!"
					   	));
			    	}
			    	else {
			    		if($_POST['RegisterPassword'] == $_POST['RegisterRP']) {
					   		$this->db->insert("Registration", array(
					    		"RegisterID" => null,
					    		"RegisterUsername" => $_POST['RegisterUsername'],
					    		"RegisterEmail" => $_POST['RegisterEmail'],
					    		"RegisterPassword" => $_POST['RegisterPassword'],
					    		"RegisterSI" => $_POST['RegisterSI'],
					    		"RegisterCode" => $Code,
					    		"RegisterType" => "STUDENT",
					    		"RegisterExpire" => time() + (30 * 24 * 60 * 60),
					    		"isApprove" => false,
					    		"isDelete" => false,
					    		"TimeRegister" => date("H:i:s"),
					    		"DateRegister" => date("Y-m-d")
					    	));

					    	echo json_encode(array(
							   	"isError" => false
							));
				    	}
				    	else echo json_encode(array(
					    	"isError" => true,
					    	"ErrorDisplay" => "Error: Password Mismatched!"
					    ));
			    	}
  				}
  				else echo json_encode(array(
				   	"isError" => true,
					"ErrorDisplay" => "Error: Student ID Invalid!"
				));
			}
			catch (Exception $e) {
				echo json_encode(array(
					"isError" => true,
					"ErrorDisplay" => "Error: Message could not be sent!\n". $e
			 	));
			 	echo $e;
			}
    	}
    	else echo json_encode(array(
    		"isError" => true,
    		"ErrorDisplay" => "Error: Either of these 5 are empty!"
    	));
    }

    function Create_BackButton() {
    	if(isset($_GET['RegisterSI']) && !empty($_GET['RegisterSI'])) {
    		if(json_encode($this->db->query("Select * from Registration where RegisterSI=". $_GET['RegisterSI'])->result()[0]) != 'null') {
    			$this->db->query("Delete from Registration where RegisterSI=". $_GET['RegisterSI']);

    			 echo json_encode(array(
		    		"isError" => false
		    	));
    		}
    	}
    	else echo json_encode(array(
    		"isError" => true,
    		"ErrorDisplay" => "Error: Unexpected Error Occurs!"
    	));
    }

    function Create_ResendButton() {
    	if(isset($_GET['Resend']) && isset($_POST['RegisterUsername'])  && isset($_POST['RegisterEmail']) && isset($_POST['RegisterSI']) && !empty($_GET['Resend']) && !empty($_POST['RegisterSI']) && !empty($_POST['RegisterUsername']) && !empty($_POST['RegisterEmail'])) {
    		$RegisterQuery = $this->db->query("Select * from Register where RegisterSI=". $_POST['RegisterSI'])->result()[0];

    		if(json_encode($RegisterQuery) != null) {
    			$x = include APPPATH.'third_party/SMTPConfig.php';

  				// Sending a Verification Key Code to Email Account
  				$mail = new PHPMailer();
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com'; 
				$mail->SMTPSecure = 'ssl';
				$mail->SMTPAuth = true;
				$mail->Username = $x['Email'];
				$mail->Password = $x['Password'];
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
				$mail->Port = 465;
				//Recipients
				$mail->setFrom($x['Email'], "Student EWallet Notifications");
			    $mail->addAddress($_POST['RegisterEmail'], $_POST['RegisterUsername']);

			    // Content
			    $mail->isHTML(true);
			    $mail->Subject = 'Verification Code';
			    $mail->Body    = 'Verification Code is <b>'. $RegisterQuery->RegisterCode .'</b>';
			    // Send
			    $mail->send();

			    echo json_encode(array(
				   	"isError" => false
				));
    		}
    		else echo json_encode(array(
	    		"isError" => true,
	    		"ErrorDisplay" => "Error: Unexpected Error Occurs!"
	    	));
    	}
    	else  echo json_encode(array(
    		"isError" => true,
    		"ErrorDisplay" => "Error: Unexpected Error Occurs!"
    	));
    }

    function Create_DoneButton() {
    	if(isset($_POST['RegisterCode']) && isset($_POST['RegisterSI']) && !empty($_POST['RegisterCode']) && !empty($_POST['RegisterSI'])) {
    		if(json_encode($this->db->query("Select * from Registration where RegisterSI=". $_POST['RegisterSI'] ." and RegisterCode=". $_POST['RegisterCode'])->result()[0]) != 'null') {
    			$this->db->update("Registration", array(
    				"isApprove" => true
    			), "RegisterSI=". $_POST['RegisterSI']);

    			echo json_encode(array(
				   	"isError" => false
				));
    		}
    		else echo json_encode(array(
	    		"isError" => true,
	    		"ErrorDisplay" => "Error: Verification is Invalid!"
	    	));
    	}
    	else echo json_encode(array(
    		"isError" => true,
    		"ErrorDisplay" => "Error: Verification Codebox is Empty!"
    	)); 
    }
}

?>