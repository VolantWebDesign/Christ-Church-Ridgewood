<?php
/* Shared email form handler for Christ Church Ridgewood & The Great Hall */

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['gh_inquiry_submit'])) {
    // Honeypot check
    $honeypot = isset($_POST['website_url']) ? trim($_POST['website_url']) : '';
    if (!empty($honeypot)) {
        header('Location: great-hall.php?submitted=1#inquire');
        exit();
    }

    $contact_name     = check_input(isset($_POST['contact_name']) ? $_POST['contact_name'] : '', 'Please enter your full name.');
    $organization     = check_input(isset($_POST['organization']) ? $_POST['organization'] : '');
    $nonprofit_status = check_input(isset($_POST['nonprofit_status']) ? $_POST['nonprofit_status'] : '');
    $email            = check_input(isset($_POST['email']) ? $_POST['email'] : '', 'Please enter your email address.');
    $phone            = check_input(isset($_POST['phone']) ? $_POST['phone'] : '', 'Please enter your phone number.');
    $event_type       = check_input(isset($_POST['event_type']) ? $_POST['event_type'] : '', 'Please select an event type.');
    $event_date       = check_input(isset($_POST['event_date']) ? $_POST['event_date'] : '');
    $time_window      = check_input(isset($_POST['time_window']) ? $_POST['time_window'] : '');
    $guest_count      = check_input(isset($_POST['guest_count']) ? $_POST['guest_count'] : '');
    $package_interest = check_input(isset($_POST['package_interest']) ? $_POST['package_interest'] : '');
    $seating_layout   = check_input(isset($_POST['seating_layout']) ? $_POST['seating_layout'] : '');
    $message_body     = check_input(isset($_POST['message']) ? $_POST['message'] : '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        show_error('E-mail address not valid');
    }

    $myemail    = 'parishadmin@christchurchridgewood.org';
    $from_email = 'parishadmin@christchurchridgewood.org';
    $safe_email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $subject    = 'Great Hall Event Inquiry: ' . $event_type . ($organization ? ' (' . $organization . ')' : ' - ' . $contact_name);

    $message  = "A new event inquiry has been submitted via The Great Hall, Ridgewood webpage.\n\n";
    $message .= "Contact Name: $contact_name\n";
    $message .= "Organization / Group: " . ($organization ? $organization : 'Individual / Private') . "\n";
    $message .= "501(c)(3) / Group Status: " . ($nonprofit_status ? $nonprofit_status : 'Not specified') . "\n";
    $message .= "Email: $safe_email\n";
    $message .= "Phone: $phone\n\n";
    $message .= "Event Type: $event_type\n";
    $message .= "Preferred Date(s): " . ($event_date ? $event_date : 'Flexible / TBD') . "\n";
    $message .= "Preferred Time Window: " . ($time_window ? $time_window : 'Flexible / TBD') . "\n";
    $message .= "Estimated Guest Count: " . ($guest_count ? $guest_count : 'TBD') . "\n";
    $message .= "Package Interest: " . ($package_interest ? $package_interest : 'Standard Hall') . "\n";
    $message .= "Preferred Layout: " . ($seating_layout ? $seating_layout : 'Not specified') . "\n\n";
    $message .= "Additional Notes / Questions:\n" . ($message_body ? $message_body : 'None provided.') . "\n";

    $headers  = "From: $from_email\r\n";
    $headers .= "Reply-To: $safe_email\r\n";

    mail($myemail, $subject, $message, $headers, "-f$from_email");

    // Send confirmation copy to the inquirer
    $subject2 = 'Copy of your inquiry: The Great Hall, Ridgewood';
    $message2 = "Hello $contact_name,\n\nThank you for your interest in The Great Hall, Ridgewood (105 Cottage Place, Ridgewood, NJ). Here is a copy of your inquiry:\n\n" . $message;
    $headers2 = "From: $from_email\r\n";
    mail($safe_email, $subject2, $message2, $headers2, "-f$from_email");

    header('Location: great-hall.php?submitted=1#inquire');
    exit();
}

/* Legacy suggestion box handler */
$myemail  = "parishadmin@christchurchridgewood.org";

$prose = isset($_POST['prose']) ? check_input($_POST['prose']) : '';
$from_email = "parishadmin@christchurchridgewood.org";
$subject = "Inquiry from Christ Church Ridgewood Website";

$message = "This Inquiry has been submitted via the church website. 

Comment / Suggestions:
$prose
";

mail($myemail, $subject, $message, null, "-f$from_email");
 
header('Location: index.php');

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>
