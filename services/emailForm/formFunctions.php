<?php
function redirectWithError($error)
{
    $_SESSION['_contact_form_error'] = $error;

    header('Location: '.$_SERVER['HTTP_REFERER'].'%23Contact');
    //echo '<script type="text/javascript">window.location.replace("https://www.idir.online#contact")</script>';
    //echo '<script type="text/javascript">window.alert("Sorry there was an error. Try again and fill in all the inputs correctly.")</script>';
    echo "Error:".$error;
    die();
}

function redirectSuccess()
{
    $_SESSION['_contact_form_success'] = true;

    header('Location: '.$_SERVER['HTTP_REFERER'].'%23Contact');
    //echo '<script type="text/javascript">window.location.replace("https://www.idir.online#contact")</script>';
    //echo '<script type="text/javascript">window.alert("Your message was sent successfully!")</script>';
    echo "Your message was sent successfully!";
    die();
}