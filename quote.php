<?php   
    require("./mailing/mailfunction.php");

    $name = $_POST["name"];
    $phone = $_POST['phone'];
    $email = $_POST["email"];
    
    $Subject = $_POST["Subject"];
    $otherdetails = $_POST["details"];

    $body = "<ul><li>Name: ".$name."</li><li>Phone: ".$phone."</li><li>Email: ".$email."</li><li>Apply For: </li><li>Subject: ".$Subject." Yrs.</li><li>Resume(Attached Below):</li></ul>";
	
		// --- CHANGE IS HERE ---
        $recipient_email = "haydarshakhsa@gmail.com";
        // Assuming your mailfunction takes (recipient_email, subject, body, attachment_path)
        $status = mailfunction($recipient_email, "New Job Application", $body, $filenameWithDirectory); 
        // --- END OF CHANGE ---
		$status = mailfunction("", "Company", $body, $filenameWithDirectory); //reciever
        if($status)
            echo '<center><h1>Thanks! We will contact you soon.</h1></center>';
        else
            echo '<center><h1>Error sending message! Please try again.</h1></center>';
	}
	

?>