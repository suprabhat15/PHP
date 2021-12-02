<?php

namespace SendGrid;
//require 'vendor/autoload.php';
require("C:/Users/suprabhatkumar/Applications/XAMPP/xamppfiles/htdocs/suprabhat/sendgrid.php");
class SendEmail
{
    private $db;

    function SendEmail($database){
        $this->db = $database;
    }

    function helloEmail()
    {
        $from = new Email(null, "suprabhat2018e@gmail.com");
        $subject = "Hello World from the SendGrid PHP Library";
        $to = new Email(null, "suprabhat2018e@gmail.com");
        $content = new Content("text/plain", "send grid test email");
        $mail = new Mail($from, $subject, $to, $content);
        $to = new Email(null, "suprabhat2018e@gmail.com");
        $mail->personalization[0]->addTo($to);
        //echo json_encode($mail, JSON_PRETTY_PRINT), "\n";

        echo $to;
        return $mail;
    }

    function sendHelloEmail()
    {
        $apiKey = getenv('PUT-KEY-HERE');
        $sg = new \SendGrid($apiKey);
        $request_body = $this->helloEmail();
        $response = $sg->client->mail()->send()->post($request_body);
        echo $response->statusCode();
        echo $response->body();
        echo $response->headers();

        return $request_body;
    }
}