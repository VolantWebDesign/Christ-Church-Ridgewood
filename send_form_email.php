<?php
/* Set e-mail recipient */
$myemail  = " ccsearchcommittee2016@gmail.com";

/* Check all form inputs using check_input function */
$prose = $_POST['prose'];
$from_email = "rector@christchurchridgewood.org";
$subject = "Inquiry from Search Committee Suggestion Box";
/* If e-mail is not valid show error message */
// if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
// {
//     show_error("E-mail address not valid");
// }

/* Let's prepare the message for the e-mail */
$message = "This Inquiry has been submitted via the church website. 

Comment / Suggestions:
$prose
";

/* Send the message using mail() function */
mail($myemail, $subject, $message, null, "-f$from_email");
 
/* Redirect visitor to the thank you page */
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