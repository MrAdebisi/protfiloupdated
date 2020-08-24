<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$budget = $_POST['budget'];
$whatBusinessDoes = $_POST['whatBusinessDoes'];
$uniqueAboutBusiness = $_POST['uniqueAboutBusiness'];
$idealCustomer = $_POST['idealCustomer'];
$competitors = $_POST['competitors'];
$email = $_POST['email'];
$haveWebsite = $_POST['haveWebsite'];
$activeSocialMedia = $_POST['activeSocialMedia'];

$email_from = 'info@fleesd.org';
$email_subject = 'New Client Application';
$email_body = "Client Name: $name.\n".
                "Client Email: $visitor_email.\n".
                    "What the Client Business Does: $whatBusinessDoes.\n".
                        "Unique Thing about the client business: $uniqueAboutBusiness.\n".
                            "Client Ideal Customer: $idealCustomer.\n".
                                "Client Competitors: $competitors.\n".
                                    "Client Budget: $budget.\n".
                                        "Client website availability: $haveWebsite.\n".
                                            "Client activity on social media: $activeSocialMedia.\n";
$to = 'zenesteria@gmail.com';
$headers = "from: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject, $email_body, $headers);
header("Location: contact.html");

?>