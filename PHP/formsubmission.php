<html>
    <body>
        
<?php

    echo $_GET['submit']

?>
    </body>
</html>


// // Update the path below to your autoload.php,
// // see https://getcomposer.org/doc/01-basic-usage.md
// require_once '/path/to/vendor/autoload.php';

// use Twilio\Rest\Client;

// // Find your Account SID and Auth Token at twilio.com/console
// // and set the environment variables. See http://twil.io/secure
// $sid = getenv("TWILIO_ACCOUNT_SID");
// $token = getenv("TWILIO_AUTH_TOKEN");
// $twilio = new Client($sid, $token);

// $phone_number = $twilio->lookups->v1->phoneNumbers("(510) 867-5310")
//                                     ->fetch(["countryCode" => "US"]);

// print($phone_number->phoneNumber);