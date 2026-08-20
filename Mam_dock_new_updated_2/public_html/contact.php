<?php
include("app/model/config.php");

// $msgg="testing mail msgg";
// $subject="testing mail subject";
// $server_email="milansinghmks@gmail.com";
// $user_email="milansinghmks@gmail.com";
// $server_name="adminmks";
// $user_name="Milan Kumar Singh";

// echo "0";

// if (Static_Operation :: sendmail($msgg, $subject, $server_email, $server_name, $user_email, $user_name)) {
 // echo "Mail Send | We'll Get Back To You Soon";
// }


// $to = "milansinghmks@gmail.com";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: _mainaccount@gurucharya.com" . "\r\n";

// $newMail = mail($to,$subject,$txt,$headers);

// if($newMail){
// echo "done";
// } else {
// echo "not done";
// }

// echo "2";
// exit();

if(isset($_POST['submit'])){
	if ($_POST['submit'] == '') {
		$_SESSION['error_msg'] = "ERROR: You are a machine not human.Please try again";
	} else {
		$create_date = date();
		$contact_fname = $_POST['contact_fname'];
		$contact_lname = $_POST['contact_lname'];
		$contact_phno = $_POST['contact_phno'];
		$contact_mail = $_POST['contact_mail'];
		$contact_msg = $_POST['contact_msg'];
		
		print_r($_POST);
		
		//Mail Send Start
		$to = "milansinghmks@gmail.com";
        $subject = "New contact Us Listing";
        
        $message = "
            <html>
            <head>
            <title>New contact Us:</title>
            </head>
            <body>
            <p>This email contains HTML Tags!</p>
            <table>
            <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            </tr>
            <tr>
            <td>John</td>
            <td>Doe</td>
            </tr>
            </table>
            </body>
            </html>
            ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: Gurucharya info@gurucharya.com' . "\r\n";

        // mail($to,$subject,$message,$headers);
        if(@mail($to,$subject,$message,$headers)) {
            echo "Success";
            //$_SESSION['success_msg'] = "Thank you for contacting us. Our team contact you as soon as possible.";
            //  header('location:'.$redirectUrl);
        } else {
            echo $errorMessage = error_get_last()['message'];
            echo "error";
            
            //$_SESSION['error_msg'] = "Sorry! Something invalid, Please try again later.";
            //  header('location:'.$redirectUrl);
        }
        
		//Mail Send End
		exit();
	    
	}
}


//exit();


include("app/view/layouts/user_header.html");
include("app/view/user/contact.html");
include("app/view/layouts/user_footer.html");
?>