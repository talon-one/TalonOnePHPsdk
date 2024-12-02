<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Host, API key, & API key prefix for integration authentication
$config = \TalonOne\Client\Configuration::getDefaultConfiguration()
    ->setHost('http://localhost:9000')
    ->setApiKeyPrefix('Authorization', 'ApiKey-v1')
    ->setApiKey('Authorization', getenv('TALON_API_KEY'));

// Initiating an integration api instance with the config
$apiInstance = new \TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default when `null` is passed.
    null, // new YouClientImplementation(),
    $config
);

$customer_session_id = 'customer_session_id_example'; // string | The unique identifier for this session
$customer_session = new \TalonOne\Client\Model\NewCustomerSessionV2([
    'profileId' => 'example_prof_id',
    'couponCodes' => [
        'Cool-Summer!'
    ],
    'cartItems' => [
        new \TalonOne\Client\Model\CartItem([
            'name' => 'Hawaiian Pizza',
            'sku' => 'piz-hw-001',
            'quantity' => 1,
            'price' => 5.85
        ])
    ]
]);
$body = new \TalonOne\Client\Model\IntegrationRequest([
    'customerSession' => $customer_session,
    // Optional list of requested information to be present on the response.
    // See lib/Model/IntegrationRequest.php#getResponseContentAllowableValues for full list
    // 'responseContent' => [
    //     \TalonOne\Client\Model\IntegrationRequest::RESPONSE_CONTENT_CUSTOMER_SESSION,
    //     \TalonOne\Client\Model\IntegrationRequest::RESPONSE_CONTENT_COUPONS
    // ]
]);

// Create/Update a customer session using `updateCustomerSessionV2` function
$integration_state = $apiInstance->updateCustomerSessionV2($customer_session_id, $body);
print_r($integration_state);

// Parsing the returned effects list, please consult https://developers.talon.one/Integration-API/handling-effects-v2 for the full list of effects and their corresponding properties
foreach ($integration_state->getEffects() as $effect) {
    if ("addLoyaltyPoints" == $effect->getEffectType()) {
        // Initiating right props instance according to the effect type
        $props = new \TalonOne\Client\Model\AddLoyaltyPointsEffectProps((array) $effect->getProps());

        // Access the specific effect's properties
        echo $props->getName(), ':: ', $props->getRecipientIntegrationId(), ' just earned ',  $props->getValue(), ' points', PHP_EOL;
    }
    if ("acceptCoupon" == $effect->getEffectType()) {
        // Initiating right props instance according to the effect type
        $props = new \TalonOne\Client\Model\AcceptCouponEffectProps((array) $effect->getProps());
        // work with AcceptCouponEffectProps' properties
        // ...
    }
}
?>