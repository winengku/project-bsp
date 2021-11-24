<?php
if (isset($_POST['nickname']) && $_POST['nickname'] != "") {
    die();
} else {
    $name = $_POST["name"];
    $visitor_email = $_POST["email"];
    $title = $_POST["title"];
    $company = $_POST["company"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    $email_from = $visitor_email;

    $email_subject = "New Form Submission";

    $email_body = "Full name : $name.\n" .
        "Title : $title.\n" .
        "Company : $company.\n" .
        "Phone : $phone.\n" .
        "Subject : $subject.\n" .
        "Message : $message.\n";

    $to = "winengkuu@gmail.com";

    $headers = "From: $email_from \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");
}
