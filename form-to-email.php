<?PHP

$to       	     = 'ocartisticlandscape@gmail.com';
$subject  		 = 'Free Estimate';
$name     	     = $_POST['name'];
$email	  		 = $_POST['email'];
$phone           = $_POST['phone'];
$city            = $_POST['city'];
$project_type    = $_POST['project_type'];
$property_type   = $_POST['property_type'];
$start_date      = $_POST['start_date'];
$size		 	 = $_POST['size'];
$referral        = $_POST['referral'];
$comments        = $_POST['comments'];

$message = "

You Received an estimate request from Matts website!

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

mail($to, $subject, $message, $headers);

header('Location: thanks.html');
exit();

?>

