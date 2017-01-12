<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "info.govelapp.com";

# SUBJECT (Subscribe/Remove)
$subject = "New Subscription!";

# RESULT PAGE
$location = "govelapp.com";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['firstname']." \n";
$body .= "Email: ".$_REQUEST['email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>