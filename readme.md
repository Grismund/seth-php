# Heroes
Code: heroes/index.html
Using only HTML/CSS and Bootstrap, please create a hero image that is 100% wide and 100% height of the screen.  The result should be fully responsive for desktop and mobile devices, the design should be based on this screenshot: designs/Screen Shot 2022-07-15 at 11.16.00 AM.png.  The background image is assets/images/background-phone-app-desktop.jpg

# Forms
Using only HTML/CSS/JS/PHP and bootstrap, please create a simple form that allows the entry of a phone number on index.html.  
The form should post to PHP/formsubmission.php.  
Within PHP/formsubmission.php, validate the phone number using the Twilio API and return an error message to the user on index.html if the phone number is invalid.  If the phone number validates successfully, return a successful validation message.

Example of a valid phone number: https://lookups.twilio.com/v1/PhoneNumbers/203-731-1794
Example of an invalid phone number: https://lookups.twilio.com/v1/PhoneNumbers/103-731-1794
Twilio API information: https://www.twilio.com/docs/lookup/tutorials/validation-and-formatting