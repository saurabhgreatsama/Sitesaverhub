<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp'; // Set the protocol to 'smtp'
$config['smtp_host'] = 'smtp.hostinger.com'; // Replace with your actual SMTP host
$config['smtp_user'] = 'userservice@sitesaverhub.com'; // Replace with your actual SMTP username
$config['smtp_pass'] = 'Death4321@gmail.com'; // Replace with your actual SMTP password
$config['smtp_port'] = '465'; // Replace with your actual SMTP port
$config['smtp_crypto'] = 'ssl'; // Set encryption type (tls or ssl)

// // Additional settings (optional)
// $config['smtp_timeout'] = 5;
// $config['wordwrap'] = TRUE;
// $config['mailtype'] = 'html';
// $config['charset'] = 'utf-8';
// $config['newline'] = "\r\n";