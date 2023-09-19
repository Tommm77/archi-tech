<?php
// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('sk_test_51MFEKKDGn9OEbzeVDxtulXPmF5ZIjwYvllLm6iSn1mbpoDGA6KbpPKVw9miB1hEk4QhacAkqMCs9NCQFJrgvn6nU00Q8feXeOE');

// The price ID passed from the front end.
//   $priceId = $_POST['priceId'];
$priceId = '{{PRICE_ID}}';

$session = \Stripe\Checkout\Session::create([
  'success_url' => 'https://example.com/success.html?session_id={CHECKOUT_SESSION_ID}',
  'cancel_url' => 'https://example.com/canceled.html',
  'mode' => 'subscription',
  'line_items' => [[
    'price' => $priceId,
    // For metered billing, do not pass quantity
    'quantity' => 1,
  ]],
]);

// Redirect to the URL returned on the Checkout Session.
// With vanilla PHP, you can redirect with:
//   header("HTTP/1.1 303 See Other");
//   header("Location: " . $session->url);