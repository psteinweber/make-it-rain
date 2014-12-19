<?php

// Your Hipchat API info
// Setup instructions at https://github.com/fitztrev/make-it-rain
$hipchat = array(
    'auth_token' => '', // leave blank to disable Hipchat
    'room_id'    => 654321,
);

// Your Slack API info
// Setup instructions at https://github.com/fitztrev/make-it-rain
$slack = array(
    'webhook_url' => '', // leave blank to disable Slack
);

// Secret identifier known only to Stripe so nobody can ping your webhook
// and give you a false notification. Change this to something random.
// Be sure to update the webhook in your Stripe account
$secret = 'abc123';

// Add your own custom gifs that will be randomly added to the rotation
$custom_gifs = array(
    // 'http://example.com/image.gif',
);
