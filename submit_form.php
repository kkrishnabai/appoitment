<?php
// Fetch form data
$name = $_POST['name'];
$email = $_POST['email'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];

// Email subject
$subject = "Appointment Confirmation";

// Email content for user
$message_user = "Dear $name,\n\nYour appointment with $doctor has been booked.\nDate: $date\nTime: $time\n\nThank you.";

// Email content for doctor
$message_doctor = "Dear $doctor,\n\n$name has booked an appointment with you.\nDate: $date\nTime: $time\n\nPlease confirm.\n\nThank you.";

// Send email to user
if(mail($email, $subject, $message_user))
   echo 'Email sent successfully!';
} else {
    echo 'Email sending failed: ' . $mail->ErrorInfo;
}

// Send email to doctor
$doctor_email = "krishnaquants@gmail.com"; // Replace with actual doctor's email
mail($doctor_email, $subject, $message_doctor);

// Redirect to a thank you page
header("Location: thank_you.html");
?>
