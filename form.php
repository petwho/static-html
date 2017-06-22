<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
session_start();
$config = require('./.env.php');

if (isset($_POST['email'])) {
    # Instantiate the client.
    $mgClient = new Mailgun($config['MAILGUN_KEY']);
    $domain = $config['MAILGUN_DOMAIN'];

    # Make the call to the client.
    $result = $mailgun->sendMessage($domain, array(
        'from'    => 'noreply@' . $domain,
        'to'      => 'tranxuanhanh@' . $domain,
        'subject' => 'Khách hàng liên hệ qua Website',
        'html'    => '<strong>Name:</strong> '.@$_POST['name'].'<br>'.'<strong>Email:</strong> '.@$_POST['email']
            .'<strong>Phone:</strong> '.@$_POST['phone'].'<br>'.'<strong>Content:</strong><br>'.@$_POST['content'],
    ));
    $_SESSION["form_sent"] = true;
}