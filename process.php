<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $selectedPizzas = $_POST['pizza'];
    $pickupDate = $_POST['date'];
    $pickupTime = $_POST['time'];
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address1 = $_POST['add1'];
    $address2 = $_POST['add2'];
    $city = $_POST['city'];
    $postalCode = $_POST['postal'];
    $province = $_POST['province'];

    // Build email content
    $emailContent = "Selected Pizzas: " . implode(", ", $selectedPizzas) . "\n";
    $emailContent .= "Pickup Date: $pickupDate\n";
    $emailContent .= "Pickup Time: $pickupTime\n";
    $emailContent .= "Name: $firstName $lastName\n";
    $emailContent .= "Phone: $phone\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Address: $address1 $address2, $city, $postalCode, $province\n";

    // Your email address where you want to receive the form submissions
    $to = "ismailharuna6088@gmail.com";
    $subject = "New Pizza Order Form Submission";

    // Additional headers
    $headers = "From: $email" . "\r\n";

    // Send email
    mail($to, $subject, $emailContent, $headers);

    // Redirect after submission (you can customize the URL)
    header("Location: thank_you.html");
    exit;
}
?>
