<?PHP
$name = $email = $phone = $city = $project_type = $property_type = $start_date = $size = $referral = $comments = "";

// Check the sender's input to trim and remove slashes and
// special characters  
function check_input($data)
 {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

// Request method must be 'POST'
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$to       	     = 'ocartisticlandscape@gmail.com';
$subject  		 = 'Free Estimate';
$name     	     = check_input($_POST['name']);
$email	  		 = check_input($_POST['email']);
$phone           = check_input($_POST['phone']);
$city            = check_input($_POST['city']);
$project_type    = $_POST['project_type'];
$property_type   = $_POST['property_type'];
$start_date      = $_POST['start_date'];
$size		 	 = check_input($_POST['size']);
$referral        = $_POST['referral'];
$comments        = check_input($_POST['comments']);
}

// Message to be sent to owner
$message = "

You Received an estimate request from Matt's website!

Name: $name
Email: $email
Phone: $phone
City: $city
Project Type: $project_type
Property Type: $property_type
Start Date: $start_date
Square Footage: $size
Referral Type: $referral
Additional Comments: $comments

";

$headers = 'From: Proposal@matt.com';

// Send information and message if name, email, and phone number were
// included. 
if ($name && $email && $phone) {
	mail($to, $subject, $message, $headers); }

header('Location: thanks.html');
exit();

?>

