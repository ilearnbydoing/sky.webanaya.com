<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];

$EmailTo = "skyenterprisesindia@gmail.com,info@hnhtwenty.com,durgesh@webanaya.com";
$EmailFrom = "info@hnhtwenty.com";
$Subject = "Sky Enterprises- You have received New Enquiry";

// prepare email body text
$Body = "\n";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";

$Body .= "Company: ";
$Body .= $company;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$EmailFrom);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>
