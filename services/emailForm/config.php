<?php

// The name and address which should be used for the sender details.
// The name can be anything you want, the address should be something in your own domain. It does not need to exist as a mailbox.
define('CONTACTFORM_FROM_ADDRESS', '*************');
define('CONTACTFORM_FROM_NAME', 'Contact Form on idir.online');

// The name and address to which the contact message should be sent.
// These details should NOT be the same as the sender details.
define('CONTACTFORM_TO_ADDRESS', '*****************');
define('CONTACTFORM_TO_NAME', 'Idiro Dev');

// The details of your SMTP service, e.g. Gmail.
define('CONTACTFORM_SMTP_HOSTNAME', 'smtp.gmail.com');
define('CONTACTFORM_SMTP_USERNAME', '*****************');
define('CONTACTFORM_SMTP_PASSWORD', '*****************');

// The debug level for PHPMailer. Default is 0 (off), but can be increased from 1-4 for more verbose logging.
define('CONTACTFORM_PHPMAILER_DEBUG_LEVEL', 0);

// Which SMTP port and encryption type to use. The default is probably fine for most use cases.
define('CONTACTFORM_SMTP_PORT', 587);
define('CONTACTFORM_SMTP_ENCRYPTION', 'tls');

// HCaptcha keys
define('CONTACTFORM_HCAPTCHA_SITE_KEY', '*****************');
define('CONTACTFORM_HCAPTCHA_SECRET_KEY', '*****************');
?>

