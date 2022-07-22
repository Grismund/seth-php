<?php

    require_once realpath(__DIR__ . "/vendor/autoload.php");
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    echo("Phone number entered: ");
    echo($_POST['phone']);
    echo ("<br>");

    $numberToPost = $_POST['phone'];

    //This Dotenv library would be ideal, but it's not working. Can't troubleshoot right now.
    // $apiKey = getenv("TWILIO_ACCOUNT_SID");
    // echo($apiKey);
    
    // require __DIR__ . '/vendor/autoload.php';
    // require_once '/path/to/vendor/autoload.php';


    use Twilio\Rest\Client;

    // THIS MUST BE FIXED BEFORE PRODUCTION
    // This hard-coded API Key is a terrible idea. However, I'm having trouble using the Dotenv library to access them.
    $sid = "ACd8ce2c05ef19204160f20322bcd0813a";
    $token = "aaedb27561361ea0b237ee3e0d9cc3cd";
    // $sid = getenv("TWILIO_ACCOUNT_SID");
    // $token = getenv("TWILIO_AUTH_TOKEN");

    $twilio = new Client($sid, $token);
    
    $phone_number = $twilio->lookups->v1->phoneNumbers("$numberToPost")
                                        ->fetch(["countryCode" => "US"]);
    

    //No response code picked up by PHP in cases of 500 fatal. 
    //This makes it hard to display an error to the user.
    //I'm sure this is a PHP quirk, and I found some documentation (see resources.txt),
    //But I don't fully grasp it yet.
    echo("Response Code: ");
    echo(http_response_code());

    //Ideally, this would check for the response code, then render whichever message applied to that code.
    //However, in the case of a 500 error, such as a bad phone number, PHP does not register any response code.
    //Not only is there no response code, but PHP knows there should be one, so this first block never triggers in the case of an error
    //because it DOES receive a response, but the response code is not readable. I'm not sure why this is, but it seems to be a PHP quirk.
    //I need more info on how PHP does error handling.
    if(!http_response_code()) {
        echo("<h2>Failed!</h2><br><h3>There was a problem with $numberToPost. Please check it and try again!");
    } else if (http_response_code() === 200){
        echo("<h2>Success!</h2><h3>$phone_number->phoneNumber is validated!");
    } else {
        echo("<h2>Failed!</h2><br><h3>There was a problem with $numberToPost. Please check it and try again!");
    }

?>