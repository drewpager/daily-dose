<?php
// require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("./sendgrid-php/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("support@dailydosenow.com", "The Daily Dose");
$email->setSubject("Today on The Daily Dose: Testing Sendgrid");
$email->addTo("drew@greadings.com", "Drew Page");
$email->setTemplateId("d-12c7057b4fe84d0bb3bda6268e3251f4");

$email->addDynamicTemplateData("image", "http://dailydosenow.com/wp-content/uploads/2020/07/kamikaze-attacks.jpg" );
$email->addDynamicTemplateData("alt-text", "Kamikaze pilots of World War Two, who intentionally crashed their explosive-laden fighter planes into Allied naval warships. " );
$email->addDynamicTemplateData("dose", "Kamikaze Attacks of World War Two");
$email->addDynamicTemplateData("youtube", "https://youtu.be/JsrG4DqrgCo" );
$email->addDynamicTemplateData("excerpt", "Kamikaze pilots of World War Two, who intentionally crashed their explosive-laden fighter planes into Allied naval warships. " );


// $email->addDynamicTemplateData("image", the_post_thumbnail() );
// $email->addDynamicTemplateData("alt-text", the_excerpt() );
// $email->addDynamicTemplateData("dose", get_the_title() );
// $email->addDynamicTemplateData("youtube", the_field('custom_youtube_embed') );
// $email->addDynamicTemplateData("excerpt", the_excerpt() );

$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
?>