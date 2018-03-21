<?php
/*
 * Dependency injection initialization for Swift Mailer for AWS SES.
 */
if (defined('SWIFT_ AWS_INIT_LOADED')) {
  return;
}

define('AWS_INIT_LOADED', TRUE);

// Load in dependency maps
require __DIR__ . '/classes/Swift/Events/ResponseReceivedListener.php';
require __DIR__ . '/classes/Swift/Response/AWSResponse.php';
require __DIR__ . '/classes/Swift/Transport/AWSTransport.php';
require __DIR__ . '/classes/Swift/AWSInputByteStream.php';
require __DIR__ . '/classes/Swift/AWSTransport.php';
