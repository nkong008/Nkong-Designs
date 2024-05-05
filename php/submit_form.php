
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "nkong2020@gmail.com"; // Your email address
    $subject = "New form submission";
    $body = "First Name: $fname\nLast Name: $lname\nEmail: $email\nPhone: $phone\nMessage: $message";

    // Send email
    mail($to, $subject, $body);

    // Redirect back to the form page or a thank you page
    header "Location: ../html/thankyou.html"; // Replace with your thank you page URL
    // exit;
}
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>